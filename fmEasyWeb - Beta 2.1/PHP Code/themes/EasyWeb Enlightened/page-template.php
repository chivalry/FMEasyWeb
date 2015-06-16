<?php

	 /*

		Description:
		
			EasyWeb Enlightened theme's standard page template.


		History:
				
			2015-05-31
				Tim Dietrich (timdietrich@me.com)
				Initial version.
							
	
	*/	
	
?>
<!doctype html>
<html lang="<?php echo EW_HTML_LANG; ?>">
	<head>		
		<meta charset="utf-8">
		<title><?php echo $ui_head_title; ?></title>		
		<link rel="stylesheet" href="themes/EasyWeb Enlightened/stylesheet.css">	
		<?php 
		
			// Viewport.
			echo '<meta name="viewport" content="user-scalable=no, width=device-width" />' . "\n";

			// Show EasyWeb version used.
			echo '<meta name="generator" content="FMEasyWeb ' . EW_VERSION . '" />' . "\n";

		?>		
	</head>
	<body>	
		<div id="page-wrapper">
			<?php 

				// Display body content.
				echo $ui_body_content; 			

			?>
		</div>			
	</body>
</html>