<?php
$field_name = $_POST['cf_name'];
$field_prenom = $_POST['cf_prenom'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
$mail_to = 'lotogilles2@gmail.com';
$subject = 'message des visiteurs du site internet'.$field_name;
$body_message = 'de:'.$field_name.' '.$field_prenom."\n";
$body_message .= 'e-mail:'.$field_email."\n";
$body_message .= 'Message:'.$field_message;
$headers = "de:".$field_email."\r\n";
$headers .= "reply-to:".$field_email."\r\n";
$mail_status = mail($mail_to,$subject,$body_message,$headers);
if($mail_status){?>
    <script language = "javascript" type = "text/javascript">
        //message envoyer
        alert('Merci pour votre message. Je vous recontacte dès que possible.');
        window.location = 'contact.html';
        </script>
        >?php
} else {?>
<script language="javascript" type="text/javascript">
    alert("Message failed. envoyer votre email a lotogilles2@gmail.com");
    window.location = 'contact.html';
</script>
<?php
}?>