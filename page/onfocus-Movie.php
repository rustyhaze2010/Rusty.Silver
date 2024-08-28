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
<td width="50%" height="30px" align="right"><?php echo fireLink("contact","Contact Me", $Mite); ?> </td>
</tr>
<tr>
<td width="50%" height="30px" colspan="2" align="left"><h1><?php echo fireLink("about-me",$zAuthor, $zMite); ?>'s OnFocus Movie...</h1></td>
</tr>
</table>  

<div id="forward">





    
     <center>
<table width="100%" height="700px" class="formWidthset">
<tr>
<td width="100%" height="700px"  >




    <center>
    <table width="100%" height="700px">
    <tr>    
    
    <td width="100%" height="425px" id="pictureframe" >
    <center>
    <?php  fireMovPlay($zMite, $zWave, $title, 'medium');?>
    </center>
    </td>
     
    </tr>
        
        
    <tr>    
    
    <td width="100%" height="600px" valign="top">

    <?php  fireTextJPEG($zWave, $zMite);?>
   
    </td>
     
    </tr>
     <tr>    
    
    <td width="100%" height="25px">

    <?php echo fireLink("video","Back", $zMite); ?>  
    
    </td>
     
    </tr>
    </table>
















































</div>
</td>


</tr>

</table> 
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
<td width="50%" height="30px" align="right"><?php echo fireLink("contact","Contact Me", $Mite); ?> </td>
</tr>

</table> 


</div>
