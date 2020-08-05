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
        <link rel="stylesheet" href="./scss/style.css"/>
    </head>
    <body>
        <!-- Cabecera -->
        <header id="cabecera">
            <div id = "logo">
                <a href="index.php">
                    Blog de Videojuegos
                </a>
            </div>
            <!-- MENU DE NAVEGACION -->
            <nav id="nav">
                <li><a href="index.php">Inicio </a></li>
                <li><a href="index.php">Categoria 1</a></li>
                <li><a href="index.php">Categoria 2</a></li>
                <li><a href="index.php">Categoria 3</a></li>
                <li><a href="index.php">Sobre Mi</a></li>
                <li><a href="index.php">Contacto</a></li>
            </nav>
        </header>

        <!--CONTENIDO PRINCIPAL-->

        <div class="contenido_principal">
            <!--ASIDE DE LOGIN PARA LA PAGINA-->
            <aside id="sidebar" class="login">
                <div id="login" class="bloque">
                    <h3>Identificate</h3>
                    <form action="login.php" method="POST">
                        <label for="email">Email</label>
                        <input type="email" name="email" />

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />

                        <input type="submit" value="Entrar" />
                    </form>
                </div>

                <div id="login" class="bloque">
                    <h3>Registrate</h3>
                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" />

                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" />

                        <label for="email">Apelido</label>
                        <input type="email" name="email" />

                        <label for="password">Contraseña</label>
                        <input type="password" name="password" />

                        <input type="submit" value="Entrar" />
                    </form>
                </div>
            </aside>

            <!--CAJA PRINCIPAL-->
            <div id="principal">
                <h1>Ultimas entradas</h1>
                <article>
                    <h2>Titulo de mi entrada</h2>
                    <p>

                    </p>
                </article>
            </div>
        </div>
        
        
        
        <!--FOOTER-->
        <footer id="footer">
            <h3>Creado por ERNESTO POLO</h3>
        </footer>
    </body>
</html>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

