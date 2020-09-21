<?php echo "<h2>Ternary Logic</h2>"; ?>

<?php 


	$age = 18;
	// $age--; // 17

	// Add ?age=18 to your URL
	$age = (int) $_GET['age'];

	$can_drink = ($age >= 18 ? true : false);

	if($can_drink) {
		echo "You can drink";
	}

	var_dump($age);
	var_dump($can_drink);
echo "<hr />";

    $name = "Tommy";
    $can_smoke=($name == "Tommy" ? true : false);

         if($can_smoke){
             echo "I can smoke.";
         }elseif($can_smoke==$age >= 18){
             echo "Im over 18 I can smoke";
         }else{
             echo "I cannot smoke.";
         }

echo "<hr />";

    $phone = "Pixel 3a";
    $phone1 = "iPhone";
    $phone2 = "Samsung";

    $upgrade = ($phone === "Pixel 3a" ? "Eligible" : "non eligible");

         echo $upgrade;
    
    $upgrade1 = ($phone1 === "Pixel 3a" ? true : false);
    $upgrade2 = ($phone2 === "Pixel 3a" ? true : false);
         if($upgrade){
             Echo "You are eligible for an upgrade.<br>";
         }else{
             echo "tough luck.<br>";
         }if($upgrade1){
             Echo "You are eligible for an upgrade.<br>";
         }else{
             echo "tough luck.<br>";
         }if($upgrade2){
             Echo "You are eligible for an upgrade.<br>";
         }else{
             echo "tough luck.<br>";
         }
?>