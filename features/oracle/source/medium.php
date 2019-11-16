<?php

if( isset( $_POST[ 'Submit' ]  ) ) {
	$rand_advice = ["<pre>Oracle predicts that<br><br>Flag is somewhere inside configuration</pre>",
			"<pre>Oracle suggests that<br><br>'cat' might be a command you need</pre>",
			"<pre>Oracle can see that<br><br>Comment section is<br>&nbsp&nbsp&nbsp&nbsp&nbspUSELESS</pre>",
			"<pre>Oracle is telling you that there are only four useful advices including this</pre>"];
	$rand_num = rand(0, 10);
	if ($rand_num > 3) {
		$cmd = shell_exec( 'fortune -s');
		$html .= "<pre>{$cmd}</pre>";
	}
	else {
		$html .= $rand_advice[$rand_num];
	}
}

?>
