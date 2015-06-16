<?php

	 /*

		Description:
		
			Initializes all requests. Loads settings and dictionary, enforces
			security, sets up a database connection, etc.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/

			
	// Load EasyWeb core settings.
	require_once ( dirname(__FILE__) . '/settings-core.php' );
	
	
	// Load EasyWeb user-configurable settings.
	require_once ( dirname(__FILE__) . '/../settings.php' );	
	
	
	// Load the dictionary.
	require_once ( dirname(__FILE__) . '/dictionary-load.php' );
	
	
	// Test the configuration.
	require_once ( dirname(__FILE__) . '/configuration-test.php' );	
	
	
	// Enforce HTTPS requirement.
	require_once ( dirname(__FILE__) . '/https-enforce.php' );
	
	
	// Enforce access rules.
	require_once ( dirname(__FILE__) . '/site-shield.php' );	
	
				
	// Initialize a PHP session.
	require_once ( dirname(__FILE__) . '/session-initialize.php' );	
	
	
	// Load the encryption and decryption functions.
	require_once ( dirname(__FILE__) . '/encryption-load.php' );		
	
	
	// Create a connection to the database.
	require_once ( dirname(__FILE__) . '/database-connect.php' );
	
	
	// If necessary, authenticate the user.
	require_once ( dirname(__FILE__) .  '/user-authenticate.php' );	
	
	
	// If necessary, logout the user.
	require_once ( dirname(__FILE__) .  '/user-logout.php' );			
	
	
	// Load the layout.
	require_once ( dirname(__FILE__) . '/layout-load.php' );			
	

?>