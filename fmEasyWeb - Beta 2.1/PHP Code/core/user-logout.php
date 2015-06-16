<?php

	 /*

		Description:
		
			Handles a logout request from the user.


		History:

			2014-11-08	Tim Dietrich
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					


	 */
	 
	 
	// If the user is logging out...
	if ( ( isset ( $_GET [ 'logout' ] ) ) or ( isset ( $_POSt [ 'logout' ] ) ) ) {	 


		// Destory the session.
		require_once ( dirname(__FILE__) . '/session-destroy.php' );	

	
		// Start output buffering.
		ob_start();
	
?>

<h1 id="logout-header"><span><?php echo EW_LOGOUT_H1; ?></span></h1>

<div id="logout-message"><span><?php echo EW_LOGOUT_MESSAGE; ?></span></div>

<div id="re-login" onClick="javascript:window.location.href='.';"><span><?php echo EW_RELOGIN_MESSAGE; ?></span></div>


<?php
			
		// Grab the contents of the output buffer.
		$ui_body_content = ob_get_contents();
	
		// End output buffering, and erase the contents.
		ob_end_clean();	
	
		// Set head title.
		$ui_head_title = EW_LOGOUT_TITLE;	
	
		// Specify a special page wrapper id.
		$ui_page_wrapper_id = '-logout';	
	
		// Load the UI.	
		require_once ( dirname(__FILE__) . '/page-display.php' );	
		
	}

?>