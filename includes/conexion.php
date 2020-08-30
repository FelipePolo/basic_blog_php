<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$basededatos = "blog_master";

$conexion = mysqli_connect($servidor, $usuario, $contra, $basededatos);

mysqli_query($conexion, "SET NAMES 'utf8'");

// iniciando la session

session_start();

?>