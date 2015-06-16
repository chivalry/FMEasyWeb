<?php

	echo '<div class="form-container" id="form-container-' . $field_id . '">' . "\n";

	// If the container is not empty...
	if ( $display_record -> getField ( $field -> getName() ) !== '' ) {

		// Get the text representation of the container.
		// Example: /fmi/xml/cnt/Lego%201.png?-db=FMEZWeb_Contacts&-lay=FMEasyWeb%20-%20Form%20-%20Contacts&-recid=504&-field=Photo%20Container(1)
		$container_field_as_text = $display_record -> getField ( $field -> getName() );

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
			$container_content = $fm -> getContainerData ( $display_record -> getField ( $field -> getName() ) );			

			// Display the image.
			echo '<img src="data:image/' . $extension . ';base64,' . base64_encode ( $container_content ) . '" id="image-' . $field_id . '" class="image-container" style="' . $images [ $field_id ] . '" />' . "\n";
	
			$photo_displayed = TRUE;

		} else {

			// We only support images.
			echo '<!-- Not an image. -->' . "\n";						
				
		}	

	} else {
	
		echo '<span>Not Available</span>';
	
	}

	echo '</div>' . "\n";

?>