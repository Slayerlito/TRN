/*
DROP DATABASE IF EXISTS TRN;
*/
/*DB_TRN
 */
/*CREATE DATABASE TRN;*/
 
 /*Seleccion de DB
 */
USE TRN;

/*TRN_USUARIOS
Descripción: Datos actuales de usuarios. 
*/
DROP TABLE IF EXISTS TRN_B_NOTICIAS;
DROP TABLE IF EXISTS TRN_LKP_NOTICIAS;
DROP TABLE IF EXISTS TRN_B_SERVICIOS_CONTRATADOS;
DROP TABLE IF EXISTS TRN_LKP_PLANES_CONTRATABLES;
DROP TABLE IF EXISTS TRN_B_SEGUIMIENTOS;
DROP TABLE IF EXISTS TRN_LKP_OBJETIVOS;
DROP TABLE IF EXISTS TRN_WEB_ACCESOS;
DROP TABLE IF EXISTS TRN_LKP_ROLES_SEGURIDAD;
DROP TABLE IF EXISTS TRN_LKP_USUARIOS;
CREATE TABLE TRN_LKP_USUARIOS (
ID_USER					INT  				NOT NULL AUTO_INCREMENT PRIMARY KEY,
NOMBRE 					VARCHAR(50) 		NOT NULL,
APELLIDOS 				VARCHAR(50) 		NOT NULL,
FECHA_DE_NACIMIENTO 	DATE 				NOT NULL,
EMAIL 					VARCHAR(50) 		NOT NULL UNIQUE,
PASSWORD				VARCHAR(50) 		NOT NULL,
DEPORTISTA 				TINYINT 			NOT NULL DEFAULT 0,
PESO					NUMERIC(4,1)		,
ALTURA					NUMERIC(3,0)		,
PERFIL  				INT					NOT NULL DEFAULT 1,
ACTIVO					TINYINT				NOT NULL DEFAULT 1
)ENGINE=INNODB;
INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD,PERFIL)VALUES("ADMIN","ADMINIS",STR_TO_DATE("19/10/1990",'%d/%m/%Y'),"admin@trn.com",MD5("admin"),6);
INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD,PERFIL)VALUES("Jose Francisco","López Gil",STR_TO_DATE("19/10/1990",'%d/%m/%Y'),"josefranciscolopezgil@gmail.com",MD5("trn2016"),4);
INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL,PASSWORD,PERFIL)VALUES("Prueba1","Prueba1",STR_TO_DATE("19/10/1990",'%d/%m/%Y'),"Prueba1@trn.com",MD5("trn2016"),5);

/*TRN_LKP_ROLES_SEGURIDAD
Descripción: Tabla que almacena la configuración de los roles de seguridad.
*/
CREATE TABLE TRN_LKP_ROLES_SEGURIDAD(
ID_PERFIL				INT					NOT NULL AUTO_INCREMENT PRIMARY KEY,
DESC_PERFIL 			VARCHAR(20) 		NOT NULL,
BACKEND 				TINYINT 			NOT NULL DEFAULT 0,
OBJETIVOS 				TINYINT 			NOT NULL DEFAULT 0,
SEGUIMIENTO 			TINYINT 			NOT NULL DEFAULT 0,
NOTICIAS				TINYINT				NOT NULL DEFAULT 0
)ENGINE=INNODB;
INSERT INTO TRN_LKP_ROLES_SEGURIDAD (DESC_PERFIL,BACKEND,OBJETIVOS,SEGUIMIENTO,NOTICIAS) VALUES ('Usuario',0,0,0,0);
INSERT INTO TRN_LKP_ROLES_SEGURIDAD (DESC_PERFIL,BACKEND,OBJETIVOS,SEGUIMIENTO,NOTICIAS) VALUES ('Administrativo',1,0,0,1);
INSERT INTO TRN_LKP_ROLES_SEGURIDAD (DESC_PERFIL,BACKEND,OBJETIVOS,SEGUIMIENTO,NOTICIAS) VALUES ('Asistente',1,0,1,0);
INSERT INTO TRN_LKP_ROLES_SEGURIDAD (DESC_PERFIL,BACKEND,OBJETIVOS,SEGUIMIENTO,NOTICIAS) VALUES ('Coach',1,1,1,0);
INSERT INTO TRN_LKP_ROLES_SEGURIDAD (DESC_PERFIL,BACKEND,OBJETIVOS,SEGUIMIENTO,NOTICIAS) VALUES ('Administrador',1,1,1,1);
INSERT INTO TRN_LKP_ROLES_SEGURIDAD (DESC_PERFIL,BACKEND,OBJETIVOS,SEGUIMIENTO,NOTICIAS) VALUES ('MASTER',1,1,1,1);



/* TRN_WEB_ACCESOS
Descripción: Tabla que almacena todos los accesos
*/
CREATE TABLE TRN_WEB_ACCESOS(
ID_ACCESO				INT					NOT NULL AUTO_INCREMENT PRIMARY KEY,
ID_USER					INT					NOT NULL,
FECHA_ACCESO			DATE				NOT NULL,
IP						VARCHAR(20)			NOT NULL,
WEB						TINYINT				NOT NULL DEFAULT 0,
APP						TINYINT				NOT NULL DEFAULT 0,
INDEX (ID_USER),
FOREIGN KEY (ID_USER) REFERENCES TRN_LKP_USUARIOS (ID_USER)
)ENGINE=INNODB;


/*TRN_B_OBJETIVOS
Descripción: Tabla que almacena los distintos objetivos de los usuarios. (De momento solo objetivos de peso, ¿Jerarquía de Objetivos?)
*/
CREATE TABLE TRN_LKP_OBJETIVOS(
ID_OBJETIVO				INT					NOT NULL AUTO_INCREMENT PRIMARY KEY,
ID_USER					INT					NOT NULL,
FECHA_INICIO			DATE				NOT NULL,
PROGRESO				NUMERIC(3,1)    	NOT NULL DEFAULT 0,
PESO_OBJETIVO			NUMERIC(4,1)		NOT NULL DEFAULT 0,
PESO_INICIO				NUMERIC(4,1)		NOT NULL DEFAULT 0,
PESO_ACTUAL				NUMERIC(4,1)		NOT NULL DEFAULT 0,
DIAS_ENTRENO			VARCHAR(10)			NOT NULL DEFAULT '1010100',
PATOLOGIAS				VARCHAR(250)		,
ALIMENTOS_ND			VARCHAR(250)		,
OBJETIVO				VARCHAR(500)		NOT NULL,
INDEX (ID_USER),
FOREIGN KEY (ID_USER) REFERENCES TRN_LKP_USUARIOS (ID_USER)
)ENGINE=INNODB;

INSERT INTO TRN_LKP_OBJETIVOS (ID_USER,FECHA_INICIO,PROGRESO,PESO_OBJETIVO,PESO_INICIO,PESO_ACTUAL,DIAS_ENTRENO,OBJETIVOS) VALUES (3,STR_TO_DATE("26/09/2016",'%d/%m/%Y'),10.5,77.5,89.5,88.5,"MXD","Bajar % de grasa corporal a 8%.");

/*TRN_LKP_SEGUIMIENTOS
Descripción: Tabla que almacena el seguimiento de un objetivo asociado a un usuario.
*/
CREATE TABLE TRN_B_SEGUIMIENTOS(
ID_SEGUIMIENTO			INT 				NOT NULL AUTO_INCREMENT PRIMARY KEY,
ID_OBJETIVO				INT					NOT NULL,
PESO					NUMERIC(4,1)		NOT NULL,
FOTO_FRONTAL			VARCHAR(250)		NOT NULL,
FOTO_ESPALDA			VARCHAR(250)		NOT NULL,
FOTO_PERFIL				VARCHAR(250)		NOT NULL,
COMENTARIOS				VARCHAR(250)		,
FOREIGN KEY (ID_OBJETIVO) REFERENCES TRN_LKP_OBJETIVOS (ID_OBJETIVO)
)ENGINE=INNODB;

/*TRN_LKP_PLANES_CONTRATABLES
Descripción: 
*/
CREATE TABLE TRN_LKP_PLANES_CONTRATABLES(
ID_PLAN 				INT 				NOT NULL AUTO_INCREMENT PRIMARY KEY,
DESC_PLAN				VARCHAR(50)     	NOT NULL,
SEGUIMIENTO_SEM			INT					NOT NULL,
CHAT					TINYINT				NOT NULL,
ENTRENAMIENTO			TINYINT				NOT NULL DEFAULT 0,
NUTRICION				TINYINT				NOT NULL DEFAULT 0,
PRECIO					NUMERIC(5,2)		NOT NULL
)ENGINE=INNODB;
INSERT INTO TRN_LKP_PLANES_CONTRATABLES (DESC_PLAN,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO) VALUES("FIT",0,1,0,1,9.99);
INSERT INTO TRN_LKP_PLANES_CONTRATABLES (DESC_PLAN,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO) VALUES("MUSCLE",0,1,1,0,9.99);
INSERT INTO TRN_LKP_PLANES_CONTRATABLES (DESC_PLAN,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO) VALUES("1+1",0,1,1,1,16.99);
INSERT INTO TRN_LKP_PLANES_CONTRATABLES (DESC_PLAN,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO) VALUES("FIT+",1,1,0,1,15.99);
INSERT INTO TRN_LKP_PLANES_CONTRATABLES (DESC_PLAN,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO) VALUES("MUSCLE+",1,1,1,0,15.99);
INSERT INTO TRN_LKP_PLANES_CONTRATABLES (DESC_PLAN,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO) VALUES("ADVANCED",1,1,1,1,25.99);
INSERT INTO TRN_LKP_PLANES_CONTRATABLES (DESC_PLAN,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO) VALUES("PRO",3,1,1,1,50);
INSERT INTO TRN_LKP_PLANES_CONTRATABLES (DESC_PLAN,SEGUIMIENTO_SEM,CHAT,ENTRENAMIENTO,NUTRICION,PRECIO) VALUES("PRO++",5,1,1,1,100);

/*TRN_B_SERVICIOS_CONTRATADOS
Descripción:
*/
CREATE TABLE TRN_B_SERVICIOS_CONTRATADOS(
ID_CONTRATO				INT 				NOT NULL AUTO_INCREMENT PRIMARY KEY,
ID_PLAN					INT					NOT NULL,
ID_USER					INT					NOT NULL,
FECHA_INICIO_SERV		DATE				NOT NULL,
FECHA_FIN_SERV			DATE				NOT NULL,
RENOVACION_MEN			TINYINT				NOT NULL DEFAULT 0,
FOREIGN KEY (ID_USER) REFERENCES TRN_LKP_USUARIOS (ID_USER),
FOREIGN KEY (ID_PLAN) REFERENCES TRN_LKP_PLANES_CONTRATABLES (ID_PLAN)
);

/*TRN_LKP_NOTICIAS
Descripción: Últimas noticias publicadas, visibles desde INDEX.
*/
CREATE TABLE TRN_LKP_NOTICIAS (
ID_NOTICIA				INT 				NOT NULL AUTO_INCREMENT PRIMARY KEY,
TITULO					VARCHAR(250)		NOT NULL,
DESCRIPCION				VARCHAR(250)		NOT NULL,
CUERPO					VARCHAR(2500)		NOT NULL,
ID_USER					INT					NOT NULL,
FECHA_NOTICIA			DATE				NOT NULL,
FOREIGN KEY (ID_USER) REFERENCES TRN_LKP_USUARIOS (ID_USER)
);
/*Falta el trigger que pasa las noticias antiguas a la tablas TRN_B_NOTICIAS*/

/*TRN_B_NOTICIAS
Descripción: Últimas noticias publicadas, visibles desde INDEX.
*/
CREAT
CREATE TABLE TRN_B_NOTICIAS(
ID_NOTICIA				INT 				NOT NULL PRIMARY KEY,
TITULO					VARCHAR(250)		NOT NULL,
DESCRIPCION				VARCHAR(250)		NOT NULL,
CUERPO					VARCHAR(2500)		NOT NULL,
ID_USER					INT					NOT NULL,
FECHA_NOTICIA			DATE				NOT NULL,
FOREIGN KEY (ID_USER) REFERENCES TRN_LKP_USUARIOS (ID_USER)
);