<?php include "$root/view/header.html.php";

?>

    <div id="accroche">Bienvenue à la MaisonDuJeu'Web</div>

<?php if(isset($_SESSION['pseudo'])) {

    echo '<script type = "text/javascript">
           var x = ("Bienvenue à la MaisonDuJeu" + "Web");
           var pseudoLogin = None
          </script>';

    echo '<script type = "text/javascript">


</script>';

}else {
    echo "sa marchje ap";



} ?>

<?php include "$root/view/footer.html.php";

