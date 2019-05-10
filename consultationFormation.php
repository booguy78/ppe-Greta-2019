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

    <div class="container">

        <blockquote class = "blockquote">
            <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Voici les formations que nous vous proposons de suivre   </font>  </font> </h3>
    
        </blockquote><br><br>
        
        <table class="table table-hover">
        
            <?php
                $lesFormations = listeFormation();
               
            ?>
                
                
                <thead>
                    <tr class="table-success">
                    <th scope="col">Nom</th>
                    <th scope="col">Objectif</th>
                    <th scope="col">Cout formation</th>
                    
                    <th scope="col">Session</th>
                    </tr>
                </thead>
                <?php
                foreach($lesFormations as $formation):
                ?>
                    <tbody>
                        <tr class="table-default">
                        <th scope="row"> <?php  echo $formation["nomFormation"]; ?> </th>
                        <td><?php  echo $formation["objectifFormation"]; ?></td>
                        <td><?php  echo $formation["couts"]; ?></td>
                        

                        <td> <a href="inscriptionSession.php?name=<?php  echo $formation["idFormation"]?>"> Disponibilité </td>
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
                    </tr>
                </tbody>

            
        </table> 


    </div>

</body>
</html>

<?php 
include "_fin.inc.php"  
?>

