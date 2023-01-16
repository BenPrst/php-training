<?php
$family = ['ben', 'matt', 'nadine', 'christian'];
print_r($family);
echo "<br>";
$recipes = ["hamburger", "pizza", "fries"];
print_r($recipes);
echo "<br>";
$films = ["Trainspotting", "The raid 2", "Toy Story"];
print_r($films[0]);
echo '<pre>';
print_r($family);
echo '</pre>';
$family[] = "Audrey";
$family["ben"] = "junior";
var_dump($family);
print_r($family);
$me = [
    "age" => 21,
    "favSeason" => "summer",
    "soccer" => true,
    "films" => $films
];
echo "<br>";
echo '<pre>';
print_r($me);
echo '</pre>';
