<?php


$file = $_GET['file'] .".pdf" ;

header("content-disposition: attachement; filename=" . urlencode($file));

$fb = fopen($file, "r");

while(!feof($fb)){
    echo fread($fb, 1024);
    flush();
}


fclose($fb);
?>