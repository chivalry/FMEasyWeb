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


	// Load the FileMaker API for PHP.
	require_once ( dirname(__FILE__) . '/../libraries/FileMaker/FileMaker.php' );


	// Create a FileMaker connection object.
	$fm = new FileMaker ();
	$fm -> setProperty ( 'hostspec', FM_HOSTSPEC );
	$fm -> setProperty ( 'database', FM_DATABASE );
	
	
	// If the user is logging in...
	if ( ( $_POST['fm_account_name'] != '' ) and ( $_POST['fm_password'] != '' ) ) {
	
		// Use the account name and password that they provided.
		$fm -> setProperty ( 'username', $_POST['fm_account_name'] );
		$fm -> setProperty ( 'password', $_POST['fm_password'] );
		
	} elseif ( ( $_SESSION['fm_account_name'] != '' ) and ( $_SESSION['fm_password'] != '' ) ) {
	
		// The user has previously authenticated, and we'll use their credentials...
		
		// First, get the initialization vector that was used to encrypt the credentials.
		$iv = base64_decode ( $_COOKIE [ EW_IV_COOKIE_NAME ] );
		
		// Decrypt credentials and assign them to the connection object.
		$fm -> setProperty ( 'username', decrypt ( $_SESSION['fm_account_name'], $encryption_key, $iv ) );
		$fm -> setProperty ( 'password', decrypt ( $_SESSION['fm_password'], $encryption_key, $iv ) );	
		
	} else {
	
		// Use the default credentials.
		$fm -> setProperty ( 'username', FM_ACCOUNT_NAME );
		$fm -> setProperty ( 'password', FM_PASSWORD );	
		
	}
	
?>