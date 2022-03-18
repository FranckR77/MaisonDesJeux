<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}
require_once("$root/dal/bd.jeu.inc.php");

// creation du menu burger
$burgerMenu = array();
$burgerMenu[] = Array("url"=>"./index.php?object=jeu&action=all","label"=>"Tous");
$burgerMenu[] = Array("url"=>"./index.php?object=jeu&action=item1","label"=>"Item1");


// recuperation de l'action
if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else {
    $action = "all";
}

// Gestion des différentes fonctionalités
switch($action) {

    case 'all':
        // Affichage de la liste des jeux

        // 1 - Recuperation de la liste à partir de la BDD
        $jeux = getJeux();

        // 2 - Affichage de la liste

        include "$root/view/jeu/allJeu.html.php";

        break;

    case 'details':

        // 1 - Recuperation de l'identifiant du jeu
        $idJeu = $_GET['id'];

        // TODO: A compléter
        // 2 - Récupération des infos du jeu
        // 3 - Affichage des infos du jeu
        include "$root/view/jeu/detailsJeu.html.php";

        break;

    case 'item1':
        // appel des fonctions permettant de recuperer les donnees utiles a l'affichage
        // affichage de la vue
        include "$root/view/jeu/pageEnCoursConstruction.html.php";
        break;

    default:
        include "$root/view/error/400.html.php";

}