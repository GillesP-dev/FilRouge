<?php

// Se connecter à la base de données
include('./connect.php');
// Recuperation de id_tableau
$id = array_key_first($_POST);
//requette recupération du lien
$resultat = "SELECT `lien_tableau` FROM `Tableaux` WHERE `id_tableau` =" .$id;
//recuperation du lien 
$reponse = $bdd->query($resultat)->fetch();
$res= $reponse["lien_tableau"];
$fichier = './Peinture/'.$res;
//effacement de l'image dans le dossier
if( file_exists ( $fichier))
  unlink( $fichier ) ;

$sql = "DELETE FROM `Tableaux` WHERE `id_tableau` = :id";
//Préparez la déclaration DELETE
$stmt = $bdd->prepare($sql);

//Liez la variable $id au paramètre :id
$stmt->bindparam(':id', $id);
//Exécuter notre instruction DELETE
$res = $stmt->execute();
//retour a la page d'ajout/supression
header("Location: ajoutTableaux.php");
?>