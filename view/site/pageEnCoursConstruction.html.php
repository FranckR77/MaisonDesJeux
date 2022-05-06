<?php include "$root/view/header.html.php"; ?>

    <div id="accroche">Horaires</div>
<?php

FOREACH ($horaires as $horaire) {
    if ($horaire['horrairefermetureapresmidi'] == False) {
        echo '<li>' . $horaire['jour'], " : ". '</li>';
        echo '<p>'. "Matin : ",$horaire['horraireouverturematin'], " - ", $horaire['horrairefermeturematin']. '</p>';
    } else {
        echo '<li>' . $horaire['jour'], " : ". '</li>';
        echo '<p>'. "Matin : ",$horaire['horraireouverturematin'], " - ", $horaire['horrairefermeturematin']. '</p>';
        echo '<p>'."Après-midi : ",$horaire['horraireouvertureapresmidi'], " - ", $horaire['horrairefermetureapresmidi']. '</p>';
    }
}
?>

<?php include "$root/view/footer.html.php";

