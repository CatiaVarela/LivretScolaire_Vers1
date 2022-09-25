<?php
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
$codemat = filter_input(INPUT_GET, 'codemat');
$codeens = filter_input(INPUT_GET, 'codeens');
$codeetudiant = filter_input(INPUT_GET, 'codeetud');

require_once '../Vue/Modification.php';
if(isset($_POST['matiere'])){
    modif_matiere($codemat);
    ?>
   <script>
   window.location.href = "../Controller/C_matiere.php";
   </script>
<?php
}
if(isset($_POST['nomens']) || isset($_POST['prenomens'])){
    modif_ens($codeens);
    ?>
   <script>
   window.location.href = "../Controller/C_prof.php";
   </script>
<?php
}if(isset($_POST['nometu']) || isset($_POST['prenometu']) || isset($_POST['date']) || isset($_POST['classe'])){
    modif_etud($codeetudiant);
    ?>
   <script>
   window.location.href = "../Controller/C_etudiant.php";
   </script>
<?php
}
require_once '../Vue/Footer.php';