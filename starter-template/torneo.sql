DROP  SCHEMA IF EXISTS TorneoFutbol;

CREATE SCHEMA IF NOT EXISTS TorneoFutbol DEFAULT CHARACTER  SET utf8 COLLATE utf8_spanish2_ci;

USE TorneoFutbol;

CREATE TABLE Jugador (
    `No_cuenta` int(10) not null,
    `Nombre` text NOT NULL,
    `Apellido_paterno` text NOT NULL,
    `Apellido_materno` text NOT NULL,
    `Edad` int(3) NOT NULL,
    `Sexo` text NOT NULL, 
    `Posicion_de_juego` text NOT NULL, 
    `Carrera` text NOT NULL, 
    `Equipo` text NOT NULL, 
    `Telefono` varchar(10) not null, 
    `Correo_electronico` text not null,
    `Contraseña` varchar (10) not null
)engine=Innodb default charset=utf8;

ALTER TABLE Jugador ADD PRIMARY KEY(No_cuenta);

INSERT INTO `torneofutbol`.`Jugador` (`No_cuenta`, `Nombre`, `Apellido_paterno`, `Apellido_materno`, `Edad`, `Sexo`, `Posicion_de_juego`, `Carrera`, `Equipo`, `Telefono`, `Correo_electronico`, `Contraseña`) VALUES ('320045000', 'Diego', 'Barrera', 'Copca', '20', 'Hombre', 'Defensa', 'Ico', 'Chivas', '5569077643', 'diego@gmail.com', '123456');

SELECT * FROM `Jugador`;
