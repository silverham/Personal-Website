<?php
// include php files here 
require_once("includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Portfolio');
$templateLogic->startBody();
?>
<h3>Java Assignments</h3>
<p>I have re-built my university Java Assignments for the web so I can maintain my skills in this after not using this programming language in the last year of my degree.</p>
<p><a class="btn btn-primary" href="<?php echo CONFIG_ROOT_URL . "portfolio/java-assignments/"; ?>">Read More</a></p>
<p>This page is under development &#8211; sorry about this, only old links below.</p>
<p>The <a title="Josh's Blog" href="http://joshuagraham.id.au/blog-and-some-thoughts/">blog</a> might a good place to check out though.</p>
<p>&#8230;</p>
<p>I plan on hosting most projects on Github. At the moment, only my Java subjects assignments are there.<br />
<a title="Joshua's Github" href="https://github.com/silverham" target="_blank">https://github.com/silverham</a></p>
<p>Summer 2011<br />
A Network Manager &#8211; Sonar connector<br />
This was first attempt at solving a real world issue, it&#8217;s not that good but it got the job half done.<br />
Was made when I was in High school with my little time, using some skills from my HSC software development subject.<br />
see more details: <a title="A really old project" href="https://sonarconnector.codeplex.com" target="_blank">https://sonarconnector.codeplex.com</a></p>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
