<?php

header ("X-XSS-Protection: 0");

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Get input
	$name = str_replace( '<script>', 'sCRiPt!?!!', strtolower($_GET[ 'name' ]) );

	if(strpos(strtolower($name), 'php') !== false && strpos(strtolower($name), '/can_upload/') !== false && strpos($name, '<') !== false  && strpos($name, '>') !== false)
		$html .= '<pre>Nice try! But it does not meant to be hacked this way.<br>You can execute the file in \'Say Hello\' Page.<br><br>Here the result of your hacking: ' . $name . '</pre>';
	else
		$html .= '<pre>Hello, Po! So, this time thou are going with the name, ' . $name . '?</pre>';
}

?>
