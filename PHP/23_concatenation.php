<?php echo "<h1>Concatenation</h1>";?>
Joining data together.
<hr />
<?php

define('hr', '<hr />');
define('lastname', "Bowden");

$name = "Tommy";

echo "Hello my name is $name";
echo hr;
echo "Hello my name is $name "; echo lastname;
echo hr;
echo "Hello my name is " . $name; echo " " . lastname;
echo hr;
echo "Hello my name is " . $name . " Bowden";


?>