<?php

function includeFiles($excludeFiles, $val1='', $val2='', $val3='', $val4=''){
        // Returns array of files and gerenarate menu
        $files = array_slice(scandir('./views'), 2);
        $files = array_diff($files, $excludeFiles);

        foreach($files as $file){
            $fileName = substr($file, 0, -4);
            echo $val1 . $val2 . $file . $val3 . $fileName . $val4;
        }
}