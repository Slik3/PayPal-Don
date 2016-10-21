<?php
// GOOGLE CAPTCHA API
$clesite = '';  // Cle du site https://www.google.com/recaptcha/admin
$cleprivee = ''; // Cle privee https://www.google.com/recaptcha/admin

//PAYPAL API
$PayPalAdress = ''; // Adresse E-MAIL du compte commerce PayPal
$success = '--- VOTRE URL ---/pac.php'; //URL en cas de succes
$error ='--- VOTRE URL ---/prf.php'; //URL en cas d erreur
$NP = ''; // URL notification paiement
$url ='www.paypal.com/cgi-bin/webscr'; //Rajoutez "sandbox." devant paypal.com pour être rediriger vers la sandbox de PayPal /!\ vous devez vous creez un faux compte acheteur et vendeur depuis la page de sandbox paypal


// AUTRES
$secu = './recaptchalib.php'; // Chemin du fichier de l'extension de sécurité
?>
