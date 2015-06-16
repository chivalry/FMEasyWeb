<?php


	 /*

		Description:
		
			Displays an EasyWeb error message.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/
	
	
	// Execute a PHP block.
	if ( $customizations['error-pre-render-php'] != '' ) {
		eval ( $customizations['error-pre-render-php'] ); 			
	}	
	
	
	// Start output buffering.
	ob_start();		
	
	
	// Generate the HTML to be displayed.
	echo '<h1 id="error-header"><span>' . EW_ERROR_H1 . '</span></h1>';
	echo '<div id="error-code"><span>' . EW_ERROR_PREFIX . '</span> ' . $error_code . '</div>';
	echo '<div id="error-description">' . $error_description . '</div>';			
	
	
	// Grab the contents of the output buffer.
	$ui_body_content = ob_get_contents();
	
	
	// End output buffering, and erase the contents.
	ob_end_clean();	
	
	
	// Set head title.
	$ui_head_title = EW_ERROR_TITLE;				
	
	
	// Specify a special page wrapper id.
	$ui_page_wrapper_id = '-error';	
	
	
	// Execute a PHP block.
	if ( $customizations['error-post-render-php'] != '' ) {
		eval ( $customizations['error-post-render-php'] ); 			
	}		
	
	
	// Load the UI.	
	require_once ( dirname(__FILE__) . '/page-display.php' );			

?>