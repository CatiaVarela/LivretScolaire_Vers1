<script src="../styles/fonctions.js"></script>
<?php
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
?>

<?php
$matiere = recupere_matieres();
insert_matieres();
require_once '../Vue/Matiere.php';
?>