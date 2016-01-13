<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("../includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Contact');

$templateLogic->startBody();
?>
<p><?php echo CONFIG_ROOT_URL; ?></p>


<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
