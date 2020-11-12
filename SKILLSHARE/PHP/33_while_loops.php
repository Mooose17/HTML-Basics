<?php echo "<h3> While Loops </h3>"; ?>
MY FIRST EVER LOOP!!!
<hr />
 <?php 
    
    $x = 1;
     
    while($x <= 5){
        echo $x . " is the number. <br />";
        $x++;

        if($x === 3){
            echo "My parents are aliens.<br />";
            continue;
        }
        if($x >= 6){
            echo "thats too much.";
            $x++;
        break;
        }
    };
?>
<?php echo "<h3> For Loops!</h3><hr />";?>
MY SECOND LOOP!!!
<?php

