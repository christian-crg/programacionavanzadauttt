<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Each function require a prototypic declaration, this topic will cover the escential aspects of it.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming, loops, for, while, ">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Prototipos de funciones
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Desarrollar un mapa conceptual de  la arquitectura  y funciones. Elaborar programas en lenguaje de programación enfocado al uso de funciones a partir de diagramas de flujo y estado que utilicen:
						<ul>
							<li>
								Distintos tipos de variables.
							</li>
							<li>
								Operaciones aritméticas, lógicas y relacionales.
							</li>
						</ul>
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						<ol>
							<li>
								Reconocer las estructuras de programación y funciones en un entorno de programación para la aplicación de nuevas tecnologías de información.
							</li>
							<li>
								Comprender el diseño de programas estructurados en Maquina de estado, así como el proceso de prueba y depuración de los programas.
							</li>
						</ol>
					</dd>
				<dt>
					Ser
				</dt>
					<dd>
						Capacidad para el desarrollo de elementos de un programa óptimo. Aplicación de auto aprendizaje. Razonamiento deductivo, proactivo, iniciativa, dinámico.
					</dd>
			</dl>
			
				<h3>
					Prototipo de una función
				</h3>
					<p>
						El prototipo de una función declara la función antes de definirla. El prototipo permite al compilador conocer el tipo de dato de retorno de la función, así como el numero y tipo de cualquier parámetro que la función pudiera tener.
						El compilador necesita saber esta información antes de que la función sea llamada. Esta es la razón por la cual el prototipo se ubica antes de la función punto de entrada <strong>main</strong>. La única función que no requiere un prototipo es main(),
						debido a que es predefinida por C++ al ser la primer función que se llama cuando se ejecuta el programa. La palabra reservada void denota que una función no regresa un valor.
						En C++, las funciones que no regresan valores se declaran con tipo de dato de retorno void.
						En C++ todas las funciones deben ser declaradas antes de ser usadas. Esto se logra normalmente utilizando una declaración prototípica. Las declaraciones prototípicas no fueron parte del lenguaje C originalmente.
						Estas fueron, no obstante, agregadas cuando C fue estandarizado. Mientras los prototipos no son técnicamente requeridos por C estándar, su uso es altamente sugeridos. Las declaraciones prototípicas han sido siempre requeridas en C++.
						Los prototipos permiten a ambos c y C++ el proveer una robusta verificación de tipos de dato, algo similar a lo proveído por lenguajes como Pascal.
						Cuando se hace uso de prototipos, el compilador puede buscar y reportar cualquier conversión ilegal de tipos entre el tipo de los argumentos utilizados para llamar una función y el tipo definido de sus parámetros.
						El compilador también interceptará diferencias entre el numero de argumento utilizados para llamar una función y el numero de parámetros en la función.
					</p>
					<pre class="code">
identificador(listaDeParametros);
					</pre>
					<p>
						El uso de nombres de parámetros es opcional. No obstante, estos permiten al compilador identificar cualquier disparidad en los tipos de datos por nombre cuando un error ocurre, por lo tanto es una buena practica incluirlos.
						La definición de una función puede también servir como prototipo sí su definición se ubica antes de la primera llamada a tal función. Mientras es posible que la definición de la función funja como su prototipo en programas pequeños, es poco usual en programas grandes especialmente si se utilizan diversos archivos.
						Los prototipos de las funciones ayudan en prevenir errores antes de que ocurran. Adicionalmente, estos ayudan a verificar que el programa funcione correctamente al no permitir que las funciones sean llamadas con argumentos inválidos.
						Desde las primeras versiones de C no existía soporte completo para la sintaxis de prototipos, prototipos son técnicamente opcionales en C. Esto es necesario para el soporte de pre-prototipos en código C.
						Cuando se porta código C a C++, es probable que sea necesario agregar los prototipos completos antes de poder compilar. A pesar de que los prototipos don opcionales en C, son requeridos en C++. Esto significa que toda función en un programa de C++ debe incluir su prototipo completo.    
					</p>

				<h3>
					Sentencia <strong>return</strong>
				</h3>
					<p>
						La sentencia return es utilizada para regresar de una función. Es categorizada como una sentencia de salto debido a que causa que la ejecución regrese(salte de regreso) al punto en el cual la llamada a función fue hecha. Una sentencia return puede o no tener un valor asociado con esta.
						Si tiene un valor asociado con esta, tal valor se vuelve el valor que regresa la función. En C, una función cuyo tipo de dato de retorno sea no nulo técnicamente no tiene que regresar un valor rigurosamente. Si no se especifica un valor de retorno, un valor aleatorio en memoria es regresado.
						De cualquier manera, en C++, una función de cualquier tipo de dato de retorno excepto void debe regresar un valor. Esto es, en C++, sí una función se especificada con un tipo de dato de retorno, cualquier sentencia return dentro de tal función debe tener un valor asociado.
						Incluso en C, sí una función se declara con un tipo de dato de retorno no nulo, es una practica altamente recomendable realmente regresar un valor. La forma general de la sentencia return es:
					</p>
					<pre class="code">
return expresión;
					</pre>
					<p>
						La expresión se debe incluir únicamente si la función se declara con un tipo de dato de retorno distinto a void. En tal caso el valor de la expresión será el valor de retorno de la función.
						Es posible utilizar tantas sentencias return como se crea pertinente desde una función. Sin embargo, la ejecución de la función se detendrá tan pronto como se ejecute cualquiera de tales sentencias return. La llave } también causa que la ejecución del programa regrese el control al código que inicialmente llamo la función.
						Es lo mismo que return pero sin ningun valor especificado. Sí esto ocurre dentro de una función con tipo de dato de retorno distinto a void, entonces el valor de retorno de la función queda indefinido. Una función declarada como void puede no contener una sentencia return que especifique un valor.
						Debido a que una función con tipo de dato de retorno void no tiene valor de retorno, hace sentido que ninguna sentencia return dentro del cuerpo de una función con tipo de dato de retorno void puede regresar un valor.
					</p>
	</body>
</html>