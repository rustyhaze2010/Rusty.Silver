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
<td width="50%" height="30px" colspan="2" align="left"><h1><?php echo fireLink("about-me",$zAuthor, $zMite); ?>'s About ME...</h1></td>
</tr>
</table>  

<div id="forward">



 <?php ///headPic($zMite); ?> 
<center>     
<table width="700px" height="900px" class="formWidthset" id="pictureframe">
<tr>
<td width="20%" height="20px" colspan="1" align="center" bgcolor="#ce0101">First Name:<br>Jae</td>
<td width="20%" height="20px" colspan="1" align="center" bgcolor="#ce0101">Last Name:<br>***********</td>
<td width="20%" height="20px" colspan="1" align="center" bgcolor="#ce0101">Username:<br>Jae</td>
<td width="20%" height="20px" colspan="1" align="center" bgcolor="#ce0101">Last Sign-In:<br>9/2011</td>
<td width="20%" height="20px" colspan="1" align="center" bgcolor="#ce0101">Join Date:<br>8/2010</td>
</tr>
<tr>
<td width="100%" height="400px" colspan="5" bgcolor="sliver">  </td>
</tr>


<tr>
<td width="100%" height="400px" colspan="5" bgcolor="sliver">    </td>
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
<td width="50%" height="30px" align="right"><?php echo fireLink("contact","Contact Me", $zMite); ?> </td>
</tr>

</table> 


</div>
