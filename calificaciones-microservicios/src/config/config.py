class Config:
    # 🔹 BD local del microservicio (MySQL calificaciones)
    MYSQL_URI_LOCAL = "mysql+pymysql://Espe_2025:Espe_2025.%40@mysql-calificaciones:3306/calificacionesdb"

    # 🔹 BD de Moodle (MySQL moodledb en otro contenedor)
    MYSQL_URI_MOODLE = "mysql+pymysql://moodleuser:moodlepass@mysql-moodle:3306/moodledb"
