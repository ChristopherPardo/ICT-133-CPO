<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calendrier</title>
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>

<form action="Index.php" method="post">
  <select name="month">
  <?php
  // month selected
  $monthList = array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
  for ($i=1; $i <= count($monthList); $i++) {
    echo "<option value='$i'>".$monthList[$i-1]."</option>";
  }
  ?>
 </select>
 <!-- year selected -->
  <input type="number" name="year" min="1">
  <input type="submit" value="GO">
</form>

<!-- button "aujourd'hui" for having the date of today -->
<form action="Index.php" method="post">
  <input value="<?php echo date("m",strtotime("now"))?>" name="month" hidden>
  <input value="<?php echo date("Y",strtotime("now"))?>" name="year" hidden>
  <input type="submit" value="Ajourd'hui">
</form>

<div class="month">
    <ul>
        <?php
        $month = $_POST["month"]; // month selected
        $month +=0;
        $year = $_POST["year"]; //year selected
        $date = strtotime("$year-$month"); // creat a date with the month and the year selected
        // title of the calendar with the date selected
        echo "<li>";
        echo date("F",$date);
        echo "<br>";
        echo date("Y",$date);
        echo "</li>";
        ?>
    </ul>
</div>
<!-- Week days of the table -->
<ul class="weekdays">
    <?php
    $weekDays = array("Lundi", "Mardi", "Mercredi", "jeudi", "Vendredi", "Samedi", "Dimanche"); // list of the week days
    for ($i = 0; $i < count($weekDays); $i++) {
        echo "<li>$weekDays[$i]</li>";
    }
    ?>
</ul>
<ul class="days">
    <?php
    $FirstWeekDay = date("N", strtotime("first day of this month", $date)); // take the first day of the month selected on the week
    $LastWeekDay = date("N", strtotime("last day of this month",$date)); // take the last day of the month selected on the week
    $prev = date("d", strtotime("last day of last month", strtotime("now"))); // take the last day of the month previous the month selected
    // put the days of the previous month in grey
    for ($i = $prev - $FirstWeekDay + 2; $i <= $prev; $i++) {
        echo "<li><span class='gray'>$i</li>";
    }
    for ($i = 1; $i <= date("j", strtotime("last day of this month",$date)); $i++) {
        echo "<li>";
        // put in color the day of today
        if ($i == date("j", strtotime("now")) && $year == date("Y",strtotime("now")) && $month == date("m",strtotime("now"))) {
            echo '<span class="active">';
        }
        echo "$i</li>";
    }
    // put the days of the next month in grey
    for ($i = 1; $i <= 7 - $LastWeekDay; $i++) {
        echo "<li><span class='gray'>$i</li>";
    }
    ?>
</ul>
</body>
</html>
