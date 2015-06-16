<?php

	
	// Start output buffering.
	ob_start();			
		
		
	// Display the header text.
	if ( ! isset ( $customizations['h1-value'] ) ) { 
		$customizations['h1-value'] = FMEW_List_Layout; 
	}
	echo '<h1 id="h1-form"><a href="." style="text-decoration: none;"><span>' . $customizations['h1-value'] . '</span></a></h1>' . "\n\n";		
		
	
	// Intro.
	echo '<div id="list-intro"></div>';
	
	
	// Display the overview.
	require_once ( dirname(__FILE__) . '/list-display-overview.php' );

	
	// Display the table.
	require_once ( dirname(__FILE__) . '/list-display-table.php' );
	
	
	// Outro.
	echo '<div id="list-outro"></div>';	
	
		
	// Display page navigation.
	require_once ( dirname(__FILE__) . '/list-display-page-nav.php' );
	
	
	// Display logout link.
	require_once ( dirname(__FILE__) . '/../core/logout-link.php' );	
	
	
	// Grab the contents of the output buffer.
	$ui_body_content = ob_get_contents();
	
	
	// End output buffering, and erase the contents.
	ob_end_clean();	
	
	
	// Set head title.
	if ( $customizations['head-title'] == '' ) {
		$ui_head_title = FMEW_List_Layout;	
	} else {
		$ui_head_title = $customizations['head-title'];
	}
	
	
	// Specify a special page wrapper id.
	$ui_page_wrapper_id = '-list';	
	
	
	// Load the UI.	
	require_once ( dirname(__FILE__) . '/../core/page-display.php' );	
	
	

?>