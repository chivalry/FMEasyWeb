<?php

	// Loop over the fields on the layout...
	foreach ( $fm_fields as $field ) {
	
	
		// Grab the field name.
		$field_name = $field -> getName();			
		
		
		// Set the field's ID.
		$field_id = strtolower ( $field -> getName() );
		$field_id = str_replace ( ' ', '-', $field_id );
		$field_id = str_replace ( '_', '-', $field_id );		


		// Open the field block wrapper.
		// Wraps the label, intro, the field itself, and the outro in a single block.
		echo '<!-- ' . $field_id . ' -->' .  "\n";
		echo '<div class="form-field-wrapper" id="form-field-wrapper-' . $field_id . '">' .  "\n";
	
	
			// Determine the field label to display.
			if ( $field_labels [ $field_name ] == '' ) {
				$label = $field_name;
			} else {
				$label = $field_labels [ $field_name ];
			}
	
			// Display the field label.
			echo '<div class="form-field-label" id="form-field-label-' . $field_id . '">' .  "\n";
			echo '<span>' . $label . '</span>' .  "\n";
			echo '</div>' .  "\n";

			// If this is a not a container...
			if ( $field -> getResult() != 'container' ) {

				// Display the field's value.
				echo '<div class="form-field-value" id="form-field-value-' . $field_id . '" style="' . $field_container_styles [ $field_id ] . '">' .  "\n";
				echo '<span style="' . $field_styles [ $field_id ] . '">'; 		
				echo html_entity_decode( $display_record -> getField ( $field_name ) );
				echo '</span>' .  "\n";
				echo '</div>' .  "\n";				
			
			} else {
			
				// Load the special container handler.
				require ( 'form-display-field-container.php' );	
				
			}			
			

		// Close the field block wrapper.
		echo "</div>\n\n";

				
	
	}
	
?>