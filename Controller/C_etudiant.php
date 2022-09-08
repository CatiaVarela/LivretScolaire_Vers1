<script src="../styles/fonctions.js"></script>
<?php
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
?>

<?php
$etudiant = recupere_etudiants();
require_once '../Vue/Etudiant.php';
?>