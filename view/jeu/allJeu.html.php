<?php include "$root/view/header.html.php"; ?>

<h1>
    Jeux disponibles à la location
</h1>

<?php
foreach ($jeux as $jeu) {
    print('<img src="public/images/jeu/'.$jeu["lienimage"].'" alt="Card image cap" width="100" height="50">');
    print('<a href="/?object=jeu&action=details&id=' . $jeu["id"].'">' . $jeu["nom"].'</a><br>');
}
?>

<?php include "$root/view/footer.html.php";
