<?php

//var_dump($_POST);
if (isset($_POST['envoyer'])) {
    if (!isset($_COOKIE['hasVoted']) && !isset($_COOKIE['voteContent'])) {
        setcookie("voteContent", $_POST['vote'], time() + 120);
        setcookie("hasVoted", true, time() + 120);

    } else {
        $hasVoted = $_COOKIE['voteContent'];
        echo "<script>alert('Vous avez déjà voté $hasVoted') </script>";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondage</title>
</head>
<body>
<h1>Votez s'il vouz plait :</h1>
<form method="post" action="">
    <p>Evaluer le contenu du cours php:</p>
    <input type="radio" name="vote"  value="bon">Bon<br>
    <input type="radio" name="vote"  value="mauvais">Mauvais<br>
    <input type="radio" name="vote"  value="moyen">Moyen<br>




<button type="submit" name="envoyer">envoyer</button>
</form>

</body>
</html>
