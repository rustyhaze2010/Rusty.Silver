<?php 
//set common components start
include "timekeeper.php";



//set common variables
$zSite = "RustyHaze.net";
$zAuthor = "Jerry";
$zMotto = "Liv long and hard drive...";
$zHome = "home";
$zCopyright = "All rights reserved. Jerry August of 2022";

$zStart = "welcome";





//set common components finish
include "derailer.php";
include "funtions-001.php";




if (!isset($_GET["page"])) {                 // page
    $_GET["page"] = "$zStart";
    }


    
?>