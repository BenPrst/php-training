<?php
$name = $_GET["name"];
$gender = $_GET["gender"];
$teacher = $_GET["teacher"];
$reason = $_GET["reason"];
$selectedReason = ($reason == "illness") ? "I've got cancer until next week" : (($reason == "petDeath") ? "My dog had a spontaneous combustion" : (($reason == "activity") ? "I've got KKK meeting, they're going to kill us all if i don't go..." : "I lost airpods my airpods, I tried to get them like Mark Renton but it didn't go very well... Begbie stole them"));

echo "$name<br>";
echo "$gender<br>";
echo "$teacher<br>";
echo "$selectedReason<br>";
