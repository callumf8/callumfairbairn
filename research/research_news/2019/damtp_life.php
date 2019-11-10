<!---------------------------------------------------------------
damtp_life.php 
Callum Fairbairn
07/11/19                                                         
<!------------------------------------------------------------>
<!DOCTYPE html>
<html lang="en">
<!-----------------HEADER-----------------------------------> 
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/head.php";
include_once($path);
?>  
<!-----------------BODY-------------------------------------> 
<body>
<!-----------------NAVBAR---------------------------------> 
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/navbar.php";
include_once($path);
?>
<!-----------------RESEARCH NEWS------------------------------->     
<div class="research-news-article container">
     
<h2>DAMTP Life - 07/11/19</h2>
     
<a href="research/research_news/2019/images/damtp_life.jpg">
<img src="research/research_news/2019/images/damtp_life.jpg" style="width:80%">
</a>
  
<p> It has been about a month since I started my time in Pavillion F. I'm chuffed with my office and loving the vibrant and active research environment. My week is absolutely packed with seminars, journal clubs, Part III tripos lectures and computing classes - alongside laying the initial foundations of my research.</p>
     
<p>I am beginning to look into the local modelling of ring structures which may result from the destabilisation of warped accretion disks. This work may shed light onto the formation of ring structures across a variety of contexts - from planetary rings to the proto-planetary rings observed in ALMA images. My initial efforts have been spread across analytical groundwork, some numerical tests using PLUTO and a lot of reading around the area!</p>
           
</div>
              
<!---------------FOOTER----------------------------------->    
<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/includes/footer.php";
include_once($path);
?>
<!-----------------FOOTER---------------------------------> </body>
</html>
<!------------------------------------------------------------>