<?php
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
$codemat = filter_input(INPUT_GET, 'codemat');
$codeens = filter_input(INPUT_GET, 'codeens');
$codeetudiant = filter_input(INPUT_GET, 'codeetud');

require_once '../Vue/Modification.php';

modif_matiere($codemat);
modif_ens($codeens);
modif_etud($codeetudiant);