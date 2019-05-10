<?php

include "_debut2.inc.php";
    
if(isset($_GET["name"])){

    $idSession = $_GET["name"];

    $resultat = desinscriptionSession($pseudo, $idSession);
    
    if($resultat == true){
            
            header("Location: mesFormation.php");
    }
    else{
        
            header("Location= mesFormation.php");
    
    }
    

}

 




