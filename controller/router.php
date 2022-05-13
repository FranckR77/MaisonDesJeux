<?php
session_start();
include "getRoot.php";

// Liste des fichiers controllers responsable de la gestion des URLS

$objects = array();
$objects["default"] = "siteControleur.php"; // définition d'un controleur par défaut

$objects["site"] = "siteControleur.php";
$objects["jeu"] = "jeuControleur.php";
$objects["login"] = "login.php";
$objects["verification"] = "verificationLogin.php";


// Analyse de l'URL 
if (isset($_GET["object"]) and array_key_exists($_GET["object"] , $objects )){
    $controller = $objects[$_GET["object"]];
}
else{
    $controller = $objects["default"];
}

// Appel du controleur
include "$root/controller/$controller";