<?php

	 /*

		Description:
		
			Tests the EasyWeb instance, and reports any basic configuration issues
			that are found.

		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/
	
	
	// If no database server was specified...
	if ( ! defined ( 'FM_HOSTSPEC' ) ) {
	
		$error_code = 'EW_ERROR_FM_HOSTSPEC_UNDEFINED';
		$error_description = EW_ERROR_FM_HOSTSPEC_UNDEFINED;
		require_once ( dirname(__FILE__) . '/error-display.php' );
	
	}		
	
	
	// If no database name was specified...
	if ( ! defined ( 'FM_DATABASE' ) ) {
	
		$error_code = 'EW_ERROR_FM_DATABASE_UNDEFINED';
		$error_description = EW_ERROR_FM_DATABASE_UNDEFINED;
		require_once ( dirname(__FILE__) . '/error-display.php' );
	
	}			
	

?>