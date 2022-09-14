<?php

session_start();
require '../Modele/Connexion_bd.php';
require '../Vue/Sommaire.php';
$enseignant = recupere_enseignants();
$matiere = recupere_matieres();
$classe = recupere_classes();

require_once '../Vue/Affectation.php';

$m = verif_saisi('matiere');
$e = verif_saisi('liste');
$c = verif_saisi('class');

if (verif_submit('sub') == 'Valider') {
    insert_enseigner($c, $m, $e);
}
?>