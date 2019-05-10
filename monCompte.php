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
            <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Mon Compte   </font>  </font> </h3>
    
        </blockquote><br><br>
        
        <table class="table table-hover">
        
            <?php
                $mesInfos = infoMonCompte($pseudo);
                //var_dump($mesInfos);
            ?>
                
                <tbody>
                    <tr class="table-success">
                        <th scope="row"> </th>
                        <td></td>
                    
                    </tr>
                </tbody>

               
                <?php
                foreach($mesInfos as $info):
                ?>
                    <tbody>
                        <tr class="table-default">
                            <th scope="row"> Pseudo </th>
                            <td>  <?php  echo $info["pseudo"]; ?>  </td>
                        </tr>
                        
                        <tr class="table-default">
                            <th scope="row"> Nom </th>
                            <td>  <?php  echo $info["nom"]; ?>  </td>
                        </tr>
                       
                        <tr class="table-default">
                            <th scope="row"> Prenom </th>
                            <td>  <?php  echo $info["prenom"]; ?>  </td>
                        </tr>

                        <tr class="table-default">
                            <th scope="row"> Mail </th>
                            <td>  <?php  echo $info["mail"]; ?>  </td>
                        </tr>

                        <tr class="table-default">
                            <th scope="row"> Mot de passe </th>
                            <td><a href="changerMdp.php"> changer de mot de passe</a>  </td>
                        </tr>

                    </tbody>
                <?php endforeach ?>
                
                <tbody>
                    <tr class="table-success">
                        <th scope="row"> </th>
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



