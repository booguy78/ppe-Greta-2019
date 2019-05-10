<?php

function gestionnaireDeConnexion() {
    $pdo = null;
    try {
        $pdo = new PDO(  
                'mysql:host=localhost;dbname=m2l', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    } catch (PDOException $err) {
        $messageErreur = $err->getMessage();
        error_log($messageErreur, 0);
    }
    return $pdo;
}


function doublonPseudo ($pseudo){
    $pseudoExiste = false;
    $pdo = gestionnaireDeConnexion(); 

    if ($pdo != null){

        $sql = "SELECT count(*) as nb from utilisateur where pseudo= :pseudo ";
        $prep = $pdo->prepare($sql);
        $prep->bindParam(":pseudo",$pseudo, PDO::PARAM_STR);
        $prep->execute();
        $resultat= $prep->fetch();
        
        if ($resultat["nb"] == 1){
            $pseudoExiste = true;

        }

    $prep->closeCursor();
    }   
    return $pseudoExiste; 

}





function doublonMail ($mail){
    $mailExiste = false;
    $pdo = gestionnaireDeConnexion(); 

    if ($pdo != null){
        $sql = "SELECT count(*) as nb from utilisateur where mail= :mail ";
        $prep = $pdo->prepare($sql);
        $prep->bindParam(":mail",$mail, PDO::PARAM_STR);
        $prep->execute();
        $resultat= $prep->fetch();
        
        if ($resultat["nb"] == 1){
            $mailExiste = true;

        }

    $prep->closeCursor();
    }   
    return $mailExiste; 

}






function ajoutUtilisateur($pseudo, $nom, $prenom, $mail, $mdp, $mdp2){
    
    $pdo = gestionnaireDeConnexion();
    
    if($pdo != null){

        $requete = $pdo->prepare("INSERT INTO utilisateur VALUES(:pseudo, :nom, :prenom, :mail, :mdp, :mdp2)");
    
        $requete->bindParam(":pseudo" ,$pseudo , PDO::PARAM_STR);
        $requete->bindParam(":nom" ,$nom , PDO::PARAM_STR);
        $requete->bindParam(":prenom" , $prenom, PDO::PARAM_STR);
        $requete->bindParam(":mail" , $mail, PDO::PARAM_STR);
        $requete->bindParam(":mdp" ,$mdp , PDO::PARAM_STR);
        $requete->bindParam(":mdp2" , $mdp2, PDO::PARAM_STR);
    
        $insertion = $requete->execute(); 
    }  
    
    return $insertion;

}




function verificationMembre ($pseudo, $mdp){
    $utilisateurExiste = false;
    $pdo = gestionnaireDeConnexion(); 

    if ($pdo != null){

        $sql = "SELECT count(*) as nb from utilisateur where pseudo= :pseudo and mdp = :mdp ";
        $prep = $pdo->prepare($sql);
        $prep->bindParam(":pseudo",$pseudo, PDO::PARAM_STR);
        $prep->bindParam(":mdp",$mdp, PDO::PARAM_STR); 
        $prep->execute();
        $resultat= $prep->fetch();
        
        if ($resultat["nb"] == 1){
            $utilisateurExiste = true;

        }

    $prep->closeCursor();
    }   
    return $utilisateurExiste; 

}


function listeFormation(){
    $lesFormations = array();
    $pdo = gestionnaireDeConnexion();

    if($pdo != null){
        
        $requete = "SELECT * FROM formation ;";
                     
        
        $statement = $pdo->query($requete);
        $lesFormations = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    return $lesFormations;

}


function listeSession($idFormation){
    $lesSessions = array();
    $pdo = gestionnaireDeConnexion();

    if ($pdo != null){
        $requete = "SELECT * from formation
                    JOIN sessionformation ON sessionformation.idFormation =  formation.idFormation
                    JOIN lieuformation ON lieuformation.idLieuFormation = sessionformation.idLieuFormation
                    JOIN intervenant ON intervenant.idIntervenant = sessionformation.idIntervenant
                    where formation.idFormation = :idFormation ;";
        $prep = $pdo->prepare($requete);
        $prep->bindParam(":idFormation",$idFormation, PDO::PARAM_STR);
        $prep->execute() ;
        $lesSessions = $prep->fetchAll();
        
    }
    return $lesSessions;
    
}


function inscriptionSession($pseudo, $idSession){
    
    $insertion = false;
    $pdo = gestionnaireDeConnexion();
    
    if($pdo != null){
        
        $requete = $pdo->prepare("INSERT INTO inscription VALUES( :mail, :idSession)");
    
        $requete->bindParam(":mail" ,$pseudo , PDO::PARAM_STR);
        $requete->bindParam(":idSession" , $idSession, PDO::PARAM_STR);
        
    
        $insertion = $requete->execute(); 
    }
     
    return $insertion;

}



function mesFormation($pseudo){
    $mesFormations = array();
    $pdo = gestionnaireDeConnexion();

    if ($pdo != null){
        $requete = "SELECT * from formation
                    JOIN sessionformation ON sessionformation.idFormation =  formation.idFormation
                    JOIN inscription ON inscription.idSession = sessionformation.idSession
                    where inscription.pseudo = :pseudo ;";
        $prep = $pdo->prepare($requete);
        $prep->bindParam(":pseudo",$pseudo, PDO::PARAM_STR);
        $prep->execute() ;
        $mesFormations = $prep->fetchAll();
        
    }
    return $mesFormations;
    
}



function desinscriptionSession($pseudo, $idSession){
    $supression = false;
    $pdo = gestionnaireDeConnexion();

    if($pdo != null){

        $requete = "DELETE FROM inscription where pseudo = :pseudo AND idSession = :idSession";
        $prep = $pdo->prepare($requete);
        $prep->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
        $prep->bindParam("idSession", $idSession, PDO::PARAM_STR);
        $supression = $prep->execute();

    }
    return $supression;


}



function infoMonCompte($pseudo){
    $mesInfos = array();
    $pdo = gestionnaireDeConnexion();
    

    if($pdo != null){
        $requete = "select * from utilisateur where pseudo = :pseudo ";
        $prep = $pdo->prepare($requete);
        $prep->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
        $prep->execute();
        $mesInfos = $prep->fetchAll();
    }
    return $mesInfos;
}


function changerMdp($newMdp,$newMdp2, $pseudo){
    $resultat = false;
    $pdo = gestionnaireDeConnexion();

    if($pdo != null){
        $requete ="update utilisateur set mdp = :newMdp, mdp2= :newMdp2 where pseudo = :pseudo";
        $prepare = $pdo->prepare($requete);
        $prepare->bindParam(":newMdp", $newMdp, PDO::PARAM_STR);
        $prepare->bindParam(":newMdp2", $newMdp2, PDO::PARAM_STR);
        $prepare->bindParam(":pseudo", $pseudo, PDO::PARAM_STR);
        $resultat = $prepare->execute();
    }
    return $resultat;

}
