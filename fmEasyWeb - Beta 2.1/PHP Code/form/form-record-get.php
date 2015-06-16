<?php

	// Get the record that was requested.
	$fm_result_get_record = $fm -> getRecordByID ( FMEW_Form_Layout, $_GET [ 'recordID' ] );
	
	
	// If an error was thrown...
	if ( FileMaker::isError( $fm_result_get_record ) ) {	

		// Display the error and die.
		$error_code = $fm_result_get_record -> code;
		$error_description = $fm_result_get_record -> message;
		require_once ( dirname(__FILE__) . '../core/error-display.php' );				
			
	}	
	
	
	// Grab the record.
	$display_record = $fm_result_get_record;
	
?>