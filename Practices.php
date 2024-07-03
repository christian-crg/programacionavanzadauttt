<?php
	function generateOption($value, $caption)
	{
		echo "<option value=\"";
		echo $value;
		echo "\">";
		echo $caption;
		echo "</option>";
	}
?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada - Practicas
		</title>
		<meta	name = "description"
				content = "This page contains examples of the output for all the practices comprising each of the units of the course.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Programación Avanzada">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="PracticesUnitOne.js">
		</script>
	</head>

	<body>
		<h1>
			Practicas
		</h1>
		<ul>
			<li>
				<a href="ProgramacionModularYProgramacionEstructurada.php">
					Unidad 1
				</a>
				<ol>
					<li>
						Puntuación
						<form>
							<label>
								Ingresa la puntuación
							</label>
							<br />
							<input type="number" name="score" min="1" max="100"/>
							<label>
								=
							</label>
							<input type="text" name="gradeResult" readonly="true"/>
							<input type="button" name="grade" value="Evaluar" onclick="gradeResult.value = gradeScore(parseInt(score.value))"/>
						</form>
					</li>
					<li>
						24 Hrs a 12 hrs (AM/PM)
						<form>
							<label>
								Ingresa horas y minutos [un valor en cada control numerico]
							</label>
							<br />
							<input type="number" name="hours" min="0" max="23"/>
							<label>
								:
							</label>
							<input type="number" name="minutes" min="0" max="59"/>
							<label>
								=
							</label>
							<input type="text" name="timeAMPM" readonly="true"/>
							<input type="button" name="transformTime" value="Evaluar" onclick="timeAMPM.value = from24toAMPMv2(parseInt(hours.value),parseInt(minutes.value))"/>
						</form>
					</li>
					<li>
						Fecha numero -> Fecha letra
						<form>
							<label>
								Indica la fecha [dia/mes/año]
							</label>
							<br />
							<input type="number" name="day" min="1" max="31"/>
							<label>
								/
							</label>
							<input type="number" name="month" min="1" max="12"/>
							<label>
								/
							</label>
							<input type="number" name="year" min="1" max="9999"/>
							<label>
								=
							</label>
							<input type="text" name="dateWithWords" readonly="true" size="40"/>
							<input type="button" name="transformDate" value="Evaluar" onclick="dateWithWords.value = dateFromNumbersToWords(parseInt(day.value), parseInt(month.value), parseInt(year.value))"/>
						</form>
					</li>
					<li>
						Numero de cuatro cifras -> letra
						<form>
							<label>
								Escribe un numero de 4 cifras
							</label>
							<br />
							<input type="number" name="theNumber" min="0" max="9999"/>
							<input type="text" name="numberWithWords" readonly="true" size="40"/>
							<input type="button" name="transformNumber" value="Evaluar" onclick="numberWithWords.value = numberToWordCardinal(parseInt(theNumber.value))"/>
						</form>
					</li>
					<li>
						Numero cifras arábigas (4) -> Números romanos
						<form>
							<label>
								Escribe un numero de 4 cifras
							</label>
							<br />
							<input type="number" name="arabicNumber" min="1" max="9999"/>
							<input type="text" name="romanNumerals" readonly="true" size="40"/>
							<input type="button" name="convertNumber" value="Evaluar" onclick="romanNumerals.value = arabicToRoman(parseInt(arabicNumber.value))"/>
						</form>
					</li>
					<li>
						Redondear a centenas (4 cifras)
						<form>
							<label>
								Escribe un numero de 4 cifras
							</label>
							<br />
							<input type="number" name="numberToRound" min="0" max="9999"/>
							<input type="text" name="roundedNumber" readonly="true" size="40"/>
							<input type="button" name="roundNumber" value="Evaluar" onclick="roundedNumber.value = roundToHundreds(parseInt(numberToRound.value))"/>
						</form>
					</li>
					<li>
						Calcular tiempo entre 2 fechas
						<form>
							<label>
								Indica la fecha mas reciente [dia/mes/año]
							</label>
							<br />
							<input type="number" name="latterDay" min="1" max="31"/>
							<label>
								/
							</label>
							<input type="number" name="latterMonth" min="1" max="12"/>
							<label>
								/
							</label>
							<input type="number" name="latterYear" min="1" max="9999"/>
							<br />
							<label>
								Indica la fecha menos reciente [dia/mes/año]
							</label>
							<br />
							<input type="number" name="earliestDay" min="1" max="31"/>
							<label>
								/
							</label>
							<input type="number" name="earliestMonth" min="1" max="12"/>
							<label>
								/
							</label>
							<input type="number" name="earliestYear" min="1" max="9999"/>
							<br />
							<input type="text" name="elapsedTimeBetweenDates" readonly="true" size="40"/>
							<input type="button" name="calculateElapsedTime" value="Evaluar" onclick="elapsedTimeBetweenDates.value = elapsedDaysBetweenDates(parseInt(latterDay.value), parseInt(latterMonth.value), parseInt(latterYear.value), parseInt(earliestDay.value), parseInt(earliestMonth.value), parseInt(earliestYear.value))"/>
						</form>
					</li>
					<li>
						¿Año bisiesto? Bisiesto sí: múltiplo de 4, sí es múltiplo de 100 debe también ser de multiplo 400
						<form>
							<label>
								Indica el año
							</label>
							<br />
							<input type="number" name="theYear" min="1" max="9999"/>
							<input type="text" name="resultOfTestIfLeapYear" readonly="true"/>
							<input type="button" name="determineIfLeapYear" value="Evaluar" onclick="resultOfTestIfLeapYear.value = sayIfItIsLeapYear(parseInt(theYear.value))"/>
						</form>
					</li>
					<li>
						Motor de cambio
						<form>
							<label>
								Indica el monto a entregar
							</label>
							<br />
							<input type="number" name="amount" />
							<input type="text" name="change" readonly="true" size="80"/>
							<input type="button" name="assertDenominationsAndAmounts" value="Evaluar" onclick="change.value = calculateChange(parseInt(amount.value))"/>
						</form>
					</li>
					<li>
						Calculadora 5 operadores
						<form>
							<label>
								Especifica el valor del primer <strong>operando</strong>, selecciona el <strong>operador</strong> y segundo <strong>operando</strong> en tal orden. Para los operadores unarios se tomara en cuenta el primer operando. Los operadores de incrementación y decrementación operarán como pos-incremento/decremento sobre el <strong>primer operando</strong> siempre y cuando el segundo operando valga 0; para cualquier otro caso de evaluará como pre-incremento/decremento y este operará sobre el <strong>segundo operando</strong>.
							</label>
							<br />
							<input type="number" name="firstOperand" />
							<select name="operator">
								<?php
									$listOfOperators = array('+', '-', '*', '/', '%', '++', '--', '>', '<', '<=', '>=', '==', '!=', '&&', '!', '||', '^', '&', '|', '~', '<<', '>>', '+=', '-=', '*=', '/=', '<<=', '>>=', '&=', '|=', '^=', '%=');
									for($index = 0 ; $index < sizeof($listOfOperators) ; $index++)
										generateOption($listOfOperators[$index], $listOfOperators[$index]);
								?>
							</select>
							<input type="number" name="secondOperand" />
							<input type="text" name="resultOfApplyingOperator" readonly="true"/>
							<input type="button" name="applyOperator" value="Evaluar" onclick="resultOfApplyingOperator.value = evaluateOperator(parseInt(firstOperand.value), operator.value, parseInt(secondOperand.value))"/>
						</form>
					</li>
					<li>
						Cambio base N
						<form>
							<label>
								Indica el numero en base 10 y la base destino.
							</label>
							<br />
							<input type="number" name="numberInBase10" min="1"/>
							<input type="number" name="targetBase" min="2" max="36"/>
							<br />
							<input type="text" name="newNumberRepresentation" readonly="true" size="80"/>
							<input type="button" name="changeBaseOfNumber" value="Evaluar" onclick="newNumberRepresentation.value = changeBaseFromBase10(parseInt(numberInBase10.value),parseInt(targetBase.value))"/>
						</form>
					</li>
				</ol>
			</li>
			<li>
				<a href="ElementosDeUnLenguajeImperativoDeProgramacionControlYArreglos.php">
					Unidad 2
				</a>
				<ol>
					<li>
						Encontrar precisión de los tipos de datos float, double y long double 
					</li>
					<li>
						Descomposición factorial (algoritmo no original)
						<form>
							<label>
								Indique el numero a descomponer.
							</label>
							<br />
							<input type="number" name="numberToDecompose" />
							<br />
							<input type="text" name="numberDecomposed" readonly="true" />
							<input type="button" name="decomposeNumber" value="Evaluar" onclick="numberDecomposed.value = alternativeFactorialDecomposition(parseInt(numberToDecompose.value))"/>
						</form>
					</li>
					<li>
						Suma de matrices
					</li>
					<li>
						Resta de matrices
					</li>
					<li>
						Multiplicación de matrices
					</li>
					<li>
						Multiplicación por escalar
					</li>
					<li>
						Invertir numero de máximo 10 dígitos
						<form>
							<label>
								Indique el numero a invertir.
							</label>
							<br />
							<input type="number" name="numberToInvert" />
							<br />
							<input type="text" name="invertedNumber" readonly="true" />
							<input type="button" name="invertNumber" value="Evaluar" onclick="invertedNumber.value = reverseNumberOrder(parseInt(numberToInvert.value))"/>
						</form>
					</li>
					<li>
						Matriz transpuesta
					</li>
					<li>
						Algoritmo de compresión RLE para cadena de caracteres de máximo 50 caracteres.
						<form>
							<label>
								Escriba en la cadena de caracteres a comprimir sin incluir los digitos del 0 al 9
							</label>
							<br />
							<input type="text" name="stringToCompress" />
							<br />
							<input type="text" name="compressedString" readonly="true" />
							<input type="button" name="performCompression" value="Comprimir" onclick="compressedString.value = RLECompression(stringToCompress.value)"/>
						</form>
					</li>
				</ol>
			</li>
			<li>
				<a href="ManipulacionDeFunciones.php">
					Unidad 3
				</a>
				<ul>
					<li>
						<a href="TicTacToe.php">
							Tic-tac-toe
						</a>
						<ul>
							<li>
								Interfaz
							</li>
							<li>
								Inteligencia artificial
							</li>
						</ul>
					</li>
					<li>
						Snake
						<ul>
							<li>
								Interfaz
							</li>
							<li>
								Generador de objetivos
							</li>
						</ul>
					</li>
					<li>
						Animación 10 cuadros por segundo, duración mínima 10 segundos
					</li>
					<li>
						Calendario por medio de mes y año
					</li>
					<li>
						Estadística
						<ul>
							<li>
								Media
							</li>
							<li>
								Mediana
							</li>
							<li>
								Moda
							</li>
							<li>
								Desviación estándar
							</li>
							<li>
								Varianza
							</li>
						</ul>
					</li>
					<li>
						Operaciones con matrices (N. Complejos)
						<ul>
							<li>
								Suma
							</li>
							<li>
								Resta
							</li>
							<li>
								Multiplicación por escalar
							</li>
							<li>
								Multiplicación de matrices
							</li>
							<li>
								Transpuesta
							</li>
							<li>
								Triangular superior
							</li>
							<li>
								Triangular inferior
							</li>
						</ul>
					</li>
					<li>
						Operaciones con fasores
						<ul>
							<li>
								Reducción de circuito mixto
							</li>
							<li>
								Determinación de factor de potencia
							</li>
							<li>
								Calculo de potencia
								<ul>
									<li>
										reactiva
									</li>
									<li>
										aparente
									</li>
									<li>
										real
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="Breakout.php">
							Breakout
						</a>
 						<ul>
							<li>
								Control de barra
							</li>
							<li>
								Generación de nivel
							</li>
							<li>
								Control de pelota
							</li>
						</ul>
					</li>
					<li>
						Algebra simbólica
						<ul>
							<li>
								Derivada
							</li>
							<li>
								Integral
							</li>
							<li>
								Evaluación
							</li>
							<li>
								Factorización
							</li>
							<li>
								Expansión
							</li>
							<li>
								Suma, resta y producto por escalar
							</li>
						</ul>
					</li>
					<li>
						Sumatoria de N vectores
						<ul>
							<li>
								Interfaz
							</li>
							<li>
								Operaciones aritméticas
							</li>
						</ul>
					</li>
				</ul>
			</li>
		</ul>
	</body>
</html>