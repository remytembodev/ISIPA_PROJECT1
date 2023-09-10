<?php
    include('bdd.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout des cote</title>
    <link rel="stylesheet" href="RESULT/addnote.css">
</head>
<body>
    <div class="container">
        <div class="noteblock">
            <label for="info">INFO FOND</label>
            <input type="text" name="info" id="">
            <label for="info">PHYSIQUE</label>
            <input type="text" name="physique" id="">
            <label for="info"> ELECTRO GEN</label>
            <input type="text" name="electro_gen" id="">
            <label for="info">ANALYSE VECTORIELLE</label>
            <input type="text" name="analyse" id="">
            <label for="info">SANTE PUBLIQUE</label>
            <input type="text" name="sante" id="">
            <label for="info"> POURCENTAGE</label>
            <input type="text" name="percent" id="">
        </div>
        <div class="noteblock">
            <label for="info">SYSTEME D'EXPLOITATION</label>
            <input type="text" name="se" id="">
            <label for="info">SCHEMAS ELECTRIQUE</label>
            <input type="text" name="schemas" id="">
            <label for="info">EDUCATION A LA CITOYENNETE</label>
            <input type="text" name="educit" id="">
            <label for="info">ALGORITHME ET LANGAGE DE PROGRAMMATION</label>
            <input type="text" name="algo" id="">
            <label for="info">MATHEMATIQUE</label>
            <input type="text" name="math" id="">
            <label for="info">ANGLAIS TECHNIQUE</label>
            <input type="text" name="anglais" id=""> <br>
            <input type="submit" value="Ajouter" name="ajout">
            
        </div>
        <div class="noteblock">
        <label for="info">ELECTRONIQUE DIGITALE</label>
            <input type="text" name="electro_digi" id="">
            <label for="info">LEEO</label>
            <input type="text" name="leeo" id="">
            <label for="info">MESURE ELECTRIQUE</label>
            <input type="text" name="mesure" id="">
            <label for="info">FRANCAIS</label>
            <input type="text" name="francais" id="">
            <label for="info">PROJET</label>
            <input type="text" name="projet" id="">
            <label for="info">TECHNOLOGIE DES COMPOSANTS</label>
            <input type="text" name="techno" id="">
            <LAbel>MENTION</LAbel><select name="mention" id="">
                <option value="Satisfaction">Satisfaction</option>
                <option value="Distinction">Distinction</option>
                <option value="Grande Distinction">Grande Distinction</option>
                <option value="Très Grande Distinction">Très Grande Distinction</option>
                <option value="Elite">Elite</option>
            </select>
        </div>
        
    </div>
    
</body>
</html>