<?php
$prenom = "je sais pas comment tu t'appelles";
$secret = "Oups, j'ai oublié le secret...";
$userAutorise = "azerty";
$motDePasse = "azerty";
$contenu = "entre le bon username et mot de passe pour que te sois révélé le secret";

if(isset($_POST['prenom'])){
    $prenom = $_POST['prenom'];
}

if(isset($_POST['username'])){
    if ($_POST['username'] == $userAutorise){
        if ($_POST['password'] != $motDePasse)
            $contenu = "mauvais mot de passe";
        else
            $contenu = $secret;
    } else {
        $contenu = "déso je te connais pas toi là.";
    }
}



