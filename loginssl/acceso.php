<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='index.php';</script>";
}
	//print "<script>alert(\"Bienvenido!\");</script>";
?>
<!DOCTYPE html>
<HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>.: Login SSL :. Bienvenido</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/base.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'> 
</head>

<body>
	<?php include "php/navbar.php"; ?>
	<div class="textbox">
			<h2>Bienvenido</h2>
			<h3>Acceso a recursos Web</h3>
			<span id="fotoarticulo"><img src="img/ribbon1.png" width="270px" /></span>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni iusto, obcaecati vero beatae officia, minima ea quas voluptas, hic accusamus deleniti libero sequi aliquam eaque! Pariatur repellendus exercitationem, id saepe. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, minima. Corporis at illum, omnis voluptatum unde est quas quae deleniti aut enim, quo nulla iste, doloribus a dolores, et voluptatem.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni iusto, obcaecati vero beatae officia, minima ea quas voluptas, hic accusamus deleniti libero sequi aliquam eaque! Pariatur repellendus exercitationem, id saepe. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, minima. Corporis at illum, omnis voluptatum unde est quas quae deleniti aut enim, quo nulla iste, doloribus a dolores, et voluptatem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo neque sunt perferendis veritatis aut aliquam molestiae praesentium, amet sapiente enim ad pariatur expedita inventore natus necessitatibus omnis hic doloremque ipsam!</p>

	
	</div>

</body>
</HTML>
