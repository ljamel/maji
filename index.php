<?php

if(strlen(basename($_SERVER['REQUEST_URI'])) > 4){
    $page = basename($_SERVER['REQUEST_URI']);
}else{
    $page = 'index.php';
}

include 'layout.php';



