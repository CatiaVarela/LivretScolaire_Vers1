<script src="../styles/fonctions.js"></script>
<?php
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
?>

<?php
$enseignant = recupere_enseignants();
insert_enseignants();
require_once '../Vue/Professeurs.php';

        ?>