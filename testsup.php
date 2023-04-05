<?php

// Se connecter à la base de données
include('./connect.php');

$id = array_key_first($_POST);
var_dump($id);
$sql = "DELETE FROM `Tableaux` WHERE `id_tableau` = :id";
//Préparez notre déclaration DELETE
$stmt = $bdd->prepare($sql);

//Liez la variable $name au paramètre :id
$stmt->bindparam(':id', $id);
//Exécuter notre instruction DELETE
$res = $stmt->execute();

?>