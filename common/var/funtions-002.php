<?php 

include_once "timekeeper.php"; 		// keeps time variables	
include_once "variables.php";


function fireImageSEARCH($movname, $title){
    $dognap=("+art+history+slides+period");
    
    echo "<div id='zlocation'><br><H7><i>" . $title . "</i></H7>";
    
    echo "<a href='https://duckduckgo.com/?t=ffab&q=" . $movname . $dognap . "&atb=v300-1&iax=images&ia=images' target='_parent'><br>Images***</a>";
    echo "<a href='https://duckduckgo.com/?t=ffab&q=" . $movname . $dognap . "&atb=v300-1&iax=videos&ia=videos' target='_parent'><br>Videos***</a>";
    echo "<a href='https://duckduckgo.com/?t=ffab&q=" . $movname . $dognap . "' target='_parent'><br>Searchs***</a>";
    echo "<a href='https://en.wikipedia.org/w/index.php?search=" . $movname . $dognap . "' target='_parent'><br>Wikis**</a>";
    echo "<a href='https://archive.org/details/image?tab=collection&query=" . $movname . $dognap . "' target='_parent'><br> Articles*</a>";
    
	echo "<br><a href='index.php?page=artSearch-levelone' target='_parent'>back</a>";

#  " . $movname . $dognap . "
#	<br>*** = DuckDuckGo.com
#	<br>** = Wikipedia.org
#  <br>* = Archive.org  
#	https://archive.org/details/image?tab=collection&query=paleolithic+art+history+slides

	echo "</div>";
}
?>



