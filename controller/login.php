<?php include "$root/view/header.html.php";
include "$root/dal/bd.login.php";

global $root;
$ini = parse_ini_file("$root/env/db.ini");

$db_username = $ini['db_user'];
$db_password = $ini['db_password'];
$db_name = $ini['db_name'];
$db_host = $ini['db_address'];
$db_port = $ini['db_port'];
$db = pg_connect("host=$db_host port=$db_port dbname=$db_name user=$db_username password=$db_password");





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
                $Requete = getUser($username,$password);//pg_query($db,"SELECT * FROM utilisateur WHERE username = '".$username."' AND password = '".$password."'");
                if(!$Requete) {
                    echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
                } else {
                    $_SESSION['pseudo'] = $username;
                    echo "Vous êtes à présent connecté ! $username";
                    echo '<script type = "text/javascript"> window.location.replace("./index.php?object=site&action=presentation");</script>';


                }
            }
        }
    }

}
?>

<html>
<head>
    <link rel="stylesheet" href="../public/css/login.css">
    <title></title>
</head>

    <form action="./index.php?object=login" method="POST">
        <h1>Connexion</h1>
        <div>
            <input type="text" name="username" placeholder="Entrer le nom d'utilisateur">
            <br>
            <input type="password" name="password" placeholder="Entrer le mot de passe">
            <input type="submit" name='connexion' value='LOGIN' >
    </form>

        </div>

</html>