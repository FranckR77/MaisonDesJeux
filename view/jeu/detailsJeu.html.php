<?php include "$root/view/header.html.php";?>

<?php
    echo '<h1>'.$jeu['nom'].'</h1>';
    echo '<img src="public/images/jeu/'.$jeu['lienimage'].'" alt="Card image cap" width="300" height="150">';
    echo '<p>'."Tranche d'âge : ",$jeu['trancheage'].'</p>';
    echo '<p>'."Points : ",$jeu['nbpoints'].'</p>';

?>

<?php include "$root/view/footer.html.php";
