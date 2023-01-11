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

$possible_states = array(
    "health hazard",
    "filthy",
    "dirty",
    "clean",
    "immaculate"
);

$room_is_filthy = $possible_states[1];



if ($room_is_filthy == "health hazard") {
    echo "I caught leprosy because of your ****** room";
    echo "<br>Room cleaning...";
    echo "<br>Room is now clean but I have no more face...";
} else if ($room_is_filthy == "filthy") {
    echo "Yuk, it smells like puke here, clean this up!";
    echo "<br>Room cleaning...";
    echo "<br>Room is now clean!";
} else if ($room_is_filthy == "dirty") {
    echo "Yuk, Room is dirty : let's clean it up !";
    echo "<br>Room cleaning...";
    echo "<br>Room is now clean!";
} else {
    echo "Room is clean.";
};


//EX2.0
