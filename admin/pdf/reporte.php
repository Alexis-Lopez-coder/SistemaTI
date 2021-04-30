<?php
	include 'plantilla.php';
	require 'conexion.php';
	$id = $_GET['id_equipo'];
	
	
	$query = "SELECT * FROM equipos_registrados where id = $id";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	
	while($row = $resultado->fetch_assoc())
	{
		//$pdf->Cell(70,6,utf8_decode($row['nombre_cli']),0,0,'C');
		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(10);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,'Nombre cliente ',0,0,'C');

		

		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(100);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,utf8_decode('Fecha inicio reparación: '),0,0,'C');

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(33);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$row['fecha_encargo'],0,0,'C');

		$pdf->Ln(10);

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(20);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$row['nombre']." ". $row['apellidos'],0,0,'C');


		$pdf->Ln(10);

		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(3);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,'Area: ',0,0,'C');

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(5);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$row['area'],0,0,'C');


		/*// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(82);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,utf8_decode('Correo electronico: '),0,0,'C');

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(25);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$row['correo'],0,0,'C');*/




		$pdf->Ln(15);

		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(85);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,'Datos del equipo: ',0,0,'C');
		
		$pdf->Ln(8);
		
		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(10);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,"* DATOS EQUIPO: ".$row['marca_eq']." ". $row['modelo_eq'],0,0,'L');

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(80);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,"* DATOS CPU: ". $row['marca_cpu']." ". $row['modelo_cpu'],0,0,'L');
		
		$pdf->Ln(5);
		

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(10);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,"* DATOS RAM: ". $row['marca_ram']." ". $row['modelo_ram'],0,0,'L');

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(80);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,"* DATOS DISCO DURO: ". $row['marca_dd']." ". $row['modelo_dd'],0,0,'L');

		$pdf->Ln(15);

		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(4);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,'Garantia: ',0,0,'C');
		
		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(10);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$row['garantia'],0,0,'C');
		
		$pdf->Ln(15);
		

		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(20);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,utf8_decode('Usuarios y contraseñas: '),0,0,'C');

		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(93);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,utf8_decode('Programas instalados: '),0,0,'C');


		$pdf->Ln(5);
		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(5);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$row['user_pass'],0,0,'C');



		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(95);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$row['software'],0,0,'C');

		$pdf->Ln(15);


		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(5);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,utf8_decode('Detalles'),0,0,'C');


		$pdf->Ln(5);

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(60);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$row['descripcion'],0,0,'C');

		$pdf->Ln(15);


		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(5);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,utf8_decode('Estado'),0,0,'C');


		$pdf->Ln(5);
		$estado = "";
		if($row['estado'] == 1)
		{ 
			$estado = "Reparado";
		}else{ 
			$estado = "En proceso";
		}

		// Arial bold 16
		$pdf->SetFont('Arial','',11);
		// izquierda > derecha
		$pdf->Cell(5);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,$estado,0,0,'C');


		$pdf->Line(20,250,80,250);
		$pdf->Line(130,250,190,250);

		$pdf->Ln(90);
		
		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(35);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,utf8_decode('Firma encargado'),0,0,'C');

		// Arial bold 16
		$pdf->SetFont('Arial','B',12);
		// izquierda > derecha
		$pdf->Cell(98);
		// Título cell(largo,ancho,titulo,BORDES)
		$pdf->Cell(12,2,utf8_decode('Firma usuario'),0,0,'C');






		



	}
	$pdf->Output();
?>
