<?php
echo "<pre>".PHP_EOL;
$a = error_reporting(E_ERROR|E_WARNING|E_PARSE);
echo $a;
?>
<?php
define('num1',10);
//để tạo ra lỗi do người dùng xác định
echo "<pre>".PHP_EOL;
$num1 = 0;
if ($num1==0){
    trigger_error("Cannot divide by zero", E_USER_ERROR);
}
else{
    $b = 100/num1;
}
?>
<?php
echo "<pre>".PHP_EOL;

?>