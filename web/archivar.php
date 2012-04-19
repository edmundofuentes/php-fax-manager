<?php

/* ARCHIVAR.php */
require_once("../config.php");

$archivo = $_POST['archivo'];
$remitente = isset($_POST['remitente'])? $_POST['remitente'] : '';
$tipo = isset($_POST['tipo'])? $_POST['tipo'] : '';


// usar CURDATE() en MYSQL

// inicia la conexión de MySQL
$con = mysql_connect(DB_IP . ":" . DB_PUERTO, DB_USER, DB_PASS);
mysql_select_db(DB_NOMBRE, $con);

// query de MySQL
$query = "INSERT INTO archivos (nombre, fecha, remitente, tipo) VALUES ('$archivo', CURDATE(), '$remitente', '$tipo')";
mysql_query($query) or die(mysql_error());

// cierra conexión
mysql_close($con);


// Mueve el archivo
rename(DIRECTORIO_ENTRADA . $archivo, DIRECTORIO_ARCHIVO . $archivo);

// redirecciona de vuelta a la página principal
header("Location: index.php")
?>