<?php

$title = "Concerts";
ob_start();
?>

<h1>Liste des concerts</h1>
<ul>
    <?php
    foreach ($concerts as $concert) {
        echo "<li>".$concert["band"].", le ".$concert["date"]."</li>";
        
    }
    ?>
</ul>

<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>
