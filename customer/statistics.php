<?php
session_start();
require('../medadmin/FPDF181/code128.php');

$date = date("F d, Y");
 include('../dbconnect/dbconnections.php');

$query1 = mysqli_query($conn, "Select count(*) as notitle from tbl_title");
$fetch1 = mysqli_fetch_array($query1);
$title = $fetch1['notitle'];

$query2 = mysqli_query($conn, "Select count(*) as nouser from user");
$fetch2 = mysqli_fetch_array($query2);
$user = $fetch2['nouser'];

$query4 = mysqli_query($conn, "Select count(*) as noabstract from tbl_abstract");
$fetch4 = mysqli_fetch_array($query4);
$abstract = $fetch4['noabstract'];

$query6 = mysqli_query($conn, "Select count(*) as noauthor from tbl_author");
$fetch6 = mysqli_fetch_array($query6);
$author = $fetch6['noauthor'];

$query8 = mysqli_query($conn, "Select count(*) as nopublisher from tbl_publisher");
$fetch8 = mysqli_fetch_array($query8);
$publisher = $fetch8['nopublisher'];

$query5 = mysqli_query($conn, "Select count(*) as noinquiry from inquiry");
$fetch5 = mysqli_fetch_array($query5);
$inquiry = $fetch5['noinquiry'];

$query10 = mysqli_query($conn, "Select count(*) as nokeyword from tbl_keyword");
$fetch10 = mysqli_fetch_array($query10);
$keyword = $fetch10['nokeyword'];

$query11 = mysqli_query($conn, "Select count(*) as novisit from tbl_oldsessions");
$fetch11 = mysqli_fetch_array($query11);
$visit = $fetch11['novisit'];

class PDF extends FPDF
{
// Page header
function Header()
{
	// Logo
	$this->Image('../Pictures/logo.png',10,10,35);
	// Arial bold 15
	$this->SetFont('Arial','B',18);
	// Move to the right
	// Title
	$this->ln(5);
	$this->ln(5);
	$this->Cell(0,7,'UNIVERSITY OF THE PHILIPPINES - MANILA',0,0,'C');
	// Arial bold 15
	$this->SetFont('Arial','',12);
	// Line break
	$this->Ln(5);
	$this->Cell(0,7,'University Library',0,0,'C');
	// Line break
	$this->Ln(5);
	$this->Cell(0,7,'Padre Faura Street, Manila City',0,0,'C');
	// Line break
	$this->Ln(5);
	$this->Cell(0,7,'UPM Supply System',0,0,'C');
	// Line break
	$this->Ln(5);
	$this->Cell(0,7,'http://upm.supplysystem.edu.ph',0,0,'C');
	$this->Ln(18);
	// Arial bold 15
	$this->SetFont('Arial','B',11);
	$this->Cell(0,7,'INVENTORY REPORT',0,0,'L');
	$this->Ln(7);
}



// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf=new PDF_Code128();
$pdf->AliasNbPages();
$pdf->AddPage();
// Arial bold 15
	// Logo
	$pdf->SetFont('Arial','B',18);
	// Move to the right
	// Title
	$pdf->ln(5);
	$pdf->Cell(0,7,'PHILIPPINE INDEX MEDICUS',0,0,'C');
	// Arial bold 15
	
	// Line break
	$pdf->Ln(7);
	$pdf->Cell(0,7,'Dr. Florentino B. Herrera Jr. Medical Library College of Medicine',0,0,'C');
	// Line break
	$pdf->SetFont('Arial','',12);
	$pdf->Ln(5);
	$pdf->Cell(0,7,'University of the Philippines Manila',0,0,'C');
	// Line break
	$pdf->Ln(5);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(0,7,$date,0,0,'C');
	$pdf->Ln(10);
	// Arial bold 15
	

	// pdfial bold 15
	$pdf->SetFont('Arial','',10);

	$pdf->Cell(95.00,10,'Description',1,0,'C');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,'Total',1,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(95.00,10,'Title Field',1,0,'L');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,$title,1,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(95.00,10,'Abstract Field',1,0,'L');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,$abstract,1,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(95.00,10,'Author Field',1,0,'L');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,$author,1,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(95.00,10,'Publisher Field',1,0,'L');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,$publisher,1,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(95.00,10,'Keywords Field',1,0,'L');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,$keyword,1,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(95.00,10,'Registered Users',1,0,'L');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,$user,1,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(95.00,10,'Total Inquiries',1,0,'L');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,$inquiry,1,0,'C');
	$pdf->Ln(10);
	$pdf->Cell(95.00,10,'Total Visits',1,0,'L');
	$pdf->Cell(.01);
	$pdf->Cell(95.00,10,$visit,1,0,'C');

	
    


$pdf->Output();

?>

