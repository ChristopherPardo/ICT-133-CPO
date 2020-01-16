<?php
function showConcerts(){
    require_once "model/concerts.php";

    // Logique
    foreach ($concerts as $i => $concert) {
        if($concert["date"] < date("Y-m-d", strtotime("now"))){
            unset($concerts[$i]);
        }
    }
    /*for ($i = 0;$i< count($concerts);$i++) {
        if($concerts[$i]["date"] < date("Y-m-d", strtotime("now"))){
            unset($concerts[$i]);
        }
    }*/

    require_once "view/concerts.php";
}
/*function pageNotGet($action){
  if($action == ""){
    $action = "home";
  }
  //require_once "index.php";
}*/
?>
