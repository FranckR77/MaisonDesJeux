<?php
include_once "bd.inc.php";

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $root="..";
}

function getUser($username,$password) : ?array {
    $cnx = connexionBDD();
    $req = pg_query($cnx, "SELECT * FROM utilisateur WHERE username = '".$username."' AND password = '".$password."'");

    $resultat = pg_fetch_all($req);

    return $resultat;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');

    echo "getUser() : \n";
    print_r(getUser('admin','admin'));
}