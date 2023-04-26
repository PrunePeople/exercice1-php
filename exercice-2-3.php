<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Capitales</title>
</head>

<body>
    <?php
    $departements = array(
        "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
        "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
        "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
        "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
    );

    // 1. Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements
    echo "<h2>Affichez la liste des régions (par ordre alphabétique) suivie du nom des
    départements</h2>";
    ksort($departements); // Tri par ordre alphabétique des clés (les régions)
    foreach ($departements as $region => $dep_list) {
        echo $region . " : " . implode(", ", $dep_list) . "<br>";
    }

    echo "<br>";

    // 2. Affichez la liste des régions suivie du nombre de départements
    echo "<h2> Affichez la liste des régions suivie du nombre de départements</h2>";
    foreach ($departements as $region => $dep_list) {
        $nb_deps = count($dep_list);
        echo $region . " : " . $nb_deps . " départements<br>";
    }
    ?>

</body>
</html>