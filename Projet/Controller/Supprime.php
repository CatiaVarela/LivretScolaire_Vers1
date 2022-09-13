
<?php
$codemat = filter_input(INPUT_GET, 'codemat');
$codeens = filter_input(INPUT_GET, 'codeens');
$codeetudiant = filter_input(INPUT_GET, 'codeetud');
?>

<?php

if ($codemat) {
    supprimer_matiere($codemat);
    header("Location: ../Vue/Matiere.php");
}

if ($codeens) {
    supprimer_enseignant($codeens);
    header("Location: ../Vue/Professeurs.php");
}

if ($codeetudiant) {
    supprimer_etudiant($codeetudiant);
    header("Location: ../Vue/Etudiant.php");
}