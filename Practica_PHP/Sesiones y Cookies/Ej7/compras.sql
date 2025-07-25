CREATE DATABASE Compras;

USE Compras;

CREATE TABLE catalogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100) NOT NULL,
    precio DECIMAL(9,2) NOT NULL
);

INSERT INTO catalogo (producto, precio) VALUES
('Notebook HP 15"', 750.00),
('Mouse Inalámbrico', 25.90),
('Teclado Mecánico', 55.40),
('Monitor 24"', 180.00),
('Impresora Multifunción', 120.00);