<?php

	 /*

		Description:
		
			English dictionary.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.	
	
	*/



	// ----------------------------------------------------- 
	// HTTPS Enforcer
	// ----------------------------------------------------- 

	// HTTPS head title value.
	define ( 'EW_HTTPS_TITLE' , 'Request Denied' );

	// HTTPS H1 value.
	define ( 'EW_HTTPS_H1' , 'Request Denied' );
	
	// The message to display.
	define ( 'EW_HTTPS_ERROR' , 'Please make this request using the HTTPS protocol.' );




	// ----------------------------------------------------- 
	// Site Shield
	// ----------------------------------------------------- 

	// HTTPS head title value.
	define ( 'EW_SITE_SHIELD_TITLE' , 'Access Denied' );

	// HTTPS H1 value.
	define ( 'EW_SITE_SHIELD_H1' , 'Access Denied' );
	
	// The message to display.
	define ( 'EW_SITE_SHIELD_ERROR' , 'You do not have permission to access this site.' );




	// ----------------------------------------------------- 
	// Login
	// ----------------------------------------------------- 
	
	// Login form title value.
	define ( 'EW_LOGIN_TITLE' , 'Login' );	
	
	// Login form H1 value.
	define ( 'EW_LOGIN_H1' , 'Login' );
	
	// Login intro text.
	define ( 'EW_LOGIN_INTRO' , 'Please login.' );
	
	// Login authentication error.
	define ( 'EW_LOGIN_ERROR' , 'The account information that you provided is incorrect. Please try again.' );
	
	// Account field label.
	define ( 'EW_LOGIN_ACCOUNT_FIELD_LABEL' , 'Account Name' );
	
	// Password field label.
	define ( 'EW_LOGIN_PASSWORD_FIELD_LABEL' , 'Password' );
	
	// Submit button value.
	define ( 'EW_LOGIN_SUBMIT_BUTTON_VALUE' , 'Login' );
	
	
	
	// ----------------------------------------------------- 
	// Logout
	// ----------------------------------------------------- 
	
	// Logout title value.
	define ( 'EW_LOGOUT_TITLE' , 'Logout' );		
	
	// Logout form H1 value.
	define ( 'EW_LOGOUT_H1' , 'Logout' );
	
	// Logout intro text.
	define ( 'EW_LOGOUT_MESSAGE' , 'You have been logged out.' );	
	
	// Re-login message.
	define ( 'EW_RELOGIN_MESSAGE', 'Click here to login again.' );
	

	// ----------------------------------------------------- 
	// List
	// ----------------------------------------------------- 
	
	define ( 'EW_NEXT_PAGE', 'Next Page' );
	define ( 'EW_PREV_PAGE', 'Previous Page' );
			
	
	// ----------------------------------------------------- 
	// Form
	// ----------------------------------------------------- 	
	
	// Back button text value.
	define ( 'EW_BACK_BUTTON_VALUE', 'Return to List' );	
	
	
	// ----------------------------------------------------- 
	// Errors
	// ----------------------------------------------------- 

	// Error head title value.
	define ( 'EW_ERROR_TITLE' , 'Error' );

	// HTTPS H1 value.
	define ( 'EW_ERROR_H1' , 'Error' );
	
	// Error code prefix.
	define ( 'EW_ERROR_PREFIX' , 'Code:' );	
	
	// Configuration error messages.
	define ( 'EW_ERROR_FM_HOSTSPEC_UNDEFINED', 'No database server (hostspec) was specified. (FM_HOSTSPEC)' );
	define ( 'EW_ERROR_FM_DATABASE_UNDEFINED', 'No database name was specified. (FM_DATABASE)' );
	define ( 'EW_ERROR_FMEW_APPLICATION_TYPE_INVALID', 'An invalid application type was specified. (FMEW_Application_Type)' );
	define ( 'EW_ERROR_API_PATH', 'The FileMaker API for PHP is not in the specified location. (FM_API_PATH)' );
	
	
	
	
?>