<?php
$title = "Accueil";
$content = "Accueil";
$action = $_GET["action"];
require_once ("controller/controller.php");
switch ($action){
    case "movies" :
        require_once 'view/movies.php';
        break;

    case "concerts" :
        showConcerts();
        break;

    default :
        require_once "view/home.php";
        break;
}
?>
