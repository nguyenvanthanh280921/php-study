<?php
$number = 1;
echo "The odd number are: <br><br>";
do{
    echo "<br>$number<br>";
    $number = $number + 2;
}
while($number <=10);
echo "<br>The value could not be displayed";
?>
<?php
echo "<pre".PHP_EOL;
$counter = 0;
echo "The even number are:<br><br>";
do{
    echo "$counter<br>";
    $counter = $counter + 2;

}while($counter <= 10);
echo "<br>The value could not be displayed";
?>
