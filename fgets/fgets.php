<?php
    $myFile=fopen("webdictionary.txt","r") or die("Unable to open file");
    echo fgets($myfile);
    fclose($myFile)
    ?>