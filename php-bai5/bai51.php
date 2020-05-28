<?php

//5.1 Hien thi tong cua hai bien
echo "<pre>";
$var1 = 5;
$var2 = 10;
$sum = $var1 + $var2;
echo "The sum of 5 and 10 is";
echo "$sum <br><br>";

// Hien thi san pham cua 3 bien
$var1=2;
$var2=10;
$var3=10;
$product=$var1*$var2*$var3;
echo "The product of 2, 10, and 10 is:";
echo "$product <br><br>";

//Hien thi phan con lai
$var1 = 15;
$var2 = 4;
$remainder = $var1 % $var2;
echo "The remainder of 15 divieded by 4 is:";
echo "$remainder <br><br>";

//5.2 So sanh hai bien
$a = 74;
$b = 54;
if($a>$b) {
    echo "$a is greater than $b <br><br>";
}
else{
    echo "$a is lesser than $b <br><br>";
}

//5.3
$a = $_GET['value'] ?? 0;
if ($a==90 or $a==95)
    echo "valid input";

//
$a=$_GET['percentage']?? 0;
$b=$_GET['passingyear']?? 0;
if ($a>60 and $b=="2003")
    echo "elidible for admission <br><br>";

//5.4
echo 15&5  ;
echo "<pre>".PHP_EOL;
echo 10^15;
//5.5 Gán gtri cho biến
echo "<pre>".PHP_EOL;
$var1 =52;
$var2 = 10;
$a = $var1 * $var2 + 8;
echo "The value of a is: ";
echo "$a <br><br>";

//5.6 Để sử dụng toán tử tăng sau trên một biến
$a = 9;
echo "The value of a is : $a++ <br>";
echo "The value of a is: $a ";

//Để sử dụng toán tử giảm trước trên một biến
$a = 10;
echo "The value of a is : $a  <br>";
-$a;
echo "The value of a is: $a <br><br>";

//5.7 để nối các chuỗi chào mừng và bạn bè bằng cách sử dụng toán tử nối
$a = WELCOME;
$b = FRIENDS;
$c = "$a.$b";
echo "Concatenaled string is $c";

//
$a = WELCOME;
$a. = FRIENDS;
echo "Concatenated string is $a";
?>

