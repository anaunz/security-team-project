<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = '---' . $page[ 'title_separator' ].$page[ 'title' ].$page[ 'title_separator' ] . '---' ;
$page[ 'page_id' ] = 'home';

$page[ 'body' ] .= "
<div class=\"body_padded\">
	<center>
	<h1>Where is Flag ?</h1>
	<p>Flag: Find me , please ~~~</p>
	<img src='dvwa/images/teletubbies.jpeg' height='380' width='650'>
	<br>
	<p><img src='dvwa/images/laa-laa.png' height='30' width='30'> Laa-Laa: Merry
	<img src='dvwa/images/tinky-winky.png' height='30' width='30'> Tinky Winky: Christmas &
	<img src='dvwa/images/dipsy.png' height='30' width='30'> Dipsy: Happy
	<img src='dvwa/images/po.png' height='30' width='30'> Po: New Year</p>
	<p id='hidden'>Seek for Oracle for some advices</p>
	</center>

</div>";

dvwaHtmlEcho( $page );

?>

<style>
#hidden {
color: #fffff8;
}
</style>
