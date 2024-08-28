<?php 
///include "common/var/variables.php";  		// Main File
include "common/var/page_unsecure.php";  	// Security Level File
/// All Rights Reserved. Copyright Jeremy Lamphier, 2015 - 2024.

?>
<div id="sidebar">
<?php fireSideMenu($zManagerLevel,$zMite); ?>



</div>

<div id="content">

<table width="100%" height="60px" >

<tr>
<td width="50%" height="30px">Posted by:<?php echo fireLink("about-me",$zAuthor, $zMite); ?>
</td>
<td width="50%" height="30px" align="right"><?php echo fireLink("about-me",$zMotto, $zMite); ?></td>
</tr>
<tr>
<td width="50%" height="30px"><?php echo fireLink("welcome", "welcome", $zMite); ?> >> <?php echo fireLink($zPage,$zPage, $zMite); ?> </td>
<td width="50%" height="30px" align="right"><?php echo fireLink("contact","Contact Me", $zMite); ?> </td>
</tr>
<tr>
<td width="50%" height="30px" colspan="2" align="left"><h1>Art Search...</h1></td>
</tr>
</table>  

<div id="forward">





    
     <center>
         

	     
    
    <div id="zlocation">  
    <p>Legend:
    <hr>
  	 <br>*** = <a href="https://duckduckgo.com/" target="_parent">DuckDuckGo.com/</a>
	 <br>** = <a href="https://www.wikipedia.org/" target="_parent">Wikipedia.org</a>
    <br>* = <a href="https://archive.org/" target="_parent">Archive.org</a>
    </div>
    <hr>
    
    
   
   
   
   
   
   
   
 
    <?php echo fireImageSEARCH( 'Cedar Falls IA', 'cedar-falls'); ?> 
    <?php echo fireImageSEARCH( 'Cedar Rapids IA', 'cedar-rapids'); ?> 
    <?php echo fireImageSEARCH( 'Waterloo IA', 'waterloo'); ?> 
    <?php echo fireImageSEARCH( 'Des Moines IA', 'des-moines'); ?> 
   
   
    

   <hr>
    
     
    <div id="zlocation">  
    <p>Legend:
    <hr>
  	<br>*** = <a href="https://duckduckgo.com/" target="_parent">DuckDuckGo.com/</a>
	<br>** = <a href="https://www.wikipedia.org/" target="_parent">Wikipedia.org</a>
    <br>* = <a href="https://archive.org/" target="_parent">Archive.org</a>
    
    </div>
      
	 

    </center>














<br><br><br><br><br>


</div>

<table width="100%" height="60px" >

<tr>
<td width="50%" height="30px">Posted by:<?php echo fireLink("about-me",$zAuthor, $zMite); ?>
</td>
<td width="50%" height="30px" align="right"><?php echo fireLink("about-me",$zMotto, $zMite); ?></td>
</tr>
<tr>
<td width="50%" height="30px"><?php echo fireLink("welcome", "welcome", $zMite); ?> >> <?php echo fireLink($zPage,$zPage, $zMite); ?> </td>
<td width="50%" height="30px" align="right"><?php echo fireLink("contact","Contact Me", $zMite); ?> </td>
</tr>

</table> 


</div>
