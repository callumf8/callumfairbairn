<!--------------------------------------------------------------------------
    research.html 
    Callum Fairbairn
    03/06/19                                                         
<!------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<!-----------------HEADER--------------------------------------------------> 
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/head.php";
   include_once($path);
?>  
<!-----------------BODY----------------------------------------------------> 
<body>
<!-----------------NAVBAR-------------------------------------------------->     
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/navbar.php";
   include_once($path);
?>

<!-----------------NAVBAR-------------------------------------------------->     
   <div class="container">
      
   <div class="jumbotron research-news">
      <h2>Research News</h2>
         <h4>2019</h4>
         <ul class="research-news-list">
            <li><a href = "research/research_news/2019/dampt_life.php">7th Oct - Settling into DAMTP Life</a></li>
            <li><a href = "research/research_news/2019/matriculation.php">9th Oct - Matriculating at Christ's College Cambridge</a></li>
         </ul>
   </div>
   
   <div class="jumbotron education-history">
      <h2>Education History</h2>
         
         <h4><a href="https://www.cam.ac.uk/">University of Cambridge: 2019 - Present</a></h4>
         <p>PhD Student in Applied Mathematics and Theoretical Physics.</p>
      
         <h4><a href="https://www.st-andrews.ac.uk/">University of St Andrews: 2013-2018</a></h4>
         <p> First Class Masters MPhys Theoretical Physics and Applied Mathematics</p>
         
      
   </div>
      
      
   <?php /* $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mywebsite/research/conferences/conference-list.php";
    include_once($path);*/?>

   <?php /* $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mywebsite/research/publications/publication-list.php";
    include_once($path);*/?> 
      
   <div class="jumbotron research-follow">
      <h2>Follow my Research...</h2>
      <p>You can follow my work on <a href="https://www.researchgate.net/profile/Callum_Fairbairn">Research Gate</a> or the latest publications from our Astrofluids team at our <a href="http://www.damtp.cam.ac.uk/research/astro/">group website</a>!
      </p>
      
   </div>
      
   </div>
    
<!---------------FOOTER---------------------------------------------------->    
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/includes/footer.php";
   include_once($path);
?>
<!-----------------FOOTER-------------------------------------------------->     
</body>
</html>
<!------------------------------------------------------------------------->