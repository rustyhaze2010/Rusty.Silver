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
    
    <?php echo fireImageSEARCH( 'Ancient', 'Ancient'); ?>
    <?php echo fireImageSEARCH( 'Medieval', 'Medieval'); ?>
    <?php echo fireImageSEARCH( 'Pre-Romanesque', 'Pre-Romanesque'); ?>
    <?php echo fireImageSEARCH( 'Romanesque', 'Romanesque'); ?>
    <?php echo fireImageSEARCH( 'Gothic', 'Gothic'); ?>
    <?php echo fireImageSEARCH( 'Renaissance', 'Renaissance'); ?>
    <?php echo fireImageSEARCH( 'Mannerism', 'Mannerism'); ?>
    <?php echo fireImageSEARCH( 'Baroque', 'Baroque'); ?>
    <?php echo fireImageSEARCH( 'Rococo', 'Rococo'); ?>
    <?php echo fireImageSEARCH( 'Neoclassicism', 'Neoclassicism'); ?>

    <?php echo fireImageSEARCH( 'Revivalism', 'Revivalism'); ?> 
    <?php echo fireImageSEARCH( 'Romanticism', 'Romanticism'); ?> 
    <?php echo fireImageSEARCH( 'Realism', 'Realism'); ?> 
    <?php echo fireImageSEARCH( 'Pre-Raphaelites', 'Pre-Raphaelites'); ?> 
    <?php echo fireImageSEARCH( 'Modern', 'Modern'); ?> 
    <?php echo fireImageSEARCH( 'Impressionism', 'Impressionism'); ?> 
    <?php echo fireImageSEARCH( 'Symbolism', 'Symbolism'); ?> 
    <?php echo fireImageSEARCH( 'Decorative', 'Decorative'); ?> 
    <?php echo fireImageSEARCH( 'Post-Impressionism', 'Post-Impressionism'); ?> 
    <?php echo fireImageSEARCH( 'Art Nouveau', 'Art Nouveau'); ?> 

    <?php echo fireImageSEARCH( 'Fauvism', 'Fauvism'); ?> 
    <?php echo fireImageSEARCH( 'Expressionism', 'Expressionism'); ?> 
    <?php echo fireImageSEARCH( 'Cubism', 'Cubism'); ?> 
    <?php echo fireImageSEARCH( 'Contemporary', 'Contemporary'); ?> 
    <?php echo fireImageSEARCH( 'Postmodern', 'Postmodern'); ?> 
    <?php echo fireImageSEARCH( 'Conceptualism', 'Conceptualism'); ?> 
    <?php echo fireImageSEARCH( 'Pop', 'Pop'); ?> 
    <?php echo fireImageSEARCH( 'Minimalism', 'Minimalism'); ?> 
    
    
    <?php echo fireImageSEARCH( 'Art of the Middle East', 'Art of the Middle East'); ?> 
    <?php echo fireImageSEARCH( 'Mesopotamian', 'Mesopotamian'); ?> 
    <?php echo fireImageSEARCH( 'Hittite', 'Hittite'); ?> 
    <?php echo fireImageSEARCH( 'Persian', 'Persian'); ?> 
    <?php echo fireImageSEARCH( 'Arabian', 'Arabian'); ?> 
    <?php echo fireImageSEARCH( 'South Arabian', 'South Arabian'); ?> 
    <?php echo fireImageSEARCH( 'Phoenician', 'Phoenician'); ?> 
    
    
    <?php echo fireImageSEARCH( 'Ottoman', 'Ottoman'); ?> 
    <?php echo fireImageSEARCH( 'Art of Central Asia', 'Art of Central Asia'); ?> 
    <?php echo fireImageSEARCH( 'Art of East Asia', 'Art of East Asia'); ?> 
    <?php echo fireImageSEARCH( 'Chinese', 'Chinese'); ?> 
    <?php echo fireImageSEARCH( 'Hong Kong', 'Hong Kong'); ?> 
    <?php echo fireImageSEARCH( 'Taiwan', 'Taiwan'); ?> 
    <?php echo fireImageSEARCH( 'Japanese', 'Japanese'); ?> 
    <?php echo fireImageSEARCH( 'Korean', 'Korean'); ?> 
    <?php echo fireImageSEARCH( 'Tibetan', 'Tibetan'); ?> 
    
    <?php echo fireImageSEARCH( 'Art of South Asia', 'Art of South Asia'); ?> 
    
    
    

    <?php echo fireImageSEARCH('paleolithic', 'paleolithic(old stone age)'); ?> 
    <?php echo fireImageSEARCH('mesolithic', 'mesolithic(middle stone age)'); ?> 
    <?php echo fireImageSEARCH('neolithic', 'neolithic(new stone age)'); ?> 
    
    <?php echo fireImageSEARCH('sumerian', 'sumerian(early dynastic)'); ?> 
    <?php echo fireImageSEARCH('akkadian', 'akkadian dynasty'); ?> 
    <?php echo fireImageSEARCH('babylonian', 'old babylonian'); ?> 

    <?php echo fireImageSEARCH('mesopotamia', 'mesopotamia(kassities and mitanni)'); ?> 
    <?php echo fireImageSEARCH('assyrin', 'assyrin empire'); ?> 
    <?php echo fireImageSEARCH('neo-babylonian', 'neo-babylonian median empires'); ?> 

    <?php echo fireImageSEARCH('persian', 'achaemenid perian empire'); ?> 
    <?php echo fireImageSEARCH('seleucid', 'seleucid, parhinian and roman'); ?> 
    <?php echo fireImageSEARCH('sasanian', 'sasanian dynasty'); ?> 
    

    <?php echo fireImageSEARCH('predynastic', 'predynastic'); ?> 
    <?php echo fireImageSEARCH('early-dynastic', 'early-dynastic'); ?> 
    <?php echo fireImageSEARCH('old-kingdom', 'old-kingdom'); ?> 
  
    <?php echo fireImageSEARCH('middle-kingdom', 'middle-kingdom'); ?> 
    <?php echo fireImageSEARCH('new-kingdom', 'new-kingdom'); ?> 
    <?php echo fireImageSEARCH('late-period', 'late-period'); ?> 

    <?php echo fireImageSEARCH('greek', 'greek(ptolemaic)'); ?> 
    <?php echo fireImageSEARCH('roman', 'roman'); ?> 
    <?php echo fireImageSEARCH('', 'title'); ?> 
   
   
   
   
   
   
    <?php echo fireImageSEARCH( 'Renaissance', 'renaissance'); ?> 
    <?php echo fireImageSEARCH( 'Leonardo', 'leonardo'); ?> 
    <?php echo fireImageSEARCH( 'Raphael', 'raphael'); ?> 
    <?php echo fireImageSEARCH( 'Donatello', 'donatello'); ?> 
    <?php echo fireImageSEARCH( 'Michelangelo', 'michelangelo'); ?> 
   
   
    

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
