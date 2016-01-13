<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Testing Area');
$templateLogic->addCustomHeadersStart(); ?>
<style type="text/css">
    iframe {
        width: 100%;
        height: 20em;
    }
</style>
<?php
$templateLogic->addCustomHeadersEnd();
$templateLogic->startBody();
?>
<p>I working some pretty cool things like my own PHP responsive site, hand coded.</p>
<p>Other things might appear there too. The site is should load below. To open in a new window, <a href="//test.joshuagraham.id.au" target="_blank" title="Test Site">Click Here</a>.</p>
<p><iframe src="//test.joshuagraham.id.au/"></p>
<p>Your browser does not support iframes.</p>
<p></iframe></p>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
