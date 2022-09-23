<script src="../styles/fonctions.js"></script>
    <?php

require_once '../Modele/Connexion_bd.php';
require_once '../Vue/Sommaire.php';
$enseignant=recupere_enseignants();
require_once '../Vue/Professeurs.php';


?>

<?php
if (isset($_POST['nom']) and isset($_POST['prenom'])){ //verifie si les champs ont été remplis//
    insert_enseignants(); // insere les prof dans la base de donnée
    ?>

        <script>
            window.location.href = "../Controller/C_prof.php"; // actualise la page apres l'insertion
        </script>
    
    <?php
    require_once '../Vue/Professeurs.php';
}


      