<?php

if( isset( $_POST[ 'Upload' ] ) ) {
	// Where are we going to be writing to?
	$target_path  = DVWA_WEB_PAGE_TO_ROOT . $_POST[ 'probablyWhatYouAreLookingFor' ];
	$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

	// File information
	$uploaded_name = $_FILES[ 'uploaded' ][ 'name' ];
	$uploaded_type = $_FILES[ 'uploaded' ][ 'type' ];
	$uploaded_size = $_FILES[ 'uploaded' ][ 'size' ];

	// Is it an image?
	if( ( strtolower($uploaded_type) == "teletubbies" || strtolower($uploaded_type) == "teletubby" ) &&
		( $uploaded_size < 100000 ) ) {

		// Can we move the file to the upload folder?
		if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
			// No
			$html .= "<pre>'{$target_path}' is not an uploadable path.<br>Why don't you peek in 'Say Hello' ?<pre>";
		}
		else {
			// Yes!
			$html .= "<pre> Your Teletubies photo {$target_path} succesfully uploaded!</pre>";
		}
	}
	else if (strpos(strtolower($uploaded_name), 'teletubbies') !== false || strpos(strtolower($uploaded_name), 'teletubby') !== false) {
		$html .= '<pre>Hej, you are a fake Teletubby.</pre>';
	}
	else {
		// Invalid file
		$html .= '<pre>Your file is not <b>TELETUBBY</b> enough.</pre>';
	}
}

?>
