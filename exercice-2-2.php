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
    // Tableau des capitales et des pays
    $capitales = array(
        "Bucarest" => "Roumanie",
        "Bruxelles" => "Belgique",
        "Oslo" => "Norvège",
        "Ottawa" => "Canada",
        "Paris" => "France",
        "Port-au-Prince" => "Haïti",
        "Port-d'Espagne" => "Trinité-et-Tobago",
        "Prague" => "République tchèque",
        "Rabat" => "Maroc",
        "Riga" => "Lettonie",
        "Rome" => "Italie",
        "San José" => "Costa Rica",
        "Santiago" => "Chili",
        "Sofia" => "Bulgarie",
        "Alger" => "Algérie",
        "Amsterdam" => "Pays-Bas",
        "Andorre-la-Vieille" => "Andorre",
        "Asuncion" => "Paraguay",
        "Athènes" => "Grèce",
        "Bagdad" => "Irak",
        "Bamako" => "Mali",
        "Berlin" => "Allemagne",
        "Bogota" => "Colombie",
        "Brasilia" => "Brésil",
        "Bratislava" => "Slovaquie",
        "Varsovie" => "Pologne",
        "Budapest" => "Hongrie",
        "Le Caire" => "Egypte",
        "Canberra" => "Australie",
        "Caracas" => "Venezuela",
        "Jakarta" => "Indonésie",
        "Kiev" => "Ukraine",
        "Kigali" => "Rwanda",
        "Kingston" => "Jamaïque",
        "Lima" => "Pérou",
        "Londres" => "Royaume-Uni",
        "Madrid" => "Espagne",
        "Malé" => "Maldives",
        "Mexico" => "Mexique",
        "Minsk" => "Biélorussie",
        "Moscou" => "Russie",
        "Nairobi" => "Kenya",
        "New Delhi" => "Inde",
        "Stockholm" => "Suède",
        "Téhéran" => "Iran",
        "Tokyo" => "Japon",
        "Tunis" => "Tunisie",
        "Copenhague" => "Danemark",
        "Dakar" => "Sénégal",
        "Damas" => "Syrie",
        "Dublin" => "Irlande",
        "Erevan" => "Arménie",
        "La Havane" => "Cuba",
        "Helsinki" => "Finlande",
        "Islamabad" => "Pakistan",
        "Vienne" => "Autriche",
        "Vilnius" => "Lituanie",
        "Zagreb" => "Croatie"
    );

    // 1. Afficher la liste des capitales (par ordre alphabétique) suivie du nom du pays.
    ksort($capitales); // trier par ordre alphabétique des clés
    echo "<h2>Liste des capitales par ordre alphabétique :</h2>";
    echo "<ul>";
    foreach ($capitales as $capitale => $pays) {
        echo $capitale . ' - ' . $pays . '<br>';
    }
    echo "</ul>";

    // 2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.
    asort($capitales); // trier par ordre alphabétique des valeurs
    echo "<h2>Liste des pays par ordre alphabétique :</h2>";
    echo "<ul>";
    foreach ($capitales as $capitale => $pays) {
        echo $pays . ' - ' . $capitale . '<br>';
    }

    // 3. Affichez le nombre de pays dans le tableau.
    $nbPays = count($capitales);
    echo "<h2>Nombre de pays dans le tableau :</h2>";
    echo $nbPays;


    // 4. Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.
    echo "<h2>Tableau après suppression des capitales ne commençant pas par B :</h2>";
    echo "<ul>";
    foreach ($capitales as $capitale => $pays) {
        if (strpos($capitale, 'B') !== 0) {
            unset($capitales[$capitale]);
        } else {
            echo $capitale . ' - ' . $pays . '<br>';
        }
    }
    echo "</ul>";
    ?>

</body>

</html>