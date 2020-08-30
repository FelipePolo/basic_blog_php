<aside id="sidebar" class="login">


  <div id="login" class="bloque">
    <h3>Logeate</h3>
    <form action="login.php" method="POST">
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="example@example.com" />

      <label for="password">Contraseña:</label>
      <input type="password" name="password" />

      <button type="submit" name="login">Entrar</button>
    </form>
  </div>



  <?php if (!isset($_SESSION['completado'])) : ?>


  <div id="registrate" class="bloque">
    <h3>Registrate</h3>
    <form action="./registro.php" method="POST">
      <label for="nombre">Nombre:</label>
      <?php if (isset($_SESSION['errores']['nombre'])): ?>
      <p style="color: red"><?php echo $_SESSION['errores']['nombre']; ?></p>
      <?php endif; ?>
      <input type="text" name="nombre" placeholder="Mí Nombre" />

      <label for="apellido">Apellido:</label>
      <?php if (isset($_SESSION['errores']['apellido'])): ?>
      <p style="color: red"><?php echo $_SESSION['errores']['apellido']; ?></p>
      <?php endif; ?>
      <input type="text" name="apellido" placeholder="Mí apellido" />

      <label for="email">Email:</label>
      <?php if (isset($_SESSION['errores']['email'])): ?>
      <p style="color: red"><?php echo $_SESSION['errores']['email']; ?></p>
      <?php endif; ?>
      <input type="email" name="email" placeholder="example@example.com" />


      <label for="telefono">Telefono:</label>
      <input type="text" name="telefono" />

      <label for="password">Contraseña:</label>
      <?php if (isset($_SESSION['errores']['password'])): ?>
      <p style="color: red"><?php echo $_SESSION['errores']['password']; ?></p>
      <?php endif; ?>
      <input type="password" name="password" />

      <button type="submit" name="submit">Registrate</button>
      <?php isset($_SESSION['errores']) ? $_SESSION['errores'] = null : false ?>
    </form>
  </div>
  <?php else : ?>
  <div>
    <h1>ESTAS REGISTRADO CORRECTAMENTE</h1>
    <form action="registrodenuevo.php" method="POST">
      <button>Registrar otra cuenta</button>
    </form>
  </div>


  <?php endif; ?>
</aside>