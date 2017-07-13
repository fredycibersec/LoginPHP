<nav class="navbar navbar-default" role="navigation">

<div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"><a href="./acceso.php">INICIO</a></span>
      <span class="icon-bar"><a href="./registro.php">REGISTRO</a></span>
      <span class="icon-bar"><a href="./php/logout.php">SALIR</a></span>
    </button>
    <a class="navbar-brand" href="./"><span class="logo"><img src="img/catedra.png"></span></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
 
    <ul class="nav navbar-nav" style="margin-top:5px;">
    <?php if(!isset($_SESSION["user_id"])):?>
      <li><a>INICIA SESIÓN PARA ACCEDER</a></li>
    <?php else: ?>
      <li><a href="./acceso.php">INICIO</a></li>
      <li><a href="./registro.php">REGISTRO</a></li>
      <li><a href="./php/logout.php">SALIR</a></li>
      <li><a><?php echo "Bienvenido ". $_SESSION["fullname"];?>.</a></li>
    <?php endif;?>
    </ul>

  </div><!-- /.navbar-collapse -->
</div>
</nav>
