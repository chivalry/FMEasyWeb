<?php

	 /*

		Description:
		
			Enforces HTTP protocol use, if applicable.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/


	// If  we're requiring that requests be made over HTTPS...
	if ( ( REQUIRE_HTTPS ) and ( $_SERVER['SERVER_PORT'] !== '443' ) ) {


		// Start output buffering.
		ob_start();		

		
		echo '<h1 id="https-enforcer-header"><span>' . EW_HTTPS_H1 . '</span></h1>';
		echo '<div id="https-enforcer-message-1"><span>' . EW_HTTPS_ERROR . '</span></p>';			

		
		// Grab the contents of the output buffer.
		$ui_body_content = ob_get_contents();

		
		// End output buffering, and erase the contents.
		ob_end_clean();	

		
		// Set head title.
		$ui_head_title = EW_HTTPS_TITLE;				

		
		// Specify a special page wrapper id.
		$ui_page_wrapper_id = '-https-enforcer';	

		
		// Load the UI.	
		require_once ( dirname(__FILE__) . '/page-display.php' );						

		
	}
	
?>