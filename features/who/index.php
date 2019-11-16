<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Who ???' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'who';

dvwaDatabaseConnect();
$vulnerabilityFile = 'low.php';

require_once DVWA_WEB_PAGE_TO_ROOT . "features/who/source/{$vulnerabilityFile}";

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Who ? Tell me!</h1>

	<div class=\"vulnerable_code_area\">
		<form name=\"XSS\" action=\"#\" method=\"GET\">
			<p>
				The name:  
				<input type=\"text\" name=\"name\">
				<input type=\"submit\" value=\"Submit\">
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
