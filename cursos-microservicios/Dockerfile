# Imagen base oficial de Bun
FROM oven/bun:1.1.13

# Crear directorio de trabajo
WORKDIR /app

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias
RUN bun install

# Exponer el puerto que usas
EXPOSE 3000

# Ejecutar directamente index.ts con bun
CMD ["bun", "run", "index.ts"]
