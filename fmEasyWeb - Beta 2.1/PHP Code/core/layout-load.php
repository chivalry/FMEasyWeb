<?php


	 /*

		Description:
		
			Loads the layout that is needed to fulfill the request.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/

	
	// If this is a form app, or if it's a list app and we're displaying a specific record...
	if ( ( FMEW_Application_Type == 'form' ) or ( isSet ( $_GET['recordID'] ) ) ) {
			
		// Get the form layout.
		$fm_layout = $fm -> getLayout ( FMEW_Form_Layout );	
		
		// Grab the layout being used so that we can load any customizations for it.
		$layout_name = FMEW_Form_Layout;
					
	} else {
	
		// Get the list layout.
		$fm_layout = $fm -> getLayout ( FMEW_List_Layout );	
		
		// Grab the layout being used so that we can load any customizations for it.
		$layout_name = FMEW_List_Layout;		
	
	}

	
	// If there was a problem getting the layout...
	if ( FileMaker::isError( $fm_layout ) ) {	

		$error_code = $fm_layout -> code;
		$error_description = $fm_layout -> message;
		require_once ( dirname(__FILE__) . '/error-display.php' );					
		
	}	
	
	
	// Get the fields on the layout.
	$fm_fields = $fm_layout -> getFields();		

	
?>