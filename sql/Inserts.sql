/*TRN_LKP_USUARIOS
Variable                Input       Campo               Formato         CONSTRAINT
@NOMBRE                 STRING      (VARCHAR(50))
@APELLIDOS              STRING      (VARCHAR(50))
@FECHA_DE_NACIMIENTO    STRING      (DATE)              dd/mm/YYYY
@EMAIL                  STRING      (VARCHAR(50))                       UNIQUE (NOT PK)
@PASSWORD				STRING		(VARCHAR(50))						Codificación en MD5
*/
/*REGISTRO*/INSERT INTO TRN_LKP_USUARIOS (NOMBRE,APELLIDOS,FECHA_DE_NACIMIENTO,EMAIL)VALUES($NOMBRE,$APELLIDOS,STR_TO_DATE($FECHA_DE_NACIMIENTO,'%d/%m/%Y'),$EMAIL,MD5($PASSWORD));


SELECT NOMBRE, IF(PASSWORD=MD5('$password'),1,0) AS ACCESO FROM TRN_LKP_USUARIOS WHERE EMAIL='$email';

/*INSERT TRN_PERFILES
Variable                Input       Campo               Formato         CONSTRAINT
@DESCRIPTOR             STRING      (VARCHAR(20))                           
@PERMISOS               INT         TINYINT             0-1             DEFAULT 0 (FALSE)

INSERT INTO TRN_PERFILES (DESC_PERFIL,PERMISOS[..])VALUES($Descriptor,$Permisos[..]);*/

/*
*/