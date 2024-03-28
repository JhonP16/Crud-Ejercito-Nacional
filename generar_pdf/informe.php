<?php
require('fpdf/fpdf.php');
require 'conexion.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/McDonalds.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    //Color
    $this->SetTextColor(255,87,51);
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Lista de usuarios',1,0,'C');
    //Salto linea
    $this->ln(20);
    $this->Cell(47,10,'Nombre',1,0,'C');
    $this->Cell(47,10,'Correo',1,0,'C');
    $this->Cell(47,10,'Pass',1,0,'C');
    $this->Cell(47,10,'Tipo',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    //Color
    //$this->SetTextColor(54,255,67);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$resultado = mysqli_query($conexion, "SELECT * FROM atom_rupture") or die("Problemas en la consulta". mysqli_error($conexion));

$pdf = new PDF();

$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

while($fila = $resultado->fetch_assoc()){

    $pdf -> Cell(47,10,$fila['nombre'],1,0,'C',0);
    $pdf -> Cell(47,10,$fila['correo'],1,0,'C',0);
    $pdf -> Cell(47,10,$fila['pass'],1,0,'C',0);
    $pdf -> Cell(47,10,$fila['tipo'],1,1,'C',0);

}

//$pdf->Cell(55);
//$pdf->Cell(80,10,utf8_decode('¡Diego se parece a WAMAI!'),0,0,'C');
$pdf->AddPage();

$pdf-> Write(5, 'Esta es otra pagina');
$pdf-> Output();


?>