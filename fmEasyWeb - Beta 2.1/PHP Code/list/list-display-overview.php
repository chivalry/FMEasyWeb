<?php

	$first_record = ( ( $_GET['page'] - 1 ) * $records_per_page ) + 1;
	$last_record = $_GET['page'] * $records_per_page;
	if ( $last_record > $found_set_count ) {
		$last_record = $found_set_count;
	}
	echo '<div id="list-overview">';
	echo '<span>';
	echo 'Displaying records ';
	echo $first_record . ' thru ' . $last_record;
	echo ' of ';
	echo $found_set_count . '.';
	echo '</span>';
	echo '</div>';
	
?>