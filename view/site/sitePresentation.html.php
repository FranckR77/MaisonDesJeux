<?php include "$root/view/header.html.php";
?>

    <div id="accroche">MaisonDuJeu des GOAT</div>

    <div id="textePagePrincipal">
        <p> Bienvenue dans notre MaisonDuJeu.</p>
        <p>Chez les GOAT vous retrouverez tout vos jeux favoris en location.</p>
        <p> ... </p>
        <img src="/public/images/jeu/alljeux.jpg">
    </div>

<?php if(isset($_SESSION['pseudo'])) {

    echo '<script type = "text/javascript">
           var x = ("Bienvenue à la MaisonDuJeu" + "Web");
           var pseudoLogin = None
          </script>';

    echo '<script type = "text/javascript">


</script>';

} ?>

<?php include "$root/view/footer.html.php";

