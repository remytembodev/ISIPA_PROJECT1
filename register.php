<?php
session_start();
if(isset($_POST['envoi'])){
    include('bdd.php');
    $nom=htmlspecialchars(strtoupper($_POST['nom']));
    $postnm=htmlspecialchars(strtoupper($_POST['postnom']));
    $prenom=htmlspecialchars(strtoupper($_POST['prenom']));
    $email =htmlspecialchars($_POST['email']);
    $lieu=htmlspecialchars($_POST['lieu']);
    $date=htmlspecialchars($_POST['date']);
    $etat=htmlspecialchars($_POST['etat']);
    $nationalite=htmlspecialchars($_POST['nat']);
    $pere=htmlspecialchars($_POST['pere']);
    $mere=htmlspecialchars($_POST['mere']);
    $province=htmlspecialchars($_POST['prov']);
    $district=htmlspecialchars($_POST['district']);
    $territoire=htmlspecialchars($_POST['territoire']);
    $adresse=htmlspecialchars($_POST['adresse']);
    $tel=htmlspecialchars($_POST['tel']);
    $ecole=htmlspecialchars($_POST['ecole']);
    $prov_ecole=htmlspecialchars($_POST['prov_ecole']);
    $terri_ecole=htmlspecialchars($_POST['territoire_ecole']);
    $section=htmlspecialchars($_POST['section']);
    $centre=htmlspecialchars($_POST['centre']);
    $annee_diplome=htmlspecialchars($_POST['annee_diplome']);
    $activite=htmlspecialchars($_POST['activite']);
    $annee_aca=htmlspecialchars($_POST['annee_aca']);
    $titre_aca=htmlspecialchars($_POST['titre_aca']);
    $Ets=htmlspecialchars($_POST['Ets']);
    $annee_etude=htmlspecialchars($_POST['annee_etude']);
    $mention=htmlspecialchars($_POST['mention']);
    $choix=htmlspecialchars($_POST['choix']);
    $promotion=htmlspecialchars($_POST['promotion']);

    if((!empty($nom)) and (!empty($postnm)) and (!empty($prenom)) and (!empty($email)) and (!empty($lieu)) and (!empty($date)) and (!empty($etat)) and 
    (!empty($nationalite)) and (!empty($pere)) and (!empty($mere))and (!empty($province)) and (!empty($district)) and (!empty($territoire))
    and (!empty($adresse)) and (!empty($tel)) and (!empty($ecole))and (!empty($prov_ecole)) and (!empty($terri_ecole)) and (!empty($section))
    and (!empty($centre)) and (!empty($annee_diplome)) and (!empty($choix)) and (!empty($promotion))){
        $isipa="ISIMTD";
        $first = $nom[0];
        $second = $postnm[0];
        $third = $prenom[0];
        $prom = $promotion;
        $user = $isipa.$first.$second.$third.$prom;
        $req = $bdd->query("INSERT INTO inscription (iduser,NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE,DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, PERE,
         MERE, PROVINCE, DISTRICT, TERRITOIRE, ADRESSE, TELEPHONE, ECOLE, PROVINCE_ECOLE, TERRITOIRE_ECOLE, SECTION, CENTRE,
         ANNEE_DIPLOME, ACTIVITE,ANNEE_ACADEMIQUE, TITRE_ACADEMIQUE, ETABLISSEMENT,ANNEE_ETUDE, MENTION, CHOIX, PROMOTION, Date_Inscription) 
         VALUES ('$user','$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$pere', '$mere', '$province', 
         '$district', '$territoire', '$adresse', '$tel', '$ecole', '$prov_ecole', '$terri_ecole', '$section', '$centre',
         '$annee_diplome', '$activite','$annee_aca', '$titre_aca', '$Ets','$annee_etude','$mention', '$choix', '$promotion', '$date')");
            if ($req){
              header("location:user.php?user=".$user);  
         } 
    }
   
    }
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>
    <link rel="stylesheet" href="register.css"> 
</head>
<body>
    <main>
        <form action="" method="post" id="myform">
            <div class="container">
                <div class="form first-part">
                    <h2>FORMULAIRE D'INSCRIPTION</h2>
                    <label for="">Nom </label> 
                    <input type="text" name="nom" required=required>
                    <label for="">Post-Nom :</label> 
                    <input type="text" name="postnom" required=required> 
                    <label for="">Prénom </label>
                    <input type="text" name="prenom" required=required> 
                    <label for="">E-mail</label>
                    <input type="email" name="email" required=required>
                    <label for="">Lieu de naissance </label>
                    <input type="text" name="lieu" required=required> 
                    <label for="">Date de naissance </label> 
                    <input type="date" name="date" required=required>
                    <label for="">Etat civil </label> 
                    <select name="etat" id="">
                        <option value="Celibataire">Celibataire</option>
                        <option value="Marié(e)">Marié(e)</option>
                        <option value="Divorcé(e)">Divorcé(e)</option>
                    </select>
                    <label for="">Nationalité </label>
                    <input type="text" name="nat" required=required>
                    <label for="">Nom du père </label>
                    <input type="text" name="pere" required=required>
                    <label for="">Nom de la mère : </label>
                    <input type="text" name="mere" required=required> 
                    <label for="">Province d'origine des parents </label>
                    <input type="text" name="prov" required=required>  
                    <label for="">District </label>
                    <input type="text" name="district" required=required> 
                    <label for="">Territoire  </label> 
                    <input type="text" name="territoire" required=required> 
                    <label for="">Adresse du candidat  </label>
                    <input type="text" name="adresse" required=required> 
                    <label for="">Téléphone  </label> 
                    <input type="number" name="tel" required=required>      
                </div>
                <div class="form second-part">
                    <fieldset>
                        <legend>Etudes secondaire faites</legend>
                        <label for="">Nom de l'école secondaire fréquenté : </label> 
                        <input type="text" name="ecole" required=required>
                        <label for="">Province : </label> <input type="text" name="prov_ecole" required=required>
                        <label for="">Territoire : </label> <input type="text" name="territoire_ecole" required=required>
                        <label for="">Section suivie aux humanités : </label> <input type="text" name="section" required=required>
                        <label for="">Nom du centre de l'examen d'état : </label> <input type="text" name="centre" required=required>
                        <label for="">Année d'obtention du Diplôme d'état : </label> <input type="number" name="annee_diplome" required=required>
                    </fieldset>
                </div>
                <div class="form third-part">
                    <fieldset>
                        <div class="apres_bac">
                        <legend>Occupations après les humanités</legend>
                        <p>les éléves finalistes de l'année en cours ne rempliront pas les points suivants</p>
                        <label for="">Activités professionelles : </label> <input type="text" name="activite">
                        <label for="">Derniers diplôme academiques en cours et obtenus : </label> 
                        <table>
                            <tr>
                            <td>Année Academique</td>  
                            <td>Titre du diplôme</td>
                            <td>Etablissement</td>
                            <td>Année d'études</td>
                            <td>Mention</td>
                            </tr>
                            <tr>
                            <th><input type="number" name="annee_aca"></th> 
                            <th><input type="text" name="titre_aca"></th> 
                            <th><input type="text" name="Ets"></th> 
                            <th><input type="number" name="annee_etude"></th> 
                            <th><input type="text" name="mention"></th> 
                            </tr>
                        </table>
                        </div>
                    </fieldset>
                </div>
                <div class="form fourth-part">
                    <fieldset>
                        <legend>Choix de la faculté</legend>
                        <p>Tout candidat est tenu de faire deux choix</p>
                        <label for="">1ère Choix</label> <select name="choix" id="" required=required>
                            <option value="TM">Technique de Maintenance</option>
                            <option value="IG">Informatique de Gestion</option>
                            <option value="GF">Gestion Financière</option>
                            <option value="Douane">Douane</option>
                        </select><br>
                        <label for="">Promotion</label> <select name="promotion" id="" required=required>
                            <option value="G1">L1 (LMD)</option>
                            <option value="G2">L2 (LMD)</option>
                            <option value="G3">L3 (LMD)</option>
                            <option value="L1">L1 (classique)</option>
                            <option value="L2">L2 (classique)</option>
                        </select>
                        <p>Je certifie sur mon honneur que les renseignements ci-haut fournis sont exacts. Le paiement de certains frais est anticipatif pour confirmer l'inscription, je m'engage à payer les frais dans le délai indiqué. Les frais payés sont non remboursables. </p>
                        <label for="">J'accepte</label> <input type="radio" name="yes" >
                        <label for="">Je n'accepte pas</label> <input type="radio" name="yes"><br>
                        <input type="submit" value="Soumettre" name="envoi">
                    </fieldset>
                </div>
            </div>
        </form>
    </main>

    <!-- <script>
        let next1 = document.querySelector('.first-next');
        let next2 = document.querySelector('.second-next');
        let next3 = document.querySelector('.third-next');
        let prev1 = document.querySelector('.first-prev');
        let prev2 = document.querySelector('.second-prev');
        let prev3 = document.querySelector('.third-prev');
        let container = document.querySelector('.container');

        let form = document.getElementbyId('myform');
        myform.addEventListener('submit', function(remy)){
            alert('Formulaire envoié avec succès')
        }

        let active = document.getElementbyId('active');
        active.disabled = true;

        next1.onclick = function(){
            container.classList.add('second-part');
            // container.classList.remove('first-part');
}
next2.onclick = function(){
            container.classList.add('third-part');
            // container.classList.remove('first-part');
}
next3.onclick = function(){
            container.classList.add('fourth-part');
//             container.classList.remove('first-part');
 }

    </script> -->
</body>
</html>