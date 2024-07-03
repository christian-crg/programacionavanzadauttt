<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "This topic will describe how loops behave and how to apply such functionality to implement an algorithm.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming, loops, for, while, ">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Estructura de ciclos y desarrollo de la programación
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Describir y explicar la composición de las estructuras y composición de ciclos y sus diferentes tipos de módulos que lo integran.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						Construir algoritmos en un lenguaje de programación, utilizando estructuras de programación:
						<ul>
							<li>
								Funciones de comparación y control (if, while, do-while, for, switch)
							</li>
							<li>
								Maquina de estados (polling, secuencia de anillo)
							</li>
						</ul>
					</dd>
				<dt>
					Ser
				</dt>
					<dd>
						Capacidad para el desarrollo de elementos de un programa óptimo. Aplicación de auto aprendizaje. Razonamiento deductivo, proactivo, iniciativa, dinámico.
					</dd>
			</dl>
			<p>
				En C/C++, y todos los demas lenguajes de programación modernos, las sentencias de repetición (también llamadas ciclos) permiten que un conjunto de instrucciones sean repetidas mientras o hasta que cierta condición se cumpla. Dicha condición puede ser predefinida (como en el ciclo for), o abierta (como en los ciclos while y do while) 
			</p>
			<h3>
				Ciclo for
			</h3>
				<p>
					El diseño general para el ciclo for es reflejado de una manera u otra en todos los lenguajes procedimentales. Sin embargo, en C/C++, éste provee una flexibilidad y poder inesperado. Es posible ejecutar repetidamente una secuencia de código al crear un ciclo. C++ provee un poderoso compendio de tipos de ciclos. Si tiene experiencia en C# o Java, encontrará conveniente el hecho de que saber que ciclo for en C++ trabaja de la misma manera que en tales lenguajes. 
				</p>
			<h3>
				Sintaxis: for
			</h3>
				<pre class="code">
<strong>for(</strong> variable = valor inicial ; condición de continuidad ; incremento<strong> )</strong>
	sentencia o secuencia
				</pre>
				<p>
					El ciclo for permite diversas variaciones, pero la mas comun es como la que se presenta en la sintaxis que precede este enunciado. La inicialización o "valor inicial" es una sentencia de asignación que se utiliza para establecer la variable de control.
					La "condición de continuidad" es, generalmente, una expresión relacional que habra de determinar cuando termina el ciclo. El incremento define como la variable del control del ciclo cambia cada vez que se repite el ciclo. <strong>Se deben separar estas 3 secciones por punto y coma</strong>.
					El ciclo for continua su ejecución mientras la condicion se evalua verdadera. Una vez que la condición se evalua falsa, la ejecución del programa continua en la siguiente linea despues de la sentencia o secuencia que pertenezca al for.
					A pesar de que es posible utilizar cualquier ciclo para crear ciclos infinitos, for es tradicionalmente utilizado para tal proposito. Partiendo de que el uso de ninguna de las tres expresiones que forman parte del ciclo for es obligatorio, es posible crear ciclo sin fin al no incluir la condición de continuidad.
					Cuando la condición de continuidad no se incluye, se asume que se evalua verdadera. Pudiera(n) incluirse una(s) expresión(es) para valor inicial e incremento, a pesar de que la mayoria de programadores de C++ comunmente utilizan "for(;;)" para denotar un ciclo infinito.
					En realidad, la sentencia for(;;) no garantiza un ciclo infinito debido a que una sentencia "break", ubicada en cualquier parte dentro del cuerpo de un ciclo, causará su terminación inmediata. La sentencia que pertenece al ciclo puede ser nula, ";".
				</p>
			<h3>
				Ciclo while
			</h3>
				<p>
					Otra estructura de control de repeticion que provee C/C++ es el ciclo while. 
				</p>
			<h3>
				Sintaxis: while
			</h3>
				<pre class="code">
<strong>while(condición de operación)</strong>
	sentencia o secuencia
				</pre>
				<p>
					La "condición de operación" define la condición que controla el ciclo, y esta puede ser cualquier expresión valida. La sentencia o secuencia es ejecutada mientras la condición de operación se evalue verdadera. Cuando la condición de operación se evalua falsa, el control del programa pasa a la siguiente linea despues de la sentencia o secuencia que pertenece al ciclo.
					Asi como con el ciclo for, el ciclo while verifica la condición de operación antes de iniciar con el ciclo, lo que significa que el código del ciclo puede no ser ejecutado. Ello elimina la necesidad de desempeñar una verificación independiente antes del ciclo.
					Aquello que pertenece al ciclo puede ser una sentencia nula, una sola sentencia o un bloque de sentencias [secuencia]. La condición de operación puede ser cualquier expresión, y verdadero es cualquier valor distinto de 0. 
				</p>
			<h3>
				Ciclo do-while
			</h3>
				<p>
					A diferencia de los ciclos for y while, que verifican la condición de operación antes de ejecutar el ciclo, el ciclo do-while evalua su condición al final del ciclo. Esto significa que un ciclo do-while siempre se ejecuta cuando menos una vez.
				</p>
			<h3>
				Sintaxis: do-while
			</h3>
				<pre class="code">
<strong>do</strong>
	sentencia o secuencia
<strong>while(condición de ejecución);</strong>
				</pre>
				<p>
					A pesar de que las llaves no son necesarias cuando solamente una sentencia pertenece al ciclo do-while, usualmente son utilizadas para mejorar la facilidad de interpretación de la estructura do-while, y por tanto prevenir confusión con el ciclo while.
					El ciclo do-while se ejecuta mientras la "condición de ejecución" se evalue verdadera.
				</p>
			<h3>
				En conclusión
			</h3>
				<p>
					Tomando en cuenta la inherente flexibilidad en todos los ciclos de C++, se recomienda utilizar un ciclo for para un numero conocido de iteraciones. Utilice el ciclo do-while cuando requiera un ciclo que se ejecute al menos una vez. El ciclo while es la mejor opción cuando el ciclo se repetira por un numero desconocido de veces.
				</p>
	</body>
</html>