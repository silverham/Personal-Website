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
    04 38 211 522</p>
<h2>Summary</h2>

<ul>
<li>Knowledge of Software Development including Java, PHP, Python etc to build Solutions</li>
<li>Completed Cisco’s CCNA subjects at University with high marks</li>
<li>Installation and setup of computers and devices including phones</li>
<li>Team Player & Learns quickly</li>
<li>Nearly Distinction level Grade Average in Bachelor’s degree</li>
</ul>

<h2>Employment History</h2>

<p><strong>Technical Developer &nbsp; April-2016 - Current</strong><br />
    Adelphi Digital Consulting Group, Canberra</p>
<p>The Technical Developer performs a variety of roles including developing the backend systems in the many websites created and maintained by Adelphi.</p>
<ul>
    <li>Implements solutions in C#, Java, PHP and also touches on HTML/JS</li>
    <li>Liaises with Front-end Developers, Project Managers & Clients to find the best user experience</li>
    <li>Installation and setup of computers and devices including phones</li>
</ul>

<p><strong>Project Assistant (Web Developer) &nbsp; (2014 - 2016)</strong><br />
    Division of Human Resources, Charles Sturt University, Wagga Wagga</p>
<p>The Project Assistant in the Division of Human Resources provides the technical 
    means to help the division by developing its webpages through collaboration with staff.</p>
<ul>
    <li>Developed many webpages through communication with staff and handled requests</li>
    <li>Regularly liaised and gathered business requirements with stakeholders </li>
    <li>Used many HTML, CSS, JavaScript and excel VBA code techniques in various projects</li>
</ul>

<p><strong>Technical Installer (2012 &#8211; 2013) </strong><br />
Laurie Graham’s Communications</p>
<ul>
    <li>Demonstrated customer service through arranging meetings with businesses</li>
    <li>Install & Maintain Eftpos and ATM machines</li>
    <li>Authorise installations by calling Bank hotline on a regular basis</li>
</ul>

<p><strong>Computer Installer (2013)</strong><br />
    Division of Information Technology Charles Sturt University, Wagga Wagga</p>
<ul>
    <li>Image and setup computers using a networked solution</li>
    <li>Communicate with Staff to organise appointments</li>
    <li>Backup and transfer & erase data</li>
</ul>


<h2>Work experience</h2>

<p><strong>IT Scholarship &nbsp; [12 weeks over 3 year period] (2012 – 2014)</strong><br />
    Riverina Water County Council, Wagga Wagga</p>
<ul>
    <li>Collaboratively create solutions with staff</li>
    <li>Erase Data, image & repair computers</li>
    <li>Complete tasks provided successfully.</li>
</ul>

<h2>Education</h2>
<p><strong>Bachelor of Information Technology, Software Development &nbsp; (2012 - 2015)</strong><br />
    Charles Sturt University</p>
<ul>
    <li>At least distinction in all technical subjects – Nearly Distinction grade average</li>
    <li>Enjoyed the, Web, Networking and Administration subjects</li>
    <li>Completed a major project with stakeholders in mind</li>
</ul>
<p><em>Adaptive Quiz Manager</em> – project - a web based program written in PHP with MySQL, 
    used to create quizzes with a different paths depending on user input, so creators can 
    tailor learning content to the weaknesses of students. I lead the development with two 
    fellow students in a team.</p>
    
<h2>Voluntary work</h2>

<p><strong>Wagga’s Hackathon volunteer &nbsp; (28th November 2015)</strong></p>
<ul>
    <li>Taught small kids how to make a mini game using E-toys</li>
    <li>Communicated it how worked and diagnosed issues</li>
</ul>
<p><strong>Multimedia, Wagga Wagga Baptist Church &nbsp; (2008 - 2016)</strong></p>
<ul>
    <li>Co-ordinate songs and provide lyrics on the projector</li>
    <li>Communicate with various music teams to achieve common goals</li>
</ul>

<h2>Certificates & Achievements</h2>

<p><strong>Executive Dean List Award x2 &nbsp; (2013 & 2015)</strong></p>
<ul><li>(Outstanding Academic Performance)</li></ul>

<p><strong>Cisco Certified Network Associate &nbsp; (2013 - 2015)</strong></p>
<ul><li>(via University Subject knowledge)</li></ul>

<p><strong>Riverina Water County Council Scholarship &nbsp; (2012)</strong></p>
<ul><li>(Including 12 weeks of IT work experience)</li></ul>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
