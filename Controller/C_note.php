<?php
session_start();
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';

$cla = filter_var($_SESSION['codeclas']);
$etud = asso_cl_et($cla);
$matiere = recupere_enseigner($cla);

require_once '../Vue/Note.php';
?>

<!--A résoudre : Ne fonctionne seulement si on coche à partir de la première matière jusqu'à celle souhaitée -->
<?php
if (verif_submit('saisie_n') == 'Valider') {
    $sem1 = filtrer_character('S1');
    $sem2 = filtrer_character('S2');
    $checkmat = verif_matiere_note('matiere');
    $appreciation = filtrer_character('appreciations');
    for ($i = 0; $i < count($checkmat); $i++) {
        for ($j = 0; $j < count($sem1); $j++) {
            echo $checkmat[$j] . ' ';
            echo $sem1[$j] . ' ';
            echo $sem2[$j] . ' ';
            echo $appreciation[$j] . '<br>';
            note_saisie($sem1[$i], $sem2[$i], $appreciation[$i], $codeetudiant, $checkmat[$i], $cla);
        }
    }
}
?>

<!--update note_etudiant
set Moyenne = ( select sum(Semestre1+Semestre2)/2 group by notecode);-->