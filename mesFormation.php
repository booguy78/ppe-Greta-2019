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
            <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"> Vos formations    </font>  </font> </h3>
    
        </blockquote><br><br>
        
        <table class="table table-hover">
        
            <?php
                $mesFormations = mesFormation($pseudo);
            
                if (empty($mesFormations)):?>
                    
                    <blockquote class = "blockquote">
                         <h3 class = "mb-0" align="center"> <font style = "vertical-align: inherit;"> <font style = "vertical-align: inherit;"><font class="text-warning" >Vous êtes inscrit à aucune session de formation </font>  </font>  </font> </h3>
                    </blockquote><br><br>
                <?php else:?>  
            
                
                
                    <thead>
                        <tr class="table-success">
                        <th scope="col">Formation</th>
                        <th scope="col">Date début</th>
                        <th scope="col">Durée</th>
                        <th scope="col">Se désinscrire</th>
                         </tr>
                    </thead>

                    <?php foreach($mesFormations as $formation):           ?>
                                <tbody>
                                    <tr class="table-default">
                                    <th scope="row"> <?php  echo $formation["nomFormation"]; ?> </th>
                                    <td><?php  echo $formation["dateDebut"]; ?></td>
                                    <td><?php  echo $formation["duree"]; ?></td>
                                    <td> <a href="desinscriptionSession.php?name=<?php  echo $formation["idSession"]?>"> se désinscrire </td>
                                    </tr>
                                </tbody>
                    <?php endforeach ;?>
                            
                                
                    <tbody>
                        <tr class="table-success">
                        <th scope="row"> </th>
                        <td></td>
                        <td></td>
                        <td></td>
                        </tr>
                    </tbody>

            <?php  endif ?>
        </table> 


    </div>

</body>
</html>


<?php 
include "_fin.inc.php"  
?>
