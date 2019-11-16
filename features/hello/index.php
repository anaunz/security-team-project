<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Come To Say Hello' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'hello';
$page[ 'help_button' ]   = 'hello';
$page[ 'source_button' ] = 'hello';

dvwaDatabaseConnect();
$vulnerabilityFile = 'medium.php';

require_once DVWA_WEB_PAGE_TO_ROOT . "features/hello/source/{$vulnerabilityFile}";

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Come to say Hello</h1>

	<div class=\"vulnerable_code_area\">
		<h2>Hello!</h2>

		<form name=\"ping\" action=\"#\" method=\"post\">
			<p>
				Say:
				<input type=\"text\" name=\"txt\" size=\"30\">
				<input type=\"submit\" name=\"Submit\" value=\"Send\">
			</p>\n";

if( $vulnerabilityFile == 'impossible.php' )
	$page[ 'body' ] .= "			" . tokenField();

$page[ 'body' ] .= "
		</form>
		{$html}
	</div>

	
</div>\n";

dvwaHtmlEcho( $page );

?>
