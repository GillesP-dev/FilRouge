<?php
include('./connect.php');
if (isset($_POST['prenom']) && isset($_POST['avis']))  {
    $prenom_avis = $_POST['prenom'];
    $contenu_avis = $_POST['avis'];
   
$req = $bdd->prepare("INSERT INTO Avis(prenom_avis,contenu_avis) Values(:prenom_avis,:contenu_avis)");
$req->bindParam(':prenom_avis', $prenom_avis);
$req->bindParam(':contenu_avis', $contenu_avis);
$req->execute();
}

 header("Location: index.php");
?>