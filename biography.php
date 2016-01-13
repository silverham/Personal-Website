<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Biography');
$templateLogic->startBody();
?>
<p>Joshua Graham is a recent graduate from Charles Sturt University, Wagga, majoring in software development, but also touched on networking, server administration and web subjects during this time as well. All of his technical subjects resulted in at least distinction grades with few high distinctions and a Dean&#8217;s List Award for academic achievement.</p>
<p>Outside the academic arena, he has worked in jobs ranging from troubleshooting computer issues to installing them and now works in web development.</p>
<p>His passion for Software started at Wagga Christian College, where he learned to excel quite well in a software subject for the HSC and solved a real world problem with setting static IP addresses for the new WiFi network at High School, age 17.  Also likes reading news, blogs and has an interest in Vocaloid music.</p>
<p><i>Fun Fact: The banner image above, is a passing truck and was taken when learning photography at high school.</i></p>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
