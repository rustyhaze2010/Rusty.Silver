<html lang="en">
<doctype html>
<?php
session_start();                        /// Starts session variable use.
error_reporting ();                     /// NULL turns off reporting.  
include "common/var/variables.php";     
?>

<head>

<title><?php echo "$zSite"; ?>-<?php echo "$zMotto"; ?> - <?php echo "$page"; ?></title>

<link rel="stylesheet" href="common/css/icing-2022.css">
<link rel="shortcut icon" href="common/media/favicon.png" type="image/x-icon">
<link rel="icon" href="common/media/favicon.png">
    
<meta charset="utf-8" />

<meta name="keywords" content="<?php echo $zSite; ?>" />

<meta name="revised" content="8/2/2022" />
    
<style>
    body {
        background-image: url("common/media/ShuttleDiscovery.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        min-height: 600px;
    }      
    </style> 

</head>
<body>
<div id="MasterPage">

<div id="Header">

<?php echo "$zSite"; ?> - <?php echo "$zMotto"; ?>
</div>




<div id="Menu">
	<image src="common/media/favicon.png" height="25px" width="25px">
	<a href="index.php?page=welcome">#HelloWorld</a> .  
	<a href="index.php?page=home">#Home</a> . 
	<a href="index.php?page=about">#About</a> . 
	<a href="index.php?page=projects">#Projects</a> . 
	<a href="http://rustyhaze.net/" target="_parent">#RH</a>
</div>

<div id="Page">
<?php

$page = $_GET['page'];

if (
	!strpos($page,".")&&
	!strpos($page,"/")
)
{
if ($page){
	include_once("page/".$page.".php");
	}
	else{
	include_once('page/welcome.php');
	}

?>



</div>
<div id="Footer">

	<?php echo $zCopyright; ?>


</div>
</div>
</body>
</html>
