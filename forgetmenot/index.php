<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Forget Your Name' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'sqli';
$page[ 'help_button' ]   = 'sqli';
$page[ 'source_button' ] = 'sqli';

dvwaDatabaseConnect();

$method            = 'GET';
$vulnerabilityFile = 'low.php';

require_once DVWA_WEB_PAGE_TO_ROOT . "forgetmenot/source/{$vulnerabilityFile}";

// Is PHP function magic_quotee enabled?
$WarningHtml = '';
if( ini_get( 'magic_quotes_gpc' ) == true ) {
	$WarningHtml .= "<div class=\"warning\">The PHP function \"<em>Magic Quotes</em>\" is enabled.</div>";
}
// Is PHP function safe_mode enabled?
if( ini_get( 'safe_mode' ) == true ) {
	$WarningHtml .= "<div class=\"warning\">The PHP function \"<em>Safe mode</em>\" is enabled.</div>";
}

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Forget password again, huh, ḟḀṁ ṠqṳḀḊ?</h1>

	{$WarningHtml}
	<center>
	<div class=\"vulnerable_code_area\">";
	$page[ 'body' ] .= "
		<form action=\"#\" method=\"{$method}\">
			<p>
				Email:";
	$page[ 'body' ] .= "\n				<input type=\"text\" size=\"50\" name=\"email\">";

	$page[ 'body' ] .= "\n				<input type=\"submit\" name=\"Submit\" value=\"Search\">
			</p>\n";

	if( $vulnerabilityFile == 'impossible.php' )
		$page[ 'body' ] .= "			" . tokenField();

	$page[ 'body' ] .= "
		</form>";
$page[ 'body' ] .= "
		{$html}
	
	</div>
	</center>
	<br><br>
	<h3>Oracle hints that</h3>
	<ul>
		<li>Querying from database</li>
	</ul>
</div>\n";

dvwaHtmlEcho( $page );

?>

