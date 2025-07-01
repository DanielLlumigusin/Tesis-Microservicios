from flask import Blueprint, request, jsonify
from services.grade_service import (
    get_grades,
    create_grade,
    update_grade,
    delete_grade,
    sync_grades
)

grades_bp = Blueprint('grades', __name__)

def to_dict(obj):
    return {c.key: getattr(obj, c.key) for c in obj.__table__.columns}

# 🔁 Sincronizar desde Moodle a microservicio
@grades_bp.route('/sync', methods=['POST'])
def sync():
    try:
        count = sync_grades()
        return jsonify({"synced": count})
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# 📄 Listar calificaciones
@grades_bp.route('/grades', methods=['GET'])
def list_grades():
    try:
        source = request.args.get('source', 'local')
        data = get_grades(source)
        return jsonify([to_dict(g) for g in data])
    except Exception as e:
        return jsonify({"error": str(e)}), 500

# ➕ Crear una calificación
@grades_bp.route('/grades', methods=['POST'])
def create():
    try:
        target = request.args.get('target', 'local')
        created_id = create_grade(request.json, target)
        return jsonify({"status": "created", "id": created_id}), 201
    except Exception as e:
        return jsonify({"error": str(e)}), 400

# ✏️ Actualizar calificación
@grades_bp.route('/grades/<int:grade_id>', methods=['PUT'])
def update(grade_id):
    try:
        target = request.args.get('target', 'local')
        updated = update_grade(grade_id, request.json, target)
        if updated:
            return jsonify({"status": "updated"})
        else:
            return jsonify({"error": "Grade not found"}), 404
    except Exception as e:
        return jsonify({"error": str(e)}), 400

# ❌ Eliminar calificación
@grades_bp.route('/grades/<int:grade_id>', methods=['DELETE'])
def delete(grade_id):
    try:
        target = request.args.get('target', 'local')
        deleted = delete_grade(grade_id, target)
        if deleted:
            return jsonify({"status": "deleted"})
        else:
            return jsonify({"error": "Grade not found"}), 404
    except Exception as e:
        return jsonify({"error": str(e)}), 400
