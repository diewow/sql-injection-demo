<img width="921" height="552" alt="WhatsApp Image 2026-06-20 at 12 00 18 AM" src="https://github.com/user-attachments/assets/f13bd08a-142b-4113-bd38-1f33c5e49f6f" />
# 🔐 Investigación e Implementación de SQL Injection

## 📌 Descripción

Este proyecto tiene como objetivo investigar e implementar una vulnerabilidad de SQL Injection en un entorno controlado utilizando PHP, MySQL y Docker.

La aplicación consiste en un sistema de inicio de sesión vulnerable que permite demostrar cómo un atacante puede modificar consultas SQL mediante entradas maliciosas, obteniendo acceso no autorizado al sistema.

El proyecto fue desarrollado con fines educativos para comprender los riesgos de esta vulnerabilidad y las medidas necesarias para prevenirla.

| <img loading="lazy" src="https://github.com/user-attachments/assets/f13bd08a-142b-4113-bd38-1f33c5e49f6f" alt="Página principal de VinylVibes" width="800"/> | ---

# 📚 ¿Qué es SQL Injection?

SQL Injection es una vulnerabilidad de seguridad que ocurre cuando una aplicación inserta directamente datos proporcionados por el usuario dentro de una consulta SQL sin realizar una validación o sanitización adecuada.

Esto permite que un atacante modifique la consulta original ejecutada por la base de datos.

Por ejemplo, una consulta legítima:

```sql
SELECT * FROM usuarios
WHERE usuario='admin'
AND password='1234';
```

puede ser alterada mediante una entrada maliciosa para obtener acceso sin conocer la contraseña.

---

# ⚠️ Riesgos de SQL Injection

Las vulnerabilidades SQL Injection pueden provocar:

* Acceso no autorizado a sistemas.
* Robo de información sensible.
* Modificación de registros.
* Eliminación de información.
* Escalación de privilegios.
* Compromiso total de la base de datos.

Por esta razón es considerada una de las vulnerabilidades más peligrosas en aplicaciones web.

---

# 🛠 Tecnologías Utilizadas

* PHP 8.2
* MySQL 8.0
* Apache
* Docker
* Docker Compose
* GitHub

---

# 📂 Estructura del Proyecto

```text
sql-injection-demo/
│
├── index.php
├── Dockerfile
├── docker-compose.yml
│
└── db/
    └── init.sql
```

---

# 🗄 Base de Datos

La base de datos contiene una tabla llamada `usuarios`.

Ejemplo de registros:

| Usuario | Contraseña |
| ------- | ---------- |
| admin   | 1234       |
| juan    | abcd       |
| maria   | 4321       |

---

# 💻 Implementación de la Vulnerabilidad

La aplicación construye la consulta SQL concatenando directamente los datos proporcionados por el usuario.

Ejemplo:

```php
$sql =
"SELECT * FROM usuarios
WHERE usuario='$usuario'
AND password='$password'";
```

Esta práctica es insegura porque permite modificar la consulta original.

---

# 🧪 Demostración de SQL Injection

Entrada utilizada:

Usuario:

```text
admin' #
```

Contraseña:

```text
cualquier_contraseña
```

Consulta generada:

```sql
SELECT * FROM usuarios
WHERE usuario='admin' #'
AND password='cualquier_contraseña'
```

El símbolo `#` comenta el resto de la consulta, permitiendo el acceso sin necesidad de conocer la contraseña real.

---

# 🔒 Prevención

La forma recomendada de prevenir SQL Injection es mediante consultas preparadas (Prepared Statements).

Ejemplo:

```php
$stmt = $conn->prepare(
"SELECT * FROM usuarios
 WHERE usuario = ?
 AND password = ?"
);

$stmt->bind_param(
"ss",
$usuario,
$password
);

$stmt->execute();
```

Con este método, los datos ingresados por el usuario son tratados únicamente como texto y no como instrucciones SQL.

---

# 🐳 Ejecución con Docker

Construir y ejecutar los contenedores:

```bash
docker compose up --build
```

Abrir en el navegador:

```text
http://localhost:8080
```

---

# 📖 Conclusión

SQL Injection continúa siendo una de las vulnerabilidades más comunes y peligrosas en aplicaciones web. A través de este proyecto fue posible comprender cómo una consulta mal construida puede comprometer la seguridad de una base de datos. Asimismo, se identificaron las buenas prácticas necesarias para prevenir este tipo de ataques, principalmente mediante el uso de consultas preparadas y validación adecuada de entradas.

---

# 👨‍💻 Autor

Diego Patiño Nicasio

Proyecto académico de Bases de Datos.

