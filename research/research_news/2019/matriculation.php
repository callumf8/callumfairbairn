<!---------------------------------------------------------------
research_news.php 
Callum Fairbairn
06/06/19                                                         
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
         
    <h2>Matriculating at Christ's College - 07/10/19</h2>
    
    <a href="research/research_news/2019/images/matric.JPG">
    <img src="research/research_news/2019/images/matric.JPG" style="width:100%">
    </a>
    
    <p>I am now a matriculated post-graduate student at Christ's College Cambridge - home to alumni such as Darwin, Milton and Sacha Baron Cohen. This is an exciting new chapter of my university experience. I have such fond memories of St Andrews and University Hall that Christ's has a lot to live up to, but I'm excited about what lies ahead.</p>
      
    <p>Our college here dates back to 1437 when it was orginally founded as God's House by William Byngham. Subsequently in 1505, the generous efforts of Lady Margaret Beaufort (mother to Big King Henry VII), expanded the college and it was refounded as Christ's. Our motto <i>'Souvent me Souvient'</i> is taken from her and means <i>Often I remember...</i> - hopefully there will be many exciting things to remember after the next few years!</p>
      
    <p>As a post-graduate student I am a member of the MCR (Middle Combination Room) which has organised a bunch of amazing events this week. I've already met countless incredible students from all corners of the world and, in our house alone, we have representations from India, America, China, Croatia, England and most importantly...Scotland!
    </p>
      
    <p>Work wise I have just moved into the knome village that is DAMTP (Department of Applied Maths and Theoretical Physics) - I'm lucky enough to have a great office in Pavillion F. I've had some really interesting conversations with Prof Gordon Ogilvie about warped disks and rings structures which could form the basis for my PhD so watch this space.
    </p>
      
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