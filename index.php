<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('About Josh');
$templateLogic->startBody();
?>
<p>Hi, I’m Joshua Graham.</p>
<p>I’ve recently graduated with a Bachelor of&nbsp;Information Technology, major, Software Development at Charles Sturt University (CSU), Wagga Wagga and my grade point average is near distinction level.</p>
<p>I’ve looking to crack into the Software field but until then, I am casually doing Web Development for the Human Resources Division at CSU.</p>
<p>Come check out my website, see whats around.</p>
<p>You can connect with me on the <a title="contact page" href="https://joshuagraham.id.au/contact.php">contact page</a>.</p>
<p>Thank you for visiting!<br />
Joshua.</p>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
