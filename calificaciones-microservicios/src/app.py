from flask import Flask
from routes.calificacion_routes import calificaciones_bp

app = Flask(__name__)
app.register_blueprint(calificaciones_bp, url_prefix='/api/calificaciones')

if __name__ == '__main__':
    app.run(debug=True)
