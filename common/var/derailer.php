<?php 
include_once "timekeeper.php"; 		// keeps time variables	
include_once "variables.php";

//set common menus here.

function fireSideMenu($zMemberLevel,$zMite){	
#echo "<br><br>level=" . $zMemberLevel . "<br>";
if($zMemberLevel=="zGuest" or $zMemberLevel=="zAdmin") {

		echo "<br><br>Guest:<br>";

		echo fireLink("projects","Home", $zMite) . "<br>";
		echo fireLink("about","About", $zMite) . "<br>";
		
		echo fireLink("artSearch-levelone","ArtSearch", $zMite) . "<br>";
		
		echo fireLink("projects","Projects", $zMite) . "<br>";
    	echo fireLink("video","Video", $zMite) . "<br>";
    	echo fireLink("contact","ContactMe", $zMite) . "<br>";
		echo fireLink("search","Search", $zMite) . "<br><br>";
}

if($zMemberLevel=="zAdmin") {
    	
    	echo "<br><br>Admin:<br>";
    			
    	echo fireLink("welcome","Welcome", $zMite) . "<br>";
		echo fireLink("muSic-001","Music", $zMite) . "<br>";
		echo fireLink("intro","Introduction", $zMite) . "<br>";
		echo fireLink("god","god", $zMite) . "<br>";
		echo fireLink("portal","portal", $zMite) . "<br>";
		echo fireLink("search","Search", $zMite) . "<br><br>";
 		

}




}



?>