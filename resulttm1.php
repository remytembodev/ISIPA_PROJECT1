<?php
    include('bdd.php');
        // $name = $_GET['name'];
        // $check = $bdd->query("SELECT * FROM tm1");
        // $post = $data['POST_NOM'];
        // $prenom = $data['PRENOM']; 
        if (isset($_POST['ajout'])){
            $user = $_POST['id_user'];
            $info = $_POST['info'];
            $physique = $_POST['physique'];
            $electro_gen = $_POST['electro_gen'];
            $analyse = $_POST['analyse'];
            $sante = $_POST['sante'];
            $se = $_POST['se'];
            $schemas = $_POST['schemas'];
            $educit= $_POST['educit'];
            $algo = $_POST['algo'];
            $math = $_POST['math'];
            $anglais = $_POST['anglais'];
            $electro_digi = $_POST['electro_digi'];
            $leeo = $_POST['leeo'];
            $mesure = $_POST['mesure'];
            $francais = $_POST['francais'];
            $projet = $_POST['projet'];
            $techno = $_POST['techno'];
            $percent = $_POST['percent'];
            $mention = $_POST['mention'];
            if ((!empty($info)) and (!empty($physique)) and (!empty($electro_gen)) and (!empty($analyse)) and (!empty($sante)) 
            and (!empty($se)) and (!empty($schemas)) and (!empty($educit)) and (!empty($algo)) and
            (!empty($math)) and (!empty($anglais)) and (!empty($electro_digi)) and (!empty($leeo))
            and (!empty($mesure)) and (!empty($francais)) and (!empty($projet)) and (!empty($techno)) 
            and (!empty($percent)) and (!empty($mention))){
                $select = $bdd->prepare("SELECT OBSERVATION etudiant WHERE USERNAME=?");
                $select->execute(array($user));
                $aff = $select->fetch();
                $table = $aff['OBSERVATION'];
                $req = $bdd->prepare("SELECT * FROM $table WHERE USERNAME=?");
                $req->execute(array($user));
                $data = $req->fetch();
                $nom = $data['NOM'];
                $post = $data['POST_NOM'];
                $prenom = $data['PRENOM'];
                $email = $data['EMAIL'];
                // $sql = $bdd->prepare("")
                $sql = $bdd->query("INSERT INTO result_tm1 (NOM, POST_NOM, PRENOM, INFO, PHYSIQUE, ELECTRO_GEN, ANALYSE, SANTE, SE, SCHEMAS_ELEC, EDUCIT, ALGO, MATH, ANGLAIS, ELECTRO_DIGI, LEEO, MESURE, FRANCAIS, PROJET, TECHNO, PERCENT, MENTION)
                VALUES('$nom', '$post', '$prenom', '$info', '$physique', '$electro_gen','$analyse', '$sante', '$se', '$schemas', '$educit', '$algo',
                '$math', '$anglais', '$electro_digi', '$leeo', '$mesure', '$francais', '$projet', '$techno', '$percent', '$mention')");
                if ($sql){
                    echo "effectuer";
                }else{
                    echo "echouer";
                }
            }
        }
        // if(isset($_POST['modifier'])){
        //     $sql1 = $bdd->query("")
        // }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication des resultats</title>
    <link rel="stylesheet" href="tm1/tm.css">
</head>
<body>
    <form method="POST">
        <label for="id_user">L'identifiant de l'étudiant</label>
        <input type="text" name="id_user">
        <label for="">INFORMATIQUE FONDAMENTAL</label>
        <input type="text" name="info">
        <label for="">PHYSIQUE</label>
        <input type="text" name="physique">
        <label for="">ELECTRONIQUE GENERALE</label>
        <input type="text" name="electro_gen">
        <label for="">ANALYSE VECTORIELLE</label>
        <input type="text" name="analyse">
        <label for="">SANTE PUBLIQUE</label>
        <input type="text" name="sante">
        <label for="">SYSTEME D'EXPLOITATION</label>
        <input type="text" name="se">
        <label for="">SCHEMAS ELECTRIQUE</label>
        <input type="text" name="schemas">
        <label for="">EDUCATIO A LA CITOYENNETE</label>
        <input type="text" name="educit">
        <label for="">ALGORITHME ET PROGRAMMATION</label>
        <input type="text" name="algo">
        <label for="">MATHEMATIQUE</label>
        <input type="text" name="math">
        <label for="">ANGLAIS TECHNIQUE</label>
        <input type="text" name="anglais">
        <label for="">ELECTRONIQUE DIGITALE</label>
        <input type="text" name="electro_digi">
        <label for="">LOGIQUE, EXPRESSION ECRITE ET ORALE</label>
        <input type="text" name="leeo">
        <label for="">MESURE ELECTRIQUE</label>
        <input type="text" name="mesure">
        <label for="">FRANCAIS</label>
        <input type="text" name="francais">
        <label for="">PROJET INFORMATIQUE</label>
        <input type="text" name="projet">
        <label for="">TECHNOLOGIE DES COMPOSANTS</label>
        <input type="text" name="techno">
        <label for="">POURCENTAGE</label>
        <input type="text" name="percent">
        <label for="">MENTION</label>
        <input type="text" name="mention">
        <input type="submit" value="Ajouter" name="ajout">
        <input type="submit" value="Modifier" name="modifier">
        <input type="submit" value="Supprimer" name="supprimer">
    </form>
    <!-- <form method="POST">
        <table border="">
            <tr>
                <td>NOM</td>
                <td>POST NOM</td>
                <td>PRENOM</td>
                <td>SEXE</td>
            </tr>
            <?php
                while ($data = $check->fetch()){
                    ?> 
                        <tr>
                            <th>
                                <?php echo $data['NOM']; ?>
                            </th> 
                            <th>
                                <?php echo $data['POST_NOM']; ?>
                            </th>
                            <th>
                                <?php echo $data['PRENOM']; ?>
                            </th>
                            <th>
                                <input type="text" name="info_fond">
                            </th>
                        </tr>
                    <?php 
                }
            ?>
            
        </table>
    </form> -->
    
    
</body>
</html>