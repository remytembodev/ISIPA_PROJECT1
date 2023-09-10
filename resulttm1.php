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
        <table>
        <tr>
                <td><strong>identifiant de l'étudiant<strong></td>
                <td> <input type="text" name="id_user"></td>
            </tr>
            <tr>
                <td>INFORMATIQUE FONDAMENTAL</td>
                <td><input type="text" name="info"></td>
            </tr>
            <tr>
                <td>PHYSIQUE</td>
                <td><input type="text" name="physique"></td>
            </tr>
            <tr>
                <td>ELECTRONIQUE GENERALE</td>
                <td><input type="text" name="electro_gen"></td>
            </tr>
            <tr>
                <td>ANALYSE VECTORIELLE</td>
                <td><input type="text" name="analyse"></td>
            </tr>
            <tr>
                <td>SANTE PUBLIQUE</td>
                <td><input type="text" name="sante"></td>
            </tr>
            <tr>
                <td>SYSTEME D'EXPLOITATION</td>
                <td><input type="text" name="se"></td>
            </tr>
            <tr>
                <td>SCHEMAS ELECTRIQUE</td>
                <td><input type="text" name="schemas"></td>
            </tr>
            <tr>
                <td>EDUCATION A LA CITOYENNETE</td>
                <td><input type="text" name="educit"></td>
            </tr>
            <tr>
                <td>ALGORITHME ET PROGRAMMATION</td>
                <td><input type="text" name="algo"></td>
            </tr>
            <tr>
                <td>MATHEMATIQUE</td>
                <td><input type="text" name="math"></td>
            </tr>
            <tr>
                <td>ANGLAIS TECHNIQUE</td>
                <td><input type="text" name="anglais"></td>
            </tr>
            <tr>
                <td>ELECTRONIQUE DIGITALE</td>
                <td><input type="text" name="electro_digi"></td>
            </tr>
            <tr>
                <td>LOGIQUE, EXPRESSION ECRITE ET ORALE</td>
                <td><input type="text" name="leeo"></td>
            </tr>
            <tr>
                <td>MESURE ELECTRIQUE</td>
                <td><input type="text" name="mesure"></td>
            </tr>
            <tr>
                <td>MESURE ELECTRIQUE</td>
                <td><input type="text" name="mesure"></td>
            </tr>
            <tr>
                <td>FRANCAIS</td>
                <td><input type="text" name="francais"></td>
            </tr>
            <tr>
                <td>PROJET INFORMATIQUE</td>
                <td><input type="text" name="projet"></td>
            </tr>
            <tr>
                <td>TECHNOLOGIE DES COMPOSANTS</td>
                <td><input type="text" name="techno"></td>
            </tr>
            <tr>
                <td>POURCENTAGE</td>
                <td><input type="text" name="percent"></td>
            </tr>
            <tr>
                <td>MENTION</td>
                <td><input type="text" name="mention"></td>
            </tr>

        </table>

     
     
        

        
        <input type="submit" value="Ajouter" name="ajout">
    
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