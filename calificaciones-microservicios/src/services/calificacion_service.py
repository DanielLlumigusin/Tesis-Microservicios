from config.db import get_connection
from models.calificacion_model import Calificacion

def obtener_calificaciones():
    conn = get_connection()
    if conn:
        cursor = conn.cursor()
        cursor.execute("SELECT * FROM calificaciones")
        rows = cursor.fetchall()
        conn.close()
        return [Calificacion(*row).__dict__ for row in rows]
    return []

def agregar_calificacion(calificacion):
    conn = get_connection()
    if conn:
        cursor = conn.cursor()
        sql = "INSERT INTO calificaciones (alumno_id, curso, nota) VALUES (%s, %s, %s)"
        cursor.execute(sql, (calificacion['alumno_id'], calificacion['curso'], calificacion['nota']))
        conn.commit()
        conn.close()
