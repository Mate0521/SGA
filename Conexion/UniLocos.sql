CREATE DATABASE UniLocos;
USE UniLocos;

CREATE TABLE Departamento(
	Id_Departamento INT AUTO_INCREMENT,
	Nombre_Departamento VARCHAR(100) NOT NULL,
	PRIMARY KEY(Id_Departamento)
);

CREATE TABLE Carrera(
	Id_Carrera INT AUTO_INCREMENT,
	Nombre_Carrera VARCHAR(100) NOT NULL,
	PRIMARY KEY(Id_Carrera)
);

CREATE TABLE Area_Con(
	Id_Area INT AUTO_INCREMENT,
	Id_Departamento INT NOT NULL,
	Nombre_Area VARCHAR(100) NOT NULL,
	PRIMARY KEY(Id_Area),
	FOREIGN KEY(Id_Departamento)
	REFERENCES Departamento(Id_Departamento) ON DELETE CASCADE
);

CREATE TABLE Duracion(
	Id_Duracion INT AUTO_INCREMENT,
	Nombre_Duracion VARCHAR(100) NOT NULL,
	PRIMARY KEY(Id_Duracion)
);

CREATE TABLE Asignatura(
	Id_Asignatura INT AUTO_INCREMENT,
	Id_Carrera INT NOT NULL,
	Nombre_Asignatura VARCHAR(100) NOT NULL,
	Id_Duracion INT NOT NULL,
	Creditos_Teoria INT NOT NULL,
	Creditos_Laboratorio INT NOT NULL,
	PRIMARY KEY(Id_Asignatura),
	FOREIGN KEY(Id_Carrera)
	REFERENCES Carrera(Id_Carrera) ON DELETE CASCADE,
	FOREIGN KEY(Id_Duracion)
	REFERENCES Duracion(Id_Duracion) ON DELETE CASCADE
);

CREATE TABLE Profesor(
	Id_Profesor INT AUTO_INCREMENT,
	Id_AreaCon INT NOT NULL,
	Nombre_Profesor VARCHAR(100) NOT NULL,
	Correo VARCHAR(100) NOT NULL,
	Clave VARCHAR(100) NOT NULL,
	Foto VARCHAR(100),
	Tel VARCHAR(100) NOT NULL,
	PRIMARY KEY(Id_Profesor),
	FOREIGN KEY(Id_AreaCon)
	REFERENCES Area_Con(Id_Area) ON DELETE CASCADE
);

CREATE TABLE Asignatura_Profesor(
	Id_Asignatura INT NOT NULL,
	Id_Profesor INT NOT NULL,
	PRIMARY KEY(Id_Asignatura, Id_Profesor),
	FOREIGN KEY(Id_Asignatura)
	REFERENCES Asignatura(Id_Asignatura) ON DELETE CASCADE,
	FOREIGN KEY(Id_Profesor)
	REFERENCES Profesor(Id_Profesor) ON DELETE CASCADE
);

CREATE TABLE Alumno(
    Id_Alumno INT AUTO_INCREMENT,
    Nombre_Alumno VARCHAR(100) NOT NULL,
    Correo VARCHAR(100) NOT NULL,
    Clave VARCHAR(100) NOT NULL,
    Foto VARCHAR(100),
    PRIMARY KEY(Id_Alumno)
);
CREATE TABLE Alumno_Asignatura(
    Id_Alumno int not null,
    Id_Asignatura int not null,
    foreign key(Id_Alumno)
    REFERENCES Alumno(Id_Alumno) ON DELETE CASCADE,
    foreign key(Id_Asignatura)
        REFERENCES Asignatura(Id_Asignatura) ON DELETE CASCADE
);