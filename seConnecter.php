<?php
include "_debut1.inc.php";
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


    <div class="container" style="text-align: center">

        <blockquote class = "blockquote">
            <h2 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning" >Se connecter </font>  </font>  </font> </h2>
        </blockquote><br><br>

        <form action="seConnecterTraitement.php" method= "POST">
            
            <table class="table table-hover">

                
                <tr class="table-primary">
                    <th scope="row"> </th>
                    <td></td>        
                </tr>
                 
                <tr>
                    <td align="left"><label for="pseudo" class="col-md-5 col-form-label" ><strong>Pseudo</strong>  </label></td>
                    <td><input type="text" name = "pseudoConnection"  placeholder="pseudo" id ="pseudo"  class="form-control-plaintext"></td>       
                </tr>
                
                <tr>
                    <td align="left"><label for="mdp" class="col-md-5 col-form-label"><strong> Mot de passe </strong>  </label></td>
                    <td><input type="password" name = "mdpConnection"  placeholder="mot de passe" id ="mdp"  class="form-control-plaintext"></td>         
                </tr>
            
                <tr>
                    <td></td>
                    <td align="left"><button type="submit" name = "connection"  value="validé"  class="btn btn-success">Se connecter</button> </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="left"> <a href="index.php" > retour à l'accueil</a> </td>
                </tr>
        
                
                
            </table>

        </form>
        
        
    </div>

</body>
</html>


        
       
            
   







