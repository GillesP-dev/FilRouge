<?php
// Se connecter à la base de données
include('./connect.php');


// Recuperation de id_tableau
$id = array_key_first($_POST);

//requette recupération du lien
$resultat = "SELECT `lien_tableau`,`affiche_tableau` FROM `Tableaux` WHERE `id_tableau` =" .$id;
//mise a jour affiche_tableau 
$reponse = $bdd->query($resultat)->fetch();
if($reponse["affiche_tableau"] == 0){
    $bdd->exec("UPDATE `Tableaux` SET `affiche_tableau` = 0 ");
    $bdd->exec("UPDATE `Tableaux` SET `affiche_tableau` = 1 WHERE `id_tableau` =" .$id);
}



header("Location: ajoutTableaux.php");
?>