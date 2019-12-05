<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calendrier</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<div class="month">
    <ul>
        <li>August<br>2017</li>
    </ul>
</div>

<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="active">10</span></li>
    <li>11</li>
</ul>

<div class="month">
    <ul>
        <?php
            echo "December";
        ?>
    </ul>
</div>
<ul class="weekdays">
    <?php
        $days = array("Lundi","Mardi","Mercredi","jeudi","Vendredi","Samedi","Dimanche");
        for($i=0;$i<7;$i++){
            echo "<li>$days[$i]</li>";
        }
    ?>
</ul>
<ul class="days">
    <?php

    ?>
</ul>
</body>
</html>
