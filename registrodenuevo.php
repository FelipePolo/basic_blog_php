<?php

if (!isset($_SESSION)) {
    session_start();
}


if (isset($_SESSION['completado'])) {
    $_SESSION['completado'] = null;
    unset($_SESSION['completado']);
}

header("Location: index.php");