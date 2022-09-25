<?php
        session_start();
        require '../Modele/Connexion_bd.php';
        require '../Vue/Sommaire.php';
        $classe = recupere_classes();
        
        require_once '../Vue/Classe.php';
        require_once '../Vue/Footer.php';
        ?>