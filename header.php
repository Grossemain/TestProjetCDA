<header>
    <?php
    if (isset($_SESSION['id']) && isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        echo "<div class=\"container w-50 pt-3\">
                <div class=\"row justify-content-center text-center\">Connecté en tant que " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "
                </div>
              </div>";
    }
    ?>
<?php
include('menu.php');
?>
</header>