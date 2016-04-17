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
        <param name="codebase" value="<?php echo CONFIG_ROOT_URL . "data/applets/java1" ?>" />
        <param name="code" value="Assign1.Java1Assign1Task1CardLayoutApplet" />
        <?php echo htmlSnippets::jAppletMessage(); ?>
    </object>
<p><a class="btn btn-info" href="https://github.com/silverham/ITC206-Java-1/blob/master/src/Assign1/Java1Assign1Task1CardLayoutApplet.java" target="_blank">Source Code</a></p>
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
            <param name="codebase" value="<?php echo CONFIG_ROOT_URL . "data/applets/java1" ?>" />
            <param name="code" value="Assign1.Java1Assign1Task2ZooEntryApplet" />
            <?php echo htmlSnippets::jAppletMessage(); ?>
        </object>
<p><a class="btn btn-info" href="https://github.com/silverham/ITC206-Java-1/blob/master/src/Assign1/Java1Assign1Task2ZooEntryApplet.java" target="_blank">Source Code</a></p>
<h3>Assignment 2 - Task 1: Processing Marks</h3>
<div class="panel panel-default">
    <div class="panel-heading">
        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapseExample">
            Assignment Instructions
        </a>
    </div>
    <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
        <div class="panel-body"><p>For this task you will create a class containing a number of static methods for processing an array of
            marks, which are scores in a test. Each mark is an integer in the range 0 to 100 inclusive. On the
            Interact site for this subject, you will be provided with a class <em>Marks</em>, which has a method <em>getMarks</em>
            that returns an array of marks for you to use in testing.</p>
            <p>The class <em>ProcessMarks</em> that you create will have the methods specified below. Most will accept an 
            array of marks as an argument; one will accept an array of characters. The return type should be
            appropriate for the returned value:</p>
            <ul>
                <li>The <em>max</em>, <em>min</em> and <em>range</em> methods will return the maximum mark, the minimum mark and the
                    difference between the maximum and minimum marks respectively.</li>
                <li>The <em>mean</em> methods will return the mean of the set of marks. Your textbook contains a
                description of how these can be calculated.</li>
                <li>The <em>median</em> method will return the median value of the set of marks. The median value is
                the middle one when the values are placed in order. To obtain an ordered version of the
                marks you may use an appropriate <em>sort</em> method of the Java API’s <em>Arrays</em> class. Be careful not
                to destroy the original array of marks. If there is an even number of marks, the middle value
                is taken as the average of the two values that are nearest to the middle.</li>
                <li>The <em>mode</em> method will return the mode of the set of marks, which is the most commonly
                occurring mark. To find the mode, use an ordered version of the set of marks, as used for
                finding the median. If there is more than one value that is most common, any one of the most
                common values will do for the mode.</li>
                <li>The <em>grades</em> method will return an array of characters, which are the grades corresponding to
                the integer marks in the array of marks. The grades are to be assigned using the following
                lower boundaries for the corresponding marks: for grade A, the lower boundary is 85; for
                grade B, it is 75; for grade C, it is 65; for grade D, it is 50; and E is the grade for all other
                marks. A best solution for this method would not have the values for the lower boundaries
                hardcoded but would use an array for these values, which would allow the grade boundaries
                to be altered.</li>
                <li>The <em>gradeDistn</em> method will accept an array of characters, which are the grades assigned for
                the array of marks, such as returned by the  method. The  method will grades gradeDistn
                return an array of integer values containing the distribution of grades, which is the number of
                occurrences of each grade in the assigned grades. The characters used for grades are fixed.
                The returned array should provide the distribution in order from grade A to grade E.</li>
            </ul>
            <p>The following points should be taken into account in the design of your program:</p>
            <ul>
                <li>None of your code should change the contents of the original array of marks.</li>
                <li>You should not make any assumption that client code, that would use your methods, should
                call them in any particular. That is, you should not assume that a client that calls the range
                method will have previously called the max and min methods.</li>
            </ul>
            <p>Test your <em>ProcessMarks</em> class, either by providing test code in a main method within that class or in a
                separate class. The test code will use an array of marks obtained from the <em>getMarks</em> method of the
                class provided on the Interact site. Test each one of the methods described above, displaying Marks
                the results appropriately. The grades should be displayed 30 per line with a space separator between
                grades. The grade distribution should be displayed in the form:</p>
            <p>A: 10<br />
            B: 30<br />
            C: 105<br />
            D: 125<br />
            E: 35</p>
        </div>
    </div>
</div>
<h4>Applet</h4>
        <object type="application/x-java-applet" height="400" width="650">
            <param name="codebase" value="<?php echo CONFIG_ROOT_URL . "data/applets/java1" ?>" />
            <param name="code" value="Assign2.Java1Assign2Task1ProcessMarksApplet" />
            <?php echo htmlSnippets::jAppletMessage(); ?>
        </object>
<p><a class="btn btn-info" href="https://github.com/silverham/ITC206-Java-1/blob/master/src/Assign2/Java1Assign2Task1ProcessMarksApplet.java" target="_blank">Source Code</a></p>
<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
