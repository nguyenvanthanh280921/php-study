<?php
$day = $_GET['day'];
switch ($day)
{
    case 1:
        echo "It's Sunday";
        break;
    case 2:
        echo "It's Monday";
        break;
    case 3:
        echo "It's Tuesday";
        break;
    case 4:
        echo "It's Wednesday";
        break;
    case 5:
        echo "It's Thursday";
        break;
    case 6:
        echo "It's Friday";
        break;
    case 7:
        echo "It's Saturday";
        break;
    default:
        echo "There are Seven Days in a Week";
        break;
}
?>
