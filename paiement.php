<?php
session_start();
$user = $_SESSION['utilisateur'];
if ($user){
  
}else{
    header("location : index.php");
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="google-site-verification" content="KYR459gvJffD2cdZXkuyG7h4qGvi5l4m_tae7KBsvik" />
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>Monetbil - Paiements en ligne, par téléphone portable au Cameroun</title>
<meta name="keywords" content="MOBILE NETWORK BILLING, mobile payments, mobile payment, online payments, mobile operator billing, carrier billing, windows phone, android, cross-platform, payment api, direct billing, cell, phone,, pay with phone bill, pay by phone">
<meta content="MONETBIL est un mode de paiement des biens et services numériques en ligne en utilisant le service de facturation des opérateurs mobiles. MONETBIL offrent aux e-commerçants un mode de paiement par téléphone portable Simple, Rapide et Sécurisé. Et contribue à l’augmentation importante de leur chiffre d’affaire." name="description"><meta property="og:title" content>
<meta property="og:type" content="company">
<meta property="og:url" content="https://www.monetbil.com">
<meta property="og:image" content="https://www.monetbil.com/assets/img/logo_converted.png">
<meta property="og:locale" content="fr">
<meta property="og:site_name" content="Monetbil.com">
<link rel="canonical" href="https://fr.monetbil.com/"><link rel="alternate" hreflang="fr" href="https://fr.monetbil.com/"><link rel="alternate" hreflang="en" href="https://www.monetbil.com/">
<link href="https://fr.monetbil.com/assets/img/favicon.ico" rel="shortcut icon">
<link media="screen" rel="stylesheet" href="https://fr.monetbil.com/assets/css/bootstrap/v3.0.1/bootstrap.min.css">
<link rel="stylesheet" href="https://fr.monetbil.com/assets/css/screen.css" media="all">
<link rel="stylesheet" href="LOGIN/login.css">
<link rel="stylesheet" href="https://fr.monetbil.com/assets/css/icons.css" media="all"><script src="https://fr.monetbil.com/assets/js/scripts.js"></script>
<script src="https://fr.monetbil.com/assets/js/app.js"></script>
<script type="text/javascript">
    adroll_adv_id = "7JIBZRWMKJGYVMVI5GY3BD";
    adroll_pix_id = "CHXGUTAUW5CLZHMQEN5IPP";
    (function() {
        var oldonload = window.onload;
        window.onload = function() {
            __adroll_loaded = true;
            var scr = document.createElement("script");
            var host = (("https:" === document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
            if (oldonload) {
                oldonload();
            }
        };
    }());
</script>
 </head>
<body>
    
<!-- <form  method="POST">
  <input type="hidden" name="gatewayMode" value=1>
  <input type="hidden" name="publicApiKey" value="MP-LIVEPK-1QB0wQ191a$GvuW7R$687Kc0k8QtODbbcwT3BjCI5Rm$.rugKB2Pfu22y61ivvUS42eRVgBdybK2ctg40enG$$OF$7m/fvzSH1UyyD3ccX9v9Lc2WHqMiKJ0">
  <input type="hidden" name="secretApiKey" value="MP-LIVESK-n$d9bl.bzuQfyN9VgXxf0y4jd66$32U4h2uCqLC0szamTcsN$93Dm3CiyRiOTs8Wz4FP2.1aAuiA$0.N2192O$kKIQ3zv/k0PYrV2Acpn$.XU7RtO2gkbLJb">
  <label for="montant">Inserez le montant à payer</label><input type="text" name="montant">
  <input type="text" name="devise" >
  <label for="devise">Inserer la devise</label><select name="devise" id="">
    <option value="CDF">CDF</option>
    <option value="USD">USD</option>
  </select>
  <input type="hidden" name="callbackUrl" value="{callback Url}">
  <input type="submit" value="Payer" name="payer">
</form> -->


<div class="box">
        <span class="borderline"></span>
        <form action="https://www.monetbil.com/pay/v2.1/h6hTYFbcxL5UOrPcDRDkz9Gqb1xPMp" method="POST"  data-monetbil="form">
          <input type="hidden" name="gatewayMode" value=1>
  <input type="hidden" name="publicApiKey" value="MP-LIVEPK-1QB0wQ191a$GvuW7R$687Kc0k8QtODbbcwT3BjCI5Rm$.rugKB2Pfu22y61ivvUS42eRVgBdybK2ctg40enG$$OF$7m/fvzSH1UyyD3ccX9v9Lc2WHqMiKJ0">
  <input type="hidden" name="secretApiKey" value="MP-LIVESK-n$d9bl.bzuQfyN9VgXxf0y4jd66$32U4h2uCqLC0szamTcsN$93Dm3CiyRiOTs8Wz4FP2.1aAuiA$0.N2192O$kKIQ3zv/k0PYrV2Acpn$.XU7RtO2gkbLJb">
            <h2>Paiement</h2>
            <div class="inputbox">
            <input type="text" name="montant" required="required">
                <span>MONTANT</span>
                <i></i>
            </div>
            <div class="inputbox">
            <input type="text" name="description" required="required">
                <span>DESCRIPTION</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="text" name="devise" >
                <span>CDF ou USD</span>
                <i></i>
            </div>
          
            <input type="submit" value="PAYER" name="payer"   id="monetbil-payment-widget">
            <!-- <button type="submit"  id="monetbil-payment-widget" >Payer</button> -->
        </form>


        <script type="text/javascript" src="https://fr.monetbil.com/widget/v2/monetbil.min.js?t=1691507562"></script>
    </div>

</body>
</html>