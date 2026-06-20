# SQL Injection Demo

Proyecto académico para la investigación e implementación de una vulnerabilidad de SQL Injection utilizando PHP, MySQL y Docker.

La aplicación contiene un formulario de inicio de sesión vulnerable que permite demostrar cómo la construcción insegura de consultas SQL puede ser explotada mediante entradas maliciosas. Además, el proyecto muestra el impacto de esta vulnerabilidad y sirve como apoyo para el estudio de buenas prácticas de seguridad en bases de datos.

## Tecnologías utilizadas

* PHP 8.2
* MySQL 8.0
* Apache
* Docker
* Docker Compose

## Ejecución

1. Clonar el repositorio.
2. Ejecutar:

docker compose up --build

3. Abrir en el navegador:

http://localhost:8080

## Objetivo

Comprender el funcionamiento de los ataques SQL Injection, sus riesgos y las técnicas recomendadas para prevenirlos mediante consultas preparadas y validación de entradas.
