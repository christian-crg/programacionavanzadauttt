<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Briefly it is described how to get data from the keyboard and how to print data to the screen.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Instrucciones de asignación, entrada/salida
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Explicar el método punto de entrada y salida del flujo de datos.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						Ejecutar  un método de diseño de lógica combinacional y secuencial para  el desarrollo  de un  diseño.
					</dd>
				<dt>
					Ser
				</dt>
					<dd>
						Capacidad  para el desarrollo de elementos de un programa óptimo. Aplicación de auto aprendizaje. Razonamiento deductivo, proactivo, iniciativa, dinámico.
					</dd>
			</dl>
			
			<h3>
				cout vs printf/print/putc
			</h3>
				<p>
					En C++, el operador << tiene un rol expandido. Este es aun el operador de desplazamiento hacia la izquierda, pero cuando es usado como es mostrado en el siguiente código, este es también un operador de salida. La palabra cout es un identificador que esta ligado a la pantalla. En realidad al igual que en C, C++ soporta redirección de entrada/salida. Se puede usar cout y el operador << para mostrar cualquier tipo de dato integrado, así como cadenas de caracteres. Nótese que aun es posible utilizar las funciones printf utilizadas en C, pero se recomienda el uso de cout debido a que este también es capaz de manipular objetos.
				</p>
				<pre class="code">
//archivo MiPrimeraClase.h
#include&lt;iostream&gt;

namespace MiPrimerEspacioDeNombres
{
	class MiPrimeraClase
	{
		public:
			void ejecutar()
			{
				std::cout << "El metodo 'ejecutar' de la clase 'MiPrimeraClase' se ha ejecutado." << std::endl;
			}
	}
}
				</pre>
				<pre class="code">
//archivo main.cpp
#include"MiPrimeraClase.h"

void main ()
{
	MiPrimerEspacioDeNombres::MiPrimeraClase pruebaUno = MiPrimerEspacioDeNombres::MiPrimeraClase();
	pruebaUno.ejecutar();
}
				</pre>
				
			<h3>
				cin vs getc/scanf/getch
			</h3>
				<p>
					En C++, el operador >> aun mantiene su significado de desplazamiento hacia la derecha, pero cuando es usado como es mostrado en el siguiente código, este causa que a la variable se le asigne un valor leído del teclado. El identificador cin se refiere al teclado. En general se puede utilizar cin >> para cargar una variable con cualquier dato de los tipos básicos o cadena de caracteres. A pesar de que no se ilustra en el ejemplo, se puede utilizar cualquiera de las funciones de entrada utilizadas en C, como scanf(), en vez de usar cin >>
				</p>
				<pre class="code">
//archivo MiPrimeraClase.h
#include&lt;iostream&gt;

namespace MiPrimerEspacioDeNombres
{
	class MiPrimeraClase
	{
		public:
			void ejecutar()
			{
				int variableACapturar;
				std::cin >> variableACapturar;
				std::cout << "El valor capturado para la variable con identificador 'variableACapturar' ha sido" << variableACapturar << std::endl;
			}
	}
}
				</pre>

			<h3>
				Espacios de nombres
			</h3>
				<p>
					Desde que C++ es un super conjunto de C, la mayoría de los programas C son igualmente programas de C++… Esto indica al compilador usar el espacio de nombres std. Los espacios de nombres son relativamente una nueva adición al C++. Un espacio de nombres crea una región declarativa en que varios elementos de programa pueden ser puestos. Los espacios de nombres ayudan en la organización de grandes programas. La sentencia using informa al compilador que se pretende usar el espacio de nombres std. Este es el espacio de nombres en el cual la librería estándar C++ es declarada. Al usar el espacio de nombres std, se simplifica el acceso a la librería estándar. Cuando se incluye un encabezado moderno de C++ en el programa, los contenidos de ese encabezado son cargados en el espacio de nombres std. Como ya fue mencionado un espacio de nombres es simplemente una región declarativa. El propósito de un espacio de nombres es el localizar los nombres de los identificadores para evitar la colisión de nombres. Los elementos declarados en un espacio de nombres están separados de elementos declarados en otro. 
				</p>
<!--				<pre class="code">
using namespace std;
				</pre>
-->
	</body>
</html>