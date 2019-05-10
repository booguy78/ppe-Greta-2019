<?php

include_once 'connectBdd.php' ;


$formation = "CREATE TABLE `formation` (
    `idFormation` int(11) NOT NULL AUTO_INCREMENT,
    `nomFormation` varchar(50) NOT NULL,
    `objectifFormation` varchar(200) NOT NULL,
    `couts` varchar(15) NOT NULL,
    PRIMARY KEY (`idFormation`)
    ) ;";

    $utilisateur = "CREATE TABLE  `utilisateur` (
        `pseudo` varchar(30) NOT NULL,
        `nom` varchar(30) NOT NULL,
        `prenom` varchar(30) NOT NULL,
        `mail` varchar(50) NOT NULL,
        `mdp` varchar(30) NOT NULL,
        `mdp2` varchar(30) NOT NULL,
        PRIMARY KEY (`pseudo`)
        );";
      

    $lieuFormation = "CREATE TABLE  `lieuformation` (
        `idLieuFormation` int(11) NOT NULL AUTO_INCREMENT,
        `nomLieu` varchar(100) NOT NULL,
        `adresse` varchar(200) NOT NULL,
        PRIMARY KEY (`idLieuFormation`)
        );";

    

    $intervenant = "CREATE TABLE IF NOT EXISTS `intervenant` (
        `idIntervenant` int(11) NOT NULL AUTO_INCREMENT,
        `nomIntervenant` varchar(100) DEFAULT NULL,
        PRIMARY KEY (`idIntervenant`)
        );";
    
    $sessionFormation = "CREATE TABLE IF NOT EXISTS `sessionformation` (
        `idSession` int(11) NOT NULL AUTO_INCREMENT,
        `dateDebut` date NOT NULL,
        `duree` varchar(50) NOT NULL,
        `idFormation` int(11) NOT NULL,
        `idLieuFormation` int(11) NOT NULL,
        `idIntervenant` int(11) NOT NULL,
        PRIMARY KEY (`idSession`),
        KEY `idFormation` (`idFormation`),
        KEY `idLieuFormation` (`idLieuFormation`),
        KEY `idIntervenant` (`idIntervenant`)
        );";

    $inscription = "CREATE TABLE IF NOT EXISTS `inscription` (
        `pseudo` varchar(30) NOT NULL,
        `idSession` int(11) NOT NULL,
        PRIMARY KEY (`pseudo`,`idSession`),
        KEY `idSession` (`idSession`),
        KEY `pseudo` (`pseudo`)
        ) ;";


	$bdd->exec($formation);
    $bdd->exec($utilisateur);
    $bdd->exec($lieuFormation);
    $bdd->exec($sessionFormation);
    $bdd->exec($intervenant);
    $bdd->exec($inscription);
	
   
   
    $insertFormation = "INSERT INTO `formation` (`idFormation`, `nomFormation`, `objectifFormation`, `couts`, `adresseImages`) VALUES
    (1, 'Alimentation du sportif', 'Notions de base - Régimes adaptés à la compétition : préparation - période d\'effort - récupération', '150 euros', ''),
    (2, 'Traumatologie sportive', 'Définitions - Inventaire des pathologies - Traitement - Prévention', '250 euros', ''),
    (3, 'Formation Power point', 'Mettre en oeuvre les différentes commandes et les fonctions de PowerPoint ', '400 euros', ''),
    (4, 'Formation Excel', 'A la découverte  d\'Excel et de toutes ses fonctionnalités', '500 euros', ''),
    (5, 'Conduites addictives (les dépendances)', 'Quelles conduites à tenir auprès du pratiquant sportif', '200 euros', '');";

    $insertIntervenant = "INSERT INTO `intervenant` (`idIntervenant`, `nomIntervenant`) VALUES
    (1, 'Chateau patrick'),
    (2, 'Forget laure');"
    (1, 'Sylvestre richard');

    $insertLieuFormation = "INSERT INTO `lieuformation` (`idLieuFormation`, `nomLieu`, `adresse`) VALUES
    (1, 'Salle informatique Maison Régionale des Sports de Lorraine', '13 Rue Jean Moulin 54 510 Tomblaine'),
    (2, 'Salle Lorraine 10 Maison Régionale des Sports de Lorraine', '13 Rue Jean Moulin 54 510 Tomblaine');";

    $insertSessionFormation = "INSERT INTO `sessionformation` (`idSession`, `dateDebut`, `duree`, `idFormation`, `idLieuFormation`, `idIntervenant`) VALUES
    (null, '2019-06-03', '5 jours', 1, 2, 2),
    (null, '2019-06-17', '3 jours', 2, 2, 2),
    (null, '2019-06-20', '2 jours', 3, 1, 1),
    (null, '2019-07-01', '5 jours', 4, 1, 1),
    (null, '2019-07-08', '4 jours', 5, 2, 3);
    (null, '2019-07-15', '5 jours', 1, 2, 2),
    (null, '2019-06-22', '3 jours', 2, 2, 2),
    (null, '2019-06-25', '2 jours', 3, 1, 1),
    (null, '2019-07-29', '5 jours', 4, 1, 1),
    (null, '2019-08-05', '4 jours', 5, 2, 3);";

    $insertUtilisateur = "INSERT INTO `utilisateur` (`pseudo`, `nom`, `prenom`, `mail`, `mdp`, `mdp2`) VALUES
    ('booguy', 'boudjelal', 'mohamed', 'mohamed@gmail.com', '1234', '1234'),
    ('zetsu92', 'omri', 'ahmed', 'zetsu92@hotmail.com', '1234', '1234'),
    ('francisco', 'kouaho', 'francis', 'kouaho@gmail.com', '1234', '1234');
    ;" ;

    $bdd->exec($insertFormation);
    $bdd->exec($insertIntervenant);
    $bdd->exec($insertLieuFormation);
    $bdd->exec($insertSessionFormation);
    $bdd->exec($insertUtilisateur);





?>