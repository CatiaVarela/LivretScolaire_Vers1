<?php
session_start();
$_SESSION['connectperm'] = "";
$_SESSION['connectname'] = "";
if(empty($_SESSION['connectname'])){
    header("location: ../Controller/C_accueil.php");
}
?>