<?php

if( isset( $_POST[ 'Submit' ]  ) ) {
	// Get input
	$target = $_REQUEST[ 'txt' ];

	$cs = array('ghostbusters','hellokitty','vader');

	// Set blacklist
	$substitutions = array(
		'& ' => '',
		';'  => '',
		'| ' => '',
		'^ '  => '',
		'` ' => '',
		'( '  => '',
		') ' => '',
		'$ '  => '',
		'wget' => '',
		'cat' => ''
	);

	// Remove any of the charactars in the array (blacklist).
	$target = str_replace( array_keys( $substitutions ), $substitutions, $target );
	$cow = $cs[array_rand($cs)];
	// Determine OS and execute the ping command.
	if( stristr( php_uname( 's' ), 'Windows NT' ) ) {
		// Windows
		$cmd = shell_exec( 'cowsay ' . $target );
	}
	else {
		// *nix
		$cmd = shell_exec( 'cowsay -f '.$cow .' '. $target );
	}

	// Feedback for the end user
	$html .= "<pre>{$cmd}</pre>";
}

?>
