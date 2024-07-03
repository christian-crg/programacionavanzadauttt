<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "A fundamental part of .">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming, arguments, parameters">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Argumentos y parámetros de las funciones
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Describir los módulos internos para el uso óptimo de las funciones en un lenguaje de programación, así como el manejo del concepto de recursividad.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						Construir expresiones en el lenguaje de programación, utilizando los módulos internos:
						<ul>
							<li>
								Para el manejo de recursividad.
							</li>
							<li>
								Tipos de datos en las funciones.
							</li>
							<li>
								Módulos de tipo  entero.   
							</li>
							<li>
								Módulos de cadena de caracteres y void.
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
			
				<h3>
					Argumentos y parámetros
				</h3>
					<p>
						Sí una función requerirá argumentos, esta debe declarar variables que acepten los valores de los argumentos. Estas variables son formalmente los parametros de la función.
						Estos se comportan como cualquier otra variable local dentro de la función, son creados al momento de entrar a la función y destruidos al final de la función. Así como las variables locales, es posible hacer asignaciones a los parametros de una función o usarlos en una expresión.
						Sin embargo estas variables desempeñan la tarea especial de recibir el valor de los argumentos pasados a la función, es posible utilizarlos como se haria con cualquier otra variable local. Es posible pasar uno o mas valores a una función.
						El valor pasado a una función se llama <strong>argumento</strong>. Por lo tanto, los argumentos son un medio para pasar información a una función. Cuando se crea una función que toma uno o mas argumentos, las variables que recibirán dichos argumentos también deben ser declaradas.
						Estas variables son llamadas los parametros de la función. El término argumento se refiere al valor que es utilizado para llamar a la función. La variable que recibe el valor de un argumento es llamada <strong>parametro</strong>. En realidad, las funciones que reciben argumentos son llamadas <strong>funciones parametrizadas</strong>.
						Eventualmente es util pasar información a un programa cuando se ejecuta. Generalmente, se pasa información a la función punto de entrada <i>[main()]</i> por medio de argumentos en la linea de comandos. Un argumento de la linea de comandos es la información que sigue después del nombre del programa en la linea de comandos del sistema operativo.
						Existen dos argumentos especiales incluidos, argv y argc, que son utilizados para recibir argumentos de la linea de comandos. El parametro argc contiene el numero de argumentos en la linea de comandos y es un entero. Es siempre cuando menos 1 debido a que el nombre del programa cuenta como el primer argumento.
						El parametro argv es un puntero a un arreglo de punteros de caracteres. Cada elemento en este arreglo apunta a un argumento de la linea de comandos. Todos los argumentos de la linea de comandos son cadenas de caracteres; cualquier numero tendrá que ser convertido por el programa en el formato interno apropiado.
						Algunos entornos permiten encerrar en comillas dobles una cadena de caracteres que contenga espacios. Esto causa que la cadena de caracteres sea tratada como un solo argumento. Verifique la documentación del sistema operativo para los detalles en la definición de parametros de la linea de comandos para el sistema utilizado.
						Se debe declarar argv adecuadamente. El método mas comun es:
					</p>
 						<pre class="code">
char *argv[];
						</pre>
					<p>
						Los corchetes vacios indican que el arreglo es de tamaño indeterminado. Es posible acceder individualmente a cada argumente al indizar argv. Por ejemplo argv[0] apunta a la primer cadena de caracteres, que es siempre el nombre del programa; argv[1] apunta al primer argumento, y así sucesivamente.
						Note que si no se han especificado argumentos de la linea de comandos, un mensaje de error será mostrado. Un programa con argumentos de la linea de comandos generalmente muestra instrucciones si el usuario trata de ejecutar el programa sin ingresar la información adecuada.
						Para acceser a un caracter individual de uno de los argumento de la linea de comandos, agregué un segundo indice a argv. El primer indice accede a la cadena de caracteres y el segundo indice accede a los caracteres individuales de la cadena de caracteres.
						Normalmente, argc y argv se usan para obtener comandos iniciales en el programa. En teoria, es posible tener hasta 32,767 argumentos, pero la mayoria de los sistemas operativos no permiten mas de unos cuantos. Tipicamente se utilizan estos argumentos para indicar un nombre de archivo u opción.
						Al utilizar argumentos de la linea de comandos le da al programa una aparencia profesional y facilita su uso en archivos de procesamiento por lotes. Cuando un programa no requiere parametros de la linea de comandos, es una practica comun declararlo explicitamente como carente de parametros.
						Debido a la necesidad de compatibilidad con la versión original de C, existe una diminuta pero significante diferencia entre como C y C++ manejan los prototipos de una función que no tiene parametros. En C++, una lista vacia de parametros es simplemente indicada en el prototipo por la ausencia de parametros.
						Por razones historicas, una lista de parametros vacia simplemente indica que no se ha proveido información acerca de los parametros. El lo que se refiere al compilador, la función pudiera tener diversos parametros o no tener ninguno.
						En C, cuando una función no tiene parametros, el prototipo utiliza la palabra reservada void en vez de la lista de parametros. Esto le indica al compilador que la función no tiene parametros, y cualquier llamada a esa función que tenga argumentos es un error.
						Para los programas de C esto se logra al usar la parabra reservada void en su lista de parametros. De cualquier manera, para programas de C++ es posible solamente especificar una lista de parametros vacia. En C++, se permite el uso de void para denotar una lista de parametros vacia, pero es redundante.
						Los nombres argc y argv son tradicionales per arbitrarios. Es posible nombrar estos dos parametros con cualquier otro identificador. Tambien, algunos compiladores pudieran soportar argumentos adicipnales, por lo tanto asegurese de verificar tal hecho en el manual de usuario.   
					</p>
	</body>
</html>