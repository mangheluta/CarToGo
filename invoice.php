<?php

	require('FPDF-master/fpdf.php');

	$name = $_POST['name'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$carType = $_POST['carType'];
	$from = $_POST['startDay'];
	$to = $_POST['endDay'];
	$class = $_POST['class'];
	/*$dateStart = new DateTime($from);
	$dateEnd = new DateTime($to);
	$diff = date_diff($dateStart, $dateEnd);
	echo $diff->format("%a");*/
  
  
	//$total = 15 * idate('d', $diff);


	$pdf = new FPDF('p', 'mm', 'A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 14);

	//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'CarToGo',0,0);
$pdf->Cell(59	,5,'INVOICE',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'Aleea Compozitorilor 14',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'Bucharest, 605206',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,date("Y/m/d"),0,1);//end of line

$pdf->Cell(130	,5,'0720536906',0,0);
//$pdf->Cell(25	,5,'Invoice #',0,0);
//$pdf->Cell(34	,5,'[1234567]',0,1);//end of line

//$pdf->Cell(130	,5,'Fax [+12345678]',0,0);
//$pdf->Cell(25	,5,'Customer ID',0,0);
//$pdf->Cell(34	,5,'[1234567]',0,1);//end of line

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Bill to: ',0,1);//end of line

//add dummy cell at beginning of each line for indentation
//$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5, $name,0,1);

//$pdf->Cell(10	,5,'',0,0);
//$pdf->Cell(90	,5,'[Company Name]',0,1);

//$pdf->Cell(10	,5,'',0,0);
//$pdf->Cell(90	,5,'[Address]',0,1);

//$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5, $telephone,0,1);
$pdf->Cell(90	,5, $email,0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'Description',1,0);
//$pdf->Cell(25	,5,'Taxable',1,0);
$pdf->Cell(34	,5,'Price',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

$pdf->Cell(130	,5,'Car: '.$carType ,1,0);
//$pdf->Cell(25	,5,'-',1,0);
//$pdf->Cell(34	,5,'3,250',1,1,'R');//end of line

//$pdf->Cell(130	,5,'Supaclean Diswasher',1,0);
//$pdf->Cell(25	,5,'-',1,0);
//$pdf->Cell(34	,5,'1,200',1,1,'R');//end of line
if ($class == 'Economy'){
	$pdf->Cell(34	,5,'15$/day',1,1);
} else if ($class == 'Medium'){
	$pdf->Cell(34	,5,'25$/day',1,1);
}else if ($class == 'Luxury'){
	$pdf->Cell(34	,5,'50$/day',1,1);
}else if ($class == 'Van'){
	$pdf->Cell(34	,5,'60$/day',1,1);
}
$pdf->Cell(130	,5,'From: '.$from,1, 1);
$pdf->Cell(130, 5, 'To: '.$to, 1, 1);
$pdf->Cell(130, 5, 'Class: '.$class, 1, 1);

$pdf->Output();

?>