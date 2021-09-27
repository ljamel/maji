<?php

$url = basename($_SERVER['REQUEST_URI']);
preg_match('/.php/i', $url, $match, PREG_OFFSET_CAPTURE);

// check if called page
if(sizeof($match) < 1){
    $page = 'index.php';
}else{
        $page = $url;
}

include 'layout.php';



