<?php

function solution( $year)
{
	
		if($year <= 100)
		echo "1st century\n";
        else
		echo floor($year / 100) + 1, " century";	
}
    $year = 2023;
	solution($year); 
?>
