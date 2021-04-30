<?php
$nombre = strtoupper($_POST['nombre']);
$apellidos = strtoupper($_POST['apellidos']);
$area = strtoupper($_POST['area']);

$otraPCInput = strtoupper($_POST['otraPC']);
$modeloPCInput = strtoupper($_POST['otroModelo']);

$otroModeloInput1 = $_POST['otroModelo2'];

$marcaPC= strtoupper($_POST['marca-pc']);
$modeloPC = strtoupper($_POST['modelo_pc']);

$modelo_cpu = strtoupper($_POST['modelo_cpu']);
$marca_cpu = strtoupper($_POST['marca-cpu']);

$modelo_ram = strtoupper($_POST['modelo_ram']);
$marca_ram = strtoupper($_POST['marca_ram']);

$modelo_dd = strtoupper($_POST['modelo_dd']);
$marca_dd = strtoupper($_POST['marca_dd']);


$garantia = date('Y-m-d', strtotime($_POST['garantia']));

$user_pass = $_POST['user_pass'];
$software = strtoupper($_POST['software']);
$descripcion = strtoupper($_POST['problemas']);

?>