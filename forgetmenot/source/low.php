<?php

if( isset( $_REQUEST[ 'Submit' ] ) ) {
	// Get input
	$email = $_REQUEST[ 'email' ];

	// Check database
	$query  = "SELECT user FROM users WHERE email = '$email';";
	$result = mysqli_query($GLOBALS["___mysqli_ston"],  $query ) or die( '<pre>' . ((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)) . '</pre>' );

	if(mysqli_num_rows($result) == 0)
		$html .= "<pre>Wait a minute! {$email} is not your email, P0.</pre>";
	

	while( $row = mysqli_fetch_assoc( $result ) ) {
		// Get values
		$user = $row["user"];

		// Feedback for end user
		$html .= "<pre>Your reset password link is sent to '{$email}'<br>Get your ass inside the site, '{$user}'</pre>";
	}

	mysqli_close($GLOBALS["___mysqli_ston"]);
}

?>
