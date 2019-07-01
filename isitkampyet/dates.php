<?php
	if(in_range("07/25","08/02"))
	    echo "YES!!!";
	else if(in_range("07/21","07/24"))
	    echo "Almost! KAMP PREP TIME!";
	else if(in_range("07/08","07/19"))
	    echo "Soon! Less than two weeks!";
	else if(in_range("07/19","07/20"))
	    echo "Tigers' game! Getting closer!";
	else if(in_range("07/13","07/15"))
	    echo "POOL PARTY! But no.";
	else
	    echo "Nope.";

	function in_range($start,$end)
	{
		$start_ts = strtotime($start);
		$end_ts = strtotime($end);
		return ((time() >= $start_ts) && (time() <= $end_ts));
	}
?>

