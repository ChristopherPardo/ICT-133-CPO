<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice dates</title>
</head>
<body>
<?php
date_default_timezone_set('europe/zurich');
$date = strtotime('18:24:08 6 september 2019');
echo "1) ".date("l j M Y", $date )."<br>";
echo "2) ".date("M dS Y", $date)."<br>";
echo "3) ".date("d/m/y g:i a", $date)."<br>";
echo "4) ".date("d M Y, h:i:s", $date)."<br>";
echo "5) ".date("D, d M Y h:i:s O", $date);
?>
</body>
</html>
