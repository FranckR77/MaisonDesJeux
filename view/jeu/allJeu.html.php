<?php include "$root/view/header.html.php"; ?>
        <h1>  Jeux disponibles à la location </h1>

        <select name="liste"">
        <option valeur="1">Toutes Catégories</option>
        <option valeur="2">Catégorie Carte</option>
        <option valeur="3">Catégorie Dé</option>
        <option valeur="4">Catégorie Plateau</option>
        <option valeur="5">Catégorie Stratégie</option>
        </select>
<br>

<?php

foreach ($jeux as $jeu) {
    print('<img src="public/images/jeu/'.$jeu["lienimage"].'" alt="Card image cap" width="100" height="50">');
    print('<a href="/?object=jeu&action=details&id=' . $jeu["id"].'">' . $jeu["nom"].'</a><br>');
}
?>

<?php include "$root/view/footer.html.php";

#<form class="note" method="post" action="fiche.php">
#<h4>Pour quel restaurant voulez-vous consulter la fiche ?</h4>

#<p><select name="choix_restos" id="choix_restos" onchange="javascript:submit(this)"required >

#<?php
#$reponse = $bdd->query('SELECT * FROM restos ORDER BY nom');


#while ($choix = $reponse->fetch())
#{
#?>

<?php echo '<option value="'.$choix['nom'].'">'.$choix['nom'].'</option><br />';
#}
#?>
