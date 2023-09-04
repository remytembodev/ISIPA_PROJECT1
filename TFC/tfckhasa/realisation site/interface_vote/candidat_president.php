<?php
include("bdd_conn.php");

if((isset($_FILES['image'])) AND (!empty($_FILES['image'])) AND (!empty($_POST['nom'])) 
 AND (!empty($_POST['postnom'])  AND (!empty($_POST['prenom'])))  AND (!empty($_POST['sexe']))){
    
    $nom=$_POST['nom'];
    $postnom=$_POST['postnom'];
    $prenom=$_POST['prenom'];
    $sexe=$_POST['sexe'];
    $voies=0;
    $errors=null;
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES["image"]["name"])));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
       $error="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
       $errors='File size must be excately 2 MB';
    }

    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"images_presidents/".$file_name);
       $lien_photo=("images_presidents/".$file_name);
       $savephoto = $bdd->prepare("INSERT INTO presidentielle (nom,postnom,prenom,sexe,voies,photo) VALUES (?,?,?,?,?,?)");
       $savephoto->execute(array($nom, $postnom,$prenom, $sexe,$voies,$lien_photo));
       echo "Success";
    }else{
       print_r($errors);
    }
 } else{
    echo "veuillez complèter tous les champs";
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>candidature</title>
</head>
<body>
        <form action="" method="POST" enctype="multipart/form-data">
                <label for="nom">Nom Candidat</label><br>
                <input type="text" name="nom" id="nom" placeholder="saisissez le nom "><br>
                <label for="postnom">Postnom Candidat</label><br>
                <input type="text" name="postnom" id="postnom" placeholder="saisissez le nom "><br>
                <label for="prenom">Prenom Candidat</label><br>
                <input type="text" name="prenom" id="prenom" placeholder="saisissez le nom "><br>
                <label for="sexe">Sexe Candidat</label><br>
                <select name="sexe" id="sexe">
                        <option value="M">Masculin</option>
                        <option value="F">Feminin</option>
                </select><br>
                <label for="image">Photo Candidat</label><br>
                <input type="file" name="image" id="image"><br><br>
                <input type="submit" name="envoie"><br><br>
        </form>
</body>
</html>