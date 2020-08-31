<?php
  require_once "./includes/conexion.php";
  
  if (!isset($_SESSION)) {
      session_start();
  }

  if (isset($_POST)) {
      echo ' entro';
      $email = isset($_POST['email']) ? mysqli_real_escape_string($conexion, $_POST['email']) : null;
      $password = isset($_POST['password']) ? mysqli_real_escape_string($conexion, $_POST['password']) : null;

      if (isset($email) && isset($password)) {
          echo 'entro 2';
          $query = "SELECT * FROM usuarios WHERE usuarios.email = '$email'";
          $query_result = mysqli_query($conexion, $query);
          
          if (isset($query_result)) {
              $row = mysqli_fetch_assoc($query_result);
              $exis = password_verify($password, $row['password']);
              
              if ($exis) {
                  $_SESSION['logeado'] = $row;
              } else {
                  $_SESSION['error_login'] = "Este usuario no existe!";
              }
              header("Location: index.php");
          }
      }
  }