<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice traduction C PHP</title>
</head>
<body>
<?php
/*
 * Christopher Pardo
 * 21.11.2019
 * 1.1
 */
$value = 20;
$step = 3;
$i = 0;
while ($i<10){
    if ($value>=30){
        echo "le nombre vaut $value<br>";
    }
    else{
        echo "nombre trop petit<br>";
    }
    $value += $step;
    $i++;
}
?>
</body>
</html>
