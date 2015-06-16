<?php

	// If the container is not empty...
	if ( $record -> getField ( $field -> getName() ) !== '' ) {

		// Get the text representation of the container.
		// Example: /fmi/xml/cnt/Lego%201.png?-db=FMEZWeb_Contacts&-lay=FMEasyWeb%20-%20Form%20-%20Contacts&-recid=504&-field=Photo%20Container(1)
		$container_field_as_text = $record -> getField ( $field -> getName() );

		// Split the value into an array so that we can isolate the file name.
		$container_field_array = explode ( '?', $container_field_as_text );			

		// Get the file name (the first element of the "container_field_array" array).
		$filename = $container_field_array[0];
		$filename = str_replace ( '/fmi/xml/cnt/', '', $filename );
		$filename = urldecode ( $filename );	

		// Explode the filename to get the extension.	
		$filename_parts = explode( '.', $filename );
		$extension = $filename_parts[1];		

		// Create an array of mime types that can be handled as images.
		$image_mime_types = array( 'gif', 'jpeg', 'jpg', 'png' );			

		// If the file in the container can be treated as an image...
		if ( in_array ( $extension, $image_mime_types ) ) {

			// Get the binary data from the container.
			$container_content = $fm -> getContainerData ( $record -> getField ( $field -> getName() ) );			

			// Display the image.
			echo '<img ';
			echo 'src="data:image/' . $extension . ';base64,' . base64_encode ( $container_content ) . '" ';
			echo 'id="image-' . $field_id . '" ';
			echo 'class="image-container" ';	
			if ( $images[ $id_name ] != "" ) {	
				echo 'style="' .  $images[ $id_name ] . '" ';
			}			
			echo '>';
		
		} else {

			// We only support images.
			echo '<!-- ' . $filename . ' -->';
					
		}	
	
	} else {
	
		// The container is empty.
		echo '<span></span>' . "\n";
		
	}


?>