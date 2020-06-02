<?php
$counter = 0;
while ($counter<10){
    $counter++;
    if ($counter==5){
        echo "Continues the loop";
        continue;
    }
    echo "$counter<br><br>";
}
echo "The loop ends here";
?>
<?php
$salary=8000;
if ($salary<6000){
    echo "Basic : $salary<br><br>";
    echo "Employees having salary below 6000 are not entited to receive HRA.";
    exit;
}
else{
    echo "Basic : $salary<br><br>";
    $har = $salary * 0.8;
    echo "HRA : $har";
}
?>
