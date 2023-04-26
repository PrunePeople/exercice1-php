<!DOCTYPE html>
<html>
<head>
	<title>Exercices PHP</title>
</head>
<body>
	<h1>Nombres impairs entre 0 et 150</h1>
	<p>
		<?php
			$impairs = array(); // initialise un tableau vide $impairs.
			for ($i=1; $i<=150; $i+=2) { // commence une boucle qui compte de 1 à 150 avec un pas de 2 à chaque itération, pour ne prendre que les nombres impairs.
				$impairs[] = str_pad($i, 3, " ", STR_PAD_LEFT); // la fonction str_pad() ajoute des espaces à gauche pour aligner les chiffres
			}
			echo implode(", ", $impairs); // la fonction implode() pour combiner tous les nombres impairs dans le tableau $impairs en une seule chaîne de caractères séparée par une virgule et un espace.
		?>
	</p>

    <h1>Répétition de phrases</h1>
	<?php
		for ($i=1; $i<=500; $i++) { // ne boucle pour afficher 500 fois la phrase "Je dois faire des sauvegardes régulières de mes fichiers"
			echo "<p>".$i.". Je dois faire des sauvegardes régulières de mes fichiers</p>"; // La variable $i est utilisée pour compter le nombre de répétitions.
		}
	?>


	<style>
		table, th, td {
			border: 1px solid black;
		}
	</style>
<h1>Table de multiplication</h1>
	<table>
		<thead>
			<tr>
				<th>x</th>
				<?php
					for ($i=1; $i<=9; $i++) { // initialise une boucle for qui va s'exécuter 9 fois, en commençant à 1 et en incrémentant de 1 à chaque tour.
						echo "<th>".$i."</th>"; //  insère un en-tête de colonne qui contient le nombre correspondant à l'itération en cours de la boucle, le tout encadré par des balises "th".
					}
				?>
			</tr>
		</thead>
		<tbody>
			<?php
				for ($i=1; $i<=9; $i++) { // initialise une boucle for qui va s'exécuter 9 fois, en commençant à 1 et en incrémentant de 1 à chaque tour.
					echo "<tr>"; // insère une nouvelle ligne de la table.
					echo "<th>".$i."</th>"; //  insère un en-tête de ligne qui contient le nombre correspondant à l'itération en cours de la boucle, le tout encadré par des balises "th".
					for ($j=1; $j<=9; $j++) { //  initialise une boucle for imbriquée qui va s'exécuter 9 fois, en commençant à 1 et en incrémentant de 1 à chaque tour.
						echo "<td>".$i*$j."</td>"; // insère une cellule de la table qui contient le résultat de la multiplication de $i par $j, le tout encadré par des balises "td".
					}
					echo "</tr>"; // ferme la ligne de la table.
				}
			?>
		</tbody>
	</table>
</body>
</html>
