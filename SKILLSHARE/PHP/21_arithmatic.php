<?php echo "<h1>Artihmatic</h1>";?>

Math
<hr />

<?php
    $base_number = 10;
        $add_number = $base_number + 10;
        $sub_number = $base_number - 9;
        $mul_number = $base_number * 10;
        $div_number = $base_number / 2;
        $expo_number = $base_number**10;
        $mod_number = $base_number%5;
    $fin_number = $add_number + $sub_number + $mul_number + $div_number + $expo_number + $mod_number;

?>

<?php
    echo "<br>$base_number</br>";
    echo "<br>$add_number</br>";
    echo "<br>$sub_number</br>"; 
    echo "<br>$mul_number</br>"; 
    echo "<br>$div_number</br>"; 
    echo "<br>$expo_number</br>"; 
    echo "<br>$mod_number</br>"; 

echo "<b> Total= </b>";


echo "<br>$fin_number</br>";

?>

