<?php
session_start();
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

<?php
//var_dump($_POST);

if (isset($_POST["connection"])){
    $errors = array();

    
    if (empty($_POST["pseudoConnection"])){
        $errors["pseudoConnection"] = "Veuillez renseigner votre pseudo";

    }

    elseif (empty($_POST["mdpConnection"])){
        $errors["mdpConnection"] = "Veuillez renseigner votre mot de passe";

    }
    else{
        $pseudoConnect = $_POST["pseudoConnection"];
        $mdpConnect = $_POST["mdpConnection"];
    
        $verif = verificationMembre($pseudoConnect, $mdpConnect);
        
        
        
        if($verif == true){
    
            $_SESSION["login"] = $_POST["pseudoConnection"]; //c est a ce niveau qu' on recupere les variable de session qui vous nous permettre de rester connecter et identifié tous au long de notre navigation sur les differente pafe du site
            $_SESSION['mdp'] = $_POST["mdpConnection"];
            header("Location: acceuil.php");
            
        }
    
        else{
            $errors["utilisateurInconnu"] = "Votre pseudo ou votre mdp sont érroné";
            
        }
    
    } 

}



if (!empty($errors)){
     
    foreach ($errors as $error) { // on parcours le tableau errors afin d'afficher les erreurs
    ?>  
        

        <blockquote class = "blockquote">
            <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning" > <?php echo $error."<br>"; ?> </font>  </font>  </font> </h3>
            <div style="text-align:center"><a href="seConnecter.php"  class="text-succes"> Réessayer </a> </div>
        </blockquote><br><br>

    <?php 
    }
}
?>





</body>
</html>