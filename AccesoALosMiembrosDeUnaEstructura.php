<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Programación Avanzada
		</title>
		<meta	name = "description"
				content = "Main aspects about structs and classes are explained.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<h2>
			Acceso a los miembros de una estructura
		</h2>
			<dl>
				<dt>
					Saber
				</dt>
					<dd>
						Explicar el entorno y la sintaxis de programación para la creación de estructuras en una clase objeto.
					</dd>
				<dt>
					Saber hacer
				</dt>
					<dd>
						<ul>
							<li>
								Identificar la sintaxis de una estructura en el lenguaje de programación. 
							</li>
							<li>
								Diferenciar y utilizar los parámetros requeridos para el uso de clases.
							</li>
						</ul>
					</dd>
				<dt>
					Ser
				</dt>
					<dd>
						Capacidad  para el desarrollo de elementos de un programa óptimo. Aplicación de auto aprendizaje. Razonamiento deductivo, proactivo, iniciativa, dinámico.
					</dd>
			</dl>
		
			<p>
				En C es posible crear cinco tipos de datos personalizados
			</p>
				<dl>
					<dt>
						Estructura
					</dt>
					<dd>
						Es una agrupación de variables bajo un solo nombre y es llamado un tipo de dato compuesto. Los términos agregado o conglomerado son también comúnmente usados.
					</dd>
					<dt>
						Campo de bits
					</dt>
					<dd>
						Es una variación de la estructura y permite fácil acceso a bits individuales.
					</dd>
					<dt>
						Unión
					</dt>
					<dd>
						Permite que la misma localidad de memoria sea definida como dos o mas tipos de datos diferentes.
					</dd>
					<dt>
						Enumeración
					</dt>
					<dd>
						Es una lista de constantes enteras nombradas.
					</dd>
					<dt>
						typedef
					</dt>
					<dd>
						Define un nuevo nombre para un tipo de dato existente.
					</dd>
				</dl>
			<p>
				C++ soporta todos estos tipos y agrega clases. En C++, las estructuras y uniones tienen ambos atributos orientados a objetos y no orientados a objetos.
			</p>
			
			<h3>
				Estructuras
			</h3>
				<p>
					Una estructura es una colección de variables que son referenciadas bajo un solo nombre, proveyendo una manera conveniente de mantener información relacionada junta. La declaración de una estructura forma una plantilla que puede ser usada para crear estructuras de
					objetos. Las variables que conforman la estructura son llamadas miembros de la estructura. A los miembros de una estructura también se les refiere comúnmente como elementos o campos. Usualmente, los miembros de una estructura están relacionados lógicamente. Por
					ejemplo, la información almacenada en una lista de correo como el nombre y dirección es normalmente representada como una estructura. 
				</p>
				<pre class="code">
struct identificadorDeLaEstructura
{
	tipoDeDato nombreDelMiembroUno;
	tipoDeDato nombreDelMiembroDos;
	.
	.
	.
}variablesADeclarar;					
				</pre>
				<p>
					La declaración se termina con punto y coma debido a que una declaración de estructura es una sentencia. También, el nombre de la estructura "identificadorDeLaEstructura" identifica esta estructura de datos en particular y es su especificador de tipo. Al nombre de la
					estructura frecuentemente se le refiere como su etiqueta. Tómese en cuenta que al definir la estructura no se ha declarado ninguna variable (a menos que entre la llave que cierra y el punto y coma se agregue un identificador), solamente se ha definido la forma
					de los datos. Para declarar una variable, es preciso incluir la palabra reservada "struct", el identificador de la estructura y un identificador valido.
				</p>
				<pre class="code">
struct identificadorDelTipoDeEstructura identificadorDeLaVariable;					
				</pre>
				<p>
					Ello declara una variable de tipo "identificadorDelTipoDeEstructura" llamada "identificadorDeLaVariable". Cuando se declara una estructura, se define un tipo de dato compuesto, no una variable. Hasta que no se declare una variable de ese tipo existirá realmente una variable.
					Cuando se declara una variable, el compilador automáticamente reserva espacio suficiente para acomodar a todos sus miembros. Es posible también declarar una o mas variables del mismo tipo de dato al mismo tiempo. Es importante también entender que cada variable estructura
					que se crea contiene sus propias copias de las variables que forman la estructura. El "identificadorDelTipoDeEstructura" o la lista separada por comas de "variablesADeclarar" es opcional pero NO AMBAS.
				</p>
				<h4>
					Acceso a los miembros de una estructura (struct)
				</h4>
					<p>
						Los miembros de una estructura se acceden a través del operador "." punto. El nombre de la variable estructura seguido por un punto y el nombre del miembro referencia ese elemento en particular. Todos los miembros de las estructuras se acceden de la misma manera.
						La forma general se
					</p>
					<pre class="code">
identificadorDeVariable.nombreDelMiembro
					</pre>
				<h4>
					Asignaciones en estructuras
				</h4>
					<p>
						La información contenide en una estructura puede ser asignada a otra estructura del mismo tipo usando una simple sentencia de asignación. Esto es, no es necesario asignar el valor para cada uno de los miembros por separado.
					</p>
				<h4>
					Arreglos de estructuras
				</h4>
					<p>
						Quizás el uso mas común de las estructuras son los arreglos de estructuras. Para declarar un arreglo de estructuras, primero se debe definir una estructura y después declarar un arreglo de ese tipo. Como todas las variables arreglo, los arreglos de estructuras
						empiezan sus índices en 0. 
					</p>
				<h4>
					Diferencia entre C y C++
				</h4>
					<p>
						Existe una diferencia importante entre C y C++ debido a que se relaciona a los nombres de tipos de estructuras, uniones y enumeraciones. En C, para declarar una estructura, se usaría la siguiente sentencia
					</p>
					<pre class="code">
struct identificadorDelTipoDeEstructura identificadorDeLaVariable;
					</pre>
					<p>
						de donde identificadorDelTipoDeEstructura es la etiqueta. Como se muestra en la sentencia anterior, la etiqueta identificadorDelTipoDeEstructura se precede por la palabra reservada <strong>struct</strong>. De cualquier manera en C++, es posible usar la siguiente representación
						corta
					</p>
					<pre class="code">
struct identificadorDelTipoDeEstructura identificadorDeLaVariable;/* Valido para C++, incorrecto para C */
					</pre>
					<p>
						En esta última sentencia, la palabra reservada struct no se necesita. En C++, una vez que una estructura es declarada, es posible declarar variables de su tipo al usar solamente la etiqueta, sin la necesidad de precederla por la palabra reservada struct. La razón de esta
						diferencia es que en C, el nombre de una estructura no define un nombre de tipo completo. Esta es la razón por la que C refiere este nombre como etiqueta. Sin embargo, en C++, el nombre de una estructura es un nombre de tipo completo y puede ser usado como tal para
						definir variables. Tómese en cuenta, de cualquier manera, que aun así es valido usar el estilo de declaración de C en un programa de C++.
					</p>
			<h3>
				Clases
			</h3>
				<p>
					La clase esta en las raíces de C++. Antes de poder crear un objeto en C++, primero se debe definir su forma general usando la palabra reservada <strong>class</strong>. Una clase es sintácticamente similar a una estructura. Una clase puede contener partes publicas
					como privadas. Por omisión, todos los elementos definidos en una clase son privados. Una variable privada, indica que no puede ser accesada por cualquier función que no sea miembro de la clase. Así es como el encapsulamiento es logrado - el acceso a ciertos
					elementos de información es controlado minuciosamente al mantenerlos privados. Es posible también definir funciones privadas, que solamente pueden ser llamadas por otros miembros de la clase. Para hacer partes de una clase publicas (accesibles a otras partes del programa),
					se deben declarar después de la palabra reservada <strong>public</strong>. Todas las variables o funciones definidas después de "public" son accesibles por todas las demás funciones en el programa. Generalmente, el resto del programa accede a un objeto a través
					sus funciones privadas. A pesar de que se pueden tener variables publicas, se recomienda limitar o evitar su uso. En vez, se debe procurar hacer todos los datos privados y controlar el acceso a estos a través de funciones publicas. Por lo tanto, funciones publicas
					proveen la interfaz a la los datos privados de la clase. Esto ayuda a preservar el encapsulamiento. La palabra reservada public se debe seguir por dos puntos ":". Las funciones que pertenecen a la clase son llamadas métodos debido a que son parte de la clase.
					Las variables que pertenecen a la clase son llamadas campos. Solamente los métodos tienen acceso a los campos privados de la clase en que son declarados. Una vez definida una clase, es posible crear un objeto de ese tipo usando el nombre de la clase. En esencia, el
					nombre de la clase se convierte en un nuevo especificador de tipo de dato. Es posible crear objetos cuando se define una clase al poner el identificador de la variable después de la llave que cierra, exactamente de la manera que se hace con una estructura. La forma
					general de la declaración de una clase es
				</p>
				<pre class="code">
class identificadorDeLaClase
{
	campos y métodos privados
public:
	campos y métodos publicos
}listaDeObjetos;
				</pre>
				<p>
					La lista de objetos puede omitirse. En C++, cuando se necesita notificar al compilador acerca de una función, es obligatorio usar su prototipo de manera completa. Además, en C++, todas las funciones deben de incluir declaración prototípica. Los prototipos no son
					opcionales, como lo son en C. Cuando llega el momento de escribir el código de un método que es miembro de una clase, es mandatorio indicar al compilador a que clase pertenece la función. El <strong>::</strong> es llamado el operador de resolución de ámbito.
					Esencialmente, le dice al compilador que cierto campo o método pertenece a una clase o, expuesto de manera diferente, que tal método o campo esta en el ámbito de la clase. En C++, diversas clases diferentes pueden usar los mismos nombres de métodos. El compilador
					sabrá que método pertenece a que clase debido al operador de resolución de ámbito y al nombre de la clase. Para llamar un método desde algún punto del programa fuera de la clase, se debe utilizar el nombre del objeto y el operador punto. Es de suma importancia
					el entender que cada objeto que se declare de cierta clase es totalmente independiente. Ello significa que al inicializar un objeto no provoca que se inicialice otro. La única relación que los objetos declarados de una misma clase tienen es que, obviamente, son
					del mismo tipo. Además, los miembros de un objeto son también independientes de otro objeto de la misma clase. Solamente cuando un método es llamado por código que no pertenece a la clase se debe usar el identificador de la variable y el operador punto. De cualquier
					otra manera, un método puede llamar directamente otro método, sin usar el operador punto. Un método puede referenciar directamente los campos sin la necesidad de usar el operador punto. Recuerde que los campos privados de un objeto son accesibles solamente por métodos
					que también pertenecen a tal objeto.
				</p>
				<h4>
					Campos
				</h4>
					<p>
						Cada campo debe ser declarado bajo el siguiente formato
					</p>
					<pre class="code">
tipoDeDato identificadorDelCampo;
					</pre>
					<p>
						si es que se pretende crear mas de un campo del mismo tipo de dato es posible hacer uso del operador coma.
					</p>
				<h4>
					Constructores y destructores
				</h4>
					<p>
						No es inusual que alguna parte del objeto requiera inicialización antes de que pueda ser usada. Debido a que se requiere inicialización comúnmente, C++ permite a los objetos inicializarse así mismos cuando son creados. Esta inicialización automática es desempeñada
						a través del uso de un constructor. Un Constructor es una método especial que es parte de una clase y tiene el mismo nombre que la clase. En C++, los constructores no pueden regresar un valor. En realidad, la mayoría de constructores imprimen o solicitan nada.
						Estos simplemente desempeñan varias inicializaciones. El constructor de un objeto es llamado automáticamente cuando el objeto es creado. Esto significa que es llamado cuando la declaración del objeto es ejecutada. Existe una diferencia importante entre una sentencia
						de declaración en C y una declaración en C++. En C, las declaraciones de variables son pasivas y resueltas mayormente en tiempo de compilación. Expuesto de manera diferente, en C, las declaraciones de variables no son pensadas como sentencias ejecutables. Sin
						embargo, en C++, las declaraciones de variables son sentencias activas que son, en realidad, ejecutadas en tiempo de ejecución. Una razón para ello es que la declaración de un objeto pudiera requerir el llamar un constructor, por lo tanto causando la ejecución de
						una función. A pesar de que esta diferencia pudiera parecer sublime y en gran medida académica hasta este punto, esto tiene algunas implicaciones importantes relacionadas con la inicialización de variables. El constructor de un objeto es llamado una vez para objetos
						globales o estáticos locales. Para objetos locales, el constructor es llama cada vez que se encuentra la declaración del objeto. El complemento del constructor es el destructor. En diversas circunstancias, un objeto necesita desempeñar alguna acción o acciones
						cuando es destruido. Los objetos locales son creados cuando se ingresa a su bloque y son destruidos cuando el bloque se deja. Los objetos globales son destruidos cuando el programa termina. Existen varias razones respecto al por que un destructor puede ser
						necesario. Por ejemplo, un objeto puede requerir desocupar la memoria que previamente ha reservado. En C++, es el destructor el que se encarga de manejar la desactivación. El destructor tiene el mismo nombre que el constructor pero es precedido por una tilde ~.
					</p>
					<h5>
						Constructores parametrizados
					</h5>
						<p>
							Es posible pasar argumentos a los constructores. Típicamente, estos argumentos son usados para inicializar un objeto cuando es creado. Para crear un constructor parametrizado, simplemente agregue parámetros a este de la misma manera que lo haría para cualquier
							otra función. Cuando se define el cuerpo del constructor, use los parametros para inicializar el objeto. Para pasar un argumento al constructor, se debe especificar su valor cuando un objeto es declarado. C++ tiene dos maneras de lograr esto. La primera es llamar
							directamente el constructor de la clase. El objeto que regresa el constructor es entonces asignado a la instancia del objeto correspondiente. El segundo método es más corto y más conciso. En este método el argumento o argumentos deben seguir el nombre del objeto
							y deben ser encerrados entre un solo par de paréntesis. Este método es utilizado virtualmente por todos los programadores de C++. La forma general del constructor es
							<pre class="code">
tipoDeClase objeto(listaDeArgumentos);
							</pre> 
							listaDeArgumentos es una lista separada por comas que se pasa al constructor.
						</p>
	</body>
</html>