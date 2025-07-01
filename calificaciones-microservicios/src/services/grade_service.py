from sqlalchemy import create_engine
from sqlalchemy.orm import sessionmaker
from config.config import Config
from models.local_models import BaseLocal, GradeSynced
from models.moodle_models import BaseMoodle, GradeMoodle


engine_local = create_engine(Config.MYSQL_URI_LOCAL)
SessionLocal = sessionmaker(bind=engine_local)
BaseLocal.metadata.create_all(engine_local)

engine_moodle = create_engine(Config.MYSQL_URI_MOODLE)
SessionMoodle = sessionmaker(bind=engine_moodle)
BaseMoodle.metadata.create_all(engine_moodle)

def clean_instance(instance):
    # Convierte instancia SQLAlchemy en dict solo con columnas, sin _sa_instance_state
    return {c.name: getattr(instance, c.name) for c in instance.__table__.columns}

def get_grades(source='local'):
    if source == 'local':
        session = SessionLocal()
        grades = session.query(GradeSynced).all()
        session.close()
        return grades
    elif source == 'moodle':
        session = SessionMoodle()
        grades = session.query(GradeMoodle).all()
        session.close()
        return grades
    else:
        raise ValueError("source debe ser 'local' o 'moodle'")

def create_grade(data, target='local'):
    if target == 'local':
        session = SessionLocal()
        grade = GradeSynced(**data)
        session.add(grade)
        session.commit()
        created_id = grade.id
        session.close()
        return created_id
    else:
        raise ValueError("target solo soporta 'local'")

def update_grade(grade_id, data, target='local'):
    if target == 'local':
        session = SessionLocal()
        grade = session.query(GradeSynced).filter_by(id=grade_id).first()
        if not grade:
            session.close()
            return False
        for key, value in data.items():
            setattr(grade, key, value)
        session.commit()
        session.close()
        return True
    else:
        raise ValueError("target solo soporta 'local'")

def delete_grade(grade_id, target='local'):
    if target == 'local':
        session = SessionLocal()
        grade = session.query(GradeSynced).filter_by(id=grade_id).first()
        if not grade:
            session.close()
            return False
        session.delete(grade)
        session.commit()
        session.close()
        return True
    else:
        raise ValueError("target solo soporta 'local'")

def sync_grades():
    """
    Extrae notas de Moodle y las guarda en la BD local,
    actualizando o insertando según sea necesario.
    """
    session_local = SessionLocal()
    session_moodle = SessionMoodle()

    grades_moodle = session_moodle.query(GradeMoodle).all()

    count_synced = 0

    for grade in grades_moodle:
        grade_data = clean_instance(grade)
        # Buscar si ya existe
        existing = session_local.query(GradeSynced).filter_by(id=grade_data['id']).first()
        if existing:
            # Actualizar campos
            for k, v in grade_data.items():
                setattr(existing, k, v)
        else:
            # Insertar nuevo registro
            new_grade = GradeSynced(**grade_data)
            session_local.add(new_grade)
        count_synced += 1

    session_local.commit()
    session_local.close()
    session_moodle.close()

    return count_synced
