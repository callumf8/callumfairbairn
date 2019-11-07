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
    <!-----------------BODY------------------------------->     

    <div class="ml-4 mr-4">
      <h1 class="font-weight-light mt-3">
        Yosemite 2018
      </h1> 
      <hr class="mb-2 mb-2">

      <h1>California Dreaming</h1>

    </div>

    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/travels/2018/yosemite_gallery.php";
    include_once($path);
    ?>
    <!---------------FOOTER----------------------------------->    
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/includes/footer.php";
    include_once($path);
    ?>

    <!-----------------FOOTER---------------------------------> </body>
</html>
<!------------------------------------------------------------>


