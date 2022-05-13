<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

// creation du menu burger
$burgerMenu = array();
$burgerMenu[] = Array("url"=>"./index.php?objet=site&action=presentation","label"=>"Page d'acceuil");
$burgerMenu[] = Array("url"=>"./index.php?objet=site&action=horaire","label"=>"Horaires");
$burgerMenu[] = Array("url"=>"./index.php?objet=site&action=tarif","label"=>"Tarifs d'adhésion");

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

    case 'horaire':
        // appel des fonctions permettant de recuperer les donnees utiles a l'affichage
        // affichage de la vue
        include "$root/view/site/horaire.html.php";
        break;

    case 'tarif':
        // appel des fonctions permettant de recuperer les donnees utiles a l'affichage
        // affichage de la vue
        include "$root/view/site/tarif.html.php";
        break;

    default:
        include "$root/view/error/400.html.php";
}


?>