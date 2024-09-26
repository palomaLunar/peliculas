-- Active: 1721375362536@@127.0.0.1@3306@peliculas
CREATE DATABASE IF NOT exists peliculas;
USE peliculas;

SELECT * FROM `peliculas` 

DROP TABLE `peliculas`;
CREATE TABLE peliculas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    director VARCHAR(255),
    anio INT,
    genero VARCHAR(100),
    duracion INT,
    pais VARCHAR(100),
    clasificacion VARCHAR(10),
    imagen VARCHAR(255) DEFAULT 'avatar-libro.jpg'
);



INSERT INTO
    peliculas (
        titulo,
        director,
        anio,
        genero,
        duracion,
        pais,
        clasificacion
    )
VALUES (
        'El Padrino',
        'Francis Ford Coppola',
        1972,
        'Drama',
        175,
        'EE.UU.',
        'R'
    ),
    (
        'El Padrino II',
        'Francis Ford Coppola',
        1974,
        'Drama',
        202,
        'EE.UU.',
        'R'
    ),
    (
        'El Caballero Oscuro',
        'Christopher Nolan',
        2008,
        'Acción',
        152,
        'EE.UU.',
        'PG-13'
    ),
    (
        'Pulp Fiction',
        'Quentin Tarantino',
        1994,
        'Drama',
        154,
        'EE.UU.',
        'R'
    ),
    (
        'Forrest Gump',
        'Robert Zemeckis',
        1994,
        'Drama',
        142,
        'EE.UU.',
        'PG-13'
    ),
    (
        'Matrix',
        'Lana Wachowski, Lilly Wachowski',
        1999,
        'Ciencia Ficción',
        136,
        'EE.UU.',
        'R'
    ),
    (
        'El Señor de los Anillos: El Retorno del Rey',
        'Peter Jackson',
        2003,
        'Aventura',
        201,
        'Nueva Zelanda',
        'PG-13'
    ),
    (
        'El Imperio Contraataca',
        'Irvin Kershner',
        1980,
        'Ciencia Ficción',
        124,
        'EE.UU.',
        'PG'
    ),
    (
        'Gladiador',
        'Ridley Scott',
        2000,
        'Acción',
        155,
        'EE.UU.',
        'R'
    ),
    (
        'Titanic',
        'James Cameron',
        1997,
        'Drama',
        195,
        'EE.UU.',
        'PG-13'
    ),
    (
        'Ciudad de Dios',
        'Fernando Meirelles, Kátia Lund',
        2002,
        'Crimen',
        130,
        'Brasil',
        'R'
    ),
    (
        'Salvar al Soldado Ryan',
        'Steven Spielberg',
        1998,
        'Guerra',
        169,
        'EE.UU.',
        'R'
    ),
    (
        'Los Intocables',
        'Brian De Palma',
        1987,
        'Crimen',
        119,
        'EE.UU.',
        'R'
    ),
    (
        'Avatar',
        'James Cameron',
        2009,
        'Ciencia Ficción',
        162,
        'EE.UU.',
        'PG-13'
    ),
    (
        'Django Sin Cadenas',
        'Quentin Tarantino',
        2012,
        'Western',
        165,
        'EE.UU.',
        'R'
    ),
    (
        'La Vida es Bella',
        'Roberto Benigni',
        1997,
        'Drama',
        116,
        'Italia',
        'PG-13'
    ),
    (
        'Los Siete Samuráis',
        'Akira Kurosawa',
        1954,
        'Aventura',
        207,
        'Japón',
        'NR'
    ),
    (
        'Terminator 2: El Juicio Final',
        'James Cameron',
        1991,
        'Acción',
        137,
        'EE.UU.',
        'R'
    ),
    (
        'El Resplandor',
        'Stanley Kubrick',
        1980,
        'Terror',
        146,
        'EE.UU.',
        'R'
    ),
    (
        'Braveheart',
        'Mel Gibson',
        1995,
        'Drama',
        178,
        'EE.UU.',
        'R'
    ),
    (
        'El Gran Lebowski',
        'Joel Coen, Ethan Coen',
        1998,
        'Comedia',
        117,
        'EE.UU.',
        'R'
    ),
    (
        'Casablanca',
        'Michael Curtiz',
        1942,
        'Romance',
        102,
        'EE.UU.',
        'PG'
    ),
    (
        'El Rey León',
        'Roger Allers, Rob Minkoff',
        1994,
        'Animación',
        88,
        'EE.UU.',
        'G'
    ),
    (
        'Interestelar',
        'Christopher Nolan',
        2014,
        'Ciencia Ficción',
        169,
        'EE.UU.',
        'PG-13'
    ),
    (
        'Parásitos',
        'Bong Joon Ho',
        2019,
        'Drama',
        132,
        'Corea del Sur',
        'R'
    ),
    (
        'El Pianista',
        'Roman Polanski',
        2002,
        'Drama',
        150,
        'Francia',
        'R'
    ),
    (
        'Intensamente',
        'Pete Docter, Ronnie del Carmen',
        2015,
        'Animación',
        95,
        'EE.UU.',
        'PG'
    ),
    (
        'El Silencio de los Corderos',
        'Jonathan Demme',
        1991,
        'Terror',
        118,
        'EE.UU.',
        'R'
    ),
    (
        'Vengadores: Endgame',
        'Anthony Russo, Joe Russo',
        2019,
        'Acción',
        181,
        'EE.UU.',
        'PG-13'
    ),
    (
        'Apocalypse Now',
        'Francis Ford Coppola',
        1979,
        'Guerra',
        147,
        'EE.UU.',
        'R'
    ),
    (
        'WALL·E',
        'Andrew Stanton',
        2008,
        'Animación',
        98,
        'EE.UU.',
        'G'
    ),
    (
        'La La Land',
        'Damien Chazelle',
        2016,
        'Comedia',
        128,
        'EE.UU.',
        'PG-13'
    ),
    (
        'El Viaje de Chihiro',
        'Hayao Miyazaki',
        2001,
        'Animación',
        125,
        'Japón',
        'PG'
    ),
    (
        'Coco',
        'Lee Unkrich, Adrian Molina',
        2017,
        'Animación',
        105,
        'EE.UU.',
        'PG'
    ),
    (
        'La Lista de Schindler',
        'Steven Spielberg',
        1993,
        'Drama',
        195,
        'EE.UU.',
        'R'
    ),
    (
        'Mad Max: Furia en la Carretera',
        'George Miller',
        2015,
        'Acción',
        120,
        'Australia',
        'R'
    ),
    (
        'Los Increíbles',
        'Brad Bird',
        2004,
        'Animación',
        115,
        'EE.UU.',
        'PG'
    ),
    (
        'Whiplash',
        'Damien Chazelle',
        2014,
        'Drama',
        106,
        'EE.UU.',
        'R'
    ),
    (
        'La Llegada',
        'Denis Villeneuve',
        2016,
        'Ciencia Ficción',
        116,
        'EE.UU.',
        'PG-13'
    ),
    (
        'Toy Story',
        'John Lasseter',
        1995,
        'Animación',
        81,
        'EE.UU.',
        'G'
    ),
    (
        'El Laberinto del Fauno',
        'Guillermo del Toro',
        2006,
        'Fantasía',
        118,
        'México',
        'R'
    ),
    (
        'El Bueno, el Malo y el Feo',
        'Sergio Leone',
        1966,
        'Western',
        178,
        'Italia',
        'R'
    ),
    (
        'Dunkerque',
        'Christopher Nolan',
        2017,
        'Guerra',
        106,
        'EE.UU.',
        'PG-13'
    ),
    (
        'Blade Runner 2049',
        'Denis Villeneuve',
        2017,
        'Ciencia Ficción',
        164,
        'EE.UU.',
        'R'
    ),
    (
        'Amélie',
        'Jean-Pierre Jeunet',
        2001,
        'Romance',
        122,
        'Francia',
        'R'
    ),
    (
        'La Naranja Mecánica',
        'Stanley Kubrick',
        1971,
        'Crimen',
        136,
        'EE.UU.',
        'R'
    ),
    (
        'El Gran Hotel Budapest',
        'Wes Anderson',
        2014,
        'Comedia',
        99,
        'EE.UU.',
        'R'
    ),
    (
        'El Club de la Pelea',
        'David Fincher',
        1999,
        'Drama',
        139,
        'EE.UU.',
        'R'
    );


    SELECT titulo FROM peliculas;

    
UPDATE peliculas
SET
    imagen = "avatar-libros.jpg"
WHERE
    imagen != "avatar-libros.jpg";
2

SELECT * FROM peliculas;