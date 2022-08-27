<?php 

include_once "timekeeper.php"; 		// keeps time variables	
include_once "variables.php";


//set common funtions here.

function greetFrom($iowa) {
	
    $ztick=date('A');	
        
    if($ztick=="AM") 	{ 
                echo "Good morning in the ". $iowa . "!";				
            }
            else {
                echo "Good afternoon in the " . $iowa . "!";			
            }
    }


?>