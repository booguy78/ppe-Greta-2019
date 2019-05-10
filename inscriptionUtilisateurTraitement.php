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
    <script src="main.js"></script>
</head>
<body>
    
<?php



//TEST SUR LE SUBMITT

if (isset($_POST["inscription"])){ 
    $errors = array();
    
    


    //TEST SUR LE PSEUDO
    
    if(empty($_POST["pseudo"])){
        $errors["pseudo"] = "Votre pseudo n'est pas valide";
    }
    else{
        $pseudo = $_POST["pseudo"];
        $doublonPseudo =doublonPseudo($pseudo);
        if($doublonPseudo == 1){
            $errors["pseudo"] = "ce pseudo est deja utilisé";
        }
    }
    
    
    
   
   //TEST SUR LE NOM

    if(empty($_POST["nom"])){   //ajouter pregmatch   et htmlentities et sha1 pour les mdp;
        
        $errors["nom"] = "Votre nom n'est pas valide";
    }
    elseif(preg_match('/[\W]/',$_POST["nom"]) ){

        $errors["nom"] = "Votre ";
    }
   
    else{
        $nom = $_POST["nom"];
    }

    

    
    //TEST SUR LE PRENOM

    if(empty($_POST["prenom"])){
        $errors["prenom"] = "Votre prenom n'est pas valide";
    }
    else{
        $prenom = $_POST["prenom"];
    }

   
   


    //TEST SUR LE MAIL

    if(empty($_POST["mail"]) || !filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){
        $errors["mail"] = "Votre email n'est pas valide";
    }
    else{
        $mail = $_POST["mail"];
        $doublon = doublonMail($mail);
       
        if($doublon == 1){
            $errors["mail"] = "cette adresse mail est deja utilisé"; 
        }

    }





    //TEST SUR LES MDP
    
    if(empty($_POST["mdp"]) || $_POST["mdp"]!= $_POST["mdp2"] ){
        $errors["mdp"] = "Votre mot de passe n'est pas valide";
    } 
    else{
        $mdp =  ($_POST["mdp"]);
        $mdp2 = ($_POST["mdp2"]);

    }  
}




//AFFICHAGE DES ERREURS

if (!empty($errors)){
    
    
    
    foreach ($errors as $error) { ?>
        
        <div class="container" style="text-align: center" >
            <div class = "alerte alerte-licenciable alerte-succès">
                
                <strong> <font style = "vertical-align: inherit;"> <?php echo $error ?> </font> </strong> 
                
                 
            </div>
        </div>

    <?php
    }
    ?> 
    <br>   
    <div style="text-align:center">
        <a href="inscriptionUtilisateur.php"  class="text-succes"> Réessayer </a> 
    </div>
   
<?php
}

else{
    
  $nouveauMembre = ajoutUtilisateur($pseudo, $nom, $prenom, $mail, $mdp, $mdp2 );

  $_SESSION["login"] = $_POST["pseudo"]; 
  $_SESSION['mdp'] = $_POST["mdp"];  
    ?>
        <div class="container" style="text-align: center" >
            <div class = "alerte alerte-licenciable alerte-succès">
                
               <h3 class="text-warning"><strong> <font style = "vertical-align: inherit;" > Votre inscription à bien été prise en compte veuillez </font> </strong></h3>  
                
                <p><a href="acceuil.php" class="alert-link"> <font style = "vertical-align: inherit;"><strong>accedez au Site</strong>  </font> </a> </p>
            </div>
        </div>
        
    <?php
   

}

?> 


</body>
</html>