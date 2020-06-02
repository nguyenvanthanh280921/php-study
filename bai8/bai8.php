
<html>
<body>
    <?php
    $myname = $_POST['mymame'];
    $myage = $_POST['myage'];
    if($myname==""){
        echo "Please enter your name";
    }
    else {
        if ($myage=="") {
            echo $myname;
            echo ",You did not enter your age";
        } else {
            echo "Hi  ";
            echo $myname;
            echo "Your age is ";
            echo $myname;
        }
    }
    ?>
<br>
<a href="bai8.html">Back</a>
</body>
</html>
