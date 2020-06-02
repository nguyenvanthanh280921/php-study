<?php
echo "Odd numbers in reverse order:<br>";
$i = 10;
do{
    $num = $i*2-1;
    echo "<br>$num";
    $i--;
}while ($i>=1);
?>

<?php
echo "<pre>".PHP_EOL;
echo "The square of first ten numbers are : <br><br>";
for ($i=1;$i<=10;$i++){
    $square = $i*$i;
    echo  "$i X $i = $square";
    echo "<br>";
}
?>
