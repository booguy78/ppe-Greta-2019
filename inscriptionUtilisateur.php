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


    <div class="container" style="text-align: center" >

        <blockquote class = "blockquote">
            <h2 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning" >Inscription </font>  </font>  </font> </h2>
        </blockquote><br><br>

        <form action = "inscriptionUtilisateurTraitement.php" method="POST">
            
            <table class="table table-hover">

                        
                <tr class="table-primary">
                    <th scope="row"> </th>
                    <td></td>        
                </tr>
                        
                <tr>
                    <td align="left"><label for="pseudo" class="col-md-5 col-form-label" ><strong>Pseudo</strong>  </label></td>
                    <td><input type="text" name = "pseudo"  placeholder="Votre pseudo" id ="pseudo"  class="form-control-plaintext"></td>       
                </tr>

                <tr>
                    <td align="left"><label for="nom" class="col-md-5 col-form-label" ><strong>Nom</strong>  </label></td>
                    <td><input type="text" name = "nom"  placeholder="Votre nom" id ="nom"  class="form-control-plaintext"></td>       
                </tr>

                <tr>
                    <td align="left"><label for="prenom" class="col-md-5 col-form-label" ><strong>Prenom</strong>  </label></td>
                    <td><input type="text" name = "prenom"  placeholder="Votre prenom" id ="prenom"  class="form-control-plaintext"></td>       
                </tr>

                <tr>
                    <td align="left"><label for="mail" class="col-md-5 col-form-label" ><strong>Mail</strong>  </label></td>
                    <td><input type="email" name = "mail"  placeholder="Votre mail" id ="prenom"  class="form-control-plaintext"></td>       
                </tr>
                        
                <tr>
                    <td align="left"><label for="mdp" class="col-md-5 col-form-label"><strong> Mot de passe </strong>  </label></td>
                    <td><input type="password" name = "mdp"  placeholder="Votre mot de passe" id ="mdp"  class="form-control-plaintext"></td>         
                </tr>

                <tr>
                    <td align="left"><label for="mdp2" class="col-md-5 col-form-label"><strong>Confirmer mot de passe </strong>  </label></td>
                    <td><input type="password" name = "mdp2"  placeholder="Confirmer votre mot de passe" id ="mdp2"  class="form-control-plaintext"></td>         
                </tr>

                <tr>
                    <td></td>
                    <td align="left"><button type="submit" name = "inscription"  value="valider"  class="btn btn-success">Soumettre</button> </td>
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



