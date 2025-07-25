CREATE DATABASE base2;

USE base2;

CREATE TABLE alumnos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    codigocurso INT NOT NULL,
    mail VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO alumnos (nombre, codigocurso, mail) VALUES
('Juan Pérez', 101, 'juan@gmail.com'),
('Ana Gómez', 102, 'ana@gmail.com'),
('Luis Torres', 103, 'luis@gmail.com');