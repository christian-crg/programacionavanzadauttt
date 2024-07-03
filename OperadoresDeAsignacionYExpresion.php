<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "It list the topics of the subject Advanced Programming. The current subject is divided into 5 units which are subdivided in few other topics.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Operadores de asignación y expresión
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Definir e identificar los operadores y los tipos de operadores que los componen.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						Utilizar correctamente los operadores necesarios para el desarrollo de un programa.
					</dd>
				<dt>
					Ser
				</dt>
					<dd>
						Capacidad  para el desarrollo de elementos de un programa óptimo. Aplicación de auto aprendizaje. Razonamiento deductivo, proactivo, iniciativa, dinámico.
					</dd>
			</dl>
			
			<p>
				Una expresión es un elemento  de un programa que toma un valor. En algunos casos puede ser una secuencia de operaciones y operandos que especifica un cálculo.
			</p>
			
			<h3>
				Sintaxis
			</h3>
				<p class="code">
					Variable = expresión	
				</p>
				<dl>
					<dt>
						Variable
					</dt>
					<dd>
						identificador válido C declarado como variable.
					</dd>
					<dt>
						Expresión
					</dt>
					<dd>
						una constante, otra variable a la que se ha asignado previamente un valor o una fórmula que se ha evaluado y cuyo tipo es el de variable.
					</dd>
				</dl>
				<p>
					«Los programas de computadoras se apoyan esencialmente en la realización de numerosas operaciones aritméticas y matemáticas de diferente complejidad.» Los programas C constan de datos, sentencias de programas y expresiones. Una expresión es, normalmente, una ecuación matemática, tal como 3 + 5. En esta expresión, el símbolo más (+) es el operador de suma, y los números 3 y 5 se llaman operandos. Cuando se utiliza el + entre números (o variables) se denomina operador binario, debido a que el operador + suma dos números. Otro tipo de operador de C es el operador unitario («unario»), que actúa sobre un Único valor. Si la variable x contiene el valor 5, -x es el valor -5. El signo menos (-) es el operador unitario menos. «C soporta un conjunto potente de operadores unarios, binarios y de otros tipos».
				</p>

			<h3>
				Operador de asignación
			</h3>
				<p>
					<ul>
						<li>
							El operador = asigna el valor de la expresión derecha a la variable situada a su izquierda.
						</li>
						<li>
							Este operador es asociativo por la derecha, eso permite realizar asignaciones múltiples.
						</li>
						<li>
							Operadores adicionales al de asignación
							<ul>
								<li>
									*=
								</li>
								<li>
									/=
								</li>
								<li>
									%=
								</li>
								<li>
									+=
								</li>
								<li>
									-=
								</li>
							</ul>
						</li>
					</ul>
				</p>

			<h3>
				Operadores aritméticos
			</h3>
				<table>
					<tr>
						<th>
							Operador
						</th>
						<th>
							Tipos enteros
						</th>
						<th>
							Tipos reales
						</th>
						<th>
							Ejemplo
						</th>
					</tr>
					<tr>
						<td>
							+
						</td>
						<td colspan="2">
							Suma
						</td>
						<td>
							<p class="code">
								x + y
							</p>
						</td>
					</tr>
					<tr>
						<td>
							-
						</td>
						<td colspan="2">
							Resta
						</td>
						<td>
							<p class="code">
								a - b
							</p>
						</td>
					</tr>
					<tr>
						<td>
							*
						</td>
						<td colspan="2">
							Producto
						</td>
						<td>
							<p class="code">
								w * z
							</p>
						</td>
					</tr>
					<tr>
						<td>
							/
						</td>
						<td>
							División entera (cociente)
						</td>
						<td>
							División en punto flotante
						</td>
						<td>
							<p class="code">
								c / 5
							</p>
						</td>
					</tr>
					<tr>
						<td>
							%
						</td>
						<td>
							División entera (residuo)
						</td>
						<td>
							
						</td>
						<td>
							<p class="code">
								d % 7
							</p>
						</td>
					</tr>
				</table>

			<h3>
				Asociatividad
			</h3>
				<table>
					<tr>
						<th>
							Prioridad (Mayor a menor) 
						</th>
						<th>
							Asociatividad
						</th>
					</tr>
					<tr>
						<th>
							+, - (unarios) 
						</th>
						<th rowspan="3">
							Izquierda a derecha
						</th>
					</tr>
					<tr>
						<th>
							*, /, % 
						</th>
					</tr>
					<tr>
						<th>
							+, - 
						</th>
					</tr>
					<tr>
						<th>
							= 
						</th>
						<th>
							Derecha a izquierda 
						</th>
					</tr>
				</table>

			<h3>
				Uso de parentesis
			</h3>
				<ul>
					<li>
						Los paréntesis se pueden utilizar para cambiar el orden usual de evaluación de una expresión determinada por su prioridad y asociatividad.
					</li>
					<li>
						Las subexpresiones entre paréntesis se evalúan en primer lugar según el modo estándar y los resultados se combinan para evaluar la expresión completa.
					</li>
					<li>
						Si los paréntesis están «anidados», se ejecutan en primer lugar los paréntesis más internos.
					</li>
				</ul>

			<h3>
				Operadores de incrementación y decrementación
			</h3>
				<table>
					<tr>
						<th>
							Incrementación
						</th>
						<th>
							Decrementación
						</th>
					</tr>
					<tr>
						<td>
							++n ; n++
						</td>
						<td>
							--n ; n--
						</td>
					</tr>
					<tr>
						<td>
							n += 1
						</td>
						<td>
							n -= 1
						</td>
					</tr>
					<tr>
						<td>
							n = n + 1
						</td>
						<td>
							n = n - 1
						</td>
					</tr>
				</table>

			<h3>
				Operadores relacionales
			</h3>
				<ul>
					<li>
						C no tiene tipos de datos lógicos o booleanos, para representar los valores verdadero (true) y falso (false).
					</li>
					<li>
						En su lugar se utiliza el tipo int para este propósito, con el valor entero 0 que representa a falso y distinto de cero a verdadero.
					</li>
				</ul>
				<h4>
					Sintaxis
				</h4>
					<p class="code">
						expresión operador-relacional expresión
					</p>
					<dl>
						<dt>
							expresión	
						</dt>
						<dd>
							expresiones compatibles C
						</dd>
						<dt>
							operador-relacional
						</dt>
						<dd>
							un operador de la tabla siguiente
						</dd>
					</dl>
				<table>
					<tr>
						<th>
							Operador
						</th>
						<th>
							Significado
						</th>
						<th>
							Ejemplo
						</th>
					</tr>
					<tr>
						<td>
							==
						</td>
						<td>
							igual
						</td>
						<td>
							a == b
						</td>
					</tr>
					<tr>
						<td>
							!=
						</td>
						<td>
							distinto
						</td>
						<td>
							z != y
						</td>
					</tr>
					<tr>
						<td>
							>
						</td>
						<td>
							mayor que
						</td>
						<td>
							d > c
						</td>
					</tr>
					<tr>
						<td>
							<
						</td>
						<td>
							menor que
						</td>
						<td>
							w < x
						</td>
					</tr>
					<tr>
						<td>
							>=
						</td>
						<td>
							mayor o igual que
						</td>
						<td>
							f >= e
						</td>
					</tr>
					<tr>
						<td>
							<=
						</td>
						<td>
							menor o igual que
						</td>
						<td>
							v <= u
						</td>
					</tr>
				</table>
				<p>
					Operadores tales como >= e == que comprueban una relación entre dos operandos se llaman operadores relacionales.
					Los operadores relacionales se usan normalmente en sentencias de selección ( if ) o de iteración (while, for), que sirven para comprobar una condición. Utilizando operadores relacionales se realizan operaciones de igualdad, desigualdad y diferencias relativas. La Tabla anterior muestra los operadores relacionales que se pueden aplicar a operandos de cualquier tipo de dato estándar: char, int, float, double, etc.
					Cuando se utilizan los operadores en una expresión, el operador relacional produce un 0, o un 1, dependiendo del resultado de la condición. 0 se devuelve para una condición falsa, y 1 se devuelve para una condición verdadera.
					Un error típico, incluso entre programadores experimentados, es confundir el operador de asignación (=) con el operador de igualdad (==).
				</p>
				<p class="example">
					Por ejemplo, si se escribe
					c = 3 < 7 ;
					la variable c se pone a 1, dado que 3 es menor que 1, entonces la operación < devuelve un valor de 1, que se asigna a c.
				</p>

			<h3>
				Operadores lógicos
			</h3>
				<table>
					<tr>
						<th>
							Operador
						</th>
						<th>
							Operación lógica
						</th>
						<th>
							Ejemplo
						</th>
					</tr>
					<tr>
						<td>
							!
						</td>
						<td>
							Inversor (NOT)
						</td>
						<td>
							!g
						</td>
					</tr>
					<tr>
						<td>
							&&
						</td>
						<td>
							operandoUno AND/"Y" operandoDos
						</td>
						<td>
							3 && t
						</td>
					</tr>
					<tr>
						<td>
							||
						</td>
						<td>
							operandoUno OR/"O" operandoDos
						</td>
						<td>
							h || 8
						</td>
					</tr>
				</table>

			<h3>
				Operadores de manipulación de bits
			</h3>
				<table>
					<tr>
						<th>
							Operador
						</th>
						<th>
							Operación
						</th>
					</tr>
					<tr>
						<td>
							&
						</td>
						<td>
							AND bit a bit
						</td>
					</tr>
					<tr>
						<td>
							|
						</td>
						<td>
							OR bit a bit
						</td>
					</tr>
					<tr>
						<td>
							^
						</td>
						<td>
							OR exclusiva (XOR) bit a bit
						</td>
					</tr>
					<tr>
						<td>
							~
						</td>
						<td>
							Complemento a uno (not bit a bit)
						</td>
					</tr>
					<tr>
						<td>
							<<
						</td>
						<td>
							Desplazamiento de bits a la izquierda
						</td>
					</tr>
					<tr>
						<td>
							>>
						</td>
						<td>
							Desplazamiento de bits a la derecha
						</td>
					</tr>
				</table>

			<h3>
				Operadores de asignación adicionales
			</h3>
				<table>
					<tr>
						<th>
							Simbolo
						</th>
						<th>
							Uso
						</th>
						<th>
							Descripción
						</th>
					</tr>
					<tr>
						<td>
							<<=
						</td>
						<td>
							s <<= i 
						</td>
						<td>
							Desplaza 's' a la izquierda 'i' bits y asigna el resultado a 's'
						</td>
					</tr>
					<tr>
						<td>
							>>=
						</td>
						<td>
							j >>= r 
						</td>
						<td>
							Desplaza 'j' a la derecha 'r' bits y asigna el resultado a 'j'
						</td>
					</tr>
					<tr>
						<td>
							&=
						</td>
						<td>
							q &= k 
						</td>
						<td>
							Asigna a 'q' el valor q & k
						</td>
					</tr>
					<tr>
						<td>
							^=
						</td>
						<td>
							l ^= p 
						</td>
						<td>
							Establece a 'l' el resultado de la operación l ^ p
						</td>
					</tr>
					<tr>
						<td>
							|=
						</td>
						<td>
							o |= m 
						</td>
						<td>
							Guarda en la variable 'o' el resultado de la operación o ^ m
						</td>
					</tr>
				</table>

			<h3>
				Operadores de direcciones
			</h3>
				<dl>
					Los operadores de direcciones, son operadores que permiten manipular las direcciones de las variables y registros en general.
					<dt>
						*
					</dt>
					<dd>
						Lee o modifica el valor apuntado por la expresión. Se corresponde con un puntero y el resultado es del tipo apuntado.
					</dd>
					<dt>
						&
					</dt>
					<dd>
						Devuelve un puntero al objeto utilizado como operando, que debe ser un lvalue (variable dotada de una dirección de memoria). El resultado es un puntero de tipo idéntico al del operando. Permite acceder a un miembro de un dato agregado (unión, estructura).
					</dd>
					<dt>
						->
					</dt>
					<dd>
						Accede a un miembro de un dato agregado (unión, estructura) apuntado por el operando de la izquierda.
					</dd>
				</dl>

			<h3>
				Operador condicional
			</h3>
				<p>
					El operador condicional, es un operador ternario que devuelve un resultado cuyo valor depende de la condición comprobada. Tiene asociatividad de derecha a izquierda. Al ser un operador ternario requiere tres operandos. El operador condicional se utiliza para reemplazar a la sentencia if-else lógica en algunas situaciones. La precedencia de ? y : es menor que la de cualquier otro operando tratado hasta este momento.
				</p>
				<p class="code">
					expresión-c ? expresión-v : expresión-f
				</p>

			<h3>
				Operador coma
			</h3>
				<p>
					El operador coma permite combinar dos o más expresiones separadas por comas en una sola línea. Se evalúa primero la expresión de la izquierda y luego las restantes expresiones de izquierda a derecha. La expresión más a la derecha determina el resultado global. El operador coma tiene la menor prioridad de todos los operadores C, y se asocia de izquierda a derecha.
				</p>
				<p class="code">
					expresión, expresión, expresión, …, expresión-f;
				</p>

			<h3>
				Operadores especiales
			</h3>
				<dl>
					<dt>
						Operador ()
					</dt>
					<dd>
						Es el operador de llamada a funciones. Sirve para encerrar los argumentos de una función, efectuar conversiones explícitas de tipo, indicar en el seno de una declaración que un identificador corresponde a una función, resolver los conflictos de prioridad entre operadores.
					</dd>
					<dt>
						Operador []
					</dt>
					<dd>
						Sirve para dimensionar los arreglos y designar un elemento de un arreglo.
					</dd>
				</dl>
				<pre class="code">
double v[20]; / * define un array de 20 elementos * /
printf ("v[2] = %e",v[2]); / * escribe el elemento 2 de v * /
return v[i-INFERIOR]; / * devuelve el elemento i-INFERIOR * /
				</pre>

			<h3>
				Operador sizeof
			</h3>
				<ul>
					Con frecuencia su programa necesita conocer el tamaño en bytes de un tipo de dato o variable. C proporciona el operador sizeof, que toma un argumento, bien un tipo de dato o bien el nombre de una variable (escalar, array, registro, etc.).
					<li>
						sizeof (nombre-variable)
					</li>
					<li>
						sizeof(tipo-dato)
					</li>
					<li>
						sizeof(expresión)
					</li>
				</ul>

			<h3>
				Conversiones de tipo
			</h3>
				<ul>
					Con frecuencia, se necesita convertir un valor de un tipo a otro sin cambiar el valor que representa. Las conversiones de tipos pueden ser implícitas (ejecutadas automáticamente) o explícitas (solicitadas específicamente por el programador). C hace conversiones de tipos automáticamente.
					<li>
						C convierte valores cuando se asigna un valor de un tipo a una variable de otro tipo.
					</li>
					<li>
						C convierte valores cuando se combinan tipos mixtos en expresiones.
					</li>
					<li>
						C convierte valores cuando se pasan argumentos a funciones.
					</li>
				</ul>
				<ul>
					Tipos
					<li>
						Implícitas
					</li>
					<li>
						Explícitas
					</li>
				</ul>

			<h3>
				Tipos de datos
			</h3>
				<table>
					<tr>
						<th>
							Tipo
						</th>
						<th>
							Bytes
						</th>
						<th>
							Otros nombres
						</th>
						<th>
							Rango de valores
						</th>
					</tr>
					<tr>
						<td>
							int
						</td>
						<td>
							4
						</td>
						<td>
							signed
						</td>
						<td>
							–2,147,483,648 a 2,147,483,647
						</td>
					</tr>
					<tr>
						<td>
							unsigned int
						</td>
						<td>
							4
						</td>
						<td>
							unsigned
						</td>
						<td>
							0 a 4,294,967,295
						</td>
					</tr>
					<tr>
						<td>
							__int8
						</td>
						<td>
							1
						</td>
						<td>
							char
						</td>
						<td>
							–128 a 127
						</td>
					</tr>
					<tr>
						<td>
							unsigned __int8
						</td>
						<td>
							1
						</td>
						<td>
							unsigned char
						</td>
						<td>
							0 a 255
						</td>
					</tr>
					<tr>
						<td>
							__int16
						</td>
						<td>
							2
						</td>
						<td>
							short, short int, signed short int
						</td>
						<td>
							–32,768 a 32,767
						</td>
					</tr>
					<tr>
						<td>
							unsigned __int16
						</td>
						<td>
							2
						</td>
						<td>
							unsigned short, unsigned short int
						</td>
						<td>
							0 a 65,535
						</td>
					</tr>
					<tr>
						<td>
							__int32
						</td>
						<td>
							4
						</td>
						<td>
							signed, signed int, int
						</td>
						<td>
							–2,147,483,648 a 2,147,483,647
						</td>
					</tr>
					<tr>
						<td>
							unsigned __int32
						</td>
						<td>
							4
						</td>
						<td>
							unsigned, unsigned int
						</td>
						<td>
							0 a 4,294,967,295
						</td>
					</tr>
					<tr>
						<td>
							__int64
						</td>
						<td>
							8
						</td>
						<td>
							long long, signed long long
						</td>
						<td>
							–9,223,372,036,854,775,808 a 9,223,372,036,854,775,807
						</td>
					</tr>
					<tr>
						<td>
							unsigned __int64
						</td>
						<td>
							8
						</td>
						<td>
							unsigned long long
						</td>
						<td>
							0 a 18,446,744,073,709,551,615
						</td>
					</tr>
					<tr>
						<td>
							char
						</td>
						<td>
							1
						</td>
						<td>
							ninguno
						</td>
						<td>
							–128 a 127
						</td>
					</tr>
					<tr>
						<td>
							signed char
						</td>
						<td>
							1
						</td>
						<td>
							ninguno
						</td>
						<td>
							–128 a 127
						</td>
					</tr>
					<tr>
						<td>
							unsigned char
						</td>
						<td>
							1
						</td>
						<td>
							ninguno
						</td>
						<td>
							0 a 255
						</td>
					</tr>
					<tr>
						<td>
							short
						</td>
						<td>
							2
						</td>
						<td>
							short int, signed short int
						</td>
						<td>
							–32,768 a 32,767
						</td>
					</tr>
					<tr>
						<td>
							unsigned short
						</td>
						<td>
							2
						</td>
						<td>
							unsigned short int
						</td>
						<td>
							0 a 65,535
						</td>
					</tr>
					<tr>
						<td>
							long
						</td>
						<td>
							4
						</td>
						<td>
							long int, signed long int
						</td>
						<td>
							–2,147,483,648 a 2,147,483,647
						</td>
					</tr>
					<tr>
						<td>
							unsigned long
						</td>
						<td>
							4
						</td>
						<td>
							unsigned long int
						</td>
						<td>
							0 a 4,294,967,295
						</td>
					</tr>
					<tr>
						<td>
							long long
						</td>
						<td>
							8
						</td>
						<td>
							ninguno
						</td>
						<td>
							–9,223,372,036,854,775,808 a 9,223,372,036,854,775,807
						</td>
					</tr>
					<tr>
						<td>
							unsigned long long
						</td>
						<td>
							8
						</td>
						<td>
							ninguno
						</td>
						<td>
							0 a 18,446,744,073,709,551,615
						</td>
					</tr>
					<tr>
						<td>
							enum
						</td>
						<td>
							varia
						</td>
						<td>
							ninguno
						</td>
						<td>
							depende
						</td>
					</tr>
					<tr>
						<td>
							float
						</td>
						<td>
							4
						</td>
						<td>
							ninguno
						</td>
						<td>
							3.4E +/- 38 (7 digitos)
						</td>
					</tr>
					<tr>
						<td>
							double
						</td>
						<td>
							8
						</td>
						<td>
							ninguno
						</td>
						<td>
							1.7E +/- 308 (15 digitos)
						</td>
					</tr>
					<tr>
						<td>
							long double
						</td>
						<td>
							8
						</td>
						<td>
							ninguno
						</td>
						<td>
							1.7E +/- 308 (15 digitos)
						</td>
					</tr>
					<tr>
						<td>
							wchar_t
						</td>
						<td>
							2
						</td>
						<td>
							__wchar_t
						</td>
						<td>
							0 a 65,535
						</td>
					</tr>
				</table>

			<h3>
				Palabras reservadas
			</h3>
				<table>
					<tr>
						<td>
							asm
						</td>
						<td>
							auto
						</td>
						<td>
							bool
						</td>
						<td>
							break
						</td>
						<td>
							case
						</td>
					</tr>
					<tr>
						<td>
							catch
						</td>
						<td>
							char
						</td>
						<td>
							class
						</td>
						<td>
							const
						</td>
						<td>
							const_cast
						</td>
					</tr>
					<tr>
						<td>
							continue
						</td>
						<td>
							default
						</td>
						<td>
							delete
						</td>
						<td>
							do
						</td>
						<td>
							double
						</td>
					</tr>
					<tr>
						<td>
							dynamic_cast
						</td>
						<td>
							else
						</td>
						<td>
							enum
						</td>
						<td>
							explicit
						</td>
						<td>
							export
						</td>
					</tr>
					<tr>
						<td>
							extern
						</td>
						<td>
							false
						</td>
						<td>
							float
						</td>
						<td>
							for
						</td>
						<td>
							friend
						</td>
					</tr>
					<tr>
						<td>
							goto
						</td>
						<td>
							if
						</td>
						<td>
							inline
						</td>
						<td>
							int
						</td>
						<td>
							long
						</td>
					</tr>
					<tr>
						<td>
							mutable
						</td>
						<td>
							namespace
						</td>
						<td>
							new
						</td>
						<td>
							operator
						</td>
						<td>
							private
						</td>
					</tr>
					<tr>
						<td>
							protected
						</td>
						<td>
							public
						</td>
						<td>
							register
						</td>
						<td>
							reinterpret_cast
						</td>
						<td>
							return
						</td>
					</tr>
					<tr>
						<td>
							short
						</td>
						<td>
							signed
						</td>
						<td>
							sizeof
						</td>
						<td>
							static
						</td>
						<td>
							static_cast
						</td>
					</tr>
					<tr>
						<td>
							struct
						</td>
						<td>
							switch
						</td>
						<td>
							template
						</td>
						<td>
							this
						</td>
						<td>
							throw
						</td>
					</tr>
					<tr>
						<td>
							true
						</td>
						<td>
							try
						</td>
						<td>
							typedef
						</td>
						<td>
							typeid
						</td>
						<td>
							typename
						</td>
					</tr>
					<tr>
						<td>
							union
						</td>
						<td>
							unsigned
						</td>
						<td>
							using
						</td>
						<td>
							virtual
						</td>
						<td>
							void
						</td>
					</tr>
					<tr>
						<td>
							volatile
						</td>
						<td>
							wchar_t
						</td>
						<td>
							while
						</td>
					</tr>
				</table>

			<h3>
				Identificadores
			</h3>
				<p>
					En C++, un identificador es un nombre asignado a una función, variable, o cualquier otro elemento definido por el usuario. Los identificadores pueden ser de uno a varios caracteres de longitud. Los nombres de las variables pueden empezar con cualquier letra del alfabeto o con un guion bajo. Seguido de este viene una letra, digito, o guion bajo. El guion bajo puede ser usado para mejorar la facilidad de lectura de un nombre de variable. Como cuenta_de_lineas. Mayúsculas y minúsculas son vistas como diferentes. MiVariable y mivariable son distintas. Existe una restricción importante, no se puede utilizar ninguna palabra clave como nombre de identificador. Adicionalmente, identificadores como cout tambien estan fuera de limites. En C, los identificadores pueden ser de cualquier longitud. De cualquier manera, no todos los caracteres son necesariamente significativos. Si el identificador va a ser involucrado en un proceso externo de enlace, entonces al menos los primeros seis caracteres serán significativos. Estos identificadores, llamados nombres externos, incluyen nombres de funciones y variables globales que son compartidas entre archivos. Si el identificador no es usado en un proceso externo de enlace, entonces cuando menos los primeros 31 caracteres serán significativos. Este tipo de identificador es llamado nombre interno e incluye los nombres de las variables locales, por ejemplo. En C++, no existe limite en la longitud de un identificador, y cuando menos los primeros 1024 caracteres son significantes. Esta diferencia puede ser útil cuando se convierte un programa de C a C++. El uso de dos caracteres guion bajo seguidos ( __ ) en un identificador, o uno solo seguido por una letra mayúscula, es reservado para implementaciones de C++ en todos los ámbitos. Se debe evitar el uso de un guion bajo seguido por una letra minúscula para nombres de ámbito global debido a posibles conflictos con actuales o futuros identificadores reservados.
				</p>
				<ul>
					<li>
						Un identificador es un nombre asignado por el usuario.
					</li>
					<li>
						A-Z/a-z/_;0-9/A-Z/a-z/_;0-9/A-Z/a-z/_...
					</li>
					<li>
						Sensible a mayúsculas/minúsculas
					</li>
					<li>
						Máximo 2048 caracteres
					</li>
					<li>
						_ _ "PROHIBIDO"; _Abc… "PROHIBIDO"; _abc… No recomendado
					</li>
				</ul>
	</body>
</html>