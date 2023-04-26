<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Mois de l'année non bissextile</title>
</head>

<body>
    <h2>Etape 1: Affichage du tableau simple</h2>
    <?php
    // Créer un tableau associatif avec le nombre de jours pour chaque mois
    $mois = array(
        "Janvier" => 31,
        "Février" => 28,
        "Mars" => 31,
        "Avril" => 30,
        "Mai" => 31,
        "Juin" => 30,
        "Juillet" => 31,
        "Août" => 31,
        "Septembre" => 30,
        "Octobre" => 31,
        "Novembre" => 30,
        "Décembre" => 31
    );

    // Afficher le tableau dans un tableau HTML
    echo "<table>";
    echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
    foreach ($mois as $nomMois => $nbJours) {
        echo "<tr><td>$nomMois</td><td>$nbJours</td></tr>";
    }
    echo "</table>"; ?>


    <h2>Etape 2: Tri par ordre croissant</h2>
    <?php
    // Trier le tableau en utilisant le nombre de jours comme critère
    asort($mois);

    // Afficher le tableau trié dans un tableau HTML
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
    foreach ($mois as $nomMois => $nbJours) {
        echo "<tr><td>$nomMois</td><td>$nbJours</td></tr>";
    }
    echo "</table>";
    ?>


    <h2>Etape 2: Tri par ordre décroissant</h2>
    <?php
    // Tri décroissant du tableau associatif en fonction du nombre de jours
    arsort($mois);

    // Afficher le tableau trié dans un tableau HTML
    echo "<br>";
    echo "<table>";
    echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
    foreach ($mois as $nomMois => $nbJours) {
        echo "<tr><td>$nomMois</td><td>$nbJours</td></tr>";
    }
    echo "</table>";
    ?>


    <h2>Etape 3: Mise en place de bouton de tri</h2>
    <?php
    // Vérifier si l'utilisateur a cliqué sur le bouton de tri croissant
    if (isset($_POST["tri-croissant"])) {
        asort($mois);
    }

    // Vérifier si l'utilisateur a cliqué sur le bouton de tri décroissant
    if (isset($_POST["tri-decroissant"])) {
        arsort($mois);
    }

    // Afficher le tableau dans un tableau HTML
    echo "<form method='post'>";
    echo "<table>";
    echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
    foreach ($mois as $nomMois => $nbJours) {
        echo "<tr><td>$nomMois</td><td>$nbJours</td></tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<button type='submit' name='tri-croissant'>Tri croissant</button>";
    echo "<button type='submit' name='tri-decroissant'>Tri décroissant</button>";
    echo "</form>";
    ?>
</body>
</html>