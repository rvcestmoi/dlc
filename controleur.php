<?php
if (isset($_GET['p']) && $_GET['p'] == "html") {
    include '/vues/html.php';

} else
    include '/vues/Presentation.php';
?>
