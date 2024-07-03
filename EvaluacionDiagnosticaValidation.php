<?php
	session_start();
	$numbersUnits = array('','One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten');
	$_SESSION['startTime'] = $_POST['startTime'];
				/*for($oneToNineTens = 1 ; $oneToNineTens < 5 ; $oneToNineTens++ )
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
				}*/

	for($oneToNine = 1 ; $oneToNine < 7 ; $oneToNine++ )
	{
		$_SESSION["GatesOperandOneDot" . $numbersUnits[$oneToNine]] = $_POST["GatesOperandOneDot" . $numbersUnits[$oneToNine]];
		$_SESSION["GatesOperandTwoDot" . $numbersUnits[$oneToNine]] = $_POST["GatesOperandTwoDot" . $numbersUnits[$oneToNine]];
		$_SESSION["resultGates" . $numbersUnits[$oneToNine]] = $_POST["resultGates" . $numbersUnits[$oneToNine]];
		$_SESSION["resultKeyGates" . $numbersUnits[$oneToNine]] = $_POST["resultKeyGates" . $numbersUnits[$oneToNine]];
		$_SESSION["operatorGatesRaw" . $numbersUnits[$oneToNine]] = $_POST["operatorGatesRaw" . $numbersUnits[$oneToNine]];
	} 
	for($oneToNine = 1 ; $oneToNine < 9 ; $oneToNine++ )
	{
		$_SESSION["ArithmeticOperandOneDot" . $numbersUnits[$oneToNine]] = $_POST["ArithmeticOperandOneDot" . $numbersUnits[$oneToNine]];
		$_SESSION["ArithmeticOperandTwoDot" . $numbersUnits[$oneToNine]] = $_POST["ArithmeticOperandTwoDot" . $numbersUnits[$oneToNine]];
		$_SESSION["resultArithmeticQuotient" . $numbersUnits[$oneToNine]] = $_POST["resultArithmeticQuotient" . $numbersUnits[$oneToNine]];
		$_SESSION["resultArithmeticReminder" . $numbersUnits[$oneToNine]] = $_POST["resultArithmeticReminder" . $numbersUnits[$oneToNine]];
		$_SESSION["resultKeyArithmeticQuotient" . $numbersUnits[$oneToNine]] = $_POST["resultKeyArithmeticQuotient" . $numbersUnits[$oneToNine]];
		$_SESSION["resultKeyArithmeticReminder" . $numbersUnits[$oneToNine]] = $_POST["resultKeyArithmeticReminder" . $numbersUnits[$oneToNine]];
		$_SESSION["resultArithmetic" . $numbersUnits[$oneToNine]] = $_POST["resultArithmetic" . $numbersUnits[$oneToNine]];
		$_SESSION["resultKeyArithmetic" . $numbersUnits[$oneToNine]] = $_POST["resultKeyArithmetic" . $numbersUnits[$oneToNine]];
		$_SESSION["operatorArithmeticRaw" . $numbersUnits[$oneToNine]] = $_POST["operatorArithmeticRaw" . $numbersUnits[$oneToNine]];
	}
	for($oneToNineTens = 1 ; $oneToNineTens < 5 ; $oneToNineTens++)
	{
		$_SESSION["OriginBase" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] = $_POST["OriginBase" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
		$_SESSION["resultUser" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] = $_POST["resultUser" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
		$_SESSION["resultKey" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]] = $_POST["resultKey" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
	}


	for( $index = 0 ; $index < 10 ; $index++ )
	{
		$_SESSION["algorithms" . $numbersUnits[$index + 1]] = $_POST["algorithms" . $numbersUnits[$index + 1]];
	}
	
	for( $index = 0 ; $index < 10 ; $index++ )
	{
		$_SESSION["pseudocode" . $numbersUnits[$index + 1]] = $_POST["pseudocode" . $numbersUnits[$index + 1]];
	}

	for( $index = 0 ; $index < 10 ; $index++ )
	{
		$_SESSION["flowCharts" . $numbersUnits[$index + 1]] = $_POST["flowCharts" . $numbersUnits[$index + 1]];
	}
			 
	header('HTTP/1.1 303 See Other');
	header('Location:printToPDFEvaluacionDiagnostica.php');
?>