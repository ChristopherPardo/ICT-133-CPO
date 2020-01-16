<?php
$action = $_GET["action"];
require_once ("controller/controller.php");
//pageNotGet($action);
switch ($action){
    case "movies" :
        require_once 'view/movies.php';
        break;

    case "concerts" :
        showConcerts();
        break;

    case "home" :
        require_once "view/home.php";
        break;

    default :
        require_once "view/page404.php";
        break;
}
?>
