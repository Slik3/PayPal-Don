<?php
  $montant = $_POST['montant'];
  $montant = htmlspecialchars($montant, ENT_QUOTES);
  require 'options.php';


if (file_exists($secu)) {
  require 'recaptchalib.php';
  $siteKey = $clesite;
  $secret = $cleprivee;
  $reCaptcha = new ReCaptcha($secret);
  if(isset($_POST["g-recaptcha-response"])) {
      $resp = $reCaptcha->verifyResponse(
          $_SERVER["REMOTE_ADDR"],
          $_POST["g-recaptcha-response"]
          );
      if ($resp != null && $resp->success) {  header('Location: ./traitement.php?d=' . $_POST['don'] . '');}
      else {echo '<form><div id="error"> <h2> CAPTCHA incorrect <h2> </div></form>';}
      }
    }
  ?>

<style>
@-webkit-keyframes check {
0% {
        height: 0;
        width: 0;
    }

    33.3333% {
        width: 40px;
        height: 0;
    }

}
@-moz-keyframes check {
    0% {
        height: 0;
        width: 0;
    }

    33.3333% {
        width: 40px;
        height: 0;
    }
}
@-ms-keyframes check {
    0% {
        height: 0;
        width: 0;
    }

    33.3333% {
        width: 40px;
        height: 0;
    }
}
@keyframes check {
    0% {
        height: 0;
        width: 0;
    }

    33.3333% {
        width: 40px;
        height: 0;
    }
}


.checkmark {
    display: block;
    height: 200px;
    position: relative;
    width: 200px;
}


.checkmark:after {
    -webkit-animation: check .8s;
    -moz-animation: check .8s ;
    -o-animation: check .8s;
    animation: check .8s;
}

.checkmark:after {
    -moz-transform: scaleX(-1) rotate(135deg);
    -ms-transform: scaleX(-1) rotate(135deg);
    -webkit-transform: scaleX(-1) rotate(135deg);
    transform: scaleX(-1) rotate(135deg);
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -webkit-transform-origin: left top;
    transform-origin: left top;
    border-right: 30px solid #90ABD6;
    border-top: 30px solid #90ABD6;
    content: '';
    display: block;
    height: 80px;
    left: 14px;
    position: absolute;
    top: 100px;
    width: 40px;
}

</style>
    <center><script src='https://www.google.com/recaptcha/api.js'></script></center>
    <link rel="stylesheet" type="text/css" href="style.css">
<div id="login"><div id="triangle"></div>
<form action="https://<?php echo $url ?>" method="post">
	<input name="amount" type="hidden" value="<?php echo $montant ?>" />
	<input name="currency_code" type="hidden" value="EUR" />
	<input name="shipping" type="hidden" value="0.00" />
	<input name="tax" type="hidden" value="0.00" />
	<input name="return" type="hidden" value="<?php echo $success ?> " />
	<input name="cancel_return" type="hidden" value="<?php echo $error ?>" />
	<input name="notify_url" type="hidden" value="<?php echo $NP ?>" />
	<input name="cmd" type="hidden" value="_xclick" />
	<input name="business" type="hidden" value="<?php echo $PayPalAdress ?>" />
	<input name="item_name" type="hidden" value="Don">
	<input name="no_note" type="hidden" value="1" />
	<input name="lc" type="hidden" value="FR" />
	<input name="bn" type="hidden" value="PP-BuyNowBF" />
  <div class="g-recaptcha" data-sitekey="<?php echo $siteKey ?>"></div><br>
	<input type="submit" id="jump" value="Faire un don de <?php echo $montant ?>&euro; ?" class="btn primary">
</form>
</div>
