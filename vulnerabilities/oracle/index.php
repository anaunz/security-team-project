<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Oracle' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'oracle';

dvwaDatabaseConnect();
$vulnerabilityFile = 'medium.php';

require_once DVWA_WEB_PAGE_TO_ROOT . "vulnerabilities/oracle/source/{$vulnerabilityFile}";

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>I am the oracle !</h1>

	<div class=\"vulnerable_code_area\">
		<h2>I know everything!</h2>

		<form name=\"ping\" action=\"#\" method=\"post\">
			<p>
				<input type=\"submit\" name=\"Submit\" value=\"Click\">
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
