<?php
include('./connect.php');
$resultat = "SELECT `lien_tableau` FROM `Tableaux` WHERE `affiche_tableau` = 1" ;
$response = $bdd->query($resultat)->fetch(PDO::FETCH_ASSOC);
$res = $response["lien_tableau"];
$lienAffichage = './Peinture/'.$res;
$resultatAvis = 'SELECT prenom_avis,contenu_avis,dates_avis FROM Avis';
$reponseAvis = $bdd->query($resultatAvis)->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tableaux d'un artiste , peintures originales a frontignan">
    <title>Peintures Souliers Patrick</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div class="containerHeader">
            <div class="logo">
                <img src="lartiste-5.png" alt="logo">
            </div>
            <div class="nameArtist">
                <h1>PATRICK SOULIERS</h1>
                <P>le peintre passionné</P>
            </div>
            <div class="hamburger">
                <div class="burger"></div>
                <div class="burger"></div>
                <div class="burger"></div>
            </div>
            <div class="fenetreBurger">
                <button id="closeBtn" class="close">×</button>
                <ul>
                    <li><a href="index.php" id="btnenCours" class="item_menu accueil">Accueil</a></li>
                    <li><a href="galerie.php" class="item_menu galeries">Galeries</a></li>
                    <li><a href="formContact.php" class="item_menu contact">contact</a></li>
                </ul>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.php" id="enCours" class="item_menu accueil">Accueil</a></li>
                    <li><a href="galerie.php" class="item_menu galeries">Galeries</a></li>
                    <li><a href="formContact.php" class="item_menu contact">contact</a></li>
                    <div class="slider slider1"></div>
                </ul>
            </nav>
        </div>
    </header>
    <section class="sectionTableau">
        <h2 class="titreSection">Ma dernière peinture</h2>
        <div class="imageAvis">
            <div id="dernierePeinture">
                <img id="dernierePeinture1" src="<?= $lienAffichage ?>" alt="tableau">
            </div>
            <div class="pleinEcran">
                <button class="btnCloseTableau">×</button>
                <img id="dernierePeinture1" src="<?= $lienAffichage ?>" alt="tableau">
            </div>
            <div class="avis">
                <h2>Avis des visiteurs</h2>
                <div class="affichageAvis">
                    <?php 
                        foreach($reponseAvis as $row){
                           echo '<div class = "divAvis">
                            <h4>'.$row['prenom_avis'].'</h4>
                            <p style = "margin-left : 10px">'.$row['contenu_avis'].' ('.$row['dates_avis'].')</p>
                            </div>';
                        }
                       
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="sectionAvis">
        <div class="donnerAvis">
            <h2>Donner votre avis</h2>
            <form action="ajoutAvis.php" method="post">
                <div class="avisPrenom">
                    <label class="labelPrenom" for="premon">Votre prenom</label>
                    <input type="text" name="prenom" id="prenom" aria-labelledby="prenom" maxlength="30" required>
                </div>
                <div class="avisAvis">
                    <label class="labelAvis" for="avis">Votre avis</label>
                    <textarea name="avis" id="avis" cols="100" rows="3" required></textarea>
                </div>
                <div class="buttonAvis">
                    <button class="btnAvis" type="submit">Valider</button>
                    <!-- <input class="btnAvis marge" type="reset" value="Effacer"> -->
                </div>
            </form>
        </div>
    </section>
    <section class="portrait">
        <div class="containerPortrait">
            <h2 class="titreportrait">Portrait de SOULIERS Patrick J.</h2>
            <p class="paraPortrait">
                Originaire de Sète, l’Ile Singulière dont il cultive les traditions et l’inspiration poétique, Patrick
                Souliers a été très tôt repéré pour ses talents picturaux par ses enseignants qu’on appelait modestement
                « les professeurs de dessin ».
                Cependant les circonstances familiales ne lui ont pas permis de profiter de l’enseignement prestigieux
                de l’Académie des Beaux-Arts. C’est donc un authentique autodidacte qui se nourrit d’images, de formes
                et de couleurs liées à son univers quotidien et familial. C’est pourquoi son œuvre s’enrichit de
                portraits, de paysages maritimes où les bateaux sont éclairés par cette lumière si particulière de notre
                soleil méditerranéen.
                Sa palette repose sur des couleurs pures et personne ne peut rester insensible à cette luminosité qui se
                dégage des marines révélées à nos yeux. Patrick Souliers ne se complait pas seulement dans des tableaux
                figuratifs et il laisse volontiers son inspiration onirique, elle aussi, riche de couleurs et de formes
                saisissantes.
                Bien connu à Frontignan, on le surnomme avec un tendre respect « l’Artiste ». Patrick participe
                activement à « l’Association des 4 Saisons » pour laquelle il expose ses tableaux.
            </p>
        </div>
    </section>
    <footer>
        <div class="footer">
            <a href="https://www.facebook.com/profile.php?id=100049739053079"><img class="reseau"
                    src="facebook-svgrepo-com.svg" alt="iconFaceBook"></a>
        </div>
    </footer>
    <script src="./script.js" type="text/javascript"></script>
    <script src="./scriptIndex.js" type="text/javascript"></script>
</body>

</html>