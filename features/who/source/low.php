<?php

header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Get input
	$name = str_replace( '<script>', 'sCRiPt???', strtolower($_GET[ 'name' ]) );
	$name = str_replace( 'php', '', strtolower($name) );
	
	// Feedback for end user
	$html .= '<pre> ' . $name . '</pre>';
}

?>
