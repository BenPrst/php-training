<?php

$pronouns = array('I', 'You', 'He/She', 'We', 'You', 'They');

foreach ($pronouns as $pronoun) {
    echo "<pre>";
    print_r($pronoun);
    print_r(" code");
    if ($pronoun == "He/She") {
        print_r("s");
    };
    echo "<pre>";
};

$a = 1;

while ($a <= 120) {
    echo $a;
    $a++;
};

echo "<br>";

for ($b = 1; $b <= 120; $b++) {
    echo $b;
};

echo "<br>";

$startup_members = ["Ben", "Aurore", "Laura", "Nath", "Pierre"];

foreach ($startup_members as $members) {
    echo "<pre>";
    print_r($members);
    echo "<pre>";
};

$countries = ["Belgium", "Deutschland", "France", "Luxemburg", "Poland", "Bulgaria", "Italia", "Spain", "Sweden", "Norway"];
