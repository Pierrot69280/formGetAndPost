<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>require_once & POST</title>
</head>
<body>

<?php
    require_once 'postForm.php'

?>

<h2>Hello <?php echo $prenom ?> </h2>


<form method="POST" action="">
    <input type="text" name="prenom" id="">
    <button type="submit">OK</button>
</form>

<hr>
<hr>


<form method="POST" action="">
    <input placeholder="username" type="text" name="username" id="">
    <input placeholder="password" type="password" name="password" id="">
    <button type="submit">OK</button>
</form>

<p><?= $contenu ?></p>


</body>
</html>