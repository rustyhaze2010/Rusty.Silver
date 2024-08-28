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
<td width="50%" height="30px" colspan="2" align="left"><h1><?php echo fireLink("about-me",$zAuthor, $zMite); ?>'s Blog...</h1></td>
</tr>
</table>  

<div id="forward">





    














<br><br><br><br><br>


</div>

<table width="100%" height="60px" >

<tr>
<td width="50%" height="30px">Posted by:<?php echo fireLink("about-me",$zAuthor, $zMite); ?>
</td>
<td width="50%" height="30px" align="right"><?php echo fireLink("about-me",$zMotto, $zMite); ?></td>
</tr>
<tr>
<td width="50%" height="30px"><?php echo fireLink("welcome", "welcome", $zMite); ?> >> <?php echo fireLink($page,$page, $zMite); ?> </td>
<td width="50%" height="30px" align="right"><?php echo fireLink("contact","Contact Me", $zMite); ?> </td>
</tr>

</table> 


</div>
