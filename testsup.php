<?php

// Se connecter à la base de données
include('./connect.php');
// Recuperation de id_tableau
$id = array_key_first($_POST);
//requette
$resultat = "SELECT `lien_tableau` FROM `Tableaux` WHERE `id_tableau` =" .$id;
//recuperation du lien 
$reponse = $bdd->query($resultat)->fetch();
$res= $reponse["lien_tableau"];
$fichier = './Peinture/'.$res;
//effacement de l'image dans le dossier

if( file_exists ( $fichier))
  unlink( $fichier ) ;
$sql = "DELETE FROM `Tableaux` WHERE `id_tableau` = :id";
//Préparez notre déclaration DELETE
$stmt = $bdd->prepare($sql);

//Liez la variable $name au paramètre :id
$stmt->bindparam(':id', $id);
//Exécuter notre instruction DELETE
$res = $stmt->execute();
header("Location: ajoutTableaux.php");
?>