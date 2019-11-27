<?php

header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Get input
	$name = str_replace( '<script>', 'sCRiPt!?!!', strtolower($_GET[ 'name' ]) );
	
	// Feedback for end user
	$html .= '<pre>Hello, Po! So, this time thou are going with the name, ' . $name . '?</pre>';
}

?>
