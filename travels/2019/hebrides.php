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
        Outer Hebrides 2019
      </h1> 
      <hr class="mb-2 mb-2">

      <h1>From Stornoway to Castlebay - Island Hopscotch</h1>
      
      <p>We started our epic island hopscotch tour by catching the Loch Seaforth Calmac Ferry from Ullapool into Stornoway - spotting pilot whales and porpoises on the way.</p>
      
      <p>Our early explorations took us up to the Butt of Lewis, Great Bernera and the Iron Age house at Bosta beach. Although the waters look Caribbean blue, the temperatures don't quite match up as a brief dip proved!</p>
      
      <p> The ancient history is evidenced all through the islands with standing stones and brochs everywhere - most famously the Callanais stones!</p>
      
      <p>After the coastal landscape defining Lewis, we moved base to the hillier Harris. This proved to be the perfect home for sea egales and golden eagles which we were lucky to spot on several occasions. We stayed in a beautiful small island called Scalpay - connected to the south of Harris via a small causeway. The Harris beaches were vast and dramatic - Huisinis and Luskentyre being personal favourites.</p>
      
      <p>On a particularly stormy day we braved the choppy Sound of Harris aboard our next ferry to North Uist, where we then drove onto our base on Benbecula. We split our time exploring the North and South Uists - forest walks, local museums with weaving demonstrations and machair skirted beaches. Our favourite spot being the southern island of Eriskay - home to the true story behind Whisky Galore!</p>
      
      <p>The final leg of our journey took us across the water to the small but characterful island of Barra. We stayed in a beautiful wee static caravan above the capital Castlebay. Indeed, the town certainly lays fair claim to this name with the ramparts of Kisimul Castle rising out of the waters. A short rib ride across to the castle was a must see trip to start our explorations. The island is also home to the world's only beach airport with scheduled landings. Watching the propellor planes take off and land was an impressive sight. The baggage reclaim was comparively unimpressive - resembling a bus shelter! To the south, a small causeway leads across to the stunning island of Vatersay with yet more perfect beaches.
      </p>
      
      <p>Our holiday was extended by troublesome sailing conditions on the Saturday, so we spent an extra day exploring the north of the island. The following morning we were up bright and early to say goodbye to the Outer Hebrides and boarded the Isle of Lewis ferry back to the mainland. </p>
      
      <p>
      Thanks to the Island folk for making our travels so enjoyable. I look forward to returning again one day soon. Chi mi a-rithist thu!
      </p>
      
    </div>

    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/travels/2019/hebrides_gallery.php";
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


