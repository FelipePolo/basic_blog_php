<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['deslogeo'])) {
    if (isset($_SESSION['logeado'])) {
        $_SESSION['logeado'] = null;
        unset($_SESSION['logeado']);
    }
}



header("Location: index.php");