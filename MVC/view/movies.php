<?php
$title = "Films";
require_once "model/movies.php";
ob_start();
?>
<h1>Liste des films</h1>
<h2>
    <?php
    $nb_movies = count($movies);
    if ($nb_movies > 0){
        echo "Il y a ".$nb_movies." Films";
    }
    else{
        echo "Il n'y a pas de films";
    }
    ?>
</h2>
<table class="table table-bordered">
    <tr><th>Titre</th><th>Audio</th><th>Prochaine séance</th></tr>
    <?php
    foreach ($movies as $movie) {
        echo "<tr><td>".$movie["title"]."</td><td>".$movie["audio"]."</td><td>".$movie["showtime"]."</td></tr>";
    }
    ?>
</table>
<?php
$content = ob_get_clean();
require_once "gabarit.php";
?>
