<?php
// include php files here 
require_once("includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Portfolio');
$templateLogic->startBody();
?>
<h3>Java University Assignments (2013 - 2014)</h3>
<p>I have re-built my university Java Assignments for the web so I can maintain 
    and showcase university my skills.</p>
<p><a class="btn btn-primary" href="<?php echo CONFIG_ROOT_URL . "portfolio/java-assignments/"; ?>">Read More</a></p>
<p>This page is under development &#8211; sorry about this, only old links below.</p>

<h3>Visual Basic Side Project High School - (2011)</h3>
<p>A Network Manager &#8211; Sonar connector<br />
This was first attempt at solving a real world issue, it&#8217;s not that good 
but it got the job half done. Was made when I was in High school with my little time, using some skills from 
my HSC software development subject.</p>
<p><a class="btn btn-primary" title="A really old project" href="https://sonarconnector.codeplex.com" 
      target="_blank">Read More</a></p>
</p>

<h3>Don't forget to check out my blog</h3>
<p><a class="btn btn-primary" title="Josh's Blog" href="http://joshuagraham.id.au/blog-and-some-thoughts/">Read More</a></p>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
