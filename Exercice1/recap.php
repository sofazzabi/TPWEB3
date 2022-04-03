<?php

if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
}

if (isset($_POST['prénom'])) {
    $prénom = $_POST['prénom'];
}
if (isset($_POST['adresse'])) {
    $adresse = $_POST['adresse'];
}
if (isset($_POST['type'])) {
    $type = $_POST['type'];
}
if (isset($_POST['nbreSandwich'])) {
    $nbreSandwich = $_POST['nbreSandwich'];

    if ($nbreSandwich > 10) {
        $prixCommande = $nbreSandwich * 4 * 0.9;
    } else {
        $prixCommande = ($nbreSandwitchs * 4);
    }
}
//var_dump($_POST);
if (!empty($_POST['supplementAdded'])) {
    $supplementAdded = $_POST['supplementAdded'];
}
//var_dump($supplementAdded);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
</head>
<body>
    <p>
Votre nom est :<?php echo htmlspecialchars($nom, ENT_QUOTES); ?>
</p><br>
<p>
Votre prénom est :<?php echo htmlspecialchars($prénom, ENT_QUOTES); ?>
</p> <br>
<p>
Votre adresse est :<?php echo htmlspecialchars($adresse, ENT_QUOTES); ?>
</p><br>
<p>
Nombre de sandwichs est :<?php echo htmlspecialchars($nbreSandwich, ENT_QUOTES); ?>
</p><br>
<p>
Type de sandwich est :<?php echo htmlspecialchars($type, ENT_QUOTES); ?>
</p><br>
<p>
le prix de la commande est :<?php echo htmlspecialchars($prixCommande, ENT_QUOTES); ?>
</p><br>
<?php if (!empty($supplementAdded)) {?>
    <p>Supplements:</p><br>
    <?php foreach ($supplementAdded as $supplement) {
    echo $supplement . "   ";
}
    ?> <br><br>
        <?php

}

?>



</body>
</html>