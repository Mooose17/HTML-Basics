<?php echo "<h2>!true</h2>"; ?>
Opposite of True
<hr />

<?php 

	$blue_sky = false; // true
	// $blue_sky = true;

	// is the sky not NOT blue?
	if(!$blue_sky) {
		echo "The sky is GREY";
	} else {
		echo "The sky is blue";
	}

echo "<hr />";

    $daytime = true;

        if(!$daytime){
           echo "Good Morning, have a great day!";
        }else{
            echo "Good Night! Sleep tight.";
        }
    

?>