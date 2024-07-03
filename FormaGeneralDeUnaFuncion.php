<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Just the tip of the iceberg. It shows basic and general review of functions in C++.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming, loops, for, while, ">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Forma general de una función
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Describir los tipos y características, así como los parámetros que debe contener dicha estructura, así como las ventajas de aplicarla.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						<ul>
							<li>
								Identificar las principales arquitecturas de las funciones.
							</li>
							<li>
								Comprender los aspectos del entorno de programación para su creación.
							</li>
							<li>
								Analizar los Fundamentos de las instrucciones.
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
			
			<dl>
				<dt>
					Función
				</dt>
				<dd>
					Función: Una función es, sencillamente, un conjunto de sentencias que se pueden llamar desde cualquier parte de un programa. Las funciones permiten al programador un grado de abstracción en la resolución de un problema
				</dd>
			</dl>
			<p>
				Una función es un miniprograma dentro de un programa. Las funciones contienen varias sentencias bajo un solo nombre, que un programa puede utilizar una o más veces para ejecutar dichas sentencias. Las funciones ahorran espacio, reduciendo repeticiones y haciendo mas fácil la programación , proporcionando un medio de dividir un proyecto grande en módulos pequeños más manejables. C fue diseñado como un lenguaje de programación estructurado, también llamado programación modular. Por esta razón, para escribir un programa se divide éste en varios módulos, en lugar de uno solo largo. El programa se divide en muchos módulos (rutinas pequeñas denominadas funciones), que producen muchos beneficios: aislar mejor los problemas, escribir programas correctos más rápido y producir programas que son mucho más fáciles de mantener.
			</p>
			<pre class="code">
tipoDeDatoDeRetorno nombreFunción (listaDeParametros)
{
	cuerpo de la función
	return expresión;
}

tipoDeDatoDeRetorno	->	Tipo de valor devuelto por la función o la palabra reservada void si la función no devuelve ningún valor.
nombreFunción		->	Identificador o nombre de la función.
listaDeParametros	->	Lista de declaraciones de los parámetros de la función separados por comas.
Expresión		->	Valor que devuelve la función.
			</pre>
			<p>
				Una función puede regresar cualquier tipo de dato mientras <strong>no</strong> sea un arreglo. La "listaDeParametros", es una lista de nombres de variables y tipos de datos asociados separados por coma que reciben los valores de los argumentos cuando se llama la función.
				Una función puede ser declarada sin parámetros, en cuyo caso la lista de parámetros no se incluye o bien se denota explícitamente por medio de la palabra reservada void. De cualquier manera, aun sí no se incluye la lista de parámetros, se deben incluir los paréntesis.
				En la declaración de variables, es posible declarar diversas variables de un mismo tipo de dato separando únicamente los identificadores de tales variables por comas. Por el contrario, todos los parámetros deben ser declarados individualmente, especificando para cada uno tipo e identificador.
			</p>
				<h3>
					Ámbito de las funciones
				</h3>
					<p>
						Las reglas de ámbito de un lenguaje son las reglas que determinan sí un segmento de código tiene acceso a otro fragmento de código o variable. Cada función es un bloque de código discreto.
						El código de una función es privado y no es posible acceder a éste a través de ninguna sentencia a excepción de la llamada a dicha función. Por ejemplo, no es posible saltar la ejecución hasta la mitad de otra función.
						El código que constituye el cuerpo de una función esta oculto del resto del programa y a menos que utilice variables globales, este no puede afectar o ser afectado por otras partes del programa.
						Expresado de otra manera, el código y datos que son definidos dentro de una función no pueden interactuar con el código o datos definidos en otra función debido a que las dos funciones pertenecen a distintos ámbitos.
						Las variables que se definen dentro de una función son llamadas variables locales. Una variable local existe mientras se ejecuta la función a la que pertenece y es destruida una vez que concluye la ejecución de la función.
						Por lo tanto, las variables locales no son capaces de conservar su valor entre llamadas a función. La única excepción a tal regla es cuando la variable es declarada con la clase especificadora de almacenamiento <strong>static</strong>.
						Ello provoca que el compilador trate la variable como si esta fuera global para propósito de almacenamiento, pero limita su ámbito al solo estar disponible para la función en la cual fue declarada.
						En C y C++ no es posible declarar una función dentro de otra función. Ésta es la razón por la cual C ni C++ son técnicamente lenguajes estructurados en bloques.
					</p>
	</body>
</html>