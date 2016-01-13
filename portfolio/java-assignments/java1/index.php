<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("../../../includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Java 1 Assignments');
$templateLogic->setSubMenuType("java-assignments", "java-assignments");
$templateLogic->startBody();
?>
<h3>Assignment 1 - Task 1: Business Card Dialog Box</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapseExample">
            Assignment Instructions
        </a>
    </div>
    <div id="collapse1" class="panel-collapse collapse" aria-expanded="false">
        <div class="panel-body"><p>Write a Java program that displays an attractive layout of the information in a typical business card.
            Data items in a typical business card include a name, address, city, state, zip code, home phone
            number, and work phone number.</p>
        </div>
    </div>
</div>
<h4>Applet</h4> 
    <object type="application/x-java-applet" height="400" width="650">
        <param name="code" value="Java1Assign1Task1CardLayoutApplet" />
        <?php echo htmlSnippets::jAppletMessage(); ?>
    </object>
<h3>Assignment 1 - Task 2: Zoo Entry Calculator</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapseExample">
            Assignment Instructions
        </a>
    </div>
    <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
        <div class="panel-body"><p>Write a Java program to solve the problem presented below. As well as providing a working solution,
        your program should show good design features. You may assume that the user will always enter valid
        data; you do not have to perform data validation.</p>
        <p>The entry charges to a zoo are:
        Children 5 years old and younger: free
        Accompanied children from 6 to 15 years old: $2 each
        Unaccompanied children from 6 to 15 years old: $5 each
        Adults from 16 to 59 years old: $10 each
        Seniors from 60 years and older: $8 each</p>
        <p>An accompanied child is defined as one in a family group accompanied by an adult or a senior. An
        adult or senior can only count as accompanying one child from 6 to 15 years old. No limit is placed on
        the number of children 5 years old and younger, which is perhaps a failing on the part of the zoo
        authorities, but simplifies your problem. Ages are integers.</p>
        <p>Your program will calculate and display the entry charge for each family group and also display the
        total takings for a sequence of groups. In this process it will correctly determine the number of
        accompanied children and those not counted as accompanied in each family group. It will request the 
        user to enter the number of children (6 – 15 years old), the number of adults (16 – 59 years old) and
        the number of seniors (60+ years old) for each group, and it will display the entry charge for each
        group.</p>
        </div>
    </div>
</div>
<h4>Applet</h4>
        <object type="application/x-java-applet" height="400" width="650">
            <param name="code" value="Java1Assign1Task2ZooEntryApplet" />
            <?php echo htmlSnippets::jAppletMessage(); ?>
        </object>
<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
