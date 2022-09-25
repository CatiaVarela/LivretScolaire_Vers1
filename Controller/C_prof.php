
<?php
require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
$enseignant = recupere_enseignants();
require_once '../Vue/Professeurs.php';
?>
<?php
if (isset($_POST['nom']) and isset($_POST['prenom'])) { //Vérifie si les champs ont été remplis//
    insert_enseignants(); // Insere les noms et prénoms des professeurs dans la base de donnée
    ?>

    <script>
        window.location.href = "../Controller/C_prof.php"; // Redirige la page après l'insertion
    </script>

    <?php
    
}
