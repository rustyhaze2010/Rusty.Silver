<?php 

include_once "timekeeper.php"; 		// keeps time variables	
include_once "variables.php";


function fireLink($faddress,$ftext, $zMite){   
    echo "<a href='" . $zMite . "?page=" . $faddress . "'> " . $ftext . " </a>";
}


function fireExit($xaddress,$xtext,$zClass){   
   echo "<div class='icon-a'><a href='https://" . $xaddress . "' target='_parent'><img src='common/media/images/content/port-0.jpg' border='0' class='icon-b'>";
   echo "<b>" . $xtext . "</b></a>"; 
   echo "<div id='zaddress'><p>". $xaddress . "</a></div>";
   echo "</p></div>";   
}



function fireIcon($xaddress, $xtext, $picname, $zMite){   
  echo "<div class='icon-a'><a href='" . $zMite . "?page=" . $xaddress . "'><img src='common/media/icon/" . $picname . ".jpg' border='0' class='icon-b' alt='" . $xtext . "'>" . $xtext . "</a><br>"; 
  echo "</div></p>";   
}






function fireImageJPEGof($zMite, $picname, $title, $size){
    $dognap=($zMite . "?page=onfocus&wave=" . $picname);
    echo "<div class='icon-c'><a href='". $dognap ."'>
    <img src='common/media/images/content/" . $picname . ".jpg' 
    border='0' class='icon-ca' alt='" . $title . "' >" . $title . "</a></div>";
}


function fireImageJPEG($zMite, $picname, $title, $size){
    $dognap=($zMite . "?page=onfocus&wave=" . $picname);
    echo "<div class='icon-a'><a href='". $dognap ."'><img src='common/media/images/content/" . $picname . ".jpg' border='0' class='icon-b' ><br><br>" . $title . "</a></div>";
}

function fireImageJPEGjr($zMite, $picname, $title, $size){
    $dognap=($zMite . "?page=onfocus&wave=" . $picname);
    echo "<a href='". $dognap ."'><center><img src='common/media/images/content/" . $picname . ".jpg' border='0'    height='75' width='100%' ><br>" . $title . "</center></a><br>";
}


function fireDownJPEG($zWave, $zMite){
	
	$ztock=date('D_d-M-Y_H-i-s');
	
	echo "<a href='common/media/images/content/". $zWave . ".jpg'>View</a> |<a href='common/media/images/content/". $zWave . ".jpg' download='". $zWave . "-pix-". $ztock . ".jpg'> Download</a> | <a href='#ContextInaBottle'>Notes</a> | 
	";
	fireLink("projects","Back", $zMite);

};





function fireImageMOVIE($zMite, $movname, $title, $size){
    $dognap=("https://www.youtube.com/watch?v=" . $movname);
    echo "<a href='". $dognap ."'><iframe class='" . $size . "' src='https://www.youtube.com/embed/" . $movname . "'  frameborder='0' 
        allow='autoplay; encrypted-media' allowfullscreen></iframe><br>" . $title . "</a><br>";

//////https://www.youtube.com/watch?v=qthko5ppHcM

}




function fireMovPlay($zMite, $movname, $title, $size){
    // $dognap=($zMite . "?page=onfocus&wave=" . $movname);
    echo "<iframe class='" . $size . "' src='https://www.youtube.com/embed/" . $movname . "'  frameborder='0' allow='autoplay; 
        encrypted-media' allowfullscreen></iframe><br>" . $title . "<br> Enlarge Here. <br>";

}

function greetFrom($iowa) {
		echo "<br>Welcome to RustyHaze.com.<br>";
    	$ztick=date('A');	
        
    	if($ztick=="AM") 	{ 
                echo "Good morning from ". $iowa . "!";				
            }
            else {
                echo "Good afternoon from " . $iowa . "!";			
            }
    }

?>