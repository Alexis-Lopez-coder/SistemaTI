<?php
	require 'fpdf/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('logo.png',5,2,15);


			// Arial bold 16
			$this->SetFont('Arial','B',16);
			// izquierda > derecha
			$this->Cell(10);
			// Título cell(largo,ancho,titulo,BORDES)
			$this->Cell(30,2,'Sistema TI',0,0,'C');




			// Arial bold 15
			$this->SetFont('Arial','B',15);
			// izquierda > derecha
			$this->Cell(20);
			// Título cell(largo,ancho,titulo,BORDES)
			$this->Cell(70,2,'Reporte del equipo',0,0,'C');

			$dia = date("d");
			$mes = date("m");
			$anio = date("Y");
			$fecha = $dia."-". $mes."-". $anio;


			// Arial bold 16
			$this->SetFont('Arial','B',16);
			// izquierda > derecha
			$this->Cell(40);
			// Título cell(largo,ancho,titulo,BORDES)
			$this->Cell(12,2,$fecha,0,0,'C');


			//maximo 210
			//Line(primer punto horiz,primer punt vertical,seg punto horizontal, seg punt vertica)
			$this->Line(0,20,210,20);
			$this->Ln(20);


			$this->Ln(10);

		
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>
