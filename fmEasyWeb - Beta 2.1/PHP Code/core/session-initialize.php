<?php


	 /*

		Description:
		
			Initializes the user's PHP session.

		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/



	// Start a new session, or resume an existing session.
	@session_start(); 		
	
	
	// Update the current session's id with a newly generated one, 
	// and delete the old associated session file.
	@session_regenerate_id ( TRUE );		
	
	
	// Force the PHP session cookie to expire after "SESSION_TIMEOUT" minutes of inactivity.
	setcookie( session_name(), session_id(), time() + ( SESSION_TIMEOUT ) );

	
	// If an initialization vector cookie exists... 
	if ( isset ( $_COOKIE [ EW_IV_COOKIE_NAME ] ) ) {
	
		// Re-drop the initialization vector cookie so that it doesn't timeout.
		setcookie( EW_IV_COOKIE_NAME, $_COOKIE [ EW_IV_COOKIE_NAME ], time() + ( SESSION_TIMEOUT ) );	
	
	}
	
	
?>