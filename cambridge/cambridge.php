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
      
   <iframe width="560" height="315" src="https://www.youtube.com/embed/9yO-oU7yygg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
   <div class="jumbotron cambridge-news">
      <h2>Cambridge News</h2>
      
         <h4>2020</h4>
         <ul class="cambridge-news-list">
            <li><a href = "cambridge/2020/new_decade.php">13th March - A New Decade</a></li>
         </ul>
         
         <h4>2019</h4>
         <ul class="cambridge-news-list">
            <li><a href = "cambridge/2019/christmas.php">11th December - Merry Christ-mas</a></li>
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
