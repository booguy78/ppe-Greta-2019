<?php
session_start();


if (!isset($_SESSION['login'])  || !isset($_SESSION['mdp'])  ){
    header("Location: index.php");
}
    

else{
    $pseudo = $_SESSION['login'];
    include "_fonction.inc.php";
    
}




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>M2L</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-T5jhQKMh96HMkXwqVMSjF3CmLcL1nT9//tCqu9By5XSdj7CwR0r+F3LTzUdfkkQf" crossorigin="anonymous">
</head>
<body>





    <div class="container">

    
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">M2L</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="acceuil.php">Acceuil <span class="sr-only">(current)</span></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="consultationFormation.php">Nos Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mesFormation.php">Mes Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="monCompte.php">Mon compte</a>
                     </li>
                    <li class="nav-item">
                        <a class="nav-link" href="seDeconnecter.php">Se deconnecter</a>
                    </li>
               
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>
        </nav>

        <div class = "progress">
            <div class = "barre de progression bg-success" role = "barre de progression" style = "width: 25%" aria-valuenow = "25" aria-valuemin = "0" aria-valuemax = "100"> </div>
        </div><br><br>

    </div>

</body>
</html>