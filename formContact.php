<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tableaux d'un artiste , peintures originales a frontignan">
    <title>Document</title>
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
                    <li><a href="index.php"   class="item_menu accueil">Accueil</a></li>
                    <li><a href="galerie.php" class="item_menu galeries">Galeries</a></li>
                    <li><a href="formContact.php" id="btnenCours" class="item_menu contact">contact</a></li>
                </ul>  
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="index.php" class="item_menu accueil">Accueil</a></li>
                    <li><a href="galerie.php" class="item_menu galeries">Galeries</a></li>
                    <li><a href="formContact.php" id="enCours" class="item_menu contact">contact</a></li>
                    <div class="slider slider1"></div>
                </ul>
            </nav>
        </div>
    </header>
 <div class="formulaire">   
<form  class="form-contact" action="contact.php" method="post">
    <fieldset>
        <legend>Contactez-moi</legend>
    <label for="name" class="marge name label">nom</label>
    <input type="text" name="cf_name" id="name" class="marge input" required="required">
    <label for="prenomForm" class="marge label">premon</label>
    <input type="text" name="cf_prenom" id="prenomForm" class="marge input" required="required">
    <label for="mail" class="marge label">votre e-mail</label>
    <input type="text" name="cf_email" id="mail" class="marge input" required="required">
    <label for="message" class="marge label">Message</label>
    <textarea name="cf_message" id="message" class="marge" rows="5" required="required"></textarea>
    <input class="btnAvis marge btnForm" name="send" type="submit" value="Envoyer">
    <!-- <input class="btnAvis marge btnForm" type="reset" value="Effacer"> -->
</fieldset>
</form>
</div>
    <footer class="piedDePage">
        <div class="footer">
            <a href="https://www.facebook.com/profile.php?id=100049739053079"><img class="reseau" src="facebook-svgrepo-com.svg" alt="iconFaceBook"></a>
        </div>
    </footer>
<script src="/script.js"></script>    
</body>
</html>
<?php
if($_GET['status'] == "ok" ){
    $message='Message envoyé avec succès';
echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
}
?>