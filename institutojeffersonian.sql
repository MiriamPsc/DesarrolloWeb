CREATE TABLE Usuario
(
    idUsuario int AUTO_INCREMENT,
    nombre varchar (50) not null,
    apellidoPaterno varchar (50) not null,
    apellidoMaterno varchar (50) not null,
    correo varchar (50) UNIQUE not null,
    password varchar (50) not null,
    estatus bit default 1,
    fechaCrea datetime null,
    fechaModifica datetime default null,
    CONSTRAINT PKUsuario PRIMARY KEY(idUsuario)
);

CREATE TABLE Visita
(
    idVisita int AUTO_INCREMENT,
    fecha datetime not null,
    tipo int not null,
    idVisitante int not null,
    numPase int not null,
    estatus bit default 1,
    fechaCrea datetime null,
    fechaModifica datetime default null,
    CONSTRAINT PKVisita PRIMARY KEY(idVisita)
);

ALTER TABLE Visita
ADD CONSTRAINT FKVisitaVisitante FOREIGN KEY (idVisitante)
REFERENCES Usuario(idUsuario);



