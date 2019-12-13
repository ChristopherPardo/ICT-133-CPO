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
        <?php
        //Ne pas oublier le _POST pour cacher les info
        $now = time();
        $month = $_GET["month"];
        $month +=0;
        $year = $_GET["year"];
        $date = strtotime("$year-$month");
        echo "<li>";
        echo date("M",$date);
        echo "<br>";
        echo "$year";
        echo "</li>";
        ?>
    </ul>
</div>
<ul class="weekdays">
    <?php
    $weekDays = array("Lundi", "Mardi", "Mercredi", "jeudi", "Vendredi", "Samedi", "Dimanche");
    for ($i = 0; $i < count($weekDays); $i++) {
        echo "<li>$weekDays[$i]</li>";
    }
    ?>
</ul>
<ul class="days">
    <?php
    $FirstWeekDay = date("N", strtotime("first day of this month", $date));
    $LastWeekDay = date("N", strtotime("last day of this month",$date));
    $prev = date("d", strtotime("last day of last month", strtotime("now")));

    for ($i = $prev - $FirstWeekDay + 2; $i <= $prev; $i++) {
        echo "<li><span class='gray'>$i</li>";
    }
    for ($i = 1; $i <= 31; $i++) {
        echo "<li>";
        if ($i == date("j", strtotime("now")) && $year == date("Y",strtotime("now")) && $month == date("m",strtotime("now"))) {
            echo '<span class="active">';
        }
        echo "$i</li>";
    }
    // Donner une solution commune pour 2020-10 et 2015-6
    /*if($prev - $FirstWeekDay + 2 <= 31) {
        $LastWeekDay +=1;
    }
    else if(){

    }*/
    for ($i = 1; $i <= 7 - $LastWeekDay; $i++) {
        echo "<li><span class='gray'>$i</li>";
    }
    ?>
</ul>
</body>
</html>
