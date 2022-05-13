<?php
    global $root;
    $ini = parse_ini_file("$root/env/db.ini");

    $db_username = $ini['db_user'];
    $db_password = $ini['db_password'];
    $db_name = $ini['db_name'];
    $db_host = $ini['db_address'];
    $db_port = $ini['db_port'];
    $db = pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_username password=$db_password");




    session_start();
    if(isset($_POST['connexion'])){

        if(empty($_POST['username'])){
            echo "Le champ Pseudo est vide.";
        } else {
            if(empty($_POST['password'])){
                echo "Le champ Mot de passe est vide.";
            } else {
                $username = $_POST["username"];
                $password = $_POST["password"];
                if(!$db){
                    echo "Erreur de connexion à la base de données.";
                } else {
                    $Requete = pg_query($db,"SELECT * FROM goat WHERE username = '".$username."' AND password = '".$password."'");
                    if(pg_num_rows($Requete) == 0) {
                        echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                    } else {
                        $_SESSION['pseudo'] = $username;
                        echo "Vous êtes à présent connecté !";
                    }
                }
            }
        }

   }
    ?>