<?php 
$conexion=mysqli_connect('localhost','user2','123','sistemati');
$equipo=$_POST['equipo'];
//$modelo = $_POST['modelo'];

if($equipo != ""){
	if($equipo == "otra"){
		echo "<label>Escribe otra marca</label><br>";
		echo "<input style='text-transform: uppercase;' class='form-control' aria-describedby='usuarioHelp' required type='text' name='otraPC' placeholder='Escribe otra marca'><br>";
		echo "<label>Escribe otro modelo</label><br>";
		echo "<input style='text-transform: uppercase;' class='form-control' aria-describedby='usuarioHelp' required type='text' name='otroModelo' placeholder='Escribe otro modelo'><br>";
		
	}
	else{

		$sql="SELECT * from modelos_pc where id_marca='$equipo'";

		$result=mysqli_query($conexion,$sql);

		$cadena="<label id='lista2'>Selecciona el modelo del equipooo</label> <select class='form-control' id='lista' name='modelo_pc'><option selected id='opcion' value=''>Selecciona una opcion</option>";

		while ($ver=mysqli_fetch_row($result)) {
			$cadena=$cadena."<option id='opcion' value=".$ver[0].">".utf8_encode($ver[2])."</option>";
		}

		echo  $cadena."</select>";
		echo "<br><input class='btn btn-primary' onclick='funcion2()' id='nombre-boton' type='button'  value='¿Agregar modelo?'>";
	}

	
}





	
	

?>
