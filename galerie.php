<?php
include('./connect.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tableaux d'un artiste , peintures originales a frontignan">
    <title>Galerie Peinture</title>
    <link rel="stylesheet" href="./splide.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="./splide.min.js"></script>
</head>

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
                <button id="closeBtn"  class="close">×</button>
                <ul>
                    <li><a href="index.php"   class="item_menu accueil">Accueil</a></li>
                    <li><a href="galerie.php" id="btnenCours" class="item_menu galeries">Galeries</a></li>
                    <li><a href="formContact.php" class="item_menu contact">contact</a></li>
                </ul>  
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.php" class="item_menu accueil">Accueil</a></li>
                    <li><a href="galerie.php" id="enCours" class="item_menu galeries">Galeries</a></li>
                    <li><a href="formContact.php" class="item_menu contact">contact</a></li>
                    <div class="slider slider1"></div>
                </ul>
            </nav>
        </div>
    </header>
    <section id="grandImage" aria-label="Beautiful Images">
        
        <div class="imageScrene">
            <img id="imagegrande" src="Peinture/La_Pointe_Courte_04-2021.jpg" alt="">
        </div>
    </section>
    <section id="thumbnail-carousel" class="splide"
        aria-label="The carousel with thumbnails. Selecting a thumbnail will change the Beautiful Gallery carousel.">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/1367010916.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/1367010940_013345.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/20200316_135226.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/20210405114056.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/20210405_112224.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/20210405_113119.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/20210405_114702.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Bouzigues_01-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Caddie_30-09-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Camargue_12-12-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Chevaux_de_Camargue_10-02-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Digue_de_rochers_19-01-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Eglise_de_Frontignan_02-06-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Eglise_de_Frontignan_la_nuit_04-05-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture\Element_naturel_09-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Erbelunga_Corse_15-02-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Etang_de_Thau_09-05-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Fin_de_vie_23-11-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Fort_StPierre_Sete_08-12-2020.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Fujiyama_11-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Ile_de_Kauai_Hawai_05-12-2020.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Ile_Renote_Tregastel_24-12-2020.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/La_Pointe_Courte_04-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/La_Pointe_courte_Sete_05-11-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Le_chat_10-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Le_geranium.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Le_pain_09-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Le_toit_du_monde_11-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Les_fleurs_12-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Les_vieux_greements_04-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Lumiere_du_soir_30-12-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Maison_sous_la_neige_29-10-2020.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Mirage_20-10-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Papillon_03-10-2021.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Port_de_Frontignan_27-11-2020.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Reflets_15-08-2022.jpg" alt="">
                </li>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/Sous_bois_enneiges_03-2022.jpg" alt="">
                </li>
                <?php 
                
                $res = $bdd->query("SELECT * FROM Tableaux ")->fetchAll();
                foreach($res as $valeurs){               
                ?>
                <li class="splide__slide">
                    <img class="vignette" src="Peinture/<?= $valeurs['lien_tableau'] ?>" alt="<?= $valeurs['titre_tableau'] ?> ">
                </li>
                <?php } ?>
            </ul>
        </div>
    </section>

    <footer>
        <div class="footer">
            <a href="https://www.facebook.com/profile.php?id=100049739053079"><img class="reseau"
                    src="facebook-svgrepo-com.svg" alt="iconFaceBook"></a>
        </div>
    </footer>

    <script type="text/javascript" src="./script.js"></script>

    <script src="./scriptCarrousel.js"></script>

</body>

</html>