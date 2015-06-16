<?php

	 /*

		Description:
		
			FMEasyWeb's index page. All requests pass through this script.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-19
				Tim Dietrich (timdietrich@me.com)
				Beta 2.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/
	

	// Initialize EasyWeb.
	require_once ( dirname(__FILE__) . '/core/request-initialize.php' );

	
	// If a specific record is to be displayed...
	if ( isset ( $_GET [ 'recordID' ] ) ) {
	
		// Display the record details.
		require_once ( dirname(__FILE__) . '/form/form.php' );
	
	} else {
	
		// Display a list of records.
		require_once ( dirname(__FILE__) . '/list/list.php' );
		
	}


?>