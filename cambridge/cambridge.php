<!--------------------------------------------------------------------------
    cambridge.php 
    Callum Fairbairn
11/12/19
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
      
   <div class="jumbotron cambridge-news">
      <h2>Research News</h2>
         <h4>2019</h4>
         <ul class="cambridge-news-list">
            <li><a href = "cambridge/cambridge_news/2019/christmas.php">11th December - Merry Christ-mas</a></li>
         </ul>
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
