<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = '---' . $page[ 'title_separator' ].$page[ 'title' ].$page[ 'title_separator' ] . '---' ;
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Where is the flag ?</h1>
	<p>Flag: Find me , please ~~~</p>

	<hr />
	<br />

</div>";

dvwaHtmlEcho( $page );

?>
