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
    <div class="container" style="text-align: center" >
        <blockquote class = "blockquote">
            <h2 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning" >Bienvenue <?php  echo $_SESSION['login']; ?> </font>  </font>  </font> </h2>
        </blockquote><br><br>
        
    
    
        <blockquote class = "blockquote" style="text-align: left" >
            Sur ce portail web destiné aux bénévoles des clubs affiliés aux ligues de Lorraine vous avez la possibilité de:
            <ul><br>
                <li> Consulter notre catalogue de formation et de vous y inscrire via l'onglet <strong>Nos formations.</strong></li>
                <li> Consulter les formations pour lesquels vous êtes inscrit et avez la possibilité de vous désinscrire via l'onglet <strong>Mes formations.</strong> </li>
                <li> Gerer vos informations personnelles en cliquant sur l'onglet <strong>Mon compte.</strong> </li>
            </ul>

            <p>Vous souhaitant une bonne visite,</p>  
            
            <p>L'équipe M2L.</p> 
        </blockquote><br><br>
    <div>


</body>
</html>   

<?php 
include "_fin.inc.php"  
?>




