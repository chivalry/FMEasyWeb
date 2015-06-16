<?php

	 /*

		Description:
		
			If applicable, handles authentication of the user.


		History:

			2014-11-08	Tim Dietrich
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					


	 */
	 
	 
	// If this app is configured to require authentication...
	if ( ( FM_ACCOUNT_NAME == '' ) or ( FM_PASSWORD == '' ) ) {
	
		// If the user has not been authenticated...
		if ( ( $_SESSION['fm_account_name'] == '' ) or ( $_COOKIE [ EW_IV_COOKIE_NAME ] == '' ) ) {		 

	
			// Initialize the form fields.
			if ( ! isSet ( $_POST['fm_account_name'] ) ) { $_POST['fm_account_name'] = ''; }	
			if ( ! isSet ( $_POST['fm_password'] ) ) { $_POST['fm_password'] = ''; }	
	
			// If the user is trying to login...
			if ( ( isSet ( $_POST['login_form_submit_token'] ) ) and ( $_POST['fm_account_name'] != '' ) and ( $_POST['fm_password'] != '' ) ) {
		
				// Get a list of layouts that are available.
				$fm_result = $fm -> listLayouts ();
		
				// If the login attempt was successfull...
				if ( ! FileMaker::isError( $fm_result ) ) {		
				
					// Get an initialization vector.
					$iv = ivgen();
			
					// Save encrypted credentials in session state.
					$_SESSION['fm_account_name'] = encrypt ( $_POST['fm_account_name'], $encryption_key, $iv );	
					$_SESSION['fm_password'] = encrypt ( $_POST['fm_password'], $encryption_key, $iv );	
			
					// Drop the initialization vector cookie.
					setcookie( EW_IV_COOKIE_NAME, base64_encode ( $iv ), time() + ( SESSION_TIMEOUT ) );
			
					// Redirect to the app's main page.			
					header( 'Location: .' );					
					die;		

				// If the error thrown was anything other than a 2 ("Communication Error")...
				} elseif ( $fm_result -> code != 22 ) {	
		
					// Display the error and die.
					$error_code = $fm_result -> code;
					$error_description = $fm_result -> message;
					require_once ( dirname(__FILE__) . '/error-display.php' );			
		
				}
					
			}
		
			// Start output buffering.
			ob_start();

?>

<h1 id="login-header"><span><?php echo EW_LOGIN_H1; ?></span></h1>

<form method="post" action="." id="login-form" name="login-form">

<?php 
	if ( isSet ( $_POST['login_form_submit_token'] ) ) {
		echo '<div id="login-error"><span>' .  EW_LOGIN_ERROR . '</span></div>';
	} else {
		echo '<div id="login-intro"><span>' .  EW_LOGIN_INTRO . '</span></div>';
	}
?>

<input type="hidden" name="login_form_submit_token" value="1" />

<div class="form-field-group" id="login-account-name">
	<div class="field-label" id="fm-account-name-label">
		<span><?php echo EW_LOGIN_ACCOUNT_FIELD_LABEL; ?></span>
	</div>
	<input type="text" name="fm_account_name" id="fm-account-name" value="<?php echo $_POST['fm_account_name']; ?>" autofocus />
</div>

<div class="form-field-group" id="login-password">
	<div class="field-label" id="fm-password-label">
		<span><?php echo EW_LOGIN_PASSWORD_FIELD_LABEL; ?></span>
	</div>
	<input type="password" name="fm_password" id="fm-password" value="" />
</div>

<div class="form-field-group" id="login-submit">
	<div class="login-form-submit" name="fm_submit" id="fm-submit" onClick="javascript:document.getElementById('login-form').submit();">
		<span><?php echo EW_LOGIN_SUBMIT_BUTTON_VALUE; ?></span>
	</div>
</div>

</form>			

<?php
			
			// Grab the contents of the output buffer.
			$ui_body_content = ob_get_contents();
	
			// End output buffering, and erase the contents.
			ob_end_clean();	
	
			// Set head title.
			$ui_head_title = EW_LOGIN_TITLE;	
	
			// Specify a special page wrapper id.
			$ui_page_wrapper_id = '-login';	
	
			// Load the UI.	
			require_once ( dirname(__FILE__) . '/page-display.php' );	
			
		} // Closes "If this app is configured to require authentication..."
		
	} // Closes "If the user has not been authenticated..."

?>