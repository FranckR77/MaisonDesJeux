<?php include "$root/view/header.html.php"; ?>

    <h1>Horaires</h1>
<?php

FOREACH ($horaires as $horaire) {
    echo '<li>' . $horaire['jour'] . '</li>';
}
?>

<?php include "$root/view/footer.html.php";

