<?php
if (isset($_GET['p']) && $_GET['p'] == "ajout") {
    include DS.'vues'.DS.'ajout.php';

} else
    include '/vues/accueil.php';
?>
