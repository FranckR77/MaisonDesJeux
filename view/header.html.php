<?php $title = " La maison des GOAT";
function logout() {

    header('Location: ./index.php?object=site&action=presentation');
    exit();
    session_destroy();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title><?php echo $title ?></title>
    <style type="text/css">
        @import url("public/css/base.css");
        @import url("public/css/form.css");
        @import url("public/css/corps.css");
    </style>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="public/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon-16x16.png">
    <link rel="manifest" href="public/site.webmanifest">

</head>
<body>
    <nav>
        <ul id="menuGeneral">
            <li><a href="./index.php?object=site&action=presentation">Accueil</a></li>
            <li><a href="./index.php?object=jeu&action=all">Catalogue de jeux</a></li>
            <li id="boutonLogin"><a href="./index.php?object=login">login</a></li>
            <li id="boutonLogout" style="float: right;"><a href='<?logout()?>'><img style="width: 30px; margin-right: 30px; margin-top: 15px;" src="../public/images/logout.png" ></a></li>


            <?php if(isset($_SESSION['pseudo'])) {
                echo '<script type = "text/javascript">
                        document.getElementById("boutonLogin").style.display = "none";
                        document.getElementById("boutonLogout").style.display = "";
                        </script>';
            } else {
                    echo '<script type = "text/javascript">
                        document.getElementById("boutonLogin").style.display = "";
                        document.getElementById("boutonLogout").style.display = "none";
                        
                        </script>';
                }

             ?>

        </ul>
    </nav>
    <div id="bouton">
        <div></div>
        <div></div>
     <div></div>
    </div>
    <ul id="menuContextuel">
        <li><img src="public/images/menu.png" alt="logo" /></li>
        <?php if (isset($burgerMenu)) { ?>
            <?php for ($i = 0; $i < count($burgerMenu); $i++) { ?>
            <li>
                <a href="<?php echo $burgerMenu[$i]['url']; ?>">
                    <?php echo $burgerMenu[$i]['label']; ?>
                </a>
            </li>
        <?php } ?>
    <?php } ?>
    </ul>

<div id="corps">