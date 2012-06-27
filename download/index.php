<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	$pageTitle 		= "m2eclipse - Downloads";

	$html = <<<EOHTML
<div id="midcolumn">
	<h3>Installing m2eclipse</h3>
	<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
	<p>m2e is tested against Eclipse 3.7 (Indigo) and 3.8/4.2 (Juno).</p>
	<p>
	See <a href="http://wiki.eclipse.org/M2E_updatesite_and_gittags">http://wiki.eclipse.org/M2E_updatesite_and_gittags</a> for detailed information about
	available builds and m2e build repository layout.
	</p>
	<p>
	Please note that links below point at Eclipse <b>p2 repositories</b>; 
	you must access them from Eclipse (<a href="http://help.eclipse.org/topic//org.eclipse.platform.doc.user/tasks/tasks-127.htm">see how</a>). 
	</p>
	<h3>Update Sites</h3>

	<h4>Latest m2e release (recommended)</h4>
	http://download.eclipse.org/technology/m2e/releases

	<h4>m2e milestone builds towards version 1.2</h4>
	http://download.eclipse.org/technology/m2e/milestones/1.2
	
	<h4>Latest m2e 1.2 SNAPSHOT build (not tested, not hosted at eclipse.org)</h4>
	https://repository.sonatype.org/content/repositories/forge-sites/m2e/1.2.0/N/LATEST/
</div>
EOHTML;
	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
