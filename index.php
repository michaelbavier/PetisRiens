<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <title>Connexion</title>
</head>

<body>


    <div class="mainContainer">
        <div class="responsable">
                <h3>Connexion</h3>
                <img class="avatar" src="./public/assets/img/petit_rien.jpg" alt="">
            <form action="index.php" method="POST" class="login">
                <label class="center" for="">Utilisateurs</label>
                <input type="text" class="conex" id="username">
                <label class="center" for="">Mots de passe</label>
                <input type="password" class="conex" id="password">
                <input type="submit" class="button" value="Connexion" id="button">
            </form>
        </div>
    </div>




<?php

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost", "root", "");
mysql_select_db("petitrien");

$result = mysql_query("select * from users where username = '$username' and password = '$password'")
or die("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if($row['username'] == $username && $row['password'] == $password){
echo"Utilisateur connecter" .$row['username'];
} else {
echo"Erreur de connextion";
}

 ?>



</body>

</html>