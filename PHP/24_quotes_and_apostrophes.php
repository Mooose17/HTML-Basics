<?php echo "<h1>To use quotes or apostrophes</h2>";
?>

<?php

$dog_name = "Missy";
$dog_color1 = "White";
$dog_color2 = "Black";
$actor = "Shakespare";

define('br', "<br />");
define('hr', '<hr />');

//'__' will not register variables
echo 'My dogs name is $dog_name and she is $dog_color1 and $dog_color2.';
echo br;
//"___" will register variables
echo "My dogs name is $dog_name and she is $dog_color1 and $dog_color2.";
echo hr;
echo "'To be or not to be, that is the question' - Shakespeare";
echo '"To be or not to be, that is the question" - Shakespeare';
echo br;
echo "'To be or not to be, that is the question'- $actor";
echo br;
echo '"To be or not to be, that is the question" - $actor';
echo br;
echo '"To be or not to be, that is the question" - $actor';
?>