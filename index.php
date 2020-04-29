<!------------------------------------------------------------------
index.html 
Callum Fairbairn
03/06/19                                                         
<!----------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
  <!-----------------HEADER----------------------------------------> 
  <?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/includes/head.php";
  include_once($path);
  ?>  
  <!-----------------BODY------------------------------------------> 
  <body>
    <!-----------------NAVBAR--------------------------------------> 
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/navbar.php";
    include_once($path);
    ?>
    <!-----------------HOMEPAGE------------------------------------>     
<!--
    <div class="container-fluid bg-1 text-center">
      <h4>Theoretical Physicist and Mathematics PhD Student studying at Cambridge University </h4>
    </div>
-->

    <div class="container-fluid bg-2 text-center" style="padding-top: 20px; padding-bottom: 10px; ">
      <blockquote class="blockquote">
        <em class="mb-0">"When we try to pick out anything by itself, we find it hitched to everything else in the universe."</em>
        <footer class="blockquote-footer">John Muir</footer>
      </blockquote>
    </div>

    <!------------------------------------------------------------>        
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <img src="./images/yosemite_profile.jpeg" class="img-fluid rounded-circle img-pad " alt="Responsive image">
        </div>
        <div class="col-sm-8">
          <h2>A Bit About Me...</h2><br>
          <h4>My name is Callum and I am a Mathematics and Physics PhD student in my First year at Cambridge University. I am originally from the beautiful Kingdom of Fife in Scotland, which is also where I completed my MPhys Degree at the University of St Andrews.</h4><br>
          
          <p><strong>INTERESTS:</strong> Born and raised in Scotland, I have been fortunate to experience a country which has nurtured my love for hiking, nature and the great outdoors. I am also a keen follower of tennis, which I guess is a more socially acceptable obsession compared with my enjoyment of mathematics!
            
          I am matriculated as a member of Christs College Cambridge where I am the Welfare Officer for the MCR graduate committee!</p>
          
        </div>
      </div>
    </div>

    <!------------------------------------------------------------>    
    <div class="container-fluid bg-2">
      <div class="row">
        <div class="col-sm-8">
          <h2>What do I Research?</h2><br>
          <h4><strong>Warped Accretion Discs:</strong> Accretion discs have been studied extensively in the flat thin disc regime but work is required to understand more complicated geometries. Warped discs allow for different wave modes to propagate in the disk and can affect crucial phenomena such as disc stability and angular momenta transport. </h4><br>
          <p><strong>MY PROJECT:</strong> My project is developing a new local model for understanding warped discs. I use ideal hydrodynamical thin tori to understand non-linear oscillation modes within tilted ring structures. Combining analytical work with numerical simulations we aim to extend this to non ideal, viscous rings in the future.</p>
        </div>
        <div class="col-sm-4">
          <img src="./images/accretion.jpg" class="img-fluid rounded-circle img-pad " alt="Responsive image">
        </div>
      </div>
    </div>

    <!------------------------------------------------------------>    
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <img src="./images/empty_streets.jpg" class="img-fluid rounded-circle img-pad " alt="Responsive image">
        </div>
        <div class="col-sm-8">
          <h2>Travels and Photography</h2><br>
          <h4>I love to travel and explore different landscapes and cultures. Wherever I go I like to capture my time there using my trusty Nikon - some of my photos will be uploaded shortly.</h4><br>
          <p><strong>WHERE:</strong> I have been fortunate to visit Yellowstone and Yosemite National Parks in the US which have spectacular scenery and wildlife. Camping and road trips around Scotland have shown Scotland to be similarly dramatic and atmsopheric - especially in the Highlands, Islands and West Coast. </p>
        </div>
      </div>
    </div>

    <!---------------FOOTER-------------------------------------->    
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/footer.php";
    include_once($path);
    ?>
    <!-----------------FOOTER------------------------------------> </body>
</html>
<!--------------------------------------------------------------->







