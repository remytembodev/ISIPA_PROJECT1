<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    

<?php
                //verification de l'identifiant de la page autentification
            if ($_POST['num_identi']=='123ABC')
            {
                //ici nous affichons les candidats 
              echo
                     '
                         <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                     <div class="card">

                                             <div class="card-header bg-primary " style="text-align:center; border-radius: 10px;">
                                                 <div class="card-title">
                                                    <h1>khasa mbumba</h1>
                                                 </div>

                                             </div>

                                            <div class="card-body">
                                                 <div class="card-img">
                                                    <img src="img/images.jpg" alt="" width="265" height="200" class="card-img" style="border-radius:10px;">
                                                 </div>
                                                
                                            </div>

                                            <div class="card-footer">
                                                <button class="btn btn-success btn-block" style="margin-top:3%;">Voter</button>
                                            </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                
                                </div>

                                <div class="col-md-3">
                                
                                </div>
                            </div>
                         </div>                
                    ';
            }
            else
            {
                echo '<script language="javascript">
                    location.href = "authentification.php";
                    alert("Identifiant saisi est incorrect");
                </script>';
            }
            ?>
    
       
</body>
</html>