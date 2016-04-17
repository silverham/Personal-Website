<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("../../../includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Java 2 Assignments');
$templateLogic->setSubMenuType("java-assignments", "java-assignments");
$templateLogic->addCustomHeadersStart();
?>
<style type = "text/css">
    .panel-body li:not(:last-child) {
        margin-bottom: 0.5em;
    }
    
</style>
<?php
$templateLogic->addCustomHeadersEnd();

$templateLogic->startBody();
?>
    <h3>Assignment 1 - Task 1 - Plot some POIs on a graph/map and be able to save it to an image</h3>
    <div class="panel panel-default">
        <div class="panel-heading">
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse1" aria-expanded="false" aria-controls="collapseExample">
                Assignment Instructions
            </a>
        </div>
        <div id="collapse1" class="panel-collapse collapse" aria-expanded="false">
            <div class="panel-body">
                <ul>
                    <li><strong>Part 1:</strong>Several types of point of interests (POI) such as - (1) Petrol station, (2) Taxi Stand,
                    (3) ATM, (4) Hospital and (5) Shopping centre are located in a city. Their locations
                    (longitude and latitude) are provided in a text file (a file will be provided in the resource
                    section of the subject site, or you can create your own dummy text file according to the
                    format you prefer). You must work with at least one type/kind of POI and at least 20 samples
                    (e.g. your text file should contain the location of 20 petrol stations in a city). You have to
                    write a JAVA program that would get the locations of all the POIs from the file and plot
                    them on a map (graph). <u>Optional</u> : Save the map/graph in a file if the user wants to.</li>
                    <li><strong>Part 2:</strong> incorporate a mechanism to zoom in/out the map either by 
                        having buttons or with the help of the scroll button.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="alert alert-info panel-heading">
        <p>In order for the "Save Picture" button to work, a policy permission file must be edited on you computer.<br />
            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapseExample">
            <strong>See below instructions how (windows)</strong>
        </a></p>
    <div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
        <div class="panel-body">
            <ul>
                <li>1. Open a text editor program such as notepad in Administrator mode</li>
                <li>2. Go to: <pre>C:\Program Files (x86)\Java\&lt;highest verion&gt;\lib\security\java.policy</pre></li>
                <li>3. Add the following lines anywhere outside the block of lines
                    
<pre>// Run java on Joshua Graham's site with more permissions
grant codeBase "https://<?php echo $_SERVER['HTTP_HOST']; ?>/-" {
        permission java.security.AllPermission;
};</pre>
                </li>
                <li>4. Save the file.</li>
                <li>5. Close & re-open your web broswer to this webpage</li>
            </ul>
        </div>
    </div>
</div>
<h4>Applet</h4> 
    <object type="application/x-java-applet" width="800" height="600">
        <param name="codebase" value="<?php echo CONFIG_ROOT_URL . "data/applets/java2" ?>" />
        <param name="code" value="Assign1.Java2Assign1Task1Applet" />
        <?php echo htmlSnippets::jAppletMessage(); ?>
    </object>
</div>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
