<?php require_once 'includes/header.php'; ?>
<!--CONTENIDO PRINCIPAL-->

<div class="contenido_principal">
  <!--ASIDE DE LOGIN PARA LA PAGINA-->
  <?php require './includes/lateral.php'; ?>



  <!--CAJA PRINCIPAL-->
  <div id="principal">
    <h1>Ultimas entradas</h1>

    <?php
      $entradas = GetUltimasEntradas();
      while ($entrada = mysqli_fetch_assoc($entradas)) :
    ?>

    <article>
      <a href="entrada.php?id=<?php echo $entrada['identradas']; ?>">
        <h2><?php echo $entrada['titulo']; ?></h2>
        <p>
          <?php echo $entrada['descripcion']; ?></h2>
        </p>
      </a>
    </article>
    <?php endwhile; ?>
    <a href="entradas.php" id="vermas">Ver Todas Las entradas. 👉</a>
  </div>
</div>



<!--FOOTER-->
<?php require_once './includes/footer.php'; ?>
</body>

</html>