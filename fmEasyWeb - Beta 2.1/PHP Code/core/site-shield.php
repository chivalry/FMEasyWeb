<?php

	 /*

		Description:
		
			Software-based (lite-weight) firewall. 


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/


	// If site shield is enabled...
	if ( SITE_SHIELD_METHOD != '' ) {


		// Get the visitor's IP.
		$visitor_ip = $_SERVER[ 'REMOTE_ADDR' ];


		// If, by default, we are denyaing access...
		if ( SITE_SHIELD_METHOD == 'Deny/Allow' ) {
	
			// Assume that the visitor's IP address is not allowed.
			$access_allowed = FALSE;
		
		} else {
	
			// Assume that the visitor's IP address is allowed.
			$access_allowed = TRUE;		
		
		}
			
		
		// Loop over the list of allowed IPs...
		foreach ( $site_shield_ips as $ip ) {
	
	
			// If the allowed IP is a wildcard (ex: 173.67.245.*)...
			if ( substr_count ( $ip , '*' ) ) {
		
				// Get the stem of the allowed IP (ex: 173.67.245.)
				$ip_partial = substr ( $ip, 0, stripos ( $ip , '*' ) );
			
				// Get the equivalent stem from the visitor's IP.
				$visitor_ip_partial = substr ( $visitor_ip, 0, strlen ( $ip_partial ) );
							
				// If the stems match...
				if ( $visitor_ip_partial == $ip_partial ) {
				
					if ( SITE_SHIELD_METHOD == 'Deny/Allow' ) {
						$access_allowed = TRUE;						
					} else {
						$access_allowed = FALSE;
					}
					
					break;
					
				}
			
			// If the visitor's IP matches the allowed IP...
			} elseif ( $visitor_ip == $ip ) {
			
				if ( SITE_SHIELD_METHOD == 'Deny/Allow' ) {
					$access_allowed = TRUE;						
				} else {
					$access_allowed = FALSE;
				}
				
				break;
				
			}
	
		}
			
			
		// If the visitor's IP address is denied...
		if ( ! $access_allowed ) {
	
			// Start output buffering.
			ob_start();		
		
			echo '<h1 id="siteshield-header"><span>' . EW_SITE_SHIELD_H1 . '</span></h1>';
			echo '<div id="siteshield-message-1"><span>' . EW_SITE_SHIELD_ERROR . '</span></p>';
			echo '<div id="siteshield-message-2"><span></span><span class="ip-address">IP Address: ' . $visitor_ip . '</span></p>';			
		
			// Grab the contents of the output buffer.
			$ui_body_content = ob_get_contents();
		
			// End output buffering, and erase the contents.
			ob_end_clean();	
		
			// Set head title.
			$ui_head_title = EW_SITE_SHIELD_TITLE;				
		
			// Specify a special page wrapper id.
			$ui_page_wrapper_id = '-siteshield';	
		
			// Load the UI.	
			require_once ( dirname(__FILE__) . '/page-display.php' );			

			die;	
				
		}
	
	}

	
?>