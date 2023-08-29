<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECUPERATION DU MOT DE PASSE</title>
    <link rel="stylesheet" href="assets/inde.css">
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
        <form action="forgot.php" method="POST">
            <h2>Récupérer son mot de passe</h2>
            <div class="inputbox">
                <input type="text" name="username" required="required">
                <span>Nom d'utilisateur</span>
                <i></i>
            </div>
            <div class="inputbox">
                <input type="email" name="email" required="required">
                <span>Adresse electronique ou Email</span>
                <i></i>
            </div>
            <!-- <div class="links">
                <a href="recup.php">Mot de passe oublié</a>
                <a href="register.php">Créer un compte</a>
            </div> -->
            <input type="submit" value="valider" name="valider">
        </form>
    </div>
</body>
</html>
