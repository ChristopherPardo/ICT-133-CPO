<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/script.js"></script>
</head>
<body>
<h1>SI-CMI2a</h1>
<ul>
<?php
$name = array("Fabien","David","Miguel","Benoît","Johnny","Kevin","Christopher","Dmitri");
    for($i = 0; $i < 8;$i++){
       echo "<li>$name[$i]</li>";
    }
?>
    <li id="div9">etc...</li>
</ul>
</body>
</html>