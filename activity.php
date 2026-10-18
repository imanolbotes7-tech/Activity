<?php

//DEBUG, 3 ERRORS

require_once('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage() 

// Header Section
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'CITY CENTRAL LIBRARY', 0, 1, 'C'); 

$pdf = SetFont('Arial', '', 10);
$pdf->Cell(0, 8, 'Checkout Date: 2026-10-18', 0, 1, 'C');
$pdf->Ln(5);

// Table Header
$pdf->SetFont('Arial', 'B', ); // 
$pdf->Cell(120, 8, 'Book Title', 1, 0, 'L');
$pdf->Cell(40, 8, 'Due Date', 1, 1, 'C');

// Item Row
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(120, 8, 'The Great Gatsby', 1, 0, 'L');
$pdf->Cell(40, 8, '2026-11-01', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(120, 8, 'Harry Potter', 1, 0, 'L');
$pdf->Cell(40, 8, '2026-12-01', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(120, 8, 'History of the Jews', 1, 0, 'L');
$pdf->Cell(40, 8, '2027-01-05', 1, 1, 'C');


$pdf->Output();
?>