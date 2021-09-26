<?php

if(strlen(basename($_SERVER['REQUEST_URI'])) > 6){
    $page = basename($_SERVER['REQUEST_URI']);
}else{
    $page = 'index.php';
}

include 'layout.php';



