import mysql.connector
from mysql.connector import Error

def get_connection():
    try:
        connection = mysql.connector.connect(
            host='localhost',
            database='calificaciones_db',
            user='root',
            password='root'
        )
        return connection
    except Error as e:
        print(f"Error al conectar a MySQL: {e}")
        return None
