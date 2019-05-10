<?php
    include "_debut2.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>
    <?php
        if (isset($_GET["name"])){
            $idFormation = $_GET["name"];
        }
           
        
        $lesSession = listeSession($idFormation);
        //var_dump($lesSession);
               
    ?>  
    <div class="container">

        <blockquote class = "blockquote">
            <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Voici les sessions pour la formation <font class="text-warning" > <?php foreach($lesSession as $session){echo $session["nomFormation"];break;}; ?> </font>  </font>  </font> </h3>
    
        </blockquote><br><br>
        
        <table class="table table-hover">
        
            
                
                
                <thead>
                    <tr class="table-success">
                    <th scope="col">Date Debut</th>
                    <th scope="col">Duree</th>
                    <th scope="col">Formateur</th>

                    <th scope="col">Lieu</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">S'inscrire</th>
                    </tr>
                </thead>
                <?php
                foreach($lesSession as $session):
                
                ?>
                    <tbody>
                        <tr class="table-default">
                        <th scope="row"> <?php  echo $session["dateDebut"]; ?> </th>
                        <td><?php  echo $session["duree"]; ?></td>
                        <td><?php  echo $session["nomIntervenant"]; ?></td>
                        <td><?php  echo $session["nomLieu"]; ?></td>
                        <td><?php  echo $session["adresse"]; ?></td>
                        <td> <a href="inscriptionSessionTraitement.php?name=<?php  echo $session["idSession"]?>"> S'incrire </td>
                        </tr>
                    </tbody>
                <?php endforeach ?>
                
                <tbody>
                    <tr class="table-success">
                    <th scope="row"> </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </tbody>

            
        </table> 


    </div>

</body>
</html>


<?php 
include "_fin.inc.php"  
?>
