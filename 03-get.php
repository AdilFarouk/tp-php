<?php

$nom = "";
$ville ="";

if (isset($_GET["nom"])) {
    $nom = $_GET["nom"];
}


if(isset($_GET["ville"])){
    $ville = $_GET["ville"];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>GET avec PHP</title>
</head>

<body>

    <h1>Exemple avec GET</h1>
<p> <strong>Nom:</strong></p>
    <?php

    if ($nom != "") {

        echo "<p>Bonjour " . $nom . "</p>";

    } else {

        echo "<p>Aucun nom reçu.</p>";

    }

    ?>


<p><strong>Ville:</strong></p>
<?php
if($nom != ""){ echo "<p>Vous habitez a:".$ville."</p>";}
else{echo "<p> On ne peux pas savoir votre ville</p>";}
?>
</body>

</html>