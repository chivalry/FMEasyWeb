<?php

	 /*

		Description:
		
			Loads the FileMaker API for PHP and reates a FileMaker connection object. 


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.
												
	
	*/

	
	
	// Execute a PHP block.
	if ( $customizations['page-pre-render-php'] != '' ) {
		eval ( $customizations['page-pre-render-php'] ); 			
	}
	
	// Start output buffering.
	ob_start();	
	
	// Render the page using the theme.
	require_once ( dirname(__FILE__) . '/../themes/' . EW_THEME_NAME . '/page-template.php' );
	

	// Grab the contents of the output buffer.
	$ui_page_content = ob_get_contents();
	
	
	// End output buffering, and erase the contents.
	ob_end_clean();	
	

	// Execute a PHP block.
	if ( $customizations['page-post-render-php'] != '' ) {
		eval ( $customizations['page-post-render-php'] ); 			
	}
	
	
	// Display the page content.
	echo $ui_page_content; 	
	
	
	// Flushes the system write buffers. 
	flush();
	
	
	// Execute a PHP block.
	if ( $customizations['page-post-display-php'] != '' ) {
		eval ( $customizations['page-post-display-php'] ); 			
	}	
	
	
	// Prevent further code execution by the caller.
	die;
	
?>