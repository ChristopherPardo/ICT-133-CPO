<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calendrier</title>
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>

<form action="Index.php" method="get">
  <select name="month">
  <?php
  $monthList = array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
  for ($i=1; $i <= count($monthList); $i++) {
    echo "<option value='$i'>".$monthList[$i-1]."</option>";
  }
  ?>
 </select>
  <input type="number" name="year" min="1">
  <input type="submit" value="GO">
</form>

<form action="Index.php" method="get">
  <input value="<?php echo date("m",strtotime("now"))?>" name="month" hidden>
  <input value="<?php echo date("Y",strtotime("now"))?>" name="year" hidden>
  <input type="submit" value="Ajourd'hui">
</form>

<div class="month">
    <ul>
        <?php
        //Ne pas oublier le _POST pour cacher les info
        $month = $_GET["month"];
        $month +=0;
        $year = $_GET["year"];
        $date = strtotime("$year-$month");
        echo "<li>";
        echo date("F",$date);
        echo "<br>";
        echo date("Y",$date);
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
    for ($i = 1; $i <= date("j", strtotime("last day of this month",$date)); $i++) {
        echo "<li>";
        if ($i == date("j", strtotime("now")) && $year == date("Y",strtotime("now")) && $month == date("m",strtotime("now"))) {
            echo '<span class="active">';
        }
        echo "$i</li>";
    }
    for ($i = 1; $i <= 7 - $LastWeekDay; $i++) {
        echo "<li><span class='gray'>$i</li>";
    }
    ?>
</ul>
</body>
</html>
