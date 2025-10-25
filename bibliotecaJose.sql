CREATE TABLE `administrador` (
  `id` int(100) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
);

CREATE TABLE `autores` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT null,
  `biografia` varchar(255) DEFAULT null
);

CREATE TABLE `libros` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) DEFAULT null,
  `categoria` varchar(255) DEFAULT null,
  `nombre` varchar(255) DEFAULT null,
  `descripcion` varchar(255) DEFAULT null,
  `autor_id` int(11) DEFAULT null,
  `image_path` varchar(255) NOT NULL
);

CREATE TABLE `prestamo` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `descripcion` text DEFAULT null,
  `fecha` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `estado` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `libro_id` int(11) NOT NULL
);

CREATE TABLE `usuarios` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `direccion` varchar(255) DEFAULT null,
  `nombre` varchar(255) DEFAULT null,
  `correo` varchar(255) DEFAULT null,
  `telefono` varchar(255) DEFAULT null,
  `fecha_nac` varchar(255) DEFAULT null
);

CREATE TABLE `sol_prestamos` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `libro_id` int(11) NOT NULL,
  `fecha` date NOT NULL
);

ALTER TABLE `libros` ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `autores` (`id`);

ALTER TABLE `prestamo` ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

ALTER TABLE `prestamo` ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`libro_id`) REFERENCES `libros` (`id`);
