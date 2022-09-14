<script src="../styles/fonctions.js"></script>
<?php
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
$enseignant = recupere_enseignants();
$matiere = recupere_matieres();
$classe = recupere_classes();
$etudiant = recupere_etudiants();

$codemat = filter_input(INPUT_GET, 'codemat');
$codeens = filter_input(INPUT_GET, 'codeens');
$codeetudiant = filter_input(INPUT_GET, 'codeetud');