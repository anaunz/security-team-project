<?php

$rand_advice = ["<pre>Oracle predicts that<br><br>Flag is somewhere inside /var/www/html/teletubby</pre>",
		"<pre>Oracle suggests that<br><br>'cat' might be a command you need to open a file</pre>",
		"<pre>Oracle can see that<br><br>Comment section is<br>&nbsp&nbsp&nbsp&nbsp&nbspUSELESS</pre>",
		"<pre>Oracle is going to tell you that<br><br>Have you try a special character without spacing?</pre>",
		"<pre>While closing his eyes, Oracle tells you that<br><br>The tag script may not be working</pre>",
		"<pre>Oracle saw an upcoming usage of pphphphpp</pre>",];

if( isset( $_POST[ 'Submit' ]  ) ) {
	
	$rand_num = rand(0, 15);
	if ($rand_num > 5) {
		$cmd = shell_exec( 'fortune -s');
		$html .= "<pre>{$cmd}</pre>";
	}
	else {
		$html .= $rand_advice[$rand_num];
	}
}
else
	$html .= "<pre>Oracle is telling you that there are only seven useful advices including this</pre>";

?>
