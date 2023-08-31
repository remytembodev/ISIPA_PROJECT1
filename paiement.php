<?php
    if(isset($_POST['callbackUrl'])){
        include ('bdd.php');
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="https://marchand.maishapay.online/payment/vers1.0/merchant/checkout" method="POST">
  <input type="hidden" name="gatewayMode" value=1>
  <input type="hidden" name="publicApiKey" value="MP-LIVEPK-1QB0wQ191a$GvuW7R$687Kc0k8QtODbbcwT3BjCI5Rm$.rugKB2Pfu22y61ivvUS42eRVgBdybK2ctg40enG$$OF$7m/fvzSH1UyyD3ccX9v9Lc2WHqMiKJ0">
  <input type="hidden" name="secretApiKey" value="MP-LIVESK-n$d9bl.bzuQfyN9VgXxf0y4jd66$32U4h2uCqLC0szamTcsN$93Dm3CiyRiOTs8Wz4FP2.1aAuiA$0.N2192O$kKIQ3zv/k0PYrV2Acpn$.XU7RtO2gkbLJb">
  <label for="montant">Inserez le montant à payer</label><input type="text" name="montant">
  <!-- <input type="text" name="devise" > -->
  <label for="devise">Inserer la devise</label><select name="devise" id="">
    <option value="CDF">CDF</option>
    <option value="USD">USD</option>
  </select>
  <input type="hidden" name="callbackUrl" value="{callback Url}">
  <input type="submit" value="Payer" name="payer">
</form>
</body>
</html>