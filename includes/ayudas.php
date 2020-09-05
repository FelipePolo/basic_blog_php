<?php

function getDatos($tabla)
{
    global $conexion;

    $query = "SELECT * FROM $tabla";

    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) >= 1) {
        return $resultado;
    } else {
        return false;
    }
}

function GetUltimasEntradas()
{
    global $conexion;

    $query = "SELECT * FROM entradas ORDER BY entradas.identradas DESC limit 5;";

    $resultado = mysqli_query($conexion, $query);

    if (mysqli_num_rows($resultado) >= 1) {
        return $resultado;
    } else {
        return false;
    }
}
