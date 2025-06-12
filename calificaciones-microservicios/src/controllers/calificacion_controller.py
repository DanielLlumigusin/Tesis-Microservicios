from flask import request, jsonify
from services.calificacion_service import obtener_calificaciones, agregar_calificacion

def get_all():
    calificaciones = obtener_calificaciones()
    return jsonify(calificaciones)

def create():
    data = request.json
    agregar_calificacion(data)
    return jsonify({"message": "Calificación agregada correctamente"}), 201
