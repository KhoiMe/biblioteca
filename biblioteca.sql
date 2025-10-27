CREATE TABLE `autores` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `biografia` varchar(255) NOT NULL
);

CREATE TABLE `libros` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `genero` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
);

CREATE TABLE `prestamo` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `descripcion` text,
  `fecha` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `estado` varchar(255) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `libro_id` int(11) NOT NULL,
  `sol_prestamo_id` int(11) NOT NULL
);

CREATE TABLE `sol_prestamos` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `libro_id` int(11) NOT NULL,
  `fecha` date NOT NULL
);

CREATE TABLE `usuarios` (
  `doc_id` int(11) PRIMARY KEY NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `fecha_nac` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
);

CREATE TABLE `roles` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL
);

ALTER TABLE `libros` ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `autores` (`id`);

ALTER TABLE `prestamo` ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`doc_id`);

ALTER TABLE `prestamo` ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`libro_id`) REFERENCES `libros` (`id`);

ALTER TABLE `prestamo` ADD CONSTRAINT `prestamo_sol_ibfk_1` FOREIGN KEY (`sol_prestamo_id`) REFERENCES `sol_prestamos` (`id`);

ALTER TABLE `usuarios` ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
