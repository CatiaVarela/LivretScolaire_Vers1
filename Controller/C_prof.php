<script src="../styles/fonctions.js"></script>
    <?php

require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
$enseignant=recupere_enseignants();
require_once '../Vue/Professeurs.php';


?>

<?php
if (isset($_POST['nom']) and isset($_POST['prenom'])){
    insert_enseignants();
    ?>

        <script>
            window.location.href = "../Controller/C_prof.php";
        </script>
    
    <?php
    require_once '../Vue/Professeurs.php';
}


      