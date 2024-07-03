<!doctype html>
<html lang="es">
	<head>
		<meta charset = "utf-8">
		<title>
			Advanced Programming
		</title>
		<meta	name = "description"
				content = "It list the topics of the subject Advanced Programming. The current subject is divided into 5 units which are subdivided in few other topics.">
		<meta	name = "keywords"	content = "CRG, UTTT, C++, Learning, Advanced Programming">
		<meta	name = "author"		content = "ScM. Christian Reyes">
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
		<?php
			$units = array
				(
					'Paradigmas de la programación estructurada',
					'Elementos de un Lenguaje Imperativo de Programación (Control Y Arreglos)',
					'Manipulación de Funciones',
					'Estructuras',
					'Aplicación de Punteros'
				);
			$topics = array
				(
					'Programación modular y programación estructurada',
					'Operadores de asignación y expresión',
					'Instrucciones de asignación, entrada/salida',
					'Estructuras selectivas',
					'Estructura de ciclos y desarrollo de la programación',
					'Manipulación de arreglos unidimensionales, bidimensionales y multidimensionales',
					'Forma general de una función',
					'Prototipos de funciones',
					'Argumentos y parámetros de las funciones',
					'Acceso a los miembros de una estructura',
					'Manejo de Estructuras con funciones',
					'Declaración e inicialización de variables de punteros',
					'Llamar funciones por referencia',
					'Expresiones de apuntadores y aritmética de apuntadores',
					'Aplicación de llamada por referencia a funciones'
				);
				$topicPerUnit = array(4,2,3,2,4);
				
				echo "<ul>";
					for ($unit = 0 ; $unit < sizeof($units) ; $unit++)
					{
						echo "<li>";
							echo "<a href = " . str_replace('á', 'a', str_replace('ó', 'o', str_replace(' ', '', str_replace('(', '', str_replace(')', '', ucwords(str_replace('/', ' ', str_replace(',', ' ', $units[$unit])))))))) . ".php>";
							echo $units[$unit];
							echo "</a>";
						echo "</li>";
						$topicStartIndex = 0;
						for($topicsPerUnitIndex = 0 ; $topicsPerUnitIndex < $unit ; $topicsPerUnitIndex++)
							$topicStartIndex = $topicStartIndex + $topicPerUnit[$topicsPerUnitIndex];
						echo "<ul>";
							for($topic = $topicStartIndex ; $topic < ($topicStartIndex + $topicPerUnit[$unit]) ; $topic++)
							{
								echo "<li>";
									echo "<a href = " . str_replace('é', 'e', str_replace('á', 'a', str_replace('ó', 'o', str_replace(' ', '', str_replace('(', '', str_replace(')', '', ucwords(str_replace('/', ' ', str_replace(',', ' ', $topics[$topic]))))))))) . ".php>";
										echo $topics[$topic];
									echo "</a>";
								echo "</li>";
							}
						echo "</ul>";				
					}
				echo "</ul>";
		?>
	</body>
</html>