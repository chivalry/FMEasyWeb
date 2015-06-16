<?php

	// Open the records table.
	echo '<table id="list-table">';	
	
	
	// Display the header row.
	require_once ( dirname(__FILE__) . '/list-display-table-header-row.php' );
	
	
	// Initialize the record counter.
	$record_number = 0;	
	
	
	// Loop over the records...
	foreach ( $records as $record ) {
	
		// Increment the record counter.
		$record_number = $record_number + 1;	
		
		// Determine row type (even or odd).
		if ( ( $record_number % 2 ) == 1 ) {
			$row_type = 'odd';
		} else {
			$row_type = 'even';
		}
		
		// Display the record's row.
		require ( dirname(__FILE__) . '/list-display-table-record-row.php' );
			
	}


	echo '</table>';	
	
?>