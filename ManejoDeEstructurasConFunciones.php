<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Methods, pass of objects and structs as arguments as well as data return.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Manejo de estructuras con funciones
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Conocer el manejo de funciones estructuradas y los parámetros que deben de contener dichas clases creadas.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						Establecer clases con estructuras sólidas y establecidas para la optimización de procesos y la base para una buena programación.
					</dd>
				<dt>
					Ser
				</dt>
					<dd>
						Capacidad  para el desarrollo de elementos de un programa óptimo. Aplicación de auto aprendizaje. Razonamiento deductivo, proactivo, iniciativa, dinámico.
					</dd>
			</dl>
			
			<h3>
				Pasando estructuras a funciones
			</h3>
				<h4>
					Paso de miembros de estructuras a funciones
				</h4>
					<p>
						Cuando se pasa un miembro de una estructura a una función, lo mas probable es que se este pasando el valor de ese miembro a la función, Por lo tanto, se esta pasando una sola variable (a menos que, por supuesto, ese elemento sea compuesto, como un arreglo de caracteres).
						Si se desea pasar la dirección de un miembro de la estructura para realizar el paso de parámetro por referencia, se deberá poner el operador & antes del nombre de la estructura. Nótese que el operador & precede el nombre de la estructura, no el nombre del miembro.
						Nótese también que un arreglo ya denota una dirección, por tanto no se requiere &. De cualquier manera, cuando se accede un elemento en especifico del arreglo el & si se necesita. 
					</p>
				<h4>
					Paso de estructuras a funciones
				</h4>
					<p>
						Cuando una estructura se usa como un argumento para una función, la estructura por completo es pasada usando el método estándar llamada por valor. Esto significa que cualquier cambio hecho al contenido de la estructura dentro de la función a la cual esta fue
						pasada no afectan la estructura usada como argumento. Cuando de usa una estructura como parámetro, lo mas importante a recordar es que el tipo de dato del argumento debe coincidir con el tipo de dato del parámetro. La mejor manera para hacer esto es el definir
						una estructura globalmente y después utilizar su etiqueta para declarar variables estructura o parámetros como se necesite.
					</p>
			<h3>
				Métodos y clases
			</h3>
				<h4>
					Métodos
				</h4>
					<p>
						Los métodos de una clase siguen la misma sintaxis de una función. Si el código del método se define dentro de la clase se creará una función en-línea para ese método. Cualquier método definido dentro de la clase se convierte automáticamente en una función en-línea, si es
						posible. No es necesario preceder su declaración con la palabra reservada inline.
					</p>
	</body>
</html>