<?php

function BC_increase_counter($amount=1){

	$counter=BC_getcount();

	//Increase counter by $amount
	$counter += $amount; // Same as $counter = $counter + $amount;

	update_option("BC_counter", $counter);

	//echo "<br />New count: " . $counter;   											  
}

function BC_bot_check() {
	// Hard coded array of bots
	$bots = array("googlebot", "test_bot");

	$amount_of_bots = 0;
	foreach($bots as $bot) {
		if($_SERVER["HTTP_USER_AGENT"] == $bot || $_GET["user_agent"] == $bot) {
			$amount_of_bots++; // Same as $amount_of_bots = $amount
			break;
		}
	}

	if($amount_of_bots > 0) {}
		BC_increase_counter($amount_of_bots);
	}


function BC_getcount() {

		// Get current count, if it does not exist set it to 0;
	$counter=get_option("BC_counter");
	if ($counter===false){
        $counter=0;
	}

	return $counter;

}



?>