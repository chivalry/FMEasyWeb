<?php

	 /*

		Description:
		
			Displays a list view.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-18	Tim Dietrich
				Refactored.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/
	

	
	// Set the page number to display.
	if ( ! isSet ( $_GET['page'] ) ) { $_GET['page'] = 1; }
	if ( $_GET['page'] < 1 ) { $_GET['page'] = 1; }	

	
	// Set the maximum records per page
	$records_per_page = MAX_RECORDS_PER_PAGE;


	// Load customizations.
	@include ( dirname(__FILE__) . '/../customizations-list.php' );


	// Get records.
	require_once ( dirname(__FILE__) . '/list-records-get.php' );
		

	// Display the page.
	require_once ( dirname(__FILE__) . '/list-display.php' );


?>