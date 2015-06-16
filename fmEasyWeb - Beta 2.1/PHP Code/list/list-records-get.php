<?php


	// Find all records.
	$fm_request = $fm -> newFindAllCommand ( FMEW_List_Layout );	

	// If a "get records script" has been specified...
	if ( $customizations['get-records-script'] != '' ) {
	
		// Run the script.
		$fm_request -> setScript( $customizations['get-records-script'], $customizations['get-records-script-param'] );	
				
		/*
					
			No real magic here, but worth noting...
		
			[1] I had originally planned to use "newFindAnyCommand()" for this sceanrio. 
			However, it doesn't seem to support "setRange" properly, which would put the 
			burden of paging on the script. Using newFindAllCommand isn't ideal, 
			but the hit on the server seems minimal.
		
			[2] The script runs after the result set is generated. Therefore, the script
			can be used to change the result set, sort it, and so on.
			
			[3] If an invalid script is specified, error code 104 ("Script is missing")
			is thrown and the request is aborted.s
			
			-- TD		
		
		*/
				
	
	}
	

	// Add range criteria for paging.
	$skip = ( $_GET['page'] - 1 ) * MAX_RECORDS_PER_PAGE;	
	$fm_request -> setRange( $skip, MAX_RECORDS_PER_PAGE );
		

	// Execute the request.
	$fm_result_get_records = $fm_request -> execute();	
	
	
	// If an error was thrown...
	if ( FileMaker::isError( $fm_result_get_records ) ) {	

		// Display the error and die.
		$error_code = $fm_result_get_records -> code;
		$error_description = $fm_result_get_records -> message;
		require_once ( dirname(__FILE__) . '/../../core/error-display.php' );				
			
	}
	
	
	// Get the records that were returned.
	$records = $fm_result_get_records -> getRecords();	
	
	
	// Get the found set count.
	$found_set_count = $fm_result_get_records -> getFoundSetCount();

	
	// Get the total record count.
	$total_record_count = $fm_result_get_records -> getTableRecordCount();	
	
	
?>