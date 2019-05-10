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
            
            if (isset($_GET["name"])){
                $idSession = $_GET["name"];
            }
            $inscritSession = inscriptionSession($pseudo,$idSession);

            if($inscritSession){ 
        ?>
                <blockquote class = "blockquote">
                
                    <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning"> Votre inscription a bien été prise en compte  </font>  </font> </h3>
            
                </blockquote><br><br>
            <?php 
            }
            else{ ?>

                <blockquote class = "blockquote">
                
                    <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning"> Vous êtes déjà inscrit à cette session de formation  </font>  </font> </h3>
            
                </blockquote><br><br>
            <?php
                }
         
           
        
            ?>

    </div>
</body>
</html>

<?php 
include "_fin.inc.php"  
?>
