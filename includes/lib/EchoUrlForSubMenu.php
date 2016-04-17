<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 * Returns the beginning of a URL up to a specified string
 */
function echoUrlForSubMenu ($subIndex) {
    //get current url
    $curUrl = $_SERVER["REQUEST_URI"];
    //find where the end of the sub menu url is
    $endPosition = strpos($curUrl, $subIndex)+ strlen($subIndex);
    //remove the last part of the url + append the "/"
    $subUrl = substr($curUrl, 0, $endPosition) . "/";
    //return it
    return $subUrl;
}

