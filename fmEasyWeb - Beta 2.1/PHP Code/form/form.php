<?php

	 /*

		Description:
		
			Displays a form view.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-18	Tim Dietrich
				Complete rewrite. Read-only support only.				
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/

	

	// Get the record.
	require_once ( dirname(__FILE__) . '/form-record-get.php' );
	
	// Load customizations.
	@include ( dirname(__FILE__) . '/../customizations-form.php' );	
	
	// Display the form.
	require_once ( dirname(__FILE__) . '/form-display.php' );
	
?>