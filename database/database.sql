-- Base de datos para el catalogo del sitio de Avatar

-- Esta tabla guarda peliculas, juegos y personajes.
CREATE TABLE IF NOT EXISTS catalogo (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(150) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    detalles TEXT,
    anio SMALLINT,
    enlace VARCHAR(500),
    PRIMARY KEY (id)
) DEFAULT CHARSET=utf8mb4;

-- Datos iniciales: tres peliculas, un juego y cuatro personajes.
INSERT INTO catalogo (titulo, tipo, imagen, descripcion, detalles, anio, enlace) VALUES
('Avatar', 'pelicula', 'recursos/img/avatar_800x1200_208c9665.jpeg', 'Jake Sully llega a Pandora y conoce la cultura del pueblo Na vi.', 'Director: James Cameron.', 2009, 'https://www.youtube.com/watch?v=5PSNL1qE6VY'),
('Avatar: El camino del agua', 'pelicula', 'recursos/img/AvatarElcaminodelagua.jpeg', 'Jake y Neytiri protegen a su familia y buscan refugio junto al clan Metkayina.', 'Director: James Cameron.', 2022, 'https://www.youtube.com/watch?v=d9MyW72ELq0'),
('Avatar: Fuego y ceniza', 'pelicula', 'recursos/img/AvatarFuegoyceniza.jpeg', 'La familia Sully se enfrenta a nuevos desafios en Pandora.', 'Director: James Cameron.', 2025, 'https://www.youtube.com/watch?v=nb_fFj_0rq8'),
('Avatar: Frontiers of Pandora', 'juego', 'recursos/img/Frontiers_of_Pandora.jfif', 'Videojuego de aventura ambientado en el mundo de Pandora.', 'Videojuego de la saga Avatar.', 2023, 'https://www.youtube.com/watch?v=5XMojNXFmkc'),
('Jake Sully', 'personaje', 'recursos/img/Sam_Worthington.jpg', 'Ex marine que llega a Pandora y se une al pueblo Na vi.', 'Interpretado por Sam Worthington.', NULL, 'https://es.wikipedia.org/wiki/Sam_Worthington'),
('Neytiri', 'personaje', 'recursos/img/ZoeSaldana.jpeg', 'Guerrera Na vi que ayuda a Jake a conocer Pandora.', 'Interpretada por Zoe Saldana.', NULL, 'https://es.wikipedia.org/wiki/Zoe_Salda%C3%B1a'),
('Kiri', 'personaje', 'recursos/img/Sigourney Weaver.jpeg', 'Hija adoptiva de Jake y Neytiri, conectada con la naturaleza de Pandora.', 'Interpretada por Sigourney Weaver.', NULL, 'https://es.wikipedia.org/wiki/Sigourney_Weaver'),
('Ronal', 'personaje', 'recursos/img/KateWinslet.jpeg', 'Lider del clan Metkayina y protectora de su pueblo.', 'Interpretada por Kate Winslet.', NULL, 'https://es.wikipedia.org/wiki/Kate_Winslet');
