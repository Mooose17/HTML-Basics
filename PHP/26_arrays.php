<?php echo "<h1>Arrays</h1>";?>
Arrays are a list of values
<hr />
<?php

    $array = ['abc', '123'];
    //var_dump($array);

    $array = array('abc', '123');
    //var_dump($array);

?>

<?php
    //simple basic array
    $names = array(
        'Tommy',
        'Becky',
        'Adam',
        'Cesca',
    );

    echo $names[0];

   var_dump($names);
    echo "<hr />";
    
    ?>
<hr />

<?php

$pets = array(
    'Dog'=> 6,
    'Cat'=> 2,
    'Horse'=> 1,
    'Penguin'=> 57,
);

var_dump ($pets);


?>
<?php
/*
//multidimensional arrays
//arrays inside arrays
$names = array(
    'Tommy'=> array(
        'age' => 20,
        'height' => 1.82, //cm
        'job' => 'Student',
        'friends' => 213), 
        
    'Becky'=> array(,
        'age' => 20,
        'height' => 1.27, //cm
        'job' => 'Student',
        'friends' => 324
    ),
    'Adam'=> array(
            'age' => 19,
            'height' => 1.54, //cm
            'job' => 'Student',
            'friends' => 435
    ),
    'Cesca'=> array(,
        'age' => 19,
        'height' => 2.01, //cm
        'job' => 'Student',
        'friends' => 235),
        */?>