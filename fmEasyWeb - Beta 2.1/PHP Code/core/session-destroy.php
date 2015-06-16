<?php

	 /*

		Description:
		
			Destroys a user session.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/

	// Destroy the session.
	@session_start(); 
	@session_unset();
	@session_destroy();	
	
	// Kill the cookie.
	@setcookie( session_name(), session_id(), time() - 3600 );
	
?>