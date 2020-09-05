<?php
require_once 'conexion.php';
require_once './includes/ayudas.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">

<head>
  <title>Blog de videojuegos</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./scss/style.css" />
</head>

<body>
  <!-- Cabecera -->
  <header id="cabecera">
    <div id="logo">
      <a href="index.php">
        Blog de Videojuegos
      </a>
    </div>
    <!-- MENU DE NAVEGACION -->
    <?php
    $categorias = getDatos("categorias");
    ?>

    <nav id="nav">
      <li><a href="index.php">Inicio </a></li>
      <?php while ($categoria = mysqli_fetch_assoc($categorias)) : ?>
      <li><a href="categorias.php?id=<?php echo $categoria['idcategorias'];?>"><?php echo $categoria['nombre'];?></a>
      </li>
      <?php endwhile; ?>
      <li><a href="index.php">Sobre Mi</a></li>
      <li><a href="index.php">Contacto</a></li>
    </nav>
  </header>