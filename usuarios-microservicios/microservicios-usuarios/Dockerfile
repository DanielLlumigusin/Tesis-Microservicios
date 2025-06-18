# Etapa 1: Construcción usando imagen oficial de Gradle con JDK 17
FROM gradle:8.5-jdk17 AS build
WORKDIR /app

# Copia archivos de configuración y dependencias primero (optimiza cache)
COPY build.gradle settings.gradle gradlew ./
COPY gradle ./gradle

# Descarga dependencias
RUN ./gradlew build --no-daemon || return 0

# Copia el resto del proyecto
COPY . .

# Construye el JAR
RUN ./gradlew bootJar --no-daemon

# Etapa 2: Imagen ligera para ejecutar la app
FROM eclipse-temurin:17-jre-alpine
WORKDIR /app

# Copia el JAR desde la etapa anterior
COPY --from=build /app/build/libs/*.jar app.jar

# Expone el puerto por defecto de Spring Boot
EXPOSE 8080

# Comando para ejecutar
ENTRYPOINT ["java", "-jar", "app.jar"]
