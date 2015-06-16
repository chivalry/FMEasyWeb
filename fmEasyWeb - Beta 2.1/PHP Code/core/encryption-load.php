<?php


	 /*

		Description:
		
			Includes custom functions used for encryption.

		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/


	// Generates an initialization vector on demand.
	function ivgen () {	
		$iv_size = mcrypt_get_iv_size ( MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC );
		$iv = mcrypt_create_iv ( $iv_size, MCRYPT_RAND );	
		return $iv;	
	}

	// Encrypts plaintext using MCRYPT_RIJNDAEL_256 and a given key and an initialization vector.
	function encrypt ( $pure_string, $encryption_key, $iv ) {
		$encrypted_string = @ mcrypt_encrypt ( MCRYPT_RIJNDAEL_256, $encryption_key, utf8_encode( $pure_string ), MCRYPT_MODE_CBC, $iv );
		return $encrypted_string;
	}

	// Decrypts text that has been encrypted using MCRYPT_RIJNDAEL_256.
	function decrypt ( $encrypted_string, $encryption_key, $iv ) {
		$decrypted_string = @ mcrypt_decrypt ( MCRYPT_RIJNDAEL_256, $encryption_key, $encrypted_string, MCRYPT_MODE_CBC, $iv ) ;
		return $decrypted_string;
	}
	
	// We base the encryption key on the user's IP address and browser name.
	$encryption_key = $_SERVER [ 'REMOTE_ADDR' ] . $_SERVER [ 'HTTP_USER_AGENT' ];	
	
	// Use the maximum key size that's supported.
	$encryption_key = substr ( $encryption_key, 0, mcrypt_get_iv_size ( MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC ) );	
	
	
?>