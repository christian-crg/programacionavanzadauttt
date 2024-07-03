<?php
	require "./stormpath-sdk-php/src/Stormpath/Stormpath.php";
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
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Test the student proficiency about the first two topics namely 'Programación modular y programación estructurada' as well as 'Operadores de asignación y expresión'.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<?php
			if (!$_SESSION[$user_id])
				echo "<meta	http-equiv=\"refresh\" content=\"2940\" >";
			else
				echo "<meta	http-equiv=\"refresh\" content=\"300\" >";
		?>
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>

	<?php
		if (!$_SESSION[$user_id])
		{
			echo "<body>";
			echo "<h3>";
			echo "Tarea 1 - Unidad 1";
			echo "</h3>";
			echo "<p>";
			echo "Responda las siguentes preguntas respecto a lo que se le solicita. Las respuestas pueden ser mutuamente excluyentes, complementarias o únicas. Recuerde que para contestar cada pregunta usted tendrá 1 minuto y medio; más 1 minuto para generar el documento portable. El tiempo que no ocupe en cada pregunta lo podrá utilizar para la(s) pregunta(s) que usted crea conveniente. A pesar de que puede cambiar la respuesta de cualquier pregunta ya contestada, toda su actividad e intentos serán tomados en cuenta para determinar el grado de dominio del tema. Evite utilizar otros programas o simplemente procure no atender otra pagina que pudiera causar la perdida del foco para esta página web.";
			echo "</p>";
			$listOfOperators = array('+', '-', '*', '/', '%', '++', '--', '>', '<', '<=', '>=', '==', '!=', '&&', '!', '||', '^', '&', '|', '~', '<<', '>>', '+=', '-=', '*=', '/=', '<<=', '>>=', '&=', '|=', '^=', '%=');
			$numbersUnits = array('','One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine');
			echo "<form method=\"post\" action=\"U1Tarea1Validation.php\" >";
			if (isset($_POST['SendHomework']))
			{
				$score = 0;
				for($oneToNineTens = 1 ; $oneToNineTens < 5 ; $oneToNineTens++ )
				{
					for($oneToNine = 1 ; $oneToNine < 9 ; $oneToNine++ )
					{
						$answerGiven = $_POST['result' . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
						$actualAnswer = $_POST['resultKey' . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine]];
						if($answerGiven == '')
							$answerGiven = -123;
						if(hash('crc32', $answerGiven + 123) == $actualAnswer)
							$score++;
					}
				}
				echo "<label class=\"code\">";
					echo "Tu puntuación es: ";
					echo ($score * 100) / 32;
				echo "</label>";
			}
			else
			{
				date_default_timezone_set('America/Mexico_City');
				$startTime = getDateString(getdate());
				echo "<input type=\"hidden\" name=\"startTime" . "\" value=\"" . $startTime . "\". readonly=\"true\" hidefocus=\"true\" />";
				$operatorIndex = -1;
				for($oneToNineTens = 1 ; $oneToNineTens < 5 ; $oneToNineTens++ )
				{
					for($oneToNine = 1 ; $oneToNine < 9 ; $oneToNine++ )
					{
						$operatorIndex = rand(0, sizeof($listOfOperators) - 1);
						while($listOfOperators[$operatorIndex] == '')
							$operatorIndex = rand(0, sizeof($listOfOperators) - 1);
						switch ($listOfOperators[$operatorIndex])
						{
							case '>>':
							case '<<':
								$operandOne = rand(-2048, 2048);
								$operandTwo = rand(0, 64);
								break;
							case '>>=':
							case '<<=':
								$operandOne = rand(-2048, 2048);
								$operandTwo = rand(0, 64);
								break;
							default:
								$operandOne = rand(-2048, 2048);
								$operandTwo = rand(-2048, 2048);
								break;
						}
						switch ($listOfOperators[$operatorIndex])
						{
							case '+':
								$result = $operandOne + $operandTwo;
								break;
							case '-':
								$result = $operandOne - $operandTwo;
								break;
							case '*':
								$result = $operandOne * $operandTwo;
								break;
							case '/':
								$result = (int)($operandOne / $operandTwo);
								break;
							case '%':
								$result = $operandOne % $operandTwo;
								break;
							case '>':
								if($operandOne > $operandTwo)
									$result = 1;
								else
									$result = 0;
								break;
							case '<':
								if($operandOne < $operandTwo)
									$result = 1;
								else
									$result = 0;
								break;
							case '--':
								$prepost=rand(0, 1);
								if($prepost == 0)
									$result = $operandOne++;
								else
									$result = ++$operandOne;
								break;
							case '++':
								$prepost=rand(0, 1);
								if($prepost == 0)
									$result = $operandOne--;
								else
									$result = --$operandOne;
								break;
							case '<=':
								if($operandOne <= $operandTwo)
									$result = 1;
								else
									$result = 0;
								break;
							case '>=':
								if($operandOne >= $operandTwo)
									$result = 1;
								else
									$result = 0;
								break;
							case '==':
								if($operandOne == $operandTwo)
									$result = 1;
								else
									$result = 0;
								break;
							case '!=':
								$result = ($operandOne != $operandTwo);
								break;
							case '&&':
								$result = $operandOne && $operandTwo;
								break;
							case '||':
								$result = $operandOne || $operandTwo;
								break;
							case '!':
								if(! $operandOne)
									$result = 1;
								else
									$result = 0;
								break;
							case '&':
								$result = $operandOne & $operandTwo;
								break;
							case '|':
								$result = $operandOne | $operandTwo;
								break;
							case '^':
								$result = $operandOne ^ $operandTwo;
								break;
							case '>>':
								$result = $operandOne >> $operandTwo;
								break;
							case '<<':
								$result = $operandOne << $operandTwo;
								break;
							case '~':
								$result = ~$operandOne;
								break;
							case '+=':
								$result = $operandOne + $operandTwo;
								break;
							case '-=':
								$result = $operandOne - $operandTwo;
								break;
							case '*=':
								$result = $operandOne * $operandTwo;
								break;
							case '/=':
								$result = (int)($operandOne / $operandTwo);
								break;
							case '%=':
								$result = $operandOne % $operandTwo;
								break;
							case '<<=':
								$result = $operandOne << $operandTwo;
								break;
							case '>>=':
								$result = $operandOne >> $operandTwo;
								break;
							case '|=':
								$result = $operandOne | $operandTwo;
								break;
							case '&=':
								$result = $operandOne & $operandTwo;
								break;
							case '^=':
								$result = $operandOne ^ $operandTwo;
								break;
							default:
								$result = "Operador invalido";
								break;
						}
						switch($listOfOperators[$operatorIndex])
						{
							case '~':
							case '!':
								$prepost = 0;
							case '++':
							case '--':
								if ($prepost == 1)
								{
									echo "<input type=\"number\" name=\"OperandOneDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandOne . "\". readonly=\"true\" />";
									echo "<label class=\"code\">";
									echo $listOfOperators[$operatorIndex];
									echo "</label>";
								}
								else
								{
									echo "<label class=\"code\">";
									echo $listOfOperators[$operatorIndex];
									echo "</label>";
									echo "<input type=\"number\" name=\"OperandOneDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandOne . "\". readonly=\"true\" />";
								}
								break;
							default:
								echo "<input type=\"number\" name=\"OperandOneDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandOne . "\". readonly=\"true\" />";
								echo "<label class=\"code\">";
								echo $listOfOperators[$operatorIndex];
								echo "</label>";
								echo "<input type=\"number\" name=\"OperandTwoDot" . $numbersUnits[$oneToNineTens] . "Dot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandTwo . "\". readonly=\"true\" />";
								break;
						}
						echo "<label class=\"code\">";
						echo "=";
						echo "</label>";
						echo "<input type=\"number\" name=\"result" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine] ."\" value=\"NaN\" />";
						echo "<input type=\"hidden\" name=\"resultKey" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine] ."\" value=\"" . hash('crc32', $result + 123) . "\". readonly=\"true\" hidefocus=\"true\" />";
						echo "<input type=\"hidden\" name=\"resultRaw" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine] ."\" value=\"" . $result . "\". readonly=\"true\" hidefocus=\"true\" />";
						echo "<input type=\"hidden\" name=\"operatorRaw" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine] ."\" value=\"" . $listOfOperators[$operatorIndex] . "\". readonly=\"true\" hidefocus=\"true\" />";
						$listOfOperators[$operatorIndex] = '';
						echo "</br>";
					} 
				} 
				echo "<input type=\"submit\" name=\"SendHomework\" value=\"Generar PDF\"/>";
			}					
			echo "</form>";
			echo "</body>";
		}
		else
		{
			echo "<frameset cols=\"100%\" border=\"0\">";
			echo "<frame src=\"facebookLogin.php\" />";
			echo "</frameset>";
		}
	?>
</html>