<?php
$numbersUnits = array('','One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten');
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
function GatesTable($header, $data)
{
	// Header
	$rowWidth = array(18, 28, 18, 26, 50);
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

function ArithmeticTable($header, $data)
{
	// Header
	$rowWidth = array(18, 28, 18, 50, 50);
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
		{
			if(($indexRow == (3 + $indexData)) && ($data[$indexRow - 2] == '÷'))
			{
				$this->Cell($rowWidth[$indexRow - $indexData],7,"C " . $data[$indexRow] . "R " . $data[$indexRow + 1],'TB',0,'C');
				$indexData += 2;
			}
			if(($indexRow == (4 + $indexData)) && ($data[$indexRow - 3] == '÷'))
			{
				$this->Cell($rowWidth[$indexRow - $indexData],7,"C " . $data[$indexRow] . "R " . $data[$indexRow + 1],'TB',0,'C');
				$indexData += 2;
			}
			else
				$this->Cell($rowWidth[$indexRow - $indexData],7,$data[$indexRow],'TB',0,'C');
		}
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
$pdf->SetTitle(utf8_decode("Evaluación Diagnóstica - Programación Avanzada"));
date_default_timezone_set('America/Mexico_City');
$finishTime = getDateString(getdate());
$pdf->SetSubject("Realizado de: " . $_SESSION["startTime"] . " a " . $finishTime . hash('crc32',$_SESSION["startTime"] . $finishTime . "Programación Avanzada"));
/*{
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
}*/
$index = 0;
for($oneToNine = 1 ; $oneToNine < 7 ; $oneToNine++ )
{
	$data[$index++] = $_SESSION["GatesOperandOneDot" . $numbersUnits[$oneToNine]];
	$data[$index++] = $_SESSION["operatorGatesRaw" . $numbersUnits[$oneToNine]];
	$data[$index++] = $_SESSION["GatesOperandTwoDot" . $numbersUnits[$oneToNine]];
	$data[$index++] = $_SESSION["resultGates" . $numbersUnits[$oneToNine]];
	$data[$index++] = rtrim(base64_decode($_SESSION["resultKeyGates" . $numbersUnits[$oneToNine]]),'abc');
} 
$header = array('Valor 1', 'Compuerta', 'Valor 2', 'Respuesta', 'Respuesta correcta');
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
$pdf->Cell(40,10,utf8_decode('Compuertas Lógicas'));
$pdf->Ln();
$pdf->SetFont('Arial','',14);
$pdf->GatesTable($header,$data);
$pdf->Cell(40,10,utf8_decode('Tu puntuación es:'));
$pdf->Ln();
$pdf->Cell(10,10,($score * 100) / 32);
$pdf->Ln();

$data = array();
$header = array('Valor 1', 'Operación', 'Valor 2', 'Respuesta', 'Respuesta correcta');
$index = 0;
for($oneToNine = 1 ; $oneToNine < 9 ; $oneToNine++ )
{
	$data[$index++] = $_SESSION["ArithmeticOperandOneDot" . $numbersUnits[$oneToNine]];
	$data[$index++] = $_SESSION["operatorArithmeticRaw" . $numbersUnits[$oneToNine]];
	$data[$index++] = $_SESSION["ArithmeticOperandTwoDot" . $numbersUnits[$oneToNine]];
	if ($_SESSION["resultArithmeticQuotient" . $numbersUnits[$oneToNine]] != '')
	{
		$data[$index++] = $_SESSION["resultArithmeticQuotient" . $numbersUnits[$oneToNine]];
		$data[$index++] = $_SESSION["resultArithmeticReminder" . $numbersUnits[$oneToNine]];
		$data[$index++] = base64_decode($_SESSION["resultKeyArithmeticQuotient" . $numbersUnits[$oneToNine]]) - 123;
		$data[$index++] = base64_decode($_SESSION["resultKeyArithmeticReminder" . $numbersUnits[$oneToNine]]) - 123;
	}
	else
	{
		$data[$index++] = base64_decode($_SESSION["resultArithmetic" . $numbersUnits[$oneToNine]]) - 123;
		$data[$index++] = base64_decode($_SESSION["resultKeyArithmetic" . $numbersUnits[$oneToNine]]) - 123;
	}
}
$pdf->SetFont('Arial','',20);
$pdf->Cell(40,10,utf8_decode('Operaciones Aritméticas'));
$pdf->Ln();
$pdf->ArithmeticTable($header, $data);
$pdf->Cell(40,10,utf8_decode('Tu puntuación es:'));
$pdf->Ln();
$pdf->Cell(10,10,($score * 100) / 32);
$pdf->Ln();

$pdf->SetFont('Arial','',20);
$pdf->Cell(40,10,'Cambios de base');
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Tu puntuación es:'));
$pdf->Ln();
$pdf->Cell(10,10,($score * 100) / 32);
$pdf->Ln();

$pdf->SetFont('Arial','',20);
$pdf->Cell(40,10,'Algoritmos');
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Tu puntuación es:'));
$pdf->Ln();
$pdf->Cell(10,10,($score * 100) / 32);
$pdf->Ln();

$pdf->SetFont('Arial','',20);
$pdf->Cell(40,10,utf8_decode('Pseudocódigo'));
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Tu puntuación es:'));
$pdf->Ln();
$pdf->Cell(10,10,($score * 100) / 32);
$pdf->Ln();

$pdf->SetFont('Arial','',20);
$pdf->Cell(40,10,utf8_decode('Diagramas de flujo'));
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Tu puntuación es:'));
$pdf->Ln();
$pdf->Cell(10,10,($score * 100) / 32);
$pdf->Ln();

session_unset();
session_destroy();
$pdf->Output();
?>