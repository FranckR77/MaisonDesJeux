<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

// creation du menu burger
$burgerMenu = array();
$burgerMenu[] = Array("url"=>"./index.php?objet=site&action=presentation","label"=>"Presentation");
$burgerMenu[] = Array("url"=>"./index.php?objet=site&action=item1","label"=>"item1");

// recuperation de l'action
if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else {
    $action = "presentation";

}

// Gestion des différentes fonctionalités
switch($action) {

    case 'presentation':
        // appel des fonctions permettant de recuperer les donnees utiles a l'affichage
        // affichage de la vue
        include "$root/view/site/sitePresentation.html.php";
        break;

    case 'item1':
        // appel des fonctions permettant de recuperer les donnees utiles a l'affichage
        // affichage de la vue
        include "$root/view/site/pageEnCoursConstruction.html.php";
        break;

    default:
        include "$root/view/error/400.html.php";
}


?>