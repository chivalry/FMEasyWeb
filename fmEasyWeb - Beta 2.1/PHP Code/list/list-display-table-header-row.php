<?php

	// Display the header row.
	echo '<tr id="list-table-tr-header">' . "\n";
	
		foreach ( $fm_fields as $field ) {
		
			// Get the field name.
			$field_name = $field -> getName();
		
			// The name to use to create the ID and get customizations.
			$id_name = strtolower ( $field_name );
			$id_name = str_replace ( ' ', '-', $id_name );
			$id_name = str_replace ( '_', '-', $id_name );
			
			// The name to display.
			if ( $column_names [ $field_name ] == "" ) {
				$display_name = $field_name;
			} else {
				$display_name = $column_names [ $field_name ];
			}
	
			echo '<th class="list-table-th" id="list-table-th-' . $id_name . '">' . "\n";
			echo '<span>' . $display_name . '</span>' . "\n";
			echo '</th>' . "\n";
			
		}	
		
	echo '</tr>' . "\n";
	
?>