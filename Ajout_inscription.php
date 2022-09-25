<?php

include './Modele/Connexion_bd.php';
include './Inscription.php';
$nom= filter_input(INPUT_POST, 'nom');
$prenom= filter_input(INPUT_POST, 'prenom');
$mdp = filter_input(INPUT_POST, 'password');
$confirm_mdp = filter_input(INPUT_POST, 'confirm_password');

if($mdp == $confirm_mdp){
$ajout = "INSERT INTO enseignant(NOMENSEIGNANT,PRENOMENSEIGNANT,MDP) VALUES(:nom,:prenom,:mdp)";
$res = connexion()->prepare($ajout);
$exec = $res->execute(array(':nom' => $nom, ':prenom' => $prenom, ':mdp' => $mdp));
if ($exec) {
    echo 'Vous êtes inscrit !';
} 
} else {
    echo "Votre mot de passe n'est pas identique";
}

$select = connexion()->prepare("SELECT * from enseignant WHERE NOMENSEIGNANT=? and PRENOMENSEIGNANT=?");
$select ->execute([$nom],[$prenom]);
$liste = $select ->fetch();
if ($nom && $prenom) {
    
    
}

?>

