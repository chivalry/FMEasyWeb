<?php

	 /*

		Description:
		
			EasyWeb Alpha theme's standard page template.


		History:
				
			2015-04-01
				Tim Dietrich (timdietrich@me.com)
				Initial version.
				
			2015-05-18	Tim Dietrich
				Refactor.				
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Beta 2.1 code review.					
	
	*/	
	
?>
<!doctype html>
<html lang="<?php echo EW_HTML_LANG; ?>">
	<head>		
		<meta charset="utf-8">
		<title><?php echo $ui_head_title; ?></title>		
		<link rel="stylesheet" href="themes/EasyWeb Alpha/stylesheet.css">	
		<?php 
		
			// Viewport.
			echo '<meta name="viewport" content="user-scalable=no, width=device-width" />' . "\n";

			// Show EasyWeb version used.
			echo '<meta name="generator" content="FMEasyWeb ' . EW_VERSION . '" />' . "\n";

		?>		
	</head>
	<body>	
		<div id="page-wrapper<?php echo $ui_page_wrapper_id; ?>">
			<?php 

				// Display body content.
				echo $ui_body_content; 			

			?>
		</div>			
	</body>
</html>