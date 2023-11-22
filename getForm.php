<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$_GET</title>
</head>
<body>

<?php
$prenom = "je sais pas comment tu t'appelles";
$secret = "Oups, j'ai oublié le secret...";
$userAutorise = "azerty";
$motDePasse = "azerty";
$contenu = "entre le bon username et mot de passe pour que te sois révélé le secret";

if(isset($_GET['prenom'])){
    $prenom = $_GET['prenom'];
}

if(isset($_GET['username'])){
    if ($_GET['username'] == $userAutorise){
        if ($_GET['password'] != $motDePasse)
            $contenu = "mauvais mot de passe";
        else
            $contenu = $secret;
    } else {
        $contenu = "déso je te connais pas toi là.";
    }
}
?>

<h2>Hello <?php echo $prenom; ?> </h2>

<form method="GET" action="">
    <input type="text" name="prenom" id="">
    <button type="submit">OK</button>
</form>

<hr>
<hr>
<form method="GET" action="">
    <input placeholder="username" type="text" name="username" id="">
    <input placeholder="password" type="password" name="password" id="">
    <button type="submit">OK</button>
</form>
<p><?= $contenu ?></p>

</body>
</html>