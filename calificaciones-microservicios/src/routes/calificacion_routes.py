from flask import Blueprint
from controllers import calificacion_controller

calificaciones_bp = Blueprint('calificaciones', __name__)

calificaciones_bp.route('/', methods=['GET'])(calificacion_controller.get_all)
calificaciones_bp.route('/', methods=['POST'])(calificacion_controller.create)
