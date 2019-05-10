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
            <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Changer Mot de passe   </font>  </font> </h3>
    
        </blockquote><br><br>
        
        <form action="changerMdpTraitement.php" method ="post">
            
            <table class="table table-hover">

                
                <tr class="table-success">
                        <th scope="row"> </th>
                        <td></td>
                    
                </tr>
                
            
            
                <tr>
                    <td><label for="mdp" class="col-md-5 col-form-label" >Nouveau mot de passe </label></td>
                    <td><input type="password" name = "newMdp"  placeholder="nouveau mot de passe" id ="newMdp"  class="form-control-plaintext"></td>
                    
                </tr>
                
                <tr>
                    <td><label for="mdp2" class="col-md-5 col-form-label">Confirmer mot de passe </label></td>
                    <td><input type="password" name = "newMdp2"  placeholder="confirmer mot de passe" id ="newMdp2"  class="form-control-plaintext"></td>
                    
                </tr>
            
                <tr>
                    <td></td>
                    <td><button type="submit" name = "soumettre"  value="validé"  class="btn btn-primary">Soumettre</button> </td>
                </tr>

                <tr class="table-success">
                        <th scope="row"> </th>
                        <td></td>
                    
                </tr>
            </table>

        </form>


    </div>

</body>
</html>

<?php 
include "_fin.inc.php"  
?>
