<?php

 #esto es un fallo de seguridad, se necesita una contraseña
	$mysqli = new mysqli('localhost', 'ferreteria', '1234', 'ferreteria');
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
?>