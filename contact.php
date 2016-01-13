<?php

/* 
 * The Loader for the index (root page)
 */

// include php files here 
require_once("includes/config.php");
// end of php file inclusion

$templateLogic = new templateLogic;
$templateLogic->setTitle('Contact');
$templateLogic->addCustomHeadersStart();
?>
<style type="text/css">
    td {
        padding: 0.5em;
    }
    label {
        padding-right: 1em;
    }
    table {
        border-width: 0;
        border-spacing: 0;
    }
    .center {
        text-align: center;
    }
</style>
<?php $templateLogic->addCustomHeadersEnd();
$templateLogic->startBody();
?>
<p>Feel free to drop by.</p>
<div class="alert alert-danger" role="alert">Sorry, due a technical problem, this form currently does not work.</div>
<div class="alert alert-info" role="alert">However, You can email me at <u><a href="mailto:myfeedback@joshuagraham.id.au">this address</a></u>, whilst I work with my web host to fix the issue. Thanks!</div>
<form action="feedback.php" method="post">
<table>
<tbody>
<tr>
<td><label for="tswname">Name</label>:</td>
<td><input id="tswname" name="fullname" size="25" type="text" /></td>
</tr>
<tr>
<td><label for="tswemail">Email address</label>:</td>
<td><input id="tswemail" name="email" size="25" type="text" /></td>
</tr>
<tr>
<td colspan="2"><label for="tswcomments">Comments</label><textarea id="tswcomments" style="margin: 2px; width: 581px; height: 274px;" cols="45" name="comments" rows="15"></textarea></td>
</tr>
<tr>
<td colspan="2" class="center"><input class="btn btn-primary" type="submit" value="Send Feedback" />
    <p>&nbsp;</p>
    <p>Form by <a href="http://www.thesitewizard.com/">thesitewizard.com</a></p>
</td>
</tr>
</tbody>
</table>
</form>

<?php
$templateLogic->endBody();

//html
echo $templateLogic->render();
