SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE EmpresaM (
rut_empresa VARCHAR(12) PRIMARY KEY NOT NULL,
nombre_Em VARCHAR(30) NOT NULL,
telefono_Em INT NOT NULL,
giro VARCHAR(30) NOT NULL,
direccion VARCHAR(30) NOT NULL);


CREATE TABLE Region (
cod_reg INT PRIMARY KEY,
nombre_reg VARCHAR(30) NOT NULL);

CREATE TABLE Ciudad (
cod_ciu INT PRIMARY KEY NOT NULL,
nombre_ciu VARCHAR(20) NOT NULL,
cod_reg INT,
FOREIGN KEY (cod_reg) REFERENCES Region(cod_reg) ); 

CREATE TABLE Edificios(
cod_bloque INT PRIMARY KEY,
nombre_edi VARCHAR(30),
calle VARCHAR(50),
cod_ciu INT,
FOREIGN KEY (cod_ciu) REFERENCES Ciudad(cod_ciu) );

CREATE TABLE Usuario (
rut_u VARCHAR(12) PRIMARY KEY NOT NULL,
digito_ver_u VARCHAR(1), 
nombre_u VARCHAR(30) NOT NULL,
apellido_u VARCHAR(30) NOT NULL,
password_usu VARCHAR(30) NOT NULL,
cod_bloque INT,
FOREIGN KEY (cod_bloque) REFERENCES Edificios(cod_bloque) );

CREATE TABLE Administrador (
rut_a INT PRIMARY KEY NOT NULL,
digito_ver_a VARCHAR(1), 
nombre_a VARCHAR(30) NOT NULL,
apellido_a VARCHAR(30) NOT NULL,
password_adm VARCHAR(30) NOT NULL,
cod_bloque INT,
FOREIGN KEY (cod_bloque) REFERENCES Edificios(cod_bloque) );

CREATE TABLE Encargado (
rut_e VARCHAR(12) PRIMARY KEY NOT NULL,
digito_ver_e VARCHAR(1), 
nombre_e VARCHAR(20) NOT NULL,
apellido_e VARCHAR(20) NOT NULL,
cargo VARCHAR(30) NOT NULL,
password_enc VARCHAR(30) NOT NULL);

CREATE TABLE Mantencion (
cod_man VARCHAR(30) PRIMARY KEY NOT NULL,
tipo_man VARCHAR(30) NOT NULL,
estado VARCHAR(30) NOT NULL,
observacion VARCHAR(30) NOT NULL,
fecha_inicio DATE,
fecha_fin DATE,
rut_e VARCHAR(30) NOT NULL,
cod_bloque INT,
FOREIGN KEY (cod_bloque) REFERENCES Edificios(cod_bloque),
FOREIGN KEY (rut_e) REFERENCES Encargado(rut_e));


CREATE TABLE Mrealizada (
cod_man_rea INT PRIMARY KEY,
cod_man VARCHAR(30) NOT NULL,
rut_empresa VARCHAR(12) NOT NULL,
fecha_inicioyhora DATETIME NOT NULL,
fecha_terminoyhora DATETIME NOT NULL,
contratista VARCHAR(30) NOT NULL,
FOREIGN KEY (cod_man) REFERENCES Mantencion(cod_man),
FOREIGN KEY (rut_empresa) REFERENCES EmpresaM(rut_empresa));


INSERT INTO `region`(`cod_reg`,`nombre_reg`) VALUES ('8','BIO-BIO');

INSERT INTO `ciudad`(`cod_ciu`,`nombre_ciu`,`cod_reg`) VALUES ('1','concepcion','8');

INSERT INTO `edificios`(`cod_bloque`,`nombre_edi`,`calle`,`cod_ciu`) VALUES ('1','bella vista','los carrera','1');

INSERT INTO `encargado`(`rut_e`,`digito_ver_e`,`nombre_e`,`apellido_e`,`cargo`,`password_enc`) VALUES ('18983834','4','Diego','Valderrama','conserje','holamundo')
