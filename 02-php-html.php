<?php

$nom = "Adil";
$age = 22;
$ville ="Marrakech";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>PHP et HTML</title>
</head>

<body>

    <h1>Mon profil</h1><br><hr>
    <h2>Informations personnelles</h2> 

    <p>
        Bonjour
        <?php echo $nom; ?>
    </p>

    <p>
        Vous avez
        <?php echo $age; ?>
        ans.
    </p>

    <p> J'habite a <?php echo $ville; ?> </P>

</body>

</html>