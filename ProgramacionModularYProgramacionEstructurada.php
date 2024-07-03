<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Software design approaches that are available, focusing on the ones that C++ rely.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Programación modular y programación estructurada
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Explicar la arquitectura de composición de los programas modulares, así como las características que lo componen.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						Determinar los principales elementos que componen un programa modular.
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
					Programación modular
				</dt>
					<dd>
						Una técnica de desarrollo de software en la que el software es desarrollado como una colección de módulos.
					</dd>
			</dl>
			
			<p>
				La programación modular es uno de los métodos de diseño más flexible y potente para mejorar la productividad de un programa. En programación modular el programa se divide en módulos (partes independientes), cada una de las cuales ejecuta una única actividad o tarea y se codifican independientemente de otros módulos. Cada programa contiene un módulo denominado programa principal que controla todo lo que sucede; se transfiere el control a submódulos, de modo que ellos puedan ejecutar sus funciones; sin embargo, cada submódulo devuelve el control al módulo principal cuando se haya completado su tarea.
				Si la tarea asignada a cada submódulo es demasiado compleja, éste deberá dividirse en otros módulos más pequeños. El proceso sucesivo de subdivisión de módulos continúa hasta que cada módulo tenga solamente una tarea específica que ejecutar. «Esta tarea puede ser entrada, salida, manipulación de datos, control de otros módulos o alguna combinación de éstos».
				Un módulo puede transferir temporalmente el control a otro módulo; sin embargo, cada módulo debe eventualmente devolver el control al módulo del cual se recibe originalmente el control. Los módulos son independientes en el sentido en que ningún módulo puede tener acceso directo a cualquier otro módulo excepto el módulo al que llama y sus propios submódulos. Sin embargo, los resultados producidos por un módulo pueden ser utilizados por cualquier otro módulo cuando se transfiera a ellos el control.
			</p>
			
			<img src="/images/ProgramacionModular.php"/>
			
			<p>
				Dado que los módulos son independientes, diferentes programadores pueden trabajar simultáneamente en diferentes partes del mismo programa. Esto reducirá el tiempo del diseño del algoritmo y posterior codificación del programa. Además, un módulo se puede modificar radicalmente sin afectar a otros módulos, incluso sin alterar su función principal. «La descomposición de un programa en módulos independientes más simples se conoce también
				como el método de «divide y vencerás» (divide and conquer)». Se diseña cada módulo con independencia de los demás, y siguiendo un método ascendente o descendente se llegará hasta la descomposición final del problema en módulos en forma jerárquica.
			</p>
			<p>
				Los términos programación modular; programación descendente y programación estructurada a menudo se utilizan como sinónimos aunque no significan lo mismo.  «La programación estructurada significa también programación sin GOTO». El término programación estructurada se refiere a un conjunto de técnicas que aumentan considerablemente la productividad del programa reduciendo el tiempo requerido para escribir, verificar, depurar y mantener los programas. La programación estructurada utiliza un número limitado de estructuras de control que minimizan la complejidad de los programas, y por consiguiente, reducen los errores; hace los programas más fáciles de escribir, verificar, leer y mantener. Los programas deben estar dotados de una estructura.
			</p>
			<p>
				La programación estructurada significa escribir un programa de acuerdo a las siguientes reglas
				<ul>
					<li>
						El programa tiene un diseño modular.
					</li>
					
					<li>
						Los módulos son diseñados de modo descendente.
					</li>
					<li>
						Cada módulo se codifica utilizando las tres estructuras de control básicas
						<ul>
							<li>
								secuencia
							</li>
							<li>
								selección
							</li>
							<li>
								repetición
							</li>
						</ul>
					</li>
				</ul>
			</p>
			<p>
				La programación estructurada es el conjunto de técnicas que incorporan
				<ul>
					<dl>
						<li>
							<dt>
								recursos abstractos
							</dt>
							<dd>
								La programación estructurada se auxilia de los recursos abstractos en lugar de los recursos concretos de que dispone un determinado lenguaje de programación. Descomponer un programa en términos de recursos abstractos -según Dijkstra- consiste en descomponer una determinada acción compleja en términos de un número de acciones más simples capaces de ejecutarlas o que constituyan instrucciones de computadora disponibles.
							</dd>
						</li>
						<li>
							<dt>
								diseño descendente (top-down)
							</dt>
							<dd>
								El diseño descendente (top-down) es el proceso mediante el cual un problema se descompone en una serie de niveles o pasos sucesivos de refinamiento (stepwise). La metodología descendente consiste en efectuar una relación entre las sucesivas etapas de estructuración de modo que se relacionasen unas con otras mediante entradas y salidas de información. Es decir, se descompone el problema en etapas o estructuras jerárquicas, de forma que se puede considerar cada estructura desde dos puntos de vista: ¿qué hace? y ¿cómo lo hace?
							</dd>
						</li>
					</dl>
					<li>
						estructuras básicas
					</li>
				</ul>
			</p>
	</body>
</html>