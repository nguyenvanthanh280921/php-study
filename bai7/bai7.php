<?php
$sal = $_GET['sal'];

echo "Salary before bouns : $";
echo $sal;
echo "<br>";
if ($sal > 8500);
{
    $bonus = $sal * .1;
    echo "Bonus : $$bonus";
    echo "<br>";
    $sal = $sal + $bonus;
    echo "Total Salary : $$sal";
}
?>
