<?php
function Square($a){
    $a = $a*$a;
    echo $a;
}
$a = 5;
echo "The square of $a is: ";
Square($a);
?>

<?php
echo "<pre>".PHP_EOL;
function subtraction($a,$b){
    $c = $a-$b;
    echo "The difference of $a and $b is: $c";
}
subtraction(90,45);
?>

<?php
echo "<pre>".PHP_EOL;
function multiplication(&$a,$b){
    $c = $a*$b;
    echo "The multipcation of $a and $b is: $c";
}
$a = 25;
$b = 30;
multiplication($a,$b);
?>

<?php
echo "<pre>".PHP_EOL;
function ta($basic_sal=10000){
    $ta = 0.25*$basic_sal;
    echo "The ta is: $ta";
}
ta();
?>

<?php
echo "<pre>".PHP_EOL;

$a = 4;
function factorial($a)
{
    if ($a <= 1) {
        return 1;
    } else {
        return $a * factorial($a - 1);
    }
}
    echo "The factorial is: ";
    $b = factorial($a);
    echo $b;

?>

