<?php
//Để tìm số nguyên gần nhất của số, 99.6
echo "The nearest integer of 99.6 is: ";
echo round(99.6);
?>
<?php
//Để tìm ra đối số lớn nhất
echo "<pre>".PHP_EOL;
echo "The largest number from 99.9, 9.9999, and 99.99 is: ";
echo max(99.9,9.9999,99.99);
?>
<?php
//Để tìm căn bậc hai của số 256
echo "<pre>".PHP_EOL;
echo "The square root of 256 is:";
echo sqrt(256);
?>


<?php
echo "<pre>".PHP_EOL;
echo "The length of the string HELLO is: ";
echo strlen ("HELLO");
?>

<?php
echo "<pre>".PHP_EOL;
echo strtolower("PHP");
echo "<pre>".PHP_EOL;
echo strtoupper("php");
?>

<?php
echo "<pre>".PHP_EOL;
echo bin2hex("A");
?>

<?php
echo "<pre>".PHP_EOL;
echo  date("1");
?>

<?php
echo "<pre>".PHP_EOL;
$a = getdate();
$month = $a['month'];
echo $month;
echo "<pre>".PHP_EOL;
var_dump(strcmp("pbp","pha"));
?>

