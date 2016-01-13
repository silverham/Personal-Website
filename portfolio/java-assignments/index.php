<?php
// include php files here 
require_once("../../includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Java Assignments');
$templateLogic->setSubMenuType("java-assignments");
$templateLogic->startBody();
?>
<p>Java is the core language used during my Bachelor of Information Technology degree. To display my technical competencies of for I have done, I put here to everyone to see.</p>
<p>Also, I have re-built my university Java Assignments for the web so I can maintain my skills in this after not using this programming language in the last year of my degree. Check them out!</p>

<h3>Java 1 Subject - ITC-206</h3>
<p>The first exposure to the Java programming language. Completed during Session 1 2013.</p>
<p><a class="btn btn-primary" href="<?php echo CONFIG_ROOT_URL . "portfolio/java-assignments/java1/"; ?>">Read More</a></p>

<h3>Java 2 Subject - ITC-313 (Under Development)</h3>
<p>The second round at Java.  Completed during Session 2 2013.</p>
<p><a class="btn btn-primary" href="<?php echo CONFIG_ROOT_URL . "portfolio/java-assignments/java2/"; ?>">Read More</a></p>

<h3>Web Information Systems Subject - ITC-357 (Under Development)</h3>
<p>A mix of HTML, Java and MySQL, it teaches how dynamic websites work. In this I built a mini facebook. Completed during Session 2 2013.</p>
<p><a class="btn btn-primary" href="<?php echo CONFIG_ROOT_URL . "portfolio/java-assignments/java-web.php"; ?>">Read More</a></p>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
