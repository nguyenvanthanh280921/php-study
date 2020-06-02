
<?php
//để hiển thị đầu ra của phép nhân một số với 2
$number = 6;
for($counter = 1; $counter <= 6; $counter++){
    echo "<br>$number<br><br>";
    $number = $number*2;
}
echo "Values could not be calculted.";
?>
<?php
echo "<pre>".PHP_EOL;
//để hiển thị năm số lẻ đầu tiên theo thứ tự ngược lại
echo "The old numbers are: ";
for($i=5; $i>=1; $i-- )
{
    $number = $i * 2 -1;
    echo $number;
}
echo "<br>Values could not be calculated.";
?>
<?php
for($i=1;;$i++){
    if($i>10){
        break;
    }
    echo $i;
}
?>
