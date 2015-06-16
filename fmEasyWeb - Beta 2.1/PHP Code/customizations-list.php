<?php

	 /*

		Description:
		
			Specifies customizations to the "list view."


		History:

			2015-05-19
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/
	


	// ---------------------------------------------------------------------------
	// LIST VIEW CUSTOMIZATIONS
	// ---------------------------------------------------------------------------
		
		// Page Title
		$customizations[ 'head-title' ] = 'EasyWeb Demo: Member Directory';
		
		// H1 Value
		$customizations[ 'h1-value' ] = 'Member Directory';
		
		// Column Headers
		$column_names [ 'Name' ] = 'Member Name';
		$column_names [ 'Company' ] = 'Company Name';
		$column_names [ 'Job Title' ] = 'Position';		
		$column_names [ 'Photo Container' ] = 'Photo';
		$column_names [ 'Office Email HTML' ] = 'Email';

		// Image styles
		$images [ 'photo-container' ] = 'max-width: 40px;';
				
		// Cell Styles
		//$cell_styles [ 'name' ] = 'font-weight: bold;';
		//$cell_styles [ 'company' ] = 'color: red;';
		


		// "Get Records" Script
		//$customizations [ 'get-records-script' ] = 'fmEasyWeb - Get Records';
		//$customizations [ 'get-records-script-param' ] = 'NY';
		


?>