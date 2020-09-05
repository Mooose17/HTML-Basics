<?php echo "<h1>Constants</h1>";
//a variable that cannot change

define("age", "30");
echo age;
/*

this cannot work as age is defined as constant

age = $var_age;
$var_age = "Changed constant";

echo $var_age;
*/
?>