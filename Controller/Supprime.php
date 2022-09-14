
<?php
$codemat = filter_input(INPUT_GET, 'codemat');
$codeens = filter_input(INPUT_GET, 'codeens');
$codeetudiant = filter_input(INPUT_GET, 'codeetud');
?>

<?php
require_once '../Modele/Connexion_bd.php';
if ($codemat) {
   supprimer_matiere($codemat);
?>
   <script>
   alert("La matiere à bien était supprimer");
   window.location.href = "../Controller/C_matiere.php";
   </script>
<?php
}
if ($codeens) {
    supprimer_enseignant($codeens);
?>
    <script>
    alert("L'enseignant à bien était supprimer");
    window.location.href = "../Controller/C_Prof.php";
    </script>
<?php

}
if ($codeetudiant) {
    supprimer_etudiant($codeetudiant);
?>
    <script>
    alert("L'étudiant à bien était supprimer");
    window.location.href = "../Controller/C_etudiant.php";
    </script>
    <?php
}