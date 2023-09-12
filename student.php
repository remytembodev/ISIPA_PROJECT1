<?php
session_start();
    include('bdd.php');
    $student = $_GET['student'];
    $_SESSION['student'] = $student; 
    $check_student = $bdd->prepare("SELECT NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, CHOIX, PROMOTION, photo FROM inscription WHERE iduser= ?");
    $check_student->execute(array($student));
    $data_student = $check_student->fetch();
    $row_student = $check_student->rowCount();
    if ($row_student){
        $nom = $data_student['NOM'];
        $postnm = $data_student['POST_NOM'];
        $prenom = $data_student['PRENOM'];
        $email = $data_student['EMAIL'];
        $lieu = $data_student['LIEU_NAISSANCE'];
        $date = $data_student['DATE_NAISSANCE'];
        $etat = $data_student['ETAT_CIVIL'];
        $nationalite = $data_student['NATIONALITE'];
        $adresse = $data_student['ADRESSE'];
        $tel = $data_student['TELEPHONE'];
        $choix = $data_student['CHOIX'];
        $promotion = $data_student['PROMOTION'];
        $photo = $data_student['photo'];
        $user = $_SESSION['user'];
        if (($choix === 'TM') and ($promotion === 'G1')){
            $observe = 'TM1';
        }else
        if (($choix === 'TM') and ($promotion === 'G2')){
            $observe = 'TM2';
        }else
        if (($choix === 'TM') and ($promotion === 'G3')){
            $observe = 'TM3';
        }
        $req2 = $bdd->query("INSERT INTO etudiant(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME, OBSERVATION, PHOTO)
   
   
   
        VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user','$observe', '$photo')");
        if($req2){
            if (($choix==='TM') && ($promotion==='G1')){
                $req3 = $bdd->query("INSERT INTO tm1(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME, OBSERVATION)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user','$observe')");
                if($req3){
                    header('location:login.php');    
                }
        }
            else
            if (($choix==='TM') && ($promotion==='G2')){
                $req4 = $bdd->query("INSERT INTO tm2(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME, OBSERVATION)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user')");
                if($req4){
                    header('location:login.php');    
                }
        }else
            if (($choix==='TM') && ($promotion==='G3')){
                $req5 = $bdd->query("INSERT INTO tm3(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user')");  
                if($req5){
                    header('location:login.php');    
                }
        }else 
            if (($choix==='IG') && ($promotion==='G1')){
                $req6 = $bdd->query("INSERT INTO p1(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user')");  
                if($req6){
                    header('location:login.php');    
                }
        }else
            if (($choix==='IG') && ($promotion==='G2')){
                $req7 = $bdd->query("INSERT INTO p2(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user')");  
                if($req7){
                    header('location:login.php');    
                }    
        }else
            if (($choix==='IG') && ($promotion==='G3')){
                $req9 = $bdd->query("INSERT INTO ap2(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user')");  
                if($req9){
                    header('location:login.php');    
                }   
        }else
            if (($choix==='GF' or $choix==='Douane') && ($promotion==='G1')){
                $req10 = $bdd->query("INSERT INTO gf1(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user')");  
                if($req10){
                    header('location:login.php');    
                }    
        }else
            if (($choix==='GF' or $choix==='Douane') && ($promotion==='G2')){
                $req11 = $bdd->query("INSERT INTO gf2(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user')");  
                if($req11){
                    header('location:login.php');    
                }    
        }else
            if (($choix==='GF' or $choix==='Douane') && ($promotion==='G3')){
                $req13 = $bdd->query("INSERT INTO gf3(NOM, POST_NOM, PRENOM, EMAIL, LIEU_NAISSANCE, DATE_NAISSANCE, ETAT_CIVIL, NATIONALITE, ADRESSE, TELEPHONE, FACULTE, PROMOTION, USERNAME)
                VALUES ('$nom', '$postnm', '$prenom','$email', '$lieu', '$date', '$etat', '$nationalite', '$adresse', '$tel', '$choix', '$promotion','$user')");  
                if($req13){
                    header('location:login.php');    
                }
        }
            header('location:login.php');
        }else{
            echo "une erreur est survenue lors de l'insertion";
        }
}
 
?>