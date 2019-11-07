<!---------------------------------------------------------------
travel.php 
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
    <!-----------------TRAVELS------------------------------->     

    <div class="fluid travel-index">
      
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/travels/2019/hebrides_index.php";
    include_once($path);
    ?>
      
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/travels/2019/bath_index.php";
    include_once($path);
    ?>
      
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/travels/2018/yosemite_index.php";
    include_once($path);
    ?>
          
    </div>
    
    <div class="jumbotron">
    <h3>
    To follow other places I have travelled take a look at my <a href="https://www.tripadvisor.co.uk/Profile/ultimate-explorer-cf" class="no-link">Trip Advisor</a> page!
    </h3>
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