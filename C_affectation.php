<?php

session_start();
require '../Modele/Connexion_bd.php';
//permet de faire appel au fichier modéle de bd.
require '../Vue/Sommaire.php';
//permet de faire appel au fichier Vue de bd.
$enseignant = recupere_enseignants();
//variable qui va récupérer la fonction contenant le tableau enseignement
$matiere = recupere_matieres();
//variable qui va récupérer la fonction contenant le tableau matiere
$classe = recupere_classes();
//variable qui va récupérer la fonction contenant le tableau classe

require_once '../Vue/Affectation.php';
//verifie si le fichier a déjà été inclus pour ne pas l'inclure une seconde fois

$m = verif_saisi('matiere');
//verifie la saisie pour l'onglet matiere
$e = verif_saisi('liste');
//verifie la saisie pour l'onglet liste
$c = verif_saisi('class');
//verifie la saisie pour l'onglet class

if (verif_submit('sub') == 'Valider') {
    insert_enseigner($c, $m, $e);
}//condition qui va verifier que si l'utilisateur valide, cela va inserer enseignant.
?>