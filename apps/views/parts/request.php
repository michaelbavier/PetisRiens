<?php
include 'connexion.php';
if ($_GET['divers'] == 'produit') {
    $table_sql = 'produit';
}
elseif ($_GET['divers'] == 'prix') {
    $table_sql = 'prix';
}
elseif ($_GET['divers'] == 'fonction') {
    $table_sql = 'fonction';
}
elseif ($_GET['divers'] == 'marque') {
    $table_sql = 'marque';
}

$phrase_sql = "SELECT * FROM $table_sql ";
$preparation = $bdd->prepare($phrase_sql);
$preparation->execute();
$divers = $preparation->fetchAll( PDO::FETCH_ASSOC );
?>