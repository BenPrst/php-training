<p>Are you a human, a cat or a unicorn??</p>
<form action="">
    Human:<input type="radio" name="gender" value="human">
    Cat:<input type="radio" name="gender" value="cat">
    Unicorn:<input type="radio" name="gender" value="unicorn">
    <input type="submit">
</form>

<?php

$gender = $_GET["gender"];
$gif = ($gender == "human") ? '<iframe src="https://giphy.com/embed/2shBNJSPTrpWvoXfpD" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>' : (($gender == "cat") ? '<iframe src="https://giphy.com/embed/3o6Zt481isNVuQI1l6" width="480" height="300" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>' : '<iframe src="https://giphy.com/embed/l2JhLTAOByHloa2ru" width="480" height="480" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>');

echo "$gif";
