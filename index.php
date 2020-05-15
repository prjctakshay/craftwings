<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
<!--        <link rel="shortcut icon" href="img/lifestyleStore.png" />-->
        <title>CRAFT WINGS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
      
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>CRAFT WINGS</h1>
                       <p>THE WORLD OF ART</p>
                       <a href="paintings.php" class="btn btn-danger">go to store</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="Auction.php">
                                <img src="img/Lascaux_painting.jpg" alt="Camera">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">auctions</p>
                                        <p>Choose among the best available in the world</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="handicraft.php">
                               <img src="img/shoes.jpg" alt="Watch">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Handicraft</p>
                                    <p>Creative World Is Beautiful</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="wodden.php">
                               <img src="img/wdelephant.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Woodden</p>
                                   <p>Woddes Are Changed To An Art.</p>
                               </div>
                           </center>
                       </div>
                   </div>

                                    <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="paintings.php">
                               <img src="img/Autumn-Walk.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Paintings</p>
                                   <p>Painting something that defies the law of the land is good</p>
                               </div>
                           </center>
                       </div>
                   </div>
                                    <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="Traditional.php">
                               <img src="img/palakka.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Traditional</p>
                                   <p>Teaching is not a lost art, but the regard for it is a lost tradition</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p>Copyright &copy CRAFT WINGS All Rights Reserved.</p>
                   <p>This website is developed by CraftWings</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>