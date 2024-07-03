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
			Declaración e inicialización de variables de punteros
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Explicar los principales elementos y la arquitectura que conforman la inicialización de punteros y el almacenamiento de memoria dinámica en un programa.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						Determinar  los principales elementos que componen la creación de punteros y los almacenamientos de memoria dinámica.
					</dd>
				<dt>
					Ser
				</dt>
					<dd>
						Responsabilidad, Analítico, Proactivo, Iniciativa, Dinámico, Orden y limpieza, Creativo, Trabajo en equipo, Innovación, Toma de decisiones
					</dd>
			</dl>
			
			<p>
				La correcta asimilación y uso de los punteros es crucial para programar adecuadamente en C/C++ por cuatro razones
			</p>
			<ul>
				<li>
					Los punteros proveen los medios por los cuales las funciones pueden modificar los argumentos utilizados en la llamada a tal función
				</li>
				<li>
					Los punteros soportan asignación dinámica de memoria.
				</li>
				<li>
					Los punteros pueden mejorar la eficiencia de ciertas rutinas.
				</li>
				<li>
					Los punteros proveen soporte para estructuras de datos dinámicas como son las listas enlazadas y arboles binarios 
				</li>
			</ul>
			<p>
				Los punteros son una de las características mas poderosas pero también mas peligrosas en C/C++. Por ejemplo, un puntero no inicializado o sin cause puede provocar que el sistema falle. O quizás peor, es fácil utilizar los punteros incorrectamente, causando errores que
				son demasiado difíciles de encontrar.
			</p>
				<h3>
					Punteros
				</h3>
					<p>
						Un puntero es una variable que guarda una dirección de memoria. Esta dirección es la ubicación de otro objeto (típicamente, una variable) en memoria. Si una variable contiene la dirección de otra variable, se dice que la primera variable apunta a la segunda.
						Por ejemplo, sí una variable en la dirección de memoria 0x1234 es apuntada por una variable en la dirección 0x4321, la dirección 0x4321 contendrá el valor 0x1234
					</p>
					<h4>
						Variables
					</h4>
						<p>
							Sí una variable habrá de ser puntero, esta debe ser declarada como tal. La declaración de un puntero consiste de un tipo de dato, el símbolo * y el identificador de la variable. La forma general para declarar una variable es
						</p>
						<pre class="code">
tipoDeDato *identificador;
						</pre>
						<p>
							de donde "tipoDeDato" es cualquier tipo de dato valido (el tipo base del puntero) e "identificador" es el nombre de la variable tipo puntero. El tipo base del puntero define a que tipos de variables el puntero puede apuntar. Técnicamente, cualquier tipo de puntero
							puede apuntar a cualquier posición en memoria, pero C/C++ asume que lo que el puntero esta apuntando es un objeto de su tipo base. También, toda la aritmética del puntero es realizada respecto a su tipo base, por consiguiente el tipo base de un puntero es muy importante.
						</p>
					<h4>
						Operadores
					</h4>
						<p>
							Existen dos operadores de punteros especiales * y &. & es un operador unario que regresa la dirección de memoria de su operando.
						</p>
						<pre class="code">
abc = &def;
						</pre>
						<p>
							La línea de código anterior guarda en la variable "abc" la dirección de memoria de la variable "def". Esta dirección es la ubicación interna de la variable dentro de la computadora. Esta no tiene ninguna relación con el valor de la variable "def".
							La operación del operador "&" puede ser recordada como el indicar "la dirección de". Por lo tanto, la sentencia de asignación anterior puede ser leída como "abc recibe la dirección de def". Por ejemplo, asuma que la variable def utiliza en la dirección de memoria
							0xABCD para almacenar su valor. También asuma que la variable def tiene un valor de 1234. Entonces, después de la asignación anterior, abc tendrá el valor 0xABCD.
						</p>
						<p>
						El segundo operador, *, es el complemento de &. Es un operador unario que regresa el valor de la variable ubicada en la dirección que le sigue. Por ejemplo, si abc contiene la dirección de memoria de la variable def,
						</p>  
						<pre class="code">
ghi = *abc;
						</pre>
						<p>
							la sentencia anterior pone el valor de def en "ghi". Siguiendo con este ejemplo, ghi tiene el valor 1234 por que 1234 es el valor guardado en la ubicación 0xABCD, que es la dirección de memoria almacenada en abc. La operación del operador * puede ser recordada como
							"en la dirección". En este caso la sentencia puede ser leída como "ghi recibe el valor de la dirección abc".  
						</p>
					<h4>
						Expresiones
					</h4>
						<p>
							En general, las expresiones que involucran punteros se conforman a las mismas reglas que cualquier otra expresión de C/C++.
						</p>
						<h5>
							Asignaciones
						</h5> 
							<p>
								Así como con cualquier variable, un puntero puede ser usado en el lado derecho de una sentencia de asignación para asignar su valor a otro puntero.
							</p>
						<h5>
							Aritmética
						</h5>
							<p>
								Solamente dos operaciones pueden ser utilizadas en los punteros: suma y resta. Para entender que ocurre en la aritmética de punteros, suponga PUno es un puntero entero con un valor actual de 1000 y asuma que los enteros son de 4 bytes de longitud. Después
								de la expresión
							</p>
							<pre class="code">
pUno++;
							</pre>
							<p>
								el contenido de pUno es 1004, NO 1001! Cada vez que pUno se incrementa, este apunta al siguiente entero. Lo mismo ocurre para decrementos. Por ejemplo,
							</p>
							<pre class="code">
pUno--;
							</pre>
							<p>
								causara que pUno tenga el valor 996, asumiendo que previamente era 1000. Generalizando a partir del ejemplo anterior, las siguientes reglas gobiernan la aritmética de punteros. Cada vez que un puntero se incrementa, este apunta a la ubicación en memoria del
								siguiente elemento de su tipo base. Cada vez que este se decrementa, este apunta a la ubicación del elemento anterior. Cuando se aplica a punteros tipo caractér (char), ello se parecerá a aritmética "normal" debido a que los caracteres son siempre de 1 byte en longitud.
								Todos los demás punteros incrementarán o decrementarán por la longitud del tipo de dato al que apuntan. Esta aproximación asegura que un puntero siempre este apuntando a un elemento apropiado de su tipo base. Uno no esta limitado a operaciones de incrementación
								y decrementación. Es posible también sumar o restar enteros a o de punteros. La expresión
							</p>
							<pre class="code">
pUno = pUno + 9;
							</pre>
							<p>
								hace que pUno apunte al noveno elemento del tipo de pUno mas allá del que actualmente esta apuntando. Además de sumar y restar un puntero y un entero, la única operación restante que se puede aplicar en un puntero es el restarlo de otro puntero.
								Mayormente, el restar un puntero de otro solo hace sentido cuando ambos punteros apuntan a un objeto en común, como un arreglo. La resta entonces indica el numero de elementos del tipo base que separan los dos valores de punteros. A parte de estas operaciones,
								ninguna otra operación aritmética puede ser aplicada a punteros. No es posible multiplicar o dividir punteros; no es posible sumar punteros; no es posible aplicar operadores de manipulación de bits como desplazamiento o operadores de enmascarado a estos;
								no es posible sumar o restar tipos float o double a punteros.
							</p>
						<h5>
							Comparaciones
						</h5>
							<p>
								Es posible comparar dos punteros en una expresión relacional. Por ejemplo, dados los punteros x e y, la siguiente sentencia es perfectamente valida. 
							</p>
							<pre class="code">
if(x&lt;y)
	cout &lt;&lt; "x apunta a una posición mas baja que y" &lt;&lt; endl;
							</pre>
							<!--
								Generalmente, las comparaciones de punteros son utiles solo cuando dos o mas punteros apuntan a un objeto comun. Como un ejemplo, imagine que esta construyendo una rutina para una pila que contendrá valores enteros. Una pila es una lista que usa como método
								de acceso "el primero en entrar, es el ultimo en salir" [FILO - first in, last out]. Este es usualmente comparado a una pila de platos en una mesa - el que se pone primero es el último a ser usado. Las pilas son frecuentemente utilizadas en compiladores,
								interpretes, hojas de calculo y otros programas relacionados al sistema. Para crear una pila, se necesitan dos rutinas: agregar() y extraer(). La función agregar() pone valores en la pila, y extraer() los quita. La pila se almacena en un arreglo, que tiene una longitud de
								tamanoPila elementos. 
							-->
					<h4>
						Asignación dinámica de memoria
					</h4>
						<p>
							Una vez compilados, todos los programas C/C++ organizan la memoria de la computadora en cuatro regiones: código del programa, datos globales, la pila y el montículo. El montículo es una area de memoria libre que es administrada por las funciones de asignación
							dinámica de memoria malloc() y free(). A pesar de que C++ aun soporta las funciones de asignación dinámica de C, este también define su propia aproximación, que se basa en operadores de asignación dinámica.  

						</p>
	</body>
</html>