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


        <?php   
            //var_dump($_POST);

            if (isset($_POST["soumettre"])){
                $errors = array();
                
                if(empty($_POST["newMdp"]) || empty($_POST["newMdp2"]) ){
                    $errors[0] = "Veuillez renseignez tous les champs";
                }

                elseif ($_POST["newMdp"] != $_POST["newMdp2"] ){
                    $errors[1] = "Vos mot de passe ne correspondent pas";
                }
            }

            if (!empty($errors)){
                //var_dump($errors); 
                
                foreach($errors as $m){ ?>
                    
                    <blockquote class = "blockquote">
                        
                        <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning"> <?php echo $m; ?>  </font>  </font> </h3><br>
                        <div style="text-align:center"><a href="changerMdp.php"  class="text-succes"> Réessayer </a> </div>
                    </blockquote><br><br>
                
                
                <?php }
            }
            else{
                $newMdp = $_POST["newMdp"];
                $newMdp2 = $_POST["newMdp2"];

                $newMotDePasse = changerMdp($newMdp,$newMdp2,$pseudo);
                
                if ($newMotDePasse == true){ ?>
                    
                    <blockquote class = "blockquote">
                        
                        <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning"> Votre mot de passe à bien été modifier  </font>  </font> </h3>
                    
                    </blockquote><br><br>
                
                <?php
                }
            

            }
        ?>

    </div>
</body>
</html>
