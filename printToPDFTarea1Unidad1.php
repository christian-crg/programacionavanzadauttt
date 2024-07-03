<?php
$listOfOperators = array('+', '-', '*', '/', '%', '++', '--', '>', '<', '<=', '>=', '==', '!=', '&&', '!', '||', '^', '&', '|', '~', '<<', '>>', '+=', '-=', '*=', '/=', '<<=', '>>=', '&=', '|=', '^=', '%=');
$numbersUnits = array('','One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine');
require('fpdf.php');
session_start();
	function getDateString($date)
	{
		$theDate = "";
		$theDate = $theDate . $date[0];
		$theDate = $theDate . " is ";
		$theDate = $theDate . $date["weekday"];
		$theDate = $theDate . "(";
		$theDate = $theDate . $date["wday"];
		$theDate = $theDate . ")";
		$theDate = $theDate . $date["mday"];
		$theDate = $theDate . "(";
		$theDate = $theDate . $date["yday"];
		$theDate = $theDate . ")";
		$theDate = $theDate . "/";
		$theDate = $theDate . $date["month"];
		$theDate = $theDate . "(";
		$theDate = $theDate . $date["mon"];
		$theDate = $theDate . ")";
		$theDate = $theDate . "/";
		$theDate = $theDate . $date["year"];
		$theDate = $theDate . "-";
		$theDate = $theDate . $date["hours"];
		$theDate = $theDate . ":";
		$theDate = $theDate . $date["minutes"];
		$theDate = $theDate . ":";
		$theDate = $theDate . $date["seconds"];
		$theDate = $theDate . " @ ";
		$theDate = $theDate . $_SERVER['REMOTE_ADDR'];
		$theDate = $theDate . " through ";
		$theDate = $theDate . $_SERVER['HTTP_X_FORWARDED_FOR'];
		return $theDate;
	}

class PDF extends FPDF
{
// Simple table
function BasicTable($header, $data)
{
	// Header
	$rowWidth = array(35, 22, 35, 26, 50);
	$indexTemp = 0;
	foreach($header as $col)
	{
		$this->Cell($rowWidth[$indexTemp++],7,$col,1,0,'C');
	}
	$this->Ln();
	// Data
	for($indexData = 0 ; $indexData < count($data) ; $indexData+=count($header))
	{
		for($indexRow = $indexData ; $indexRow < (count($header) + $indexData) ; $indexRow++)
			$this->Cell($rowWidth[$indexRow - $indexData],7,$data[$indexRow],'TB',0,'C');
		$this->Ln();
    }
}

// Better table
function ImprovedTable($header, $data)
{
	// Column widths
	$w = array(40, 35, 40, 45);
	// Header
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,$header[$i],1,0,'C');
	$this->Ln();
	// Data
	foreach($data as $row)
	{
		$this->Cell($w[0],6,$row[0],'LR');
		$this->Cell($w[1],6,$row[1],'LR');
		$this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
		$this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
		$this->Ln();
	}
	// Closing line
	$this->Cell(array_sum($w),0,'','T');
}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(40, 35, 40, 45);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
        $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
$pdf->SetAuthor(utf8_decode("Programación Avanzada App - By ScM. Christian Reyes"));
$pdf->SetCreator("http://apps.facebook.com/programacioncrg - By ScM. Christian Reyes");
$pdf->SetTitle("Tarea 1 - Unidad 1");
date_default_timezone_set('America/Mexico_City');
$finishTime = getDateString(getdate());
$pdf->SetSubject("Realizado de: " . $_SESSION["startTime"] . " a " . $finishTime . hash('crc32',$_SESSION["startTime"] . $finishTime . "Programación Avanzada") );
{
	$score = 0;
	$index = 0;
	for($oneToNineTens = 1 ; $oneToNineTens < 5 ; $oneToNineTens++ )
	{
		for($oneToNine = 1 ; $oneToNine < 9 ; $oneToNine++ )
		{
			$data[$index++] = $_SESSION["OperandOneDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine]];
			$data[$index++] = $_SESSION["operatorRaw" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
			$data[$index++] = $_SESSION["OperandTwoDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine]];
			$data[$index++] = $_SESSION["result" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
			$data[$index++] = $_SESSION["resultRaw" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
			if($_SESSION["result" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] != '')
				if(hash('crc32', $_SESSION["result" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] + 123) == $_SESSION["resultKey" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]])
					$score++;
		}
	}
}
$header = array('Operando uno', 'Operador', 'Operando dos', 'Respuesta', 'Respuesta correcta');
// Data loading
//$data = $pdf->LoadData('countries.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,$data);
/*$pdf->AddPage();
$pdf->ImprovedTable($header,$data);
$pdf->AddPage();
$pdf->FancyTable($header,$data);*/
$pdf->Cell(40,10,utf8_decode('Tu puntuación es:'));
$pdf->Ln();
$pdf->Cell(10,10,($score * 100) / 32);
session_unset();
session_destroy();
$pdf->Output();
?>