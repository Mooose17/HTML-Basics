<?php echo "<h1>\"String replacement\"</h1>"?>
str_replace();
<hr />
<?php

$sentence = "Hello World";
$sentence = str_replace("World", "Tommy", $sentence);
echo $sentence;
echo "<hr />";

$sentence1 = "Do you open oranges over an object?";
echo $sentence1;

$sentence1 = str_replace("o", "X", $sentence1, $count);
echo "<hr />";
echo $sentence1 .  "<hr /> 'o' was replaced with 'X' " . $count . " many times.";

?>