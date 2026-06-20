CREATE DATABASE IF NOT EXISTS sql_injection_demo;

USE sql_injection_demo;

CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO usuarios(usuario,password)
VALUES
('admin','1234'),
('juan','abcd'),
('maria','4321');