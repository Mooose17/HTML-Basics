 <?php echo "<h1>Conditional Statements</h1>"; ?>
 If statements are "Conditional!"<br>
 If something is true = execute code!<br>
 If statments are for if statements are true.<br>
 KEEP IT SIMPLE
 <hr />
 <?php
 //if statements
$name = "Tommy";
    if($name=="Tommy"){
        echo "Welcome Tommy";
}
$d_age = 19;
echo "<br>";
    if($d_age>=18){
        echo "You are above drinking age, have a cold one on me.";
};
    if($d_age<=17){
        echo "GO BACK TO THE JUICE KIDDO!!";
};

echo "<hr />";
//Else statments

$age1 = 21;

    if($age1>=21){
        echo "You can drink in America.";
    } else{//opposite of true: FALSE
        echo "You cannot drink in America.";
    }
    echo "<hr />";
//ElseIf statements
$age1 = 17;
    if($age1>=21){
        echo "You can drink in America.";
    }elseif($age1===17){
        echo "You are above the age of consent.";
    }elseif($age1===18){
        echo "You can drink in the UK.";
    }elseif($age1===19){
        echo "You are nineteen years old.";
    }elseif($age1===20){
        echo "You are twenty.";
    }else{       //opposite of true: FALSE
        echo "You cannot drink in America.";
    }
?>
<?php
//switch statements
echo "<h2>Switch Statements</h2>"; 

echo "A faster way to write if/elseif/else";
echo "<hr />";

$color = "white";

switch($color) {
    case "blue":
    case "brown":
    case "yellow":
        echo "The color is either blue, brown or yellow";
        break;
    case "red":
        echo "This color is supported.";
        break;
    default:
        echo "This color is not supported.";
        break;
};
echo "<hr />";

$gin = "Blood Orange";
    switch($gin){
          case "Blood Orange";
            echo "GIN TIME BITCH.";
            break;
        case "Palma Violet";
            echo "MMMM YUMMY PURPLE LIQUID.";
            break;
        case "Pink";
            echo "GIRLIE TIME!!!";
            break;
        case "Dry";
            echo "OLD MAN JUICE.";
            break;
        case "Lemon";
            echo "UNACCEPTABLEEEEEEEE";
            break;
        default:
            echo "GET A DRINK";
            break;
}
//basic operators
//>, <, >=, <=, == (5 basic operators)
?>