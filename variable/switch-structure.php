<!--EX9-->

<form action="" method="get">
    Quotes?<input type="number" name="quotes">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$quotes = $_GET["quotes"];
switch ($quotes) {
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
        echo "This work is really bad. What a dumb kid! ";
        break;
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        echo "This is not sufficient. More studying is required.";
        break;
    case 10:
        echo "barely enough!";
        break;
    case 11:
    case 12:
    case 13:
    case 14:
        echo "Not bad!";
        break;
    case 15:
    case 16:
    case 17:
    case 18:
        echo "Bravo";
        break;
    case 19:
    case 20:
        echo "Cheater";
        break;
    default:
        echo "please enter a valid quote";
}
