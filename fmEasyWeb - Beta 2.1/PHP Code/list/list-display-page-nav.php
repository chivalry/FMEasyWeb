<?php

	// Determine the number of pages that the results will be displayed across.
	$number_of_pages = ceil( $found_set_count / MAX_RECORDS_PER_PAGE );

	// If paging is required...
	if ( $number_of_pages > 1 ) {
		echo '<div id="page-navigator" style="align: center;">';		
			if ( $_GET['page'] > 1 ) {
				echo '<div id="page-navigator-prev" style="width: 40%; align: center;">';
				echo '<a href=".?page=' . ( $_GET['page'] - 1 ) . '" id="page-navigator-href-prev">';
				echo EW_PREV_PAGE;
				echo '</a> ';
				echo '</div>';
			}	
			if ( ( $_GET['page'] > 1 ) and ( $number_of_pages > $_GET['page'] ) ) {
				echo '<div id="page-navigator-gutter" style="width: 20%;"></div>';		
			}
			if ( $number_of_pages > $_GET['page'] ) {
				
				echo '<div id="page-navigator-next" style="width: 40%; align: center;">';
				echo '<a href=".?page=' . ( $_GET['page'] + 1 ) . '" id="page-navigator-href-next">';
				echo EW_NEXT_PAGE;
				echo '</a>';
				echo '</div>';
			}
		echo '</div>';
	}	
	
?>