CREATE DATABASE prueba;

USE prueba;

CREATE TABLE buscador (
    id INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(255) NOT NULL
);

INSERT INTO buscador (canciones) VALUES
('Bohemian Rhapsody'),
('Hotel California'),
('Smells Like Teen Spirit'),
('Imagine'),
('Yesterday'),
('Thriller'),
('Billie Jean'),
('Shape of You'),
('Let It Be'),
('Hey Jude');