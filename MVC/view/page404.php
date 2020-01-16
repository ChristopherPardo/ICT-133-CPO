<?php
ob_start();
?>
<h1>Erreur 404<br>Page non trouvée</h1>
<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>
