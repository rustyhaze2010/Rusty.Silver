<?php 
//set common components start
include "timekeeper.php";                                    /// time tasks
// include "serverinfo.php";

//set common variables
$zSite = "RustyHaze.website";                                /// Site Title or name.
$zAuthor = "Jae";                                            /// Site Author or owner.
$zMotto = "Liv Long and Art Search.";                        /// Site Motto.
$zHome = "home";                                             /// Sets homepage.
$zCopyright = "Copyright Jae Lamphier. May 1, 2023";         /// Copyright info.
$zMite = "index.php";                                        /// Main page look back, so you know where home is.
$zStart = "artSearch-levelone";                              /// First page to load, or home.
$zMail= "key.9137@outlook.com";                              /// Main site e-mail address
$zManagerLevel="zGuest";                                     /// zGuest for guest mode or zAdmin to run in admin mode

//set common components finish                               /// adds functions to site.
include "derailer.php";
include "funtions-001.php";
include "funtions-002.php";
include "funtions-003.php";

if (!isset($_GET["page"])) {                                 /// page arguements
    $_GET["page"] = $zStart;
    }
    
if (!isset($_GET["wave"])) {                                 /// wave arguements
    $_GET["wave"] = "";
    }
   
?>
