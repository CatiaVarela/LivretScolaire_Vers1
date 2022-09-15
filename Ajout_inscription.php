<?php

require_once '../Modele/Connexion_bd.php';
$requete = 'INSERT INTO utilisateur values($login,$mdp)';
$login = filter_input(INPUT_POST, 'txt_login');
$mdp = filter_input(INPUT_POST, 'txt_mdp');
if ($requete->execute()) {
    echo'Enregistrement crée<br>';
} else {
    'Erreur: ' . $requete;
}
?>

