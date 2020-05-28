
<?php
$a = $_GET ["n1text"];
if ($a>60){
    echo "Gongrats!!!<p>";
    echo "Grade1";
    }else
        {
        if ($a < 60 and $a > 40){
            echo "Gongrats!!!";
            echo "Grade2";
        }else {
            echo "Fall";
        }

    }
?>
