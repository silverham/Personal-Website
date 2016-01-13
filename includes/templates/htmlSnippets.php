<?php

/**
 * Store snippets of HTml that used repeatably
 *
 * @author jgcom
 */
class htmlSnippets {
    //put your code here
    public static function jAppletMessage(){ 
        ob_start(); ?>
        <p>Your Web Browser doesn't support Java, or it is disabled/not installed.</p>
        <p>Note: Google Chrome & Mobile Web Browsers will not run Java.</p>
        <?php return ob_get_clean();
    }
}
