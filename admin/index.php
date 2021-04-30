<?php
include '../con.php';
session_start();
$opc = $_GET['o'];
$marcado = $_GET['marcado'];
if ($marcado == 1) {
	$id = $_GET['id'];
	$query = "UPDATE equipos_registrados SET leido = 1 WHERE id = $id";
	$rNotif = $conexion->query($query);
}
$usuario = $_SESSION['username'];


if (isset($usuario)) {

	//$q = "SELECT COUNT(leido) total FROM contacto where leido = 0";
	$eq = "SELECT  COUNT(leido) t from equipos_registrados where leido = 0";

	$x = $conexion->query($eq);
	//$result = $conexion->query($q);


	$valor = mysqli_fetch_assoc($x);
	//$fila = mysqli_fetch_assoc($result);

	//$qNotif = "SELECT mensaje FROM contacto";

	//$not = $conexion->query($qNotif);

	/*if($opc == 6 ){
      $valor = 0;
    }*/
	/*if($opc == 7){
      $fila = 0;
    }*/

?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<?php include 'estilos-css.php' ?>
		<title>Sistema TI - Admin</title>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	</head>

	<body>
		<?php include 'navbar.php'; ?>


		<section id="container" class="">
			<section id="main-content">
				<section class="wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header"><i class="las la-laptop"></i> Sistema TI</h3>
							<ol class="breadcrumb">
								<li><i class="fa fa-home"></i><a href="admin/index.php">Inicio</a></li>
								<li><i class="las la-laptop"></i></i>
									<?php
									if ($opc == 1) {
										echo "Equipos a reparar";
									}
									if ($opc == 2) {
										echo "Registrar equipo";
									}
									if ($opc == 3) {
										echo "Usuarios registrados";
									}
									if ($opc == 4) {
										echo "Reportes";
									}
									if ($opc == 5) {
										echo "Perfil";
									}
									if ($opc == 6) {
										echo "Notificaciones";
									}
									if ($opc == 7) {
										echo "Notificaciones / Contacto";
									}
									?>
								</li>
							</ol>
						</div>
					</div>

				</section>
			</section>
		</section>

		<?php include 'modales.php'; ?>

		<?php
		if ($opc == 1) {
			include 'equipos-reparar.php';
		}
		if ($opc == 2) {
			include 'inventario.php';
		}
		if ($opc == 3) {
			include 'usuarios.php';
		}
		if ($opc == 4) {
			include 'reportes.php';
		}
		if ($opc == 5) {
			include 'perfil.php';
		}
		if ($opc == 6) {
			include 'notificaciones.php';
		}
		if ($opc == 7) {
			include 'notificaciones-clientes.php';
		}
		?>
		<?php  ?>


		<?php include 'librerias-js.php' ?>
	</body>

	</html>

	<?php include 'script-js-admin.php'; ?>


<?php
} else {
	header("location: ../index.php");
}
?>