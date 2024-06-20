mysql -u root -p
-----------Base de Datos 
create database control;
use control ;
show tables;
*******
TABLAS--------------------------

CREATE TABLE Roles (
    id_rol INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL
);
CREATE TABLE AsesorInterno (
    id_ai INT PRIMARY KEY AUTO_INCREMENT,
    id_rol INT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    no_empleado VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    contraseña VARCHAR(20) NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES Roles(id_rol)
);
CREATE TABLE AsesorExterno (
    id_ae INT PRIMARY KEY AUTO_INCREMENT,
    id_rol INT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    puesto VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    contraseña VARCHAR(20) NOT NULL,
    url_web VARCHAR(50),
    id_reporte INT,
    FOREIGN KEY (id_rol) REFERENCES Roles(id_rol)
);
CREATE TABLE Asistente (
    id_asistente INT PRIMARY KEY AUTO_INCREMENT,
    id_rol INT,
    correo VARCHAR(50) NOT NULL,
    contraseña VARCHAR(20) NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES Roles(id_rol)
);
CREATE TABLE Administrador (
    id_administrador INT PRIMARY KEY AUTO_INCREMENT,
    id_rol INT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    contraseña VARCHAR(20) NOT NULL,
    FOREIGN KEY (id_rol) REFERENCES Roles(id_rol)
);
CREATE TABLE Subproceso (
    id_subproceso INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    acronimo VARCHAR(10) NOT NULL,
    id_ai INT,
    FOREIGN KEY (id_ai) REFERENCES AsesorInterno(id_ai)
);
CREATE TABLE PeriodoCuatrimestral (
    id_periodo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    acronimo VARCHAR(10) NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL
);
CREATE TABLE Alumnos (
    id_alumno INT PRIMARY KEY AUTO_INCREMENT,
    id_rol INT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    matricula VARCHAR(10) UNIQUE NOT NULL,
    grado VARCHAR(10) NOT NULL,
    grupo VARCHAR(10) NOT NULL,
    telefono VARCHAR(15),
    correo VARCHAR(50),
    contraseña VARCHAR(20) NOT NULL,
    id_ai INT,
    id_ae INT,
    FOREIGN KEY (id_rol) REFERENCES Roles(id_rol),
    FOREIGN KEY (id_ai) REFERENCES AsesorInterno(id_ai),
    FOREIGN KEY (id_ae) REFERENCES AsesorExterno(id_ae)
);
CREATE TABLE Reporte (
    id_reporte INT PRIMARY KEY AUTO_INCREMENT,
    id_alumno INT,
    id_ai INT,
    id_asistente INT,
    id_subproceso INT,
    id_periodo INT,
    folio VARCHAR(50) NOT NULL,
    fecha_actual DATE NOT NULL,
    descripcion TEXT,
    FOREIGN KEY (id_alumno) REFERENCES Alumnos(id_alumno),
    FOREIGN KEY (id_ai) REFERENCES AsesorInterno(id_ai),
    FOREIGN KEY (id_asistente) REFERENCES Asistente(id_asistente),
    FOREIGN KEY (id_subproceso) REFERENCES Subproceso(id_subproceso),
    FOREIGN KEY (id_periodo) REFERENCES PeriodoCuatrimestral(id_periodo)
);
CREATE TABLE Estadistica (
    id_estadistica INT PRIMARY KEY AUTO_INCREMENT,
    id_subproceso INT,
    id_periodo INT,
    competencias TEXT,
    resultados_satisfaccion TEXT,
    fecha DATE NOT NULL,
    observacion TEXT,
    id_ai INT,
    id_asistente INT,
    FOREIGN KEY (id_subproceso) REFERENCES Subproceso(id_subproceso),
    FOREIGN KEY (id_periodo) REFERENCES PeriodoCuatrimestral(id_periodo),
    FOREIGN KEY (id_ai) REFERENCES AsesorInterno(id_ai),
    FOREIGN KEY (id_asistente) REFERENCES Asistente(id_asistente)
);
CREATE TABLE EncuestaSatisfaccion (
    id_encuesta INT PRIMARY KEY AUTO_INCREMENT,
    id_alumno INT,
    id_ae INT,
    id_subproceso INT,
    fecha DATE NOT NULL,
    respuesta TEXT,
    folio VARCHAR(50) NOT NULL,
    observacion TEXT,
    FOREIGN KEY (id_alumno) REFERENCES Alumnos(id_alumno),
    FOREIGN KEY (id_ae) REFERENCES AsesorExterno(id_ae),
    FOREIGN KEY (id_subproceso) REFERENCES Subproceso(id_subproceso)
);