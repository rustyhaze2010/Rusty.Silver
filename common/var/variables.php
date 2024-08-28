<?php 
//set common components start
include "timekeeper.php";
// include "serverinfo.php";

//set common variables
$zSite = "RustyHaze.website";
$zAuthor = "Jae";
$zMotto = "Liv Long and Art Search.";
$zHome = "home";
$zCopyright = "Copyright Jae Lamphier. May 1, 2023";
$zMite = "index.php";
$zStart = "projects";
$zMail= "key.9137@outlook.com";
$zManagerLevel="zAdmin";

//set common components finish
include "derailer.php";
include "funtions-001.php";
include "funtions-002.php";
include "funtions-003.php";

if (!isset($_GET["page"])) {                 // page
    $_GET["page"] = $zStart;
    }
    
if (!isset($_GET["wave"])) {                 // wave
    $_GET["wave"] = "";
    }
   
?>