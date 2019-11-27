<?php

define( 'DVWA_WEB_PAGE_TO_ROOT', '../../' );
require_once DVWA_WEB_PAGE_TO_ROOT . 'dvwa/includes/dvwaPage.inc.php';

dvwaPageStartup( array( 'authenticated', 'phpids' ) );

$page = dvwaPageNewGrab();
$page[ 'title' ]   = 'Teletubbies Upload' . $page[ 'title_separator' ].$page[ 'title' ];
$page[ 'page_id' ] = 'upload';
$page[ 'help_button' ]   = 'upload';
$page[ 'source_button' ] = 'upload';

dvwaDatabaseConnect();
$vulnerabilityFile = 'medium.php';

require_once DVWA_WEB_PAGE_TO_ROOT . "features/upload/source/{$vulnerabilityFile}";

// Check if folder is writeable
$page[ 'body' ] .= "
<div class=\"body_padded\">
	<h1>Upload your Teletubbies photo</h1>

	{$WarningHtml}

	<div class=\"vulnerable_code_area\">
		<form enctype=\"multipart/form-data\" action=\"#\" method=\"POST\">
			<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"100000\" />
			<h3>Choose a Teletubby to upload</h3>
			<input type=\"hidden\" name=\"probablyWhatYouAreLookingFor\" size=\"30\" value=\"cannot_upload/\">
			<input name=\"uploaded\" type=\"file\" /><br /><br />
			Password: <input type=\"password\" name=\"pwd\" size=\"10\"> &nbsp
			<input type=\"submit\" name=\"Upload\" value=\"Upload\" />\n";

$page[ 'body' ] .= "
		</form>
		{$html}
	</div>
</div>";

dvwaHtmlEcho( $page );

?>
