<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistema TI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'estilos-css.php' ?>
	<title>Sistema TI</title>
</head>
<body>
	<?php 
	session_start();
	?>
	<div class="container">
		<?php 
		if(isset($_SESSION['username']) && $_SESSION['username']) { 
			header("location: admin/index.php");
		} 
		else {
			include 'login.php';
		}
		?>	
	</div>
	
<?php include 'librerias-js.php' ?>

</body>
</html>