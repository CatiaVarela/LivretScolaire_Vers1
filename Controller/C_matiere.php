
<?php
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
$matiere = recupere_matieres();
require_once '../Vue/Matiere.php';
?>
<?php
if (isset($_POST['matieres'])) { //Vérifie si les champs ont été remplis//
insert_matieres(); // Insère les matières dans la base de donnée
?>

    <script>
        window.location.href = "../Controller/C_matiere.php"; // Redirige la page après l'insertion
    </script>

    <?php
    
}
require_once '../Vue/Footer.php';