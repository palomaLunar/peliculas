-- Active: 1721375362536@@127.0.0.1@3306@peliculas
DROP DATABASE usuario;
USE  peliculas;

SELECT * FROM usuario;
CREATE TABLE usuario (
    `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `nombre` varchar(50) NOT NULL,
    `username` varchar(50) UNIQUE NOT NULL,
    `userpass` varchar(255) NOT NULL,
    `email` varchar(100) NOT NULL,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP);

INSERT INTO
    `usuario` (
        `nombre`,
        `username`,
        `userpass`,
        `email`
    )
VALUES (
        'Juan',
        'juan23',
        'juan23',
        'juan23@correo.com'
    ),
    (
        'lola',
        'lola23',
        'lola23',
        'lola23@correo.com'
    ),
    (
        'paloma',
        'paloma23',
        'paloma23',
        'paloma23@correo.com'
    ),
    (
        'pedro',
        'pedro23',
        'pedro23',
        'pedro23@correo.com'
    );
    
    
    
    
    