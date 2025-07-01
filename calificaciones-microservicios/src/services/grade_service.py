from models.local_models import GradeSynced
from models.moodle_models import GradeMoodle
from sqlalchemy.orm import sessionmaker
from sqlalchemy import create_engine
from config.config import Config

local_engine = create_engine(Config.MYSQL_URI_LOCAL)
moodle_engine = create_engine(Config.MYSQL_URI_MOODLE)

LocalSession = sessionmaker(bind=local_engine)
MoodleSession = sessionmaker(bind=moodle_engine)

def sync_grades():
    msession = MoodleSession()
    lsession = LocalSession()
    grades = msession.query(GradeMoodle).all()

    for g in grades:
        lsession.merge(GradeSynced(**g.__dict__))  # Reemplaza o inserta
    lsession.commit()
    msession.close()
    lsession.close()
    return len(grades)

def get_grades(source='local'):
    Session = LocalSession if source == 'local' else MoodleSession
    session = Session()
    model = GradeSynced if source == 'local' else GradeMoodle
    data = session.query(model).all()
    session.close()
    return data

def create_grade(data, target='local'):
    Session = LocalSession if target == 'local' else MoodleSession
    Model = GradeSynced if target == 'local' else GradeMoodle
    session = Session()
    grade = Model(**data)
    session.add(grade)
    session.commit()
    session.close()

def update_grade(grade_id, data, target='local'):
    Session = LocalSession if target == 'local' else MoodleSession
    Model = GradeSynced if target == 'local' else GradeMoodle
    session = Session()
    grade = session.query(Model).filter_by(id=grade_id).first()
    for k, v in data.items():
        setattr(grade, k, v)
    session.commit()
    session.close()

def delete_grade(grade_id, target='local'):
    Session = LocalSession if target == 'local' else MoodleSession
    Model = GradeSynced if target == 'local' else GradeMoodle
    session = Session()
    grade = session.query(Model).filter_by(id=grade_id).first()
    session.delete(grade)
    session.commit()
    session.close()
