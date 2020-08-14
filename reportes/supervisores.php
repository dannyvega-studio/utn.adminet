<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../img/logo.png',10,5,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(45);
    // Título
    $this->Cell(100,10,'Reporte | Informacion de supervisores ',0,0,'C');
    $this->Ln(20);
    $this->SetFont('Arial', 'B', 10);
    $this->Cell(50,5, utf8_decode('A continuacion se muestra el reporte con la informacion correspondiente a los supervisores de la empresa.'));

    // Salto de línea
    $this->Ln(15);

$this->SetFont('Arial','B',10);
$this->cell(25,10, 'Nombre', 1, 0, 'C',0);
$this->cell(25,10, 'Nombre', 1, 0, 'C',0);
$this->cell(25,10, 'Apellido p.', 1, 0, 'C',0);
$this->cell(25,10,  'Apellido m.', 1, 0, 'C',0);
$this->cell(25,10, 'Departamento', 1, 0, 'C',0);
$this->cell(25,10, 'Empleados', 1, 1, 'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10, utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

   include_once '../bd/conexion.php';
  
   $sentencia_select=$con->prepare('SELECT * FROM supervisores');
   $sentencia_select->execute();
   $resultado=$sentencia_select->fetchAll();

$pdf = new PDF();
$pdf->AddPage();
$pdf-> AliasNbPages();
$pdf->SetFont('Arial','B',8);




foreach ($resultado as $value) {
$pdf->cell(25,10, $value ['Nombre1'], 1, 0, 'C',0);
$pdf->cell(25,10, $value ['Nombre2'], 1, 0, 'C',0);
$pdf->cell(25,10, $value ['Apellido1'], 1, 0, 'C',0);
$pdf->cell(25,10, $value ['Apellido2'], 1, 0, 'C',0);
$pdf->cell(25,10, $value ['ID_Departamento'], 1, 0, 'C', 0);
$pdf->cell(25,10, $value ['Cantidad_de_Empleados'], 1, 1, 'C',0);
}

$pdf->Output('D', 'Reporte_Supervisores.pdf');
?>
