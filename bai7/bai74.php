<?php
$x = 100;
$y = 50;

if ($x > $y)
{
    echo "X is greater than Y";
}else{
    echo "Y is greater than X";
}
?>

<?php
echo "<pre";
$x = 100;
$y = 50;
$disp = ($x > $y) ? "X is greater than Y " : "Y is greater than X";
echo  $disp.PHP_EOL;
?>