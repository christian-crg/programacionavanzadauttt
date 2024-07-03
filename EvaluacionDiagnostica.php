<?php
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
	
	function convertFromNumberToLetter($number)
	{
		$letters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
		return $letters[$number];
	}

	function changeBaseFromBase10($number, $targetBase, $digits)
	{
		$newNumberParts = array();
		$newNumber = "";
		
		for($index = ($digits - 1) ; $index >= 0 ; $index--)
		{
			$newNumberParts[$index] = $number % $targetBase;
			$number = floor($number / $targetBase);
		}
		
		for($index = 0 ; $index < $digits ; $index++)
		{
			$newNumber = $newNumber . convertFromNumberToLetter($newNumberParts[$index]);
		}
		
		return $newNumber;
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
				content = "Test the student proficiency about the basis or prerequisites of the present course. It consist of three parts, digital systems, algorithms and pseudocode. The quizz will be generated and evaluated solely by the computer.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>

	<?php
		if (!$_SESSION[$user_id])
		{
			echo "<body>";
			echo "<h3>";
			echo "Evaluación diagnostica";
			echo "</h3>";
			echo "<p>";
			echo "Responda las siguentes preguntas respecto a lo que se le solicita. Las respuestas pueden ser mutuamente excluyentes, complementarias o únicas. A pesar de que puede cambiar la respuesta de cualquier pregunta ya contestada, toda su actividad e intentos serán tomados en cuenta para determinar el grado de dominio del tema. Evite utilizar otros programas o simplemente procure no atender otra pagina que pudiera causar la perdida del foco para esta página web.";
			echo "</p>";
			$listOfGates = array('AND', 'OR', 'NOT', 'XOR', 'NAND', 'NOR');
			$listOfArithmeticOperators = array('+', '-', '÷', '×', '+', '-', '÷', '×');
			$numbersUnits = array('','One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten');
			echo "<form method=\"post\" action=\"EvaluacionDiagnosticaValidation.php\" >";
			date_default_timezone_set('America/Mexico_City');
			$startTime = getDateString(getdate());
			echo "<input type=\"hidden\" name=\"startTime" . "\" value=\"" . $startTime . "\". readonly=\"true\" hidefocus=\"true\" />";
			echo "<h4>";
			echo "Compuertas lógicas";
			echo "</h4>";
			$gateIndex = -1;
			for($oneToNine = 1 ; $oneToNine < 7 ; $oneToNine++ )
			{
				do
				{
					$gateIndex = rand(0, sizeof($listOfGates) - 1);
				}
				while($listOfGates[$gateIndex] == '');
				$operandOne = rand(0, 1);
				$operandTwo = rand(0, 1);
				switch ($listOfGates[$gateIndex])
				{
					case 'NOT':
						if($operandOne == 0)
							$result = 1;
						else
							$result = 0;
						break;
					case 'NAND':
						$result = ($operandOne & $operandTwo);
						if($result == 0)
							$result = 1;
						else
							$result = 0;
						break;
					case 'NOR':
						$result = ($operandOne | $operandTwo);
						if($result == 0)
							$result = 1;
						else
							$result = 0;
						break;
						break;
					case 'AND':
						$result = $operandOne & $operandTwo;
						break;
					case 'OR':
						$result = $operandOne | $operandTwo;
						break;
					case 'XOR':
						$result = $operandOne ^ $operandTwo;
						break;
					default:
						$result = "Operador invalido";
						break;
				}
				if ($listOfGates[$gateIndex] == 'NOT')
				{
					echo "<label class=\"code\">";
					echo $listOfGates[$gateIndex];
					echo "</label>";
					echo "<input type=\"number\" name=\"GatesOperandOneDot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandOne . "\" readonly=\"true\" />";
					echo "<label class=\"code\">";
					echo "=";
					echo "</label>";
					echo "<input type=\"text\" name=\"resultGates" . $numbersUnits[$oneToNine] ."\" value=\"\" />";
					echo "<input type=\"hidden\" name=\"resultKeyGates" . $numbersUnits[$oneToNine] ."\" value=\"" . base64_encode($result . "abc") . "\" readonly=\"true\" hidefocus=\"true\" />";
					//echo "<input type=\"hidden\" name=\"resultGatesRaw" . $numbersUnits[$oneToNine] ."\" value=\"" . $result . "\". readonly=\"true\" hidefocus=\"true\" />";
					echo "<input type=\"hidden\" name=\"operatorGatesRaw" . $numbersUnits[$oneToNine] ."\" value=\"" . $listOfGates[$gateIndex] . "\" readonly=\"true\" hidefocus=\"true\" />";
					$listOfGates[$gateIndex] = '';
				}
				else
				{
					echo "<input type=\"number\" name=\"GatesOperandOneDot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandOne . "\" readonly=\"true\" />";
					echo "<label class=\"code\">";
					echo $listOfGates[$gateIndex];
					echo "</label>";
					echo "<input type=\"number\" name=\"GatesOperandTwoDot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandTwo . "\" readonly=\"true\" />";
					echo "<label class=\"code\">";
					echo "=";
					echo "</label>";
					echo "<input type=\"text\" name=\"resultGates" . $numbersUnits[$oneToNine] ."\" value=\"\" />";
					echo "<input type=\"hidden\" name=\"resultKeyGates" . $numbersUnits[$oneToNine] ."\" value=\"" . base64_encode($result . "abc") . "\" readonly=\"true\" hidefocus=\"true\" />";
					//echo "<input type=\"hidden\" name=\"resultGatesRaw" . $numbersUnits[$oneToNine] ."\" value=\"" . $result . "\". readonly=\"true\" hidefocus=\"true\" />";
					echo "<input type=\"hidden\" name=\"operatorGatesRaw" . $numbersUnits[$oneToNine] ."\" value=\"" . $listOfGates[$gateIndex] . "\" readonly=\"true\" hidefocus=\"true\" />";
					$listOfGates[$gateIndex] = '';
				}
				echo "</br>";
			} 
			echo "<h4>";
			echo "Operaciones aritméticas";
			echo "</h4>";
			$operatorIndex = -1;
			for($oneToNine = 1 ; $oneToNine < 9 ; $oneToNine++ )
			{
				do
				{
					$operatorIndex = rand(0, sizeof($listOfArithmeticOperators) - 1);
				}
				while($listOfArithmeticOperators[$operatorIndex] == '');
				$operandOne = rand(-2048, 2048);
				$operandTwo = rand(-2048, 2048);
				switch ($listOfArithmeticOperators[$operatorIndex])
				{
					case '+':
						$result = $operandOne + $operandTwo;
						break;
					case '-':
						$result = $operandOne - $operandTwo;
						break;
					case '×':
						$result = $operandOne * $operandTwo;
						break;
					case '÷':
						$result = array((int)($operandOne / $operandTwo), $operandOne % $operandTwo);
						break;
					default:
						$result = "Operador invalido";
						break;
				}
				echo "<input type=\"number\" name=\"ArithmeticOperandOneDot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandOne . "\". readonly=\"true\" />";
				echo "<label class=\"code\">";
				switch($listOfArithmeticOperators[$operatorIndex])
				{
					case '×':
						echo "&times";
						break;
					case '÷':
						echo "&divide";
						break;
					default:
						echo $listOfArithmeticOperators[$operatorIndex];
						break;
				}
				echo "</label>";
				echo "<input type=\"number\" name=\"ArithmeticOperandTwoDot" . $numbersUnits[$oneToNine] . "\" value=\"" . $operandTwo . "\". readonly=\"true\" />";
				echo "<label class=\"code\">";
				echo "=";
				echo "</label>";
				switch($listOfArithmeticOperators[$operatorIndex])
				{
					case '÷':
						echo "<input type=\"number\" name=\"resultArithmeticQuotient" . $numbersUnits[$oneToNine] ."\" value=\"NaN\" />";
						echo "<input type=\"number\" name=\"resultArithmeticReminder" . $numbersUnits[$oneToNine] ."\" value=\"NaN\" />";
						echo "<input type=\"hidden\" name=\"resultKeyArithmeticQuotient" . $numbersUnits[$oneToNine] ."\" value=\"" . base64_encode($result[0] + 123) . "\". readonly=\"true\" hidefocus=\"true\" />";
						//echo "<input type=\"hidden\" name=\"resultArithmeticRaw" . $numbersUnits[$oneToNine] ."\" value=\"" . $result[0] . "\". readonly=\"true\" hidefocus=\"true\" />";
						echo "<input type=\"hidden\" name=\"resultKeyArithmeticReminder" . $numbersUnits[$oneToNine] ."\" value=\"" . base64_encode($result[1] + 123) . "\". readonly=\"true\" hidefocus=\"true\" />";
						//echo "<input type=\"hidden\" name=\"resultArithmeticRaw" . $numbersUnits[$oneToNine] ."\" value=\"" . $result[1] . "\". readonly=\"true\" hidefocus=\"true\" />";
						break;
					default:
						echo "<input type=\"number\" name=\"resultArithmetic" . $numbersUnits[$oneToNine] ."\" value=\"NaN\" />";
						echo "<input type=\"hidden\" name=\"resultKeyArithmetic" . $numbersUnits[$oneToNine] ."\" value=\"" . base64_encode($result + 123) . "\". readonly=\"true\" hidefocus=\"true\" />";
						//echo "<input type=\"hidden\" name=\"resultArithmeticRaw" . $numbersUnits[$oneToNine] ."\" value=\"" . $result . "\". readonly=\"true\" hidefocus=\"true\" />";
						break;
				}
				echo "<input type=\"hidden\" name=\"operatorArithmeticRaw" . $numbersUnits[$oneToNine] ."\" value=\"" . $listOfArithmeticOperators[$operatorIndex] . "\". readonly=\"true\" hidefocus=\"true\" />";
				$listOfArithmeticOperators[$operatorIndex] = '';
				echo "</br>";
			}
			echo "<h4>";
			echo "Cambios de base";
			echo "</h4>";
			
			$originBase = array(2, 8, 10, 16);
			for($oneToNineTens = 1 ; $oneToNineTens < 5 ; $oneToNineTens++)
			{
				do
				{
					$originIndex = rand(0, (count($originBase) - 1));
				}
				while($originBase[$originIndex] == 0);
				//var_dump($originIndex);
				//echo "</br>";
				$targetBase = array(2, 8, 10, 16);
				for($oneToNine = 1 ; $oneToNine < 5 ; $oneToNine++)
				{
					do
					{
						$targetIndex = rand(0, (count($targetBase) - 1));
					}
					while($targetBase[$targetIndex] == 0);
					//var_dump($targetIndex);
					if ($targetBase[$targetIndex] == $originBase[$originIndex])
					{
						$targetBase[$targetIndex] = 0;
						continue;
					}
					$numberToConvert = rand(1023, 4095);
					switch($originBase[$originIndex])
					{
						case 2:
							$numberToConvertOrigin = changeBaseFromBase10($numberToConvert, $originBase[$originIndex], 12);
							break;
						case 8:
							$numberToConvertOrigin = changeBaseFromBase10($numberToConvert, $originBase[$originIndex], 4);
							break;
						case 10:
							$numberToConvertOrigin = $numberToConvert;
							break;
						case 16:
							$numberToConvertOrigin = changeBaseFromBase10($numberToConvert, $originBase[$originIndex], 3);
							break;
					}
					echo "<label class=\"code\">";
					echo "De base ";
					echo $originBase[$originIndex];
					echo "</label>";
					echo "<input type=\"text\" name=\"OriginBase" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine] . "\" value=\"" . $numberToConvertOrigin . "\". readonly=\"true\" />";
					switch($targetBase[$targetIndex])
					{
						case 2:
							$numberToConvertTarget = changeBaseFromBase10($numberToConvert, $targetBase[$targetIndex], 12);
							break;
						case 8:
							$numberToConvertTarget = changeBaseFromBase10($numberToConvert, $targetBase[$targetIndex], 4);
							break;
						case 10:
							$numberToConvertTarget = $numberToConvert;
							break;
						case 16:
							$numberToConvertTarget = changeBaseFromBase10($numberToConvert, $targetBase[$targetIndex], 3);
							break;
					}
					echo "<label class=\"code\">";
					echo " a base ";
					echo $targetBase[$targetIndex];
					echo "</label>";
					echo "<input type=\"text\" name=\"resultUser" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine] . "\" value=\"\" />";
					echo "<input type=\"hidden\" name=\"resultKey" . $numbersUnits[$oneToNineTens] . $numbersUnits[$oneToNine] . "\" value=\"" . base64_encode(ltrim($numberToConvertTarget, "0")) . "\". readonly=\"true\" hidefocus=\"true\" />";
					echo "</br>";
					$targetBase[$targetIndex] = 0;
				}
				$originBase[$originIndex] = 0;
			}

			echo "<h4>";
			echo "Algoritmos";
			echo "</h4>";
			
			echo "<p>";
			echo "Respecto a un algoritmo, indique activando la casilla de verificación en caso de que la sentencia sea verdadera, en caso contrario (falso) asegurese de que la casilla se encuentre desactivada.";
			echo "</p>";
			
			$algorithmsTrue = array
								(
									'Cuenta con un inicio y un final.',
									'Debe definir pasos o instrucciones precisas.',
									'Puede o no incluir operaciones aritméticas',
									'Puede contener una entrada de datos inicial o nula.',
									'Eventualmente producirá una salida.',
									'Puede ser representado por un diagrama de flujo.',
									'Se lee de arriba hacia abajo.',
									'Tiene un numero finito de entradas.',
									'Debe generar al menos una salida.',
									'Es finito.',
									'Puede ser representado como pseudocódigo',
									'Puede o no incluir ciclos',
									'Puede o no incluir la verificación de condiciones por medio de comparaciones',
									'Puede o no incluir operaciones de cualquier tipo'
								);
			$algorithmsFalse = array
								(
									'No tiene inicio o final.', 'Puede tener uno de dos inicio o final.',
									'Debe incluir instrucciones o pasos códificados',
									'Contiene al menos una operación aritmética.',
									'Debe siempre partir de una entrada de datos nula.',
									'Eventualmente pudiera producir salida alguna.',
									'No puede ser representado como diagrama de flujo.',
									'Se lee de abajo hacia arriba.',
									'Tiene un numero indefinido de entradas.',
									'Puede no producir salida alguna.',
									'Puede ser infinito o ciclarse indefinidamente.',
									'No es posible representarlo como pseudocódigo.',
									'Debe incluir al menos un ciclo.',
									'Debe verificar condiciones y realizar comparaciones.',
									'Debe desarrollar operaciones de manipulación de bits.'
								);
			$pseudocodeTrue = array
								(
									'Es una descripción de alto nivel.',
									'Usa convenciones estructurales de algún lenguaje de programación.',
									'Se espera sea leido e interpretado por un humano.',
									'El pseudocódigo omite la declaración de variables.',
									'Su proposito es que sea comprendido con mayor facilidad que el código en si.',
									'No existe estandar que lo rija.',
									'Comunmente se utiliza para describir algoritmos',
									'Usualmente las llamadas a función y secuencias se remplazan por una sola linea',
									'No es un programa ejecutable para humanos.',
									'El pseudocódigo ocupa menos espacio en papel que los diagramas de flujo y UML.'
								);
			$pseudocodeFalse = array
								(
									'Es una descripción al nivel mas bajo posible, a nivel compuerta lógica.',
									'No es posible usar convenciones de ningun lenguaje de programación',
									'Únicamente puede ser interpretado por una computadora en el lenguaje ALGOL 68.',
									'El primer paso es declarar variables, constantes y funciones, en ese orden.',
									'Generalmente es mas complejo que el código que representa',
									'Se rije por el estandar ISO/IEC 14882:2003(E)',
									'No es capaz de representar un algoritmo.',
									'Usualmente las llamadas a función y secuencias se transcriben tal cual',
									'Es un programa ejecutable para humanos.',
									'Los diagramas de flujo y UML ocupan menos espacio en papel que el pseudocódigo.'
								);
			$flowChartsTrue = array
								(
									'Es un tipo de diagrama que representa un algoritmo.',
									'Es un tipo de diagrama que representa un proceso.',
									'Representa los pasos como diversas cajas de varios tipos.',
									'Conecta los pasos por medio de flechas.',
									'Ilustra la solución a un problema dado.',
									'Se utiliza para analizar un programa.',
									'Se utiliza para diseñar un programa.',
									'Se utiliza para documentar un programa.',
									'Se utiliza para administrar un programa.',
									'Se utiliza para analizar un proceso.',
									'Se utiliza para diseñar un proceso.',
									'Se utiliza para documentar un proceso.',
									'Se utiliza para administrar un proceso.',
									'Permite localizar fallas o cuellos de botella.',
									'Existen diversos tipos de diagramas de flujo.',
									'Los dos tipos de cajas más comunes son un rectangulo y un rombo.'
								);
			$flowChartsFalse = array
								(
									'Es un tipo de algoritmo que representa un diagrama.',
									'Es un tipo de proceso que representa un diagrama.',
									'Representa los pasos como cajas de un solo tipo.',
									'Conecta los pasos por medio de palabras o bien numera las cajas.',
									'Representa el problema de una solución dada.',
									'No debe ser utilizado para analizar un programa.',
									'No debe ser utilizado para diseñar un programa.',
									'No debe ser utilizado para documentar un programa.',
									'No debe ser utilizado para administrar un programa.',
									'No debe ser utilizado para analizar un proceso.',
									'No debe ser utilizado para diseñar un proceso.',
									'No debe ser utilizado para documentar un proceso.',
									'No debe ser utilizado para administrar un proceso.',
									'Oculta cuellos de botella o fallas.',
									'Existe un único tipo de diagrama de flujo.',
									'El simbolo mas comun es el octagono que permite realizar operaciones.'
								);
			$indexAlgorithms = array();
			for( $index = 0 ; $index < 10 ; $index++)
			{
				do
				{
					$randomIndex = mt_rand(0, count($algorithmsTrue) - 1);
				}
				while(in_array($randomIndex, $indexAlgorithms));
				$indexAlgorithms[$index] = $randomIndex;
			}
			$indexPseudocode = array();
			for( $index = 0 ; $index < 10 ; $index++)
			{
				do
				{
					$randomIndex = mt_rand(0, count($pseudocodeTrue) - 1);
				}
				while(in_array($randomIndex, $indexPseudocode));
				$indexPseudocode[$index] = $randomIndex;
			}
			$indexFlowCharts = array();
			for( $index = 0 ; $index < 10 ; $index++)
			{
				do
				{
					$randomIndex = mt_rand(0, count($flowChartsTrue) - 1);
				}
				while(in_array($randomIndex, $indexFlowCharts));
				$indexFlowCharts[$index] = $randomIndex;
			}
			for( $index = 0 ; $index < 10 ; $index++ )
			{
				echo "<input type=\"checkbox\" name=\"";
				echo "algorithms" . $numbersUnits[$index + 1];
				echo "\"value=\"";
				if (mt_rand(0, 1))
				{
					echo $algorithmsTrue[$indexAlgorithms[$index]];
					echo "\"/>";
					echo $algorithmsTrue[$indexAlgorithms[$index]];
				}
				else
				{
					echo $algorithmsFalse[$indexAlgorithms[$index]];
					echo "\"/>";
					echo $algorithmsFalse[$indexAlgorithms[$index]];
				}
				echo "<br />";
			}
			
			echo "<h4>";
			echo "Pseudocódigo";
			echo "</h4>";
			
			echo "<p>";
			echo "Respecto a pseudocódigo, indique activando la casilla de verificación en caso de que la sentencia sea verdadera, en caso contrario (falso) asegurese de que la casilla se encuentre desactivada.";
			echo "</p>";
			
			for( $index = 0 ; $index < 10 ; $index++ )
			{
				echo "<input type=\"checkbox\" name=\"";
				echo "pseudocode" . $numbersUnits[$index + 1];
				echo "\"value=\"";
				if (mt_rand(0, 1))
				{
					echo $pseudocodeTrue[$indexPseudocode[$index]];
					echo "\"/>";
					echo $pseudocodeTrue[$indexPseudocode[$index]];
				}
				else
				{
					echo $pseudocodeFalse[$indexPseudocode[$index]];
					echo "\"/>";
					echo $pseudocodeFalse[$indexPseudocode[$index]];
				}
				echo "<br />";
			}
			echo "<h4>";
			echo "Diagramas de flujo";
			echo "</h4>";
			
			echo "<p>";
			echo "Respecto a diagramas de flujo, indique activando la casilla de verificación en caso de que la sentencia sea verdadera, en caso contrario (falso) asegurese de que la casilla se encuentre desactivada.";
			echo "</p>";
			for( $index = 0 ; $index < 10 ; $index++ )
			{
				echo "<input type=\"checkbox\" name=\"";
				echo "flowCharts" . $numbersUnits[$index + 1];
				echo "\"value=\"";
				if (mt_rand(0, 1))
				{
					echo $flowChartsTrue[$indexFlowCharts[$index]];
					echo "\"/>";
					echo $flowChartsTrue[$indexFlowCharts[$index]];
				}
				else
				{
					echo $flowChartsFalse[$indexFlowCharts[$index]];
					echo "\"/>";
					echo $flowChartsFalse[$indexFlowCharts[$index]];
				}
				echo "<br />";
			}
			
			
			echo "<input type=\"submit\" name=\"GeneratePDF\" value=\"Generar PDF\"/>";
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