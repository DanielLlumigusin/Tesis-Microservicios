from flask import Flask
from controllers.grades_controller import grades_bp

app = Flask(__name__)
app.register_blueprint(grades_bp)

if __name__ == '__main__':
    app.run(debug=True, host="0.0.0.0", port=5000)
