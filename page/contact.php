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
<td width="50%" height="30px" colspan="2" align="left"><h1><?php echo fireLink("about",$zAuthor, $zMite); ?>'s <?php echo fireLink("contact","Contact", $zMite); ?> Page...</h1></td>
</tr>
</table>



<div id="forward">
<?php echo fireImageJPEGof( $zMite, 'welcome-1', 'I-380', 'medium'); ?>







<div id="ContextInaBottle"> 
<h3> Above are links to Friends .</h3>
   
  Here are some links that I enjoy, and you are welcome to visit.
  
  
  
  
  
  
  

<h3>Hello, My name is Jae.</h3>   
	 
	
	Always working to improve myself and my art, this portfolio is a reflection of my the images we use to communicate and 
 discover new ideas in our world. It is the journey as much as the discovery of a new idea that is my favorite part. 
 That is my life in a nut shell. Being creative is comforting to me. Please feel  
 free to explore this site.
     

 
 If you would like to comment on this site e-mail me at the following link:

<a href="mailto:<?php echo $zMail; ?>?subject=RustyHaze.com-">Email Jae Lamphier.</a> 
 

    







</div>

<?php fireExit("www.google.com/search?q=chariton+iowa&oq=Chariton+iowa","Chariton, IA",$zManagerLevel); ?>
    
   

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
