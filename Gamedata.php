<script src="app.js"></script>
<?php

// The game must save results which is an <span id="result">   
//  SAVE THAT as well <div class="grid">
session_start(); 
include 'config.php';
 
// $doc = new DOMDocument();
 //$doc ->load('Data.xml');
 //echo $doc->saveXML();
 //$doc = new DOMDocument();
 //$doc->Load(':/C:/Users/samue/Pin/Indexaccount.php');
 //$xpath = new DOMXPath($doc);
 $gameobjects =  "<script>document.getElementByID(#result); </script>";
 $score[] = "<script>document.getElementByClass(.grid); </script>";
  $test = 1;
    echo " score ". $gameobjects . $score;
?>