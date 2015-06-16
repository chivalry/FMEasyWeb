<?php

	 /*

		Description:
		
			Displays a logout link (when applicable).


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/

	// If this app is configured to require authentication...
	if ( ( FM_ACCOUNT_NAME == '' ) or ( FM_PASSWORD == '' ) ) {

		// If the user has been authenticated...
		if ( ( $_SESSION['fm_account_name'] != '' ) and ( $_COOKIE [ EW_IV_COOKIE_NAME ] != '' ) ) {	
	
			echo '<div id="logout-link-wrapper" style="align: center;">';
			echo '<a href=".?logout=yes">Logout</a>';
			echo '</div>';
		
		}
		
	}	
		
?>