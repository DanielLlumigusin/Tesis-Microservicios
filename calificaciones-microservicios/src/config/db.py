import mysql.connector
from mysql.connector import Error

def get_connection():
    try:
        connection = mysql.connector.connect(
            host='mysql-calificaciones',
            database='calificacionesdb',
            user='Espe_2025',
            password='Espe_2025.@'
        )
        return connection
    except Error as e:
        print(f"Error al conectar a MySQL: {e}")
        return None
