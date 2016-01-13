<?php

/* 
 * The Loader for the resume page
 */

// include php files here 
require_once("includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Resume');
$templateLogic->startBody();
?>
<p>	Joshua Graham<br />
	URANQUINTY NSW 2652<br />
	04 38 211 522<br />
	(02) 69 229 800 </p>
<p>I’m studying for a software degree but I like delving into websites and getting physical with systems. </p>
<h2>Education</h2>
<p><strong>Charles Sturt University [2012 – current]</strong><br />
		-Bachelor of Information Technology, major in software development<br />
		-Expecting to finish in 2015 </p>
<p><strong>Secondary School [2006- 2011]</strong><br />
		-Wagga Wagga Christian College<br />
		-Started in Year 7 through to year 12 completing the HSC</p>
<h2>Employment History</h2>
<p><strong>Casual Project Assistant (2014)[April &#8211; current) </strong><br />
Charles Sturt University<br />
Create and maintain various websites within Human Resources<br />
&#8211;	Liaise with IT Division and other employees collaboratively on website projects<br />
&#8211;	Code with XHTML, CSS and work with JQuery scripts.</p>
<p><strong>Casual Technical Installer (2012 &#8211; 2013) </strong><br />
Laurie Graham’s Communications<br />
&#8211;	Organise appointments with Wagga and Surrounding businesses<br />
&#8211;	Install Eftpos and ATM machines<br />
&#8211;	Authorise installs by calling various Banks</p>
<p><strong>Casual Computer Installer (2013) [February – December]</strong><br />
Charles Sturt University<br />
&#8211;	Image and setup computers according to procedure<br />
&#8211;	Organise appointments to install computers<br />
&#8211;	Backup and transfer data whilst respecting privacy<br />
&#8211;	Drive company cars around campus<br />
&#8211;	Work with little supervision whilst strict rules are in place</p>
<p><strong>Fast Food Worker (2012) [February – March]</strong><br />
Original Flame Grill Chicken<br />
	-Package and serve an ordered meal<br />
	-Perform ILDE duties and clean on time intervals<br />
	-Remember orders and ask customer to repeat where necessary</p>
<p><strong>Computer repair generalist hobby [2008-present]</strong><br />
-Performed several upgrades of various neighbours’ computers<br />
(Operating Systems, software &#038; hardware).<br />
&#8211; Removing Computer malware and performing maintenance</p>
<h2>Work experience</h2>
<p><strong>Administrative assistant (late 2009 for a week)</strong><br />
Wagga Wagga City Council<br />
	-Worked with Printing, HR &#038; Environmental Sectors.<br />
-Transporting paper, refill printers<br />
-Filing paperwork, entering data<br />
-Dressing appropriately and acquiring necessary work ethics<br />
	-Follow instructions effectively once given instructions</p>
<p><strong>Testing and general duties (Early 2009 for a week)</strong><br />
Wollundary Computer Systems<br />
	-Test and report the faulty condition of various computer parts<br />
	-Developing a work habit to work until the job is done or time has elapsed<br />
	-Work effectively with minimal encouragement and surrounding people.</p>
<h2>Voluntary work</h2>
<p><strong>Sunday School Assistant [Children’s ministry] (2008-current)</strong><br />
	-Worked with many kids at a time<br />
	-Worked personally with autistic kids</p>
<p><strong>Boys Brigade Assistant [Tuesday nights when available] (Mid 2010 &#8211; 2013)</strong><br />
	-Encourage and Respect kids’ work<br />
	-Respected older leaders’ decisions</p>
<h2>Qualifications/Certificates</h2>
<p>-2011 Student Leader at Wagga Wagga Christian College<br />
-Safe Environments – For Children and Young People Course (Boys Brigade) </p>
<h2>Sports played</h2>
<p>-Soccer 		-Wagga Wagga club (2005-2009)<br />
-Hockey	-School Competition (2009 &#8211; 2011)</p>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
