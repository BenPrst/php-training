<?php

//EX 1.1

// $room_is_filthy = true;

// if ($room_is_filthy == true) {
//     echo "Yuk, Room is dirty : let's clean it up !";
//     echo "<br>Room cleaning...";
//     echo "<br>Room is now clean!";
//     $room_is_filthy == false;
// } else {
//     echo "<br>Nothing to do, room is neat.";
// }

// echo "$room_is_filthy";

//EX1.2

// $possible_states = array(
//     "health hazard",
//     "filthy",
//     "dirty",
//     "clean",
//     "immaculate"
// );

// $room_is_filthy = $possible_states[1];



// if ($room_is_filthy == "health hazard") {
//     echo "I caught leprosy because of your ****** room";
//     echo "<br>Room cleaning...";
//     echo "<br>Room is now clean but I have no more face...";
// } else if ($room_is_filthy == "filthy") {
//     echo "Yuk, it smells like puke here, clean this up!";
//     echo "<br>Room cleaning...";
//     echo "<br>Room is now clean!";
// } else if ($room_is_filthy == "dirty") {
//     echo "Yuk, Room is dirty : let's clean it up !";
//     echo "<br>Room cleaning...";
//     echo "<br>Room is now clean!";
// } else {
//     echo "Room is clean.";
// };

// echo "<br>";

//EX2.0

$now = date("h:i:s");

echo "$now";

if ("05:00:00" < $now && $now < "09:00:00") {
    echo "good morning";
} else if ("09:01:00" < $now && $now < "12:00:00") {
    echo "good day";
} else if ("12:01:00" < $now && $now < "16:00:00") {
    echo "good afternoon";
} else if ("16:01:00" < $now && $now < "21:00:00") {
    echo "good evening";
} else if ("21:01:00" < $now && $now < "4:59:00") {
    echo "good night!";
}

echo "<br>";
?>
<!--EX3.0//4.0//5.0-->

<form action="" method="get">
    <label for="age">How old are you?</label>
    <input type="number" name="age">
    Woman:<input type="radio" name="gender" value="female">
    Man:<input type="radio" name="gender" value="male">
    <input type="submit" name="submit" value="Greet me now">
    <br>
    Do you speak English?:
    Yes:<input type="radio" name="speak_english" value="yes">
    No:<input type="radio" name="speak_english" value="no">
</form>

<?php

//CHECK IF THE INPUT
if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['speak_english'])) {
    //ASSIGN THE INPUT VALUE IN A VARIABLE
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $speakEnglish = $_GET['speak_english'];
    $footTeam = "Sorry you don't fit the criteria<br>";
    if ($age > 21 && $age < 41 && $gender = "female") {
        $footTeam = "welcome to the team !<br>";
    }
    echo "$footTeam";
    if ($speakEnglish == "yes") {
        if ($gender == 'male') {
            if ($age < 12) {
                echo "Hello boy!";
            } else if ($age > 12 && $age < 18) {
                echo "Hello Teenager !";
            } else if ($age > 18 && $age < 115) {
                echo "Hello Mister!";
            } else if ($age > 115) {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        } else if ($gender == 'female') {
            if ($age < 12) {
                echo "Hello girl!";
            } else if ($age > 12 && $age < 18) {
                echo "Hello Miss Teen !";
            } else if ($age > 18 && $age < 115) {
                echo "Hello Madame !";
            } else if ($age > 115) {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        }
    } else if ($speakEnglish == "no") {
        if ($gender == 'male') {
            if ($age < 12) {
                echo "Aloha boy!";
            } else if ($age > 12 && $age < 18) {
                echo "Aloha Teenager !";
            } else if ($age > 18 && $age < 115) {
                echo "Aloha Mister!";
            } else if ($age > 115) {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        } else if ($gender == 'female') {
            if ($age < 12) {
                echo "Aloha girl!";
            } else if ($age > 12 && $age < 18) {
                echo "Aloha Miss Teen !";
            } else if ($age > 18 && $age < 115) {
                echo "Aloha Madame !";
            } else if ($age > 115) {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        }
    }
}
?>

<!--EX8-->

<form action="" method="get">
    Quotes?<input type="number" name="quotes">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
$quotes = $_GET["quotes"];
if ($quotes <= 4) {
    echo "This work is really bad. What a dumb kid!";
} else if ($quotes >= 5 && $quotes <= 9) {
    echo "This is not sufficient. More studiying is required";
} else if ($quotes == 10) {
    echo "Barely enough!";
} else if ($quotes >= 11 && $quotes <= 14) {
    echo "Not bad!";
} else if ($quotes >= 15 && $quotes <= 18) {
    echo "Bravo, bravissimo!";
} else if ($quotes == 19 || $quotes == 20) {
    echo "Too good to be true : confront the cheater!";
} else {
    echo "NOT A VALID QUOTE";
}
