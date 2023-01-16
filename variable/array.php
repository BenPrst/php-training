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
$mother = [
    "age" => 65,
    "favSeason" => "Autumn",
    "soccer" => false,
    "hobbies" => ["Cinema", "Music", "Shopping"]
];
$soulmate = [
    "name" => "Choco",
    "age" => 20,
    "favSeason" => "summer",
    "soccer" => false,
    "films" => $films,
    "hobbies" => ["Electronic Music", "Rally", "Technology"],
];
$me = [
    "firstname" => "Benjamin",
    "lastname" => "Porsont",
    "age" => 21,
    "favSeason" => "summer",
    "soccer" => true,
    "films" => $films,
    "hobbies" => ["Electronic Music", "Formula 1", "Technology"],
    "mother" => $mother
];
$me["lastname"] = "Durand";
echo "<br>";
echo '<pre>';
print_r($me);
echo '</pre>';

echo sizeof($mother) . "\3";

$possible_hobbies_via_intersection = array_intersect($me["hobbies"], $soulmate["hobbies"]);
$possible_hobbies_via_merge = array_merge($me["hobbies"], $soulmate["hobbies"]);
print_r($possible_hobbies_via_intersection);
echo "<br>";
print_r($possible_hobbies_via_merge);

$web_development = [
    "frontend" => [],
    "backend" => [],
];

echo "<br>";

array_push($web_development["frontend"], "xhtml");
array_push($web_development["backend"], "Ruby on Rails");
array_push($web_development["frontend"], "CSS");
array_push($web_development["frontend"], "Flash");
array_push($web_development["frontend"], "JavaScript");
$web_development['frontend'][0] = "html";
unset($web_development['frontend'][2]);



print_r($web_development);
