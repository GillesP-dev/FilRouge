<?php

use PHPMailer\PHPMailer\PHPMailer; // On importe la classe tout en haut
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php'; // On charge l'autoloader de composer
$mail = new PHPMailer(true); // Instantiation
if (isset($_POST['cf_name']) && isset($_POST['cf_prenom']) && isset($_POST['cf_email']) && isset($_POST['cf_message'])){
    if (!empty($_POST['cf_name']) && !empty($_POST['cf_prenom']) && !empty($_POST['cf_email']) && !empty($_POST['cf_message'])){
$field_name = $_POST['cf_name'];
$field_prenom = $_POST['cf_prenom'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
}}
// Paramètres du serveur
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
// Informations envoyeur/réceptionneur
$mail->Username = 'pierrotgilles8@gmail.com';
$mail->Password = 'xonihhauduvxufsf';
$mail->From = 'serveur@debian.fr';
$mail->FromName = 'test';
$mail->addAddress('lotogilles2@gmail.com');
// Contenu
$mail->isHTML(true); // Permet l'interprétation de l'HTML dans le mail
$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';
$mail->Subject = 'test mail';
$body = '<p>Nouveau message de : '.$field_name.' '.$field_prenom.'</p>
        <p>adresse mail : '.$field_email.'</p><p> message : '.$field_message.'</p>';
$mail->Body = $body;
try {
    $mail->send();
    header('Location: formContact.php?status=ok');
} catch(Exception $e) {
    echo "Erreur: ". $e->getMessage();
}
exit;

?>