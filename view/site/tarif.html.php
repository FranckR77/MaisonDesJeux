<?php include "$root/view/header.html.php"; ?>

    <div id="accroche">Tarifs d'adhésion</div>

<?php

FOREACH ($tarifs as $tarif){
    echo '<li>' . $tarif['typeadhesion']," : ". '</li>';


}
?>

<?php include "$root/view/footer.html.php";