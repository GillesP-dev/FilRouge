<?php
include('./connect.php');
if (isset($_POST['titre_tableau']) && isset($_FILES['file']))  {
    $titre_tableau = $_POST['titre_tableau'];
    $tmpName = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];
    move_uploaded_file($tmpName, "Peinture/$name");

    $req = $bdd->prepare("INSERT INTO Tableaux(titre_tableau,lien_tableau,id_utilisateur) Values(:titre_tableau,:lien_tableau,:id_utilisateur)");
$req->bindParam(':titre_tableau', $titre_tableau);
$req->bindParam(':lien_tableau', $name);
$req->bindParam(':id_utilisateur', $_SESSION['user']['id_utilisateur']);
$req->execute();
}
$bdd->query("SELECT * FROM Tableaux ");


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
</head>
<body>
 <h1>Module de gestion</h1>   
 <form action="ajoutTableaux.php" method="post" enctype="multipart/form-data">
    <label for="titre">rentrer le titre du tableau</label>
    <input type="text" id="titre" name="titre_tableau" required>
    <br>
    <label for="lien">lien de téléchargement du tableau</label>
    <input type="file" id="lien" name="file" accept=".jpeg,.jpg" required>
    <br>
    <input type="submit" value="envoyer">
 </form>
    <label for="btn_list">afficher la liste des  tableaux</label>
    <button id="btn_list" type="button" onclick="affichageTableaux()" value="rechercher">Rechercher</button>
</body>
<script>
    let btn_list = document.querySelector("#btn_list");
    
    async function affichageTableaux() {
        
        await fetch("./recherche.php", {
            method: "POST"
                })
                .then((response) => response.json())
                .then((result) => {
                    
                    Object.keys(result).forEach(key =>{
                        let titre = document.createElement('p');
                        document.body.append(titre);
                        titre.textContent = result[key]['titre_tableau'];
                        let btnAffichage = document.createElement('button');
                        document.body.append(btnAffichage);
                        btnAffichage.textContent = "Afficher";
                        btnAffichage.setAttribute("id",result[key]['id_tableau']);
                        let btnDelete = document.createElement('button');
                        document.body.append(btnDelete);
                        btnDelete.setAttribute("id",result[key]['id_tableau']);
                        btnDelete.textContent = "Supprimer";
                    })
                           })
                    }
                    
</script>
</html>

