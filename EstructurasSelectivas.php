<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Structured programmig limits its behavior control to two selective structures if and switch, those are the matter of this topic">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Estructuras selectivas
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Listar y explicar las diferentes operaciones que permiten realizar una estructura selectiva y sus múltiples ventajas.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						Simular y programar  una secuencia en un programa, utilizando en el procedimiento estructuras para el almacenamiento y procesamiento de datos internos y externos.
					</dd>
				<dt>
					Ser
				</dt>
					<dd>
						Capacidad  para el desarrollo de elementos de un programa óptimo. Aplicación de auto aprendizaje. Razonamiento deductivo, proactivo, iniciativa, dinámico.
					</dd>
			</dl>

			<dl>
				<dt>
					Sentencia
				</dt>
				<dd>
					<ul>
						<li>
							Llamada a función
						</li>
						<li>
							Expresión
						</li>
						<li>
							<dl>
								<dt>
									Estructura(s) de control
								</dt>
								<dd>
									Las estructuras de control controlan el flujo de ejecución de un programa o función. Las estructuras de control permiten combinar instrucciones o sentencias individuales en una simple unidad lógica con un punto de entrada y un punto de salida. Las instrucciones o sentencias se organizan en tres tipos de estructuras de control que sirven para controlar el flujo de la ejecución: secuencia, selección (decisión) y repetición. Una sentencia compuesta es un conjunto de sentencias encerradas entre llaves ( { y } ) que se utiliza para especificar un flujo secuencial.
								</dd>
							</dl>
							<ul>
								<li>
									Secuencia
									<pre class="code">
{
	sentencia 1;
	sentencia 2;
	.
	.
	.
	sentencia n;
}
									</pre>
								</li>
								<li>
									Selección
									<ul>
										<li>
											if
										</li>
										<li>
											switch
										</li>
									</ul>
								</li>
								<li>
									Repetición
								</li>
							</ul>
						</li>
					</ul>
				</dd>
			</dl>
			<h3>
				Sintaxis: if
			</h3>
				<pre class="code">
<strong>if (expresión)
	Expresión, secuencia(s), estructura de control, etc.</strong>
else if(expresión)
	Expresión, secuencia(s), 	estructura de control, etc.
else
	Expresión, secuencia(s), 	estructura de control, etc.
				</pre>
			
			<h3>
				Sintaxis: switch
			</h3>
				<pre class="code">
<strong>switch(expresiónEntera)
{
	case expresiónConstante:
		Expresión, secuencia(s), estructura de control, etc.</strong>
	break;
	…
	default:
		Expresión, secuencia(s), estructura de control, etc.
	break;
}

				</pre>
	</body>
</html>