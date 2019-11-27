<?php

$rand_advice = ["<pre>Oracle predicts that<br><br>Flag is somewhere inside <b>/var/www/html/teletubby</b></pre>",
		"<pre>Oracle suggests that<br><br><b>cat</b> might be a command you need to open a file</pre>",
		"<pre>Oracle can see that<br><br>Comment section is<br><h1><b>USELESS</b></h1></pre>",
		"<pre>Oracle is going to tell you that<br><br>Have you try a special character <b>WITHOUT SPACING</b> in 'Say Hello'?</pre>",
		"<pre>While closing his eyes, Oracle tells you that<br><br>The <b>XSS hacking</b> may not be working. Try something else</pre>",
		"<pre>Oracle saw an upcoming usage of <b>pphphphpp</b></pre>",];

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
