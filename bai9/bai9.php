<?php
$counter = 1;
$number = 5;
while ($counter <= 10){
    $result = $number*$counter;
    echo "<br>$result<br>";
    $counter = $counter+1;
}
?>

<?php
echo "<pre>".PHP_EOL;
//Hien thi so le tu 1-10
$number = 1;
echo "The odd numbers are:<br><br>";
while ($number <= 10){
    echo "<br>$number<br>";
    $number = $number+2;
}
?>
