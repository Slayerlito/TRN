<?php
// datos para la coneccion a mysql 
define('DB_SERVER','localhost'); 
define('DB_NAME','TU_BASE_DE_DATOS'); 
define('DB_USER','TU_USUARIO'); 
define('DB_PASS','TU_CLAVE'); 

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME); 

?>