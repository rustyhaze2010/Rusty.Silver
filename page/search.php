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
<td width="50%" height="30px">Posted by:<?php echo fireLink("about-me", $zAuthor, $zMite); ?>
</td>
<td width="50%" height="30px" align="right"><?php echo fireLink("about-me", $zMotto, $zMite); ?></td>
</tr>
<tr>
<td width="50%" height="30px"><?php echo fireLink("welcome", "welcome", $zMite); ?> >> <?php echo fireLink($zPage, $zPage, $zMite); ?> </td>
<td width="50%" height="30px" align="right"><?php echo fireLink("contact","Contact Me", $zMite); ?> </td>
</tr>
<tr>
<td width="50%" height="30px" colspan="2" align="left"><h1><?php echo fireLink("about-me",$zAuthor, $zMite); ?>'s Welcome Page...</h1></td>
</tr>
</table>  

<div id="forward">







	 <center>


    <script async src="https://cse.google.com/cse.js?cx=f076af3d27eeb9071"></script>
    <div class="gcse-search"></div>    
    

    <?php greetFrom('Iowa'); ?>
    <br>
    <?php fireLink("projects","Enter Site", $zMite); ?>
 
    </center>




<br><br>

<br>Iowa News:<p>
    
    
<?php fireExit("www.kcrg.com/","kcrg - 9",$zManagerLevel); ?>

<?php fireExit("www.kwwl.com/","kwwl - 7",$zManagerLevel); ?>

<?php fireExit("www.cbs2iowa.com","cbs2iowa-2",$zManagerLevel); ?>

<?php fireExit("www.thegazette.com","thegazette.com",$zManagerLevel); ?>

<?php fireExit("www.desmoinesregister.com","desmoinesregister.com",$zManagerLevel); ?>

<?php fireExit("www.cnn.com/","CNN",$zManagerLevel); ?>

<?php fireExit("abcnews.go.com/","ABC News",$zManagerLevel); ?>

<?php fireExit("www.msn.com/","MSN",$zManagerLevel); ?>

<?php fireExit("www.newsnationnow.com/","News Nation",$zManagerLevel); ?>

<?php fireExit("abcnews.go.com/","ABC News",$zManagerLevel); ?>

<?php fireExit("www.nbcnews.com/","NBC",$zManagerLevel); ?>

<?php fireExit("www.nytimes.com/","New York Times",$zManagerLevel); ?>


<br><br>
<hr>
<br> Iowa Sports and Local News:<p>
<?php fireExit("www.hawkeyenation.com/","Hawkeye Nation",$zManagerLevel); ?>

<?php fireExit("www.espn.com/womens-college-basketball/team/_/id/2294/iowa-hawkeyes","University of Iowa Women",$zManagerLevel); ?>
        
<?php fireExit("www.espn.com/mens-college-basketball/team/_/id/2294/iowa-hawkeyes/","University of Iowa Men",$zManagerLevel); ?>
    
<?php fireExit("www.espn.com/college-football/team/_/id/2294/iowa-hawkeyes","University of Iowa Football",$zManagerLevel); ?>

<?php fireExit("www.espn.com/","Espn",$zManagerLevel); ?>

<?php fireExit("www.pbs.org/","PBS",$zManagerLevel); ?>

<?php fireExit("uichildrens.org/ways-give","University of Iowa Stead Family Children’s Hospital Fund",$zManagerLevel); ?> 

<?php fireExit("www.unitypoint.org/cedarrapids/services-foundation-donate-now.aspx","St. Luke's  Foundation",$zManagerLevel); ?>

<br><br>
<hr>
<br>TV+:<p>

<?php fireExit("www.disneyplus.com/","Disney+",$zManagerLevel); ?>

<?php fireExit("www.paramountplus.com/","Paramount+",$zManagerLevel); ?>

<?php fireExit("www.netflix.com/","Netflix",$zManagerLevel); ?>

<?php fireExit("www.peacocktv.com/","PeacockTV",$zManagerLevel); ?>

<?php fireExit("www.youtube.com/","YouTube",$zManagerLevel); ?>

<?php fireExit("www.roku.com/","Roku",$zManagerLevel); ?>

<?php fireExit("www.youtube.com/","YouTube",$zManagerLevel); ?>

<?php fireExit("www.roku.com/","Roku",$zManagerLevel); ?>
<br><br>
<hr>
<br>Iowa Colleges:<p>
<?php fireExit("www.uni.edu/","University of Northern iowa",$zManagerLevel); ?>

<?php fireExit("www.iastate.edu/","Iowa State",$zManagerLevel); ?>

<?php fireExit("www.uiowa.edu/","University of Iowa",$zManagerLevel); ?>

<?php fireExit("www.kirkwood.edu/","Kirkwood Community College",$zManagerLevel); ?>

<?php fireExit("www.indianhills.edu/","Indian Hills CC",$zManagerLevel); ?>

<?php fireExit("www.dmacc.edu/","DMACC",$zManagerLevel); ?>

<?php fireExit("www.indianhills.edu/","Indian Hills CC",$zManagerLevel); ?>

<?php fireExit("www.dmacc.edu/","DMACC",$zManagerLevel); ?>



<br><br>
<hr>
<br>Linux:<p>

<?php fireExit("linuxmint.com/","Linux Mint",$zManagerLevel); ?> 
  
<?php fireExit("ubuntu.com/","Ubuntu",$zManagerLevel); ?>     
        
<?php fireExit("pop.system76.com/","Pop OS",$zManagerLevel); ?>

<?php fireExit("fedoraproject.org/","Fedora Project",$zManagerLevel); ?>

<?php fireExit("www.opensuse.org/","OpenSuse",$zManagerLevel); ?> 

<?php fireExit("rhinolinux.org/","Rhino Linux",$zManagerLevel); ?> 

<?php fireExit("www.debian.org/","Debian",$zManagerLevel); ?> 

<?php fireExit("distrowatch.com/","DistroWatch",$zManagerLevel); ?> 


  
<br><br>
<hr>
<br>Search:<p>


<?php fireExit("www.youtube.com/","Youtube",$zManagerLevel); ?>

<?php fireExit("www.google.com/","Google",$zManagerLevel); ?>

<?php fireExit("www.yahoo.com/","Yahoo",$zManagerLevel); ?>

<?php fireExit("www.duckduckgo.com/","DuckDuckGo",$zManagerLevel); ?>
<br><br>
<hr>

<br><br><br><br><br>


</div>

<table width="100%" height="60px" >

<tr>
<td width="50%" height="30px">Posted by:<?php echo fireLink("about-me", $zAuthor, $zMite); ?>
</td>
<td width="50%" height="30px" align="right"><?php echo fireLink("about-me", $zMotto, $zMite); ?></td>
</tr>
<tr>
<td width="50%" height="30px"><?php echo fireLink("welcome", "welcome", $zMite); ?> >> <?php echo fireLink($zPage, $zPage, $zMite); ?> </td>
<td width="50%" height="30px" align="right"><?php echo fireLink("contact","Contact Me", $zMite); ?> </td>
</tr>

</table> 


</div>
