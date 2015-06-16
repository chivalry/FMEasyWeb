<?php

	// Start output buffering.
	ob_start();				
	
	
	// Display the header text.
	if ( ! isset ( $customizations['h1-value'] ) ) { 
		$customizations['h1-value'] = FMEW_Form_Layout; 
	}
	echo '<h1 id="h1-form"><span>' . $customizations['h1-value'] . '</span></h1>' . "\n\n";	

			
	// Display the fields.
	require_once ( dirname(__FILE__) . '/form-display-fields.php' );		
	
	
	// Display the back button.
	echo '<div class="back-button-div" id="back-button-div">';
	echo '<button type="button" id="back-button" onClick="history.go(-1); return false;">' . EW_BACK_BUTTON_VALUE . '</button>';	
	echo '</div>';
	
	
	// Grab the contents of the output buffer.
	$ui_body_content = ob_get_contents();
	
	
	// End output buffering, and erase the contents.
	ob_end_clean();	
	
	
	// Set head title.
	if ( $customizations['head-title'] == '' ) {
		$ui_head_title = FMEW_Form_Layout;	
	} else {
		$ui_head_title = $customizations['head-title'];
	}
	
	
	// Specify a special page wrapper id.
	$ui_page_wrapper_id = '-form';	
	
	
	// Load the UI.	
	require_once ( dirname(__FILE__) . '/../core/page-display.php' );	

?>