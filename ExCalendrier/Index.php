<!--
Christopher Pardo
17.12.2019
calendar
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calendrier</title>
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>
<?php
$monthList = array("Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"); // list of the months
$month = $_POST["month"]; // month selected
$month +=0; // converts the Query String in a numeric value
$year = $_POST["year"]; //year selected
$date = strtotime("$year-$month-1"); // creat a date with the month and the year selected
$weekDaysList = array("Lundi", "Mardi", "Mercredi", "jeudi", "Vendredi", "Samedi", "Dimanche"); // list of the week days
$FirstWeekDay = date("N", strtotime("first day of this month", $date)); // take the first day of the month selected on the week
$LastWeekDay = date("N", strtotime("last day of this month",$date)); // take the last day of the month selected on the week
$prev = date("d", strtotime("last day of last month", $date)); // take the last day of the month previous the month selected
?>
<?php
// fonctions of the code (asked in the directives)

// header of the page
function headerP($date){
  echo "<div class='month'>";
    echo "<ul>";
      // title of the calendar with the date selected
      echo "<li>";
        echo date("F",$date);
        echo "<br>";
        echo date("Y",$date);
      echo "</li>";
    echo "</ul>";
  echo "</div>";
}

// week days of the table
function calendar($weekDaysList, $prev, $FirstWeekDay, $date, $year, $month, $LastWeekDay){
  echo "<ul class='weekdays'>";
    for ($i = 0; $i < count($weekDaysList); $i++) {
        echo "<li>$weekDaysList[$i]</li>";
    }
  echo "</ul>";
  echo "<ul class='days'>";
    echo getDaysBefore($prev, $FirstWeekDay); // calls the fonction who writes and puts the days of the previous month in grey
    //  wites the days of the month selected
    for ($i = 1; $i <= date("j", strtotime("last day of this month",$date)); $i++) {
        echo "<li>";
        // put in color the day of today
        if ($i == date("j", strtotime("now")) && $year == date("Y",strtotime("now")) && $month == date("m",strtotime("now"))) {
            echo '<span class="active">';
        }
        echo "$i</li>";
    }
    echo getDaysAfter($LastWeekDay); // call the fonction who writes and puts the days of the next month in grey
  echo "</ul>";
}

// writes and puts the days of the previous month in grey
function getDaysBefore ($prev, $FirstWeekDay)
{
  for ($i = $prev - $FirstWeekDay + 2; $i <= $prev; $i++) {
      echo "<li><span class='gray'>$i</li>";
  }
}

// writes and puts the days of the next month in grey
function getDaysAfter($LastWeekDay){
  for ($i = 1; $i <= 7 - $LastWeekDay; $i++) {
      echo "<li><span class='gray'>$i</li>";
  }
}
?>
<form action="Index.php" method="post">
  <select name="month">
  <?php
  // month selected
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

<?php
echo headerP($date); // call the fonction of the header
echo calendar($weekDaysList, $prev, $FirstWeekDay, $date, $year, $month, $LastWeekDay); // call the fonction of the the calendar (asked in the directives)
?>

</body>
</html>
