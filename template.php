<!---------------------------------------------------------------
template.php 
Callum Fairbairn
06/06/19                                                         
<!------------------------------------------------------------>
<!DOCTYPE html>
<html lang="en">
  <!-----------------HEADER-----------------------------------> 
  <?php 
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/mywebsite/includes/head.php";
  include_once($path);
  ?>  

  <!-----------------BODY-------------------------------------> 
  <body>
    <!-----------------NAVBAR---------------------------------> 
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mywebsite/includes/navbar.php";
    include_once($path);
    ?>
    <!-----------------TRAVELS------------------------------->     

    <div class="fluid travel-index">
      
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mywebsite/travels/2018/yosemite_index.php";
    include_once($path);
    ?>
    
    </div>
      
    <!---------------FOOTER----------------------------------->    
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/mywebsite/includes/footer.php";
    include_once($path);
    ?>
    <!-----------------FOOTER---------------------------------> </body>
</html>
<!------------------------------------------------------------>