<?php
$fib1 = 0;
$fib2 = 1;
echo "The fibonacci series : <br><br>";
echo "$fib1<br>";
while ($sum < 15)
{
    echo "$fib2<br>";
    $sum = "$fib1 + $fib2";
    $fib1 = $fib2;
    $fib2 = $sum;
}
echo "<br>";
return 0;
?>
