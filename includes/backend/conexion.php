<?php

	//Conexion
	//Fichero de conexión
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'idoneo';
$db = mysqli_connect($server, $username,$password,$database);
mysqli_query($db,"'SET NAMES 'utf8'");

