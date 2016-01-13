<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Thank you');
$templateLogic->startBody();
?>
<p><strong>Thank you</strong></p>

<p>Your message has been sent. Thank you for your message.</p>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
