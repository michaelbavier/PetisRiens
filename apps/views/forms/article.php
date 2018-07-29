<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../public/assets/css/style.css">
    <title>Article</title>
</head>

<body>


<?php
$bdd = new PDO('mysql:host = localhost; dbname=petitrien', 'root', '');
$requete = $bdd -> query('SELECT * FROM divers ');
while($data = $requete -> fetch ()){
    echo'<h2>'. $data['prix'].'</h2>';
    echo'<p>'. $data['produit'].'</p>';
}
$requete -> closeCursor();
?>


</body>

</html>