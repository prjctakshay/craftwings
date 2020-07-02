<?php
    session_start();
    require 'check_if_added.php';
    //require 'bid_last.php'
    $today=date("y-m-d");
?>
<!DOCTYPE html>
<html>

<head>


   <!--   <link rel="shortcut icon" href="img/lifestyleStore.png" />//change it-->
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
      <div class="container">
         <div class="jumbotron">
            <h1>Welcome to world of art</h1>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/Indian%20Art%20Women%20painting%2018.jpg" alt="Indian Art Women painting 18">
                  </a>
                  <center>
                     <div class="caption">
                        <h3>Indian Art Women painting</h3>
                        <p> <?php
                                           echo "End Date : 04-07-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif(date("y-m-d")>"20-02-04"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Indian Art Women painting">
                              <input type="hidden" id="date" name="end_date" value="04-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                              
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/pnt1.jpg" alt="pnt1">
                  </a>
                  <center>
                     <div class="caption">
                        <h3>painting</h3>
                        <p> <?php
                                           echo "End Date : 22-02-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif(date("y-m-d")>"20-02-22"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="painting">
                              <input type="hidden" id="date" name="end_date" value="22-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid"  class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/pnt2.jpg" alt="pnt2">
                  </a>
                  <center>
                      <div class="caption">
                        <h3>Painting</h3>
                        <p> <?php
                                           echo "End Date : 28-02-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"28-02-20"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Painting">
                              <input type="hidden" id="date" name="end_date" value="28-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/pnt3.jpg" alt="pnt3">
                  </a>
                  <center>
                      <div class="caption">
                        <h3>Painting</h3>
                        <p> <?php
                                           echo "End Date : 25-09-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"20-09-25"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Painting">
                              <input type="hidden" id="date" name="end_date" value="25-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/pnt5.jpg" alt="pnt5">
                  </a>
                  <center>
                      <div class="caption">
                        <h3>Painting</h3>
                        <p> <?php
                                           echo "End Date : 05-02-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"20-02-05"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Painting">
                              <input type="hidden" id="date" name="end_date" value="05-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/034-Royal-Lady-Gets-a-Bath-Indian-beauty-traditional-painting-on-canvas.jpg" alt="Royal-Lady-Gets-a-Bath">
                  </a>
                  <center>
                                       <div class="caption">
                        <h3>Indian lady bathing</h3>
                        <p> <?php
                                           echo "End Date : 20-02-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>("20-02-20")){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Indian lady bathing">
                              <input type="hidden" id="date" name="end_date" value="20-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/gramaphone.JPG" alt="door">
                  </a>
                  <center>
                     <div class="caption">
                        <h3>Gramaphone</h3>
                        <p> <?php
                                           echo "End Date : 29-02-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"20-02-20"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Gramaphone">
                              <input type="hidden" id="date" name="end_date" value="29-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/Kumara Wood Carving.jpg" alt="Kumara Wood Carving">
                  </a>
                  <center>
                      <div class="caption">
                        <h3>Kumara Wood Carving</h3>
                        <p> <?php
                                           echo "End Date : 30-09-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"20-09-30"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Kumara Wood Carving">
                              <input type="hidden" id="date" name="end_date" value="30-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/Lord krishna.jpg" alt="Lord krishna">
                  </a>
                  <center>
                     <div class="caption">
                        <h3>Lord krishna painting</h3>
                        <p> <?php
                                           echo "End Date : 24-02-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"20-02-24"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Lord krishna painting">
                              <input type="hidden" id="date" name="end_date" value="24-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/MagMag-Fall2014-Review-African_Cosmos-3.jpg" alt="wood box">
                  </a>
                  <center>
                      <div class="caption">
                        <h3>African Traditional chain</h3>
                        <p> <?php
                                           echo "End Date : 23-02-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"20-02-23"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="African Traditional chain">
                              <input type="hidden" id="date" name="end_date" value="23-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/srilankhan antic statue.jpg" alt="srilankhan antic statue">
                  </a>
                  <center>
                     <div class="caption">
                        <h3>srilankhan antic statue</h3>
                        <p> <?php
                                           echo "End Date : 26-02-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"20-02-20"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="srilankhan antic statue">
                              <input type="hidden" id="date" name="end_date" value="26-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="thumbnail">
                  <a href="https://youtu.be/FsoqoGdzuQs">
                     <img src="img/Traditional Japanese Painting.jpg" alt="Traditional Japanese Painting">
                  </a>
                  <center>
                      <div class="caption">
                        <h3>Traditional Japanese Painting</h3>
                        <p> <?php
                                           echo "End Date : 28-09-2020";
                           ?>
                        </p>
                        <?php if(!isset($_SESSION['email'])){  ?>
                        <!--check if user logined-->
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Bid Now</a></p>
                        <?php 
                        }
                        elseif($today>"20-09-28"){?>
                        <!--check if bid date ended-->
                        <a href="#" class=btn btn-block btn-success disabled>date ended</a>
                        <?php }
                        else{/*if bid is possible*/
                        ?>
                           <form action="bid_last.php" method="post" name="placebid">

                              <input type="hidden" id="item_name" name="item_name" value="Traditional Japanese Painting">
                              <input type="hidden" id="date" name="end_date" value="28-02-2020">
                              <input type="number" class="form-control" id="bid_amount" name="bid_amount" value="" placeholder="Your Bid" required>
                              <input type="submit" role="button" class="btn btn-primary btn-block" value="Place Bid" name="Cochin palace Door" class="btn amado-btn w-100">
                           </form>
                        <?php
                        }
                        ?>

                     </div>
                  </center>
               </div>
            </div>
         </div>
      </div>
      <br><br><br><br><br><br><br><br>
      <!--
   <iframe src="checkout.html" height="1000px"width="100%" name="che">
   </iframe>   
--><a name="che"></a>

      <form action="bid2.php" method="post" name="form_bid">
         <input type="text" class="form-control" id="name" name="name1" value="" required>
      </form>
      <footer class="footer">
         <div class="container">
            <center>
               <p>Copyright &copy Store. All Rights Reserved.</p>
               <p>This website is developed by craftwings</p>
            </center>
         </div>
      </footer>
   </div>
</body>

</html>
