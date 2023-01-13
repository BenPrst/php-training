<form action="">
    Male:<input type="radio" name="gender" value="male">
    Female:<input type="radio" name="gender" value="female">
    <input type="submit">
</form>
<?php

$gender = $_GET["gender"];
$hello = ($gender == 'female') ? "Hello Miss!" : "Hello mister";
echo $hello;
