-- Creación de la base de datos 'control' si aún no existe
CREATE DATABASE IF NOT EXISTS control;
USE control;

-- Tabla Roles
CREATE TABLE IF NOT EXISTS Roles (
    id_rol INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL
);

-- Tabla AsesorInterno
CREATE TABLE IF NOT EXISTS AsesorInterno (
    id_ai INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    no_empleado VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    contrasena VARCHAR(20) NOT NULL,
    id_rol_fk INT,
    FOREIGN KEY (id_rol_fk) REFERENCES Roles(id_rol)
);

-- Tabla AsesorExterno
CREATE TABLE IF NOT EXISTS AsesorExterno (
    id_ae INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    puesto VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    email VARCHAR(50) NOT NULL,
    contrasena VARCHAR(20) NOT NULL,
    url_web VARCHAR(50),
    id_reporte INT,
    id_rol_fk INT,
    FOREIGN KEY (id_rol_fk) REFERENCES Roles(id_rol)
);

-- Tabla Asistente
CREATE TABLE IF NOT EXISTS Asistente (
    id_asistente INT PRIMARY KEY AUTO_INCREMENT,
    correo VARCHAR(50) NOT NULL,
    contrasena VARCHAR(20) NOT NULL,
    id_rol_fk INT,
    FOREIGN KEY (id_rol_fk) REFERENCES Roles(id_rol)
);

-- Tabla Administrador
CREATE TABLE IF NOT EXISTS Administrador (
    id_administrador INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    contrasena VARCHAR(20) NOT NULL,
    id_rol_fk INT,
    FOREIGN KEY (id_rol_fk) REFERENCES Roles(id_rol)
);

-- Tabla Subproceso
CREATE TABLE IF NOT EXISTS Subproceso (
    id_subproceso INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    acronimo VARCHAR(10) NOT NULL,
    id_ai INT,
    FOREIGN KEY (id_ai) REFERENCES AsesorInterno(id_ai)
);

-- Tabla PeriodoCuatrimestral
CREATE TABLE IF NOT EXISTS PeriodoCuatrimestral (
    id_periodo INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    acronimo VARCHAR(10) NOT NULL,
    fecha_inicio DATE NOT NULL,
    fecha_fin DATE NOT NULL
);

-- Tabla Alumnos
CREATE TABLE IF NOT EXISTS Alumnos (
    id_alumno INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    matricula VARCHAR(10) UNIQUE NOT NULL,
    grado VARCHAR(10) NOT NULL,
    grupo VARCHAR(10) NOT NULL,
    telefono VARCHAR(15),
    correo VARCHAR(50),
    contrasena VARCHAR(20) NOT NULL,
    id_rol_fk INT,
    id_ai_fk INT,
    id_ae_fk INT,
    FOREIGN KEY (id_rol_fk) REFERENCES Roles(id_rol),
    FOREIGN KEY (id_ai_fk) REFERENCES AsesorInterno(id_ai),
    FOREIGN KEY (id_ae_fk) REFERENCES AsesorExterno(id_ae)
);

-- Tabla Reporte
CREATE TABLE IF NOT EXISTS Reporte (
    id_reporte INT PRIMARY KEY AUTO_INCREMENT,
    folio VARCHAR(50) NOT NULL,
    fecha_actual DATE NOT NULL,
    descripcion TEXT,
    id_alumno_fk INT,
    id_ai_fk INT,
    id_asistente_fk INT,
    id_subproceso_fk INT,
    id_periodo_fk INT,
    FOREIGN KEY (id_alumno_fk) REFERENCES Alumnos(id_alumno),
    FOREIGN KEY (id_ai_fk) REFERENCES AsesorInterno(id_ai),
    FOREIGN KEY (id_asistente_fk) REFERENCES Asistente(id_asistente),
    FOREIGN KEY (id_subproceso_fk) REFERENCES Subproceso(id_subproceso),
    FOREIGN KEY (id_periodo_fk) REFERENCES PeriodoCuatrimestral(id_periodo)
);

-- Tabla Estadistica
CREATE TABLE IF NOT EXISTS Estadistica (
    id_estadistica INT PRIMARY KEY AUTO_INCREMENT,
    competencias TEXT,
    resultados_satisfaccion TEXT,
    fecha DATE NOT NULL,
    observacion TEXT,
    id_subproceso_fk INT,
    id_periodo_fk INT,
    id_ai_fk INT,
    id_asistente_fk INT,
    FOREIGN KEY (id_subproceso_fk) REFERENCES Subproceso(id_subproceso),
    FOREIGN KEY (id_periodo_fk) REFERENCES PeriodoCuatrimestral(id_periodo),
    FOREIGN KEY (id_ai_fk) REFERENCES AsesorInterno(id_ai),
    FOREIGN KEY (id_asistente_fk) REFERENCES Asistente(id_asistente)
);

-- Tabla EncuestaSatisfaccion
CREATE TABLE IF NOT EXISTS EncuestaSatisfaccion (
    id_encuesta INT PRIMARY KEY AUTO_INCREMENT,
    fecha DATE NOT NULL,
    respuesta TEXT,
    folio VARCHAR(50) NOT NULL,
    observacion TEXT,
    id_alumno_fk INT,
    id_ae_fk INT,
    id_subproceso_fk INT,
    FOREIGN KEY (id_alumno_fk) REFERENCES Alumnos(id_alumno),
    FOREIGN KEY (id_ae_fk) REFERENCES AsesorExterno(id_ae),
    FOREIGN KEY (id_subproceso_fk) REFERENCES Subproceso(id_subproceso)
);