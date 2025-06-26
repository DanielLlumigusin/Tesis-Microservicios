# 🧩 Simulación de Migración de Moodle a Microservicios con Kubernetes

Este proyecto es una **simulación académica** de cómo migrar el sistema monolítico Moodle a una arquitectura basada en **microservicios**. El objetivo es entender los principios de desacoplamiento, comunicación entre servicios y despliegue con **Docker** y **Kubernetes**, usando una versión simplificada de funcionalidades clave.

---

## 🎯 Objetivo del Proyecto

Simular el proceso de migración de funcionalidades esenciales de Moodle (usuarios, cursos y calificaciones) a una arquitectura desacoplada de microservicios, con el propósito de:

- Comprender el diseño y división de servicios independientes.
- Emplear tecnologías modernas como Docker, REST APIs, y Kubernetes.
- Practicar la integración y despliegue de servicios en un clúster orquestado.
- Evaluar una posible evolución de Moodle desde una arquitectura monolítica.

---

## 🛠️ Tecnologías Utilizadas

| Componente            | Tecnología           |
|-----------------------|----------------------|
| Microservicio Usuarios| Java Spring Boot + PostgreSQL |
| Microservicio Cursos  | Node.js + Express + MongoDB  |
| Microservicio Calificaciones   | Python Flask + MySQL |
| Orquestación          | Kubernetes + Ingress (NGINX) |
| Contenedores          | Docker               |
| API Gateway           | NGINX Ingress        |
| Herramientas          | Postman, Curl, Git, VSCode   |

---
## Puertos Utilizados
| Componente            | Puertos           |
|-----------------------|----------------------|
|Microservicio Usuarios| 8080   |
|Microservicio Cursos | 3000 |
|Microservicio Calificaciones | 5000 | 
---

## 📦 Estructura del Proyecto
```bash
simulacion-moodle-microservicios/
├── usuarios-microservicio/ # Spring Boot - registro, login, roles
├── cursos-microservicio/ # Node.js - cursos e inscripciones
├── calificaciones-microservicio/ # Flask - notas y reportes
├── kubernetes/ # Archivos YAML para el despliegue
│ ├── usuarios-deployment.yaml
│ ├── cursos-deployment.yaml
│ ├── calificaciones-deployment.yaml
│ ├── ingress.yaml
└── README.md # Este documento
```
---

## 📐 Microservicios Incluidos

### 1. 👤 Microservicio de Usuarios
- Registro de usuarios
- Inicio de sesión con verificación de credenciales
- Gestión de roles (estudiante/docente/admin)
- Autenticación basada en token

### 2. 📚 Microservicio de Cursos
- Crear cursos
- Listar cursos disponibles
- Inscribir usuarios a cursos
- Consultar detalles de curso

### 3. 📊 Microservicio de Calificaciones
- Registrar calificaciones
- Consultar notas por usuario y curso
- Reportes básicos de rendimiento

---

## 🔁 Flujo Simulado

1. Un usuario se registra en el sistema → `usuarios-microservicio`
2. Se inscribe en un curso → `cursos-microservicio`
3. Un docente le asigna una calificación → `calificaciones-microservicio`
4. El usuario consulta sus calificaciones → API REST

---

## 🚀 Cómo Ejecutar la Simulación

### Requisitos Previos
- Docker
- Kubernetes (Minikube, k3s o AKS)
- kubectl
- Git
- Postman (opcional)

### Pasos Generales

1. Clona el repositorio:
```bash
git clone https://github.com/DanielLlumigusin/Tesis-Microservicios.git
cd tesis-microservicios
Dockeriza cada microservicio (cada carpeta tiene su Dockerfile):

cd usuarios-microservicio
docker build -t usuarios-service .

cd ../cursos-microservicio
docker build -t cursos-service .

cd ../calificaciones-microservicio
docker build -t calificaciones-service .

minikube start
```
Aplica los archivos Kubernetes:
```bash
kubectl apply -f kubernetes/
```
Accede a los servicios vía Ingress:
```bash
minikube tunnel
```

Accede desde el navegador o Postman usando rutas como:


### Rutas de microservicio de Asistencia (Attendance)

| Metodo                |        Ruta          | Accion               |
|-----------------------|----------------------|----------------------| 
| GET                   | http://localhost:5000/api/attendance | Visualizar todas las asistencias |

http://localhost/api/attendance/

### Rutas de microservicio Cursos

| Metodo                |        Ruta          | Accion               |
|-----------------------|----------------------|----------------------|
| GET                   | /api/cursos | Visualizar todos los cursos |
| GET                   | /api/cursos/{id}     | Obtener un curso específico por ID JSON curso |
| POST                  | /api/cursos          | Crear curso existente JSON con campos actualizados |
| PUT                   | /api/cursos/{id}     | Actualizar curso existente JSON con campos actualizados |
| DELETE                | /api/cursos/{id}     | Eliminar curso         |

### Rutas de microservicio Calificaciones 


| Metodo                |        Ruta          | Accion               |
|-----------------------|----------------------|----------------------|
| GET                   | http://localhost:5000/api/calificaciones | Visualizar todas las notas |


http://localhost/api/calificaciones/

📚 Futuras Mejoras
🔐 Seguridad con JWT y OAuth 2.0

📈 Monitorización con Prometheus y Grafana

📦 Base de datos por entorno usando Helm Charts

📨 Comunicación entre microservicios vía RabbitMQ/Kafka

📊 Dashboard para simular el frontend de Moodle

👨‍🎓 Aplicación Académica
Este proyecto es ideal para:

Prácticas de tesis de ingeniería de software

Demostraciones de migración de arquitectura

Estudio de DevOps con microservicios

Simulaciones de Moodle sin modificar el monolito


