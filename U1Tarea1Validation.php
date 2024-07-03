<?php
	session_start();
	$numbersUnits = array('','One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine');
	$_SESSION['startTime'] = $_POST['startTime'];
				for($oneToNineTens = 1 ; $oneToNineTens < 5 ; $oneToNineTens++ )
				{
					for($oneToNine = 1 ; $oneToNine < 9 ; $oneToNine++ )
					{
						$_SESSION["OperandOneDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine]] = $_POST["OperandOneDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine]];
						$_SESSION["operatorRaw" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] = $_POST["operatorRaw" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
						$_SESSION["OperandTwoDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine]] = $_POST["OperandTwoDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine]];
						$_SESSION["result" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] = $_POST["result" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
						$_SESSION["resultRaw" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] = $_POST["resultRaw" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
						$_SESSION["resultKey" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] = $_POST["resultKey" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
					} 
				} 
	header('HTTP/1.1 303 See Other');
	header('Location:printToPDFTarea1Unidad1.php');
?>