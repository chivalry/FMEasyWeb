<?php


	// If the application has a form view associated with it...
	if ( FMEW_Form_Layout != '' ) {
	
		// Create a link to the form view link.		
		$url = '.?recordID=' . $record -> getRecordID();
		
		// Display the row, and set it up to act as a link.
		echo '<tr class="list-table-tr-' . $row_type . '"  id="list-table-tr-' . $record_number . '" onclick="document.location = \'' . $url . '\';">' . "\n";
		
	} else {
	
		// Display the row.
		echo '<tr class="list-table-tr-' . $row_type . '"  id="list-table-tr-' . $record_number . '">' . "\n";
		
	}

	
	// Loop over the fields...
	foreach ( $fm_fields as $field ) {
	
	
		// Get the field name.
		$field_name = $field -> getName();
	
		
		// The name to use to create the ID and get customizations.
		$id_name = strtolower ( str_replace ( ' ', '-', $field_name ) );		
	
				
		// Display the cell.
		echo '<td ';
			echo 'class="list-table-td-' . $id_name . '" ';
			if ( $cell_styles [ $id_name ] != "" ) {	
				echo 'style="' . $cell_styles [ $id_name ] . '" ';
			}
			echo '>' . "\n";
	
		
		// If this is not a container field...
		if ( $field -> getResult() != 'container' ) {
	
			// If the field is not empty.
			if ( $record -> getField ( $field_name ) != '' ) {
					
				echo html_entity_decode( $record -> getField ( $field_name ) ) . "\n";	
				
			} else {
			
				echo '&nbsp;' . "\n";
				
			}
			
		} else {
		
			// Special container handler.
			require ( dirname(__FILE__) . '/list-display-table-container.php' );
		
		}
		
		
		echo '</td>' . "\n";
	
	}
	
	
	// Close the row.
	echo '</tr>' . "\n";
	
?>