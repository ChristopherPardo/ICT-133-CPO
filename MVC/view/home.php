<?php
$title = "Accueil";
ob_start();
?>
<div class="row">
    <div class="col-6">
    <a href='?action=movies'><img src="images/movies.jpg" height="250px"></a>
        </div>
    <div class="col-6">
        <a href='?action=concerts'><img src="images/concerts.jpg" height="250px"></a>
    </div>
</div>
<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>