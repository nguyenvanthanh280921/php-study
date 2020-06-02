<?php
$myname = $_POST['myname'];
$myage = $_POST['myage'];

if ($myname==""){
    echo "Please enter your name";
}
else{
    $mesg = ($myage=="") ? "$myname, Please enter your age":
    "Hi $myname.Your age is $myage";
    echo $mesg;
}
?>
<br>
<a href="bai82.html">Back</a>