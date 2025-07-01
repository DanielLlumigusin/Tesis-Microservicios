class Config:
    # 🔹 BD local del microservicio (MySQL)
    MYSQL_URI_LOCAL = "mysql+pymysql://Espe_2025:Espe_2025.@localhost:3307/calificacionesdb"
    
    # 🔹 BD de Moodle (MySQL)
    MYSQL_URI_MOODLE = "mysql+pymysql://moodleuser:moodlepass@localhost:3308/moodledb"
