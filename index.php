<html lang="en">
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
##session_start();                        /// Starts session variable use.
error_reporting ();                     /// NULL turns off reporting.  
include "common/var/variables.php";     
?>
<head>

<title><?php echo $zSite; ?>-<?php echo $page=$_GET['page']; ?></title>



<link rel="stylesheet" href="common/css/icing-2022.css">
<link rel="stylesheet" href="common/css/page-2022.css">
<link rel="shortcut icon" href="common/media/favicon.png" type="image/x-icon">
    <link rel="icon" href="common/media/favicon.png">
    
	<meta charset="utf-8" />

	<meta name="keywords" content="<?php echo $zSite; ?>" />

	<meta name="revised" content="8/2/2022" />
    
<style>
    body {
        background-image: url("common/media/00-wall-grey.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        min-height: 600px;
        font-family: 'Verdana', 'Helvetica', 'Times';
        ##background: tan;
    }
    #Header{
        background-image: url("common/media/images/header/welcome-3.jpg");
    
    
    } 
    #Page, #MasterPage{
        ##background-image: url("common/media/Discovery.jpg");
        ##background-image: url("common/media/ShuttleDiscovery.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
		background: #4c5e85;

    
    }
    </style> 

</head>
<body>
<div id="MasterPage">

<div id="Header">


</div>




<div id="Menu">
<img src="common/media/favicon.png" height="25px" width="25px">
<a href="index.php?page=artSearch-levelone">#<?php echo $zSite; ?>ArtSearch</a> . 	

<a href="index.php?page=projects">#JaeLamp-Projects</a> .  

<a href="index.php?page=about">#About</a> . 

<a href="index.php?page=video">#Video</a>


</div>

<div id="Page">
<?php

$zPage = $_GET['page'];
$zWave = $_GET['wave'];

if (!strpos($zPage,".")&&!strpos($zPage,"/"))
{
	
if (!strpos($zWave,".")&&!strpos($zWave,"/"))
{	
	
		if ($zPage)
		{
		include("page/" . $zPage . ".php");
		
		}
		else
		{
		include("page/projects.php");
		}
}
else
	
		echo die("Wave used, was broken! Please try again.");

}
	else
	
		echo die("Page used, was broken! Please try again.");


?>



</div>
<div id="Footer">
<img src="common/media/favicon.png" height="25px" width="25px">
<a href="index.php?page=artSearch-levelone">#<?php echo $zSite; ?>ArtSearch</a> . 	

<a href="index.php?page=projects">#JaeLamp-Projects</a> .  

<a href="index.php?page=about">#About</a> . 

<a href="index.php?page=video">#Video</a>

	<br>
	
<a href="index.php?page=terms">#Terms</a> . 
<a href="index.php?page=privacy">#Privacy</a> . 

<a href="https://mail.google.com/">#Mail</a> . 
<a href="index.php?page=search">#Search</a>

<?php echo "<p>" . $zCopyright . "<p>" . $ztick ;?>

</div>

</div>
</body>
</html>

