<?php

if (isset($_POST)) {
    require './includes/conexion.php';

    $nombre = isset($_POST['nombre']) ?  $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']) : $nombre = null;

    $apellido = isset($_POST['apellido'])  ? $apellido = mysqli_real_escape_string($conexion, $_POST['apellido']) : $apellido = null;

    $email = isset($_POST['email']) ? $email = mysqli_real_escape_string($conexion, $_POST['email']) : $email = null;

    $telefono = isset($_POST['telefono']) ? $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']) : $telefono = null;

    $password = isset($_POST['password']) ? $password = mysqli_real_escape_string($conexion, $_POST['password']) : $password = null;

    // Array de errores
    $errores = [];

    // validar los datos antes de guardarlos en la BD
    if (empty($nombre) || is_int($nombre) || preg_match("/[0-9]/", $nombre)) {
        $errores['nombre'] = "Digite correctamente el nombre";
    }

    if (empty($apellido) || is_int($apellido) || preg_match("/[0-9]/", $nombre)) {
        $errores['apellido'] = "Digite correctamente el apellido";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = "Digite correctamente el email";
    }

    if (empty($password)) {
        $errores['password'] = "La contraseña vacia";
    }

    if (count($errores) == 0) {

        // cifrar la contraseña
        $secure_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        //INSERTAR A LA BASE DE DATOS BLOG_MASTER
        // QUERY DE INSERCION EN SQL
        $query_insertar = "INSERT INTO usuarios VALUES(null,'$nombre','$apellido','$email','$telefono','$secure_password',CURDATE());";
        // inyectando la query en sql
        $query_result = mysqli_query($conexion, $query_insertar);
                
        if ($query_result) {
            $_SESSION['completado'] = "El registro se completo exitosamente";
        } else {
            $_SESSION['errores']['generar'] = "Fallo al guardar: ". mysqli_error($conexion);
        }
    } else {
        $_SESSION['errores'] = $errores;
    }
    header("Location: index.php");
}