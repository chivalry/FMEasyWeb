<?php


	 /*

		Description:
		
			FMEasyWeb's user-configurable settings.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-19
				Tim Dietrich (timdietrich@me.com)
				Beta 2.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/


	// ---------------------------------------------------------------------------
	// DATABASE-RELATED SETTINGS
	// ---------------------------------------------------------------------------
		
		// The database's address (hostspec).
		define ( 'FM_HOSTSPEC', '' );


		// The database's name.
		define ( 'FM_DATABASE', 'FMEasyWeb - Contacts' );	 


		// The default account name / password to use to access the FileMaker database.
		// Set these to allow public access to the app.
		define ( 'FM_ACCOUNT_NAME', 'fmEasyWeb' );
		define ( 'FM_PASSWORD', 'NdKjJawxJ$oAAc4oD6Arf7+urQx#d.ETBiDrTT9ajrTjM2hQQ{' );	  	 



	// ---------------------------------------------------------------------------
	// APPLICATION-RELATED SETTINGS
	// ---------------------------------------------------------------------------


		// The FileMaker layout(s) to use for the application.
		define ( 'FMEW_List_Layout', 'FMEasyWeb - List' );
		define ( 'FMEW_Form_Layout', 'FMEasyWeb - Form' );	 


		// The theme to use.
		define ( 'EW_THEME_NAME', 'EasyWeb Enlightened' );


		// The language dictionary to use.
		// Supported: english, spanish
		define ( 'EW_DICTIONARY', 'english' );	



	// ---------------------------------------------------------------------------
	// SECURITY SETTINGS
	// ---------------------------------------------------------------------------		


		// Require that connections be made over HTTPS?
		define ( 'REQUIRE_HTTPS', FALSE );	
	
	
		// Session timeout (in seconds).
		define ( 'SESSION_TIMEOUT', 60 * 15 );	 
	
	
		// Can be used to enable and configure Site Shield, and control access to the application by IP.
		// Supported values are: 
		// NULL: Disables Site Shield.
		// Deny/Allow: 	Denies access to all IPs except those listed in the $site_shield_ips array.
		// Allow/Deny: 	Allows access to all IPs except those listed in the $site_shield_ips array.	
		define ( 'SITE_SHIELD_METHOD', NULL );	


		// The site shield IP address array.
		// Specify the IP addresses to allow or deny.
		// Note: You can use wildcards. For example: 123.45.67.*, or even 198.*	
		$site_shield_ips = array();
		$site_shield_ips[] = '127.0.0.1';	// Localhost.	




	// ---------------------------------------------------------------------------
	// LIST VIEW SETTINGS
	// ---------------------------------------------------------------------------


		// The maximum records shown per page in list view.
		define ( 'MAX_RECORDS_PER_PAGE', 10 );	 	


?>