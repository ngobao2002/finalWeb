<?php

include 'database.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_product'])){

  $name = $_POST['name'];
  $price = $_POST['price'];
  $image = $_FILES['image']['name'];
  $image_size = $_FILES['image']['size'];
  $image_tmp_name = $_FILES['image']['tmp_name'];
  $image_folder = './uploaded_game/'.$image;

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'already added to cart!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'product added to cart!';
   }
   $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_product_name) > 0){
      $message[] = 'Game already added';
   }else{
      $add_product_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$name', '$price', '$image')") or die('query failed');

      if($add_product_query){
         if($image_size > 2000000){
            $message[] = 'Image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'Game added successfully!';
         }
      }else{
         $message[] = 'Game could not be added!';
      }
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CSS only -->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <title>Peaceful</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Store</title>

  <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Font Awesome CDN -->
  <script src="https://kit.fontawesome.com/b4a6d67654.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i,900,900i"
    type="text/css" media="all">
  <!--Slick Slide-->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <!--Custom stylesheet-->
  <link rel="stylesheet" href="./css/style.css">

  <!--Link to Swiper-->
  <link rel="stylesheet" href="./css/swiper-bundle.min.css">

</head>

<body class="bg-dark">
  <!--Header-->

  <?php include 'header.php'; ?>
    

  <!--Main section-->
  <main>
    <!--First Slider-->
    <div class="container-fluid bg-dark">
      <div class="site-slider">
        <div class="slider-one container px-5">
          <div>
            <img src="./img/home4.jpg" class="img-fluid" alt="Banner 1">
          </div>
          <div>
            <img src="./img/home7.jpg" class="img-fluid" alt="Banner 2">
          </div>
          <div>
            <img src="./img/home6.jpg" class="img-fluid" alt="Banner 3">
          </div>
        </div>
        <div class="slider-btn">
          <span class="prev position-top"><i class="fas fa-chevron-left"></i></span>
          <span class="next position-top right-0"><i class="fas fa-chevron-right"></i></span>
        </div>
      </div>
    </div>

    <!-- Element-one -->
    <div class="container p-5">
      <h2 class="text">Games on Sales</h2>
      <div class="games swiper">
        <div class="swiper-wrapper">
          <!-- One -->
          <div class="swiper-slide">
            <a href="game.php"><img class="image img-fluid" src="./img2/r6s-y6-epic-rainbow.png" alt=""></a>
            <div class="box1 pt-3">
              <div class="text1">Rainbow Six Siege Standard Edition</div>
              <div class="d-flex pt-2">
                <div class="text-white bg-primary pt-1 px-1 rounded-2">-60%</div>
                <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???347,000</div>
                <div class="pt-2" style="color: white;">???138,800</div>
              </div>
            </div>
          </div>
          <!-- Two -->
          <div class="swiper-slide">
            <a href="game.php"><img class="image img-fluid" src="./img2/AC.jpg" alt=""></a>
            <div class="box1 pt-3">
              <div class="text1">Assassin's Creed?? Valhalla Standard Edition</div>
              <div class="d-flex pt-2">
                <div class="text-white bg-primary pt-1 px-1 rounded-2">-60%</div>
                <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???990,000</div>
                <div class="pt-2" style="color: white;">???396,000</div>
              </div>
            </div>
          </div>
          <!-- Three -->
          <div class="swiper-slide">
            <a href="game.php"><img class="image img-fluid" src="./img2/EGS_GodofWar_SantaMonicaStudio_S2_1200x1600-fbdf3cbc2980749091d52751ffabb7b7_1200x1600-fbdf3cbc2980749091d52751ffabb7b7.jpg" alt=""></a>
            <div class="box1 pt-3">
              <div class="text1">God Of War</div>
              <div class="d-flex pt-2">
                <div class="text-white bg-primary pt-1 px-1 rounded-2">-20%</div>
                <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???1,139,000</div>
                <div class="pt-2" style="color: white;">???911,200</div>
              </div>
            </div>
          </div>
          <!-- Four -->
          <div class="swiper-slide">
            <a href="game.php"><img class="image img-fluid" src="./img2/download-the-caligula-effect-2-offer-wbx8l.jpg" alt=""></a>
            <div class="box1 pt-3">
              <div class="text1">The Caligula Effect 2</div>
              <div class="d-flex pt-2">
                <div class="text-white bg-primary pt-1 px-1 rounded-2">-30%</div>
                <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???165,000</div>
                <div class="pt-2" style="color: white;">???165,000</div>
              </div>
            </div>
          </div>
          <!-- Five -->
          <div class="swiper-slide">
            <a href="game.php"><img class="image img-fluid" src="./img2/download-the-kings-bird-offer-1ckoh.jpg" alt=""></a>
            <div class="box1">
              <div class="text1 pt-3">Car Mechanic Simulator 2018</div>
              <div class="d-flex pt-2">
                <div class="text-white bg-primary pt-1 px-1 rounded-2">-25%</div>
                <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???186,000</div>
                <div class="pt-2" style="color: white;">???139,500</div>
              </div>
            </div>
          </div>     
        </div>
        <div class="row">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>

    <section class="New game">
      
      <div class="container">
      <h2 class="text-white px-5">New Games</h2>
        <div class="row d-flex flex-wrap">
            <?php
                  $select_products = mysqli_query($conn, "SELECT * FROM products") or die('query failed');
                  if(mysqli_num_rows($select_products) > 0){
                     while($fetch_products = mysqli_fetch_assoc($select_products)){
               ?>
              <form action="" method="post" class="col-3 card mx-2 bg-dark border border-light text-light">
                <a href="game.php"><img class="image d-block w-100 p-4" src="./uploaded_game/<?php echo $fetch_products['image']; ?>" alt="" ></a>
                <div class="name"><?php echo $fetch_products['name']; ?></div>
                <div class="price">$<?php echo $fetch_products['price']; ?></div>
              </form>
                <?php
                    }
                }else{
                    echo '<p class="empty">no products added yet!</p>';
                }
                ?> 
          </div>  
      </div>
    </section>
      <!-- Element-two -->
      <div class="container p-5">
        <div class="row">
          <!-- One -->
          <div class="col-md-4">
            <div class="box-image">
              <a href="game.php"><img src="./img2/egs-battlefield2042-dice-s1-2560x1440-2560x1440-3004c8a4629f.jpg"
                class="image img-fluid rounded-4" alt=""><a>
              <!-- <button type="button" class="btn btn-outline-light" title="Add to withlist">+</button> -->
            </div>
            <div class="container p-2">
              <h2 style="text-align: center; color:white;font-size: 18px;">Battlefield??? 2042 - Save Up to 50% Off</h2>
              <p style="color: grey;text-align: center;">Experience the next generation of all-out war. Catch the June
                sale and deploy today.</p>
              <div class="d-flex pt-2">
                <div class="text-white bg-primary pt-1 px-1 rounded-2">-30%</div>
                <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???165,000</div>
                <div class="pt-2" style="color: white;">???165,000</div>
              </div>
            </div>
          </div>
          <!-- Two -->
          <div class="col-md-4">
            <div class="box-image">
              <a href="game.php"><img src="./img2/en-egs-fn-naruto-rivals-breaker-1920x1080-380c0df5250b.jpg"
                class="image img-fluid rounded-4" alt=""></a>
              <!-- <button type="button" class="btn btn-outline-light" title="Add to withlist">+</button> -->
            </div>
            <div class="container p-2">
              <h2 style="text-align: center; color:white;font-size: 18px;">Fortnite - Naruto Part 2</h2>
              <p style="color: grey;text-align: center;">Naruto's friends (and foes) arrive to join the rest of Team 7
                in the Fortnite Item Shop!</p>
              <p><a href="#" class="text-light bg-dark ">Learn More</a></p>
            </div>
          </div>
          <!-- Three -->
          <div class="col-md-4">
            <div class="box-image">
              <a href="game.php"><img src="./img2/egs-a-plague-tale-requiem-breaker-1920x1080-a9b3d01272f0.jpg"
                class="image img-fluid rounded-4" alt=""></a>
              <!-- <button type="button" class="btn btn-outline-light" title="Add to withlist">+</button> -->
            </div>
            <div class="container p-2">
              <h2 style="text-align: center; color:white;font-size: 18px;">A Plague Tale: Requiem - Available October 18
              </h2>
              <p style="color: grey;text-align: center;">Embark on a heartrending journey into a brutal, breathtaking
                world twisted by supernatural forces.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Element three -->
      <div class="container p-5">
        <div class="card wm-100" style="background-color: rgb(80, 83, 83);">
          <div class="container p-4">
            <div class="d-flex bd-highlight">
              <div class="p-2 flex-fill bd-highlight text-white pt-3">Free Games</div>
              <div class="p-2 flex-fill bd-highlight"></div>
              <div class="p-2 flex-fill bd-highlight"><a role="button" class="btn btn-dark float-end"
                  href="https://www.google.com.vn/?hl=vi">View More</a></div>
            </div>
            <div class="row">
              <!-- One -->
              <div class="col-lg-3">
                <div>
                  <a href="game.php"><img src="./img2/download-a-game-of-thrones-offer-1q8ei.jpg" class="image img-fluid rounded-top" alt=""></a>
                  <button type="button" class="btn btn-primary" style="width:100%">FREE NOW</button>
                </div>
                <div class="container p-2">
                  <h2 style="text-align: center; color:white;font-size: 18px;">A Game Of Thrones: The Board Game Digital
                    Edition</h2>
                  <p style="color: grey;text-align: center;">Free Now - Jun 30 at 10:00 PM</p>
                </div>
              </div>
              <!-- Two -->
              <div class="col-lg-3">
                <div>
                  <a href="game.php"><img
                    src="./img2/EGS_CarMechanicSimulator2018_RedDotGames_S2_1200x1600-f285924f9144353f57ac4631f0c689e6.jpg"
                    class="image img-fluid rounded-top" alt=""></a>
                  <button type="button" class="btn btn-primary" style="width:100%">FREE NOW</button>
                </div>
                <div class="container p-2">
                  <h2 style="text-align: center; color:white;font-size: 18px;">Car Mechanic Simulator 2018</h2>
                  <p style="color: grey;text-align: center;">Free Now - Jun 30 at 10:00 PM</p>
                </div>
              </div>
              <!-- Three -->
              <div class="col-lg-3">
                <div>
                  <a href="game.php"><img
                    src="./img2/egs-geneforge1mutagen-spiderwebsoftware-s2-1200x1600-047ee886480c-1200x1600-668dc5abed1824b419b20b21c362904e.jpg"
                    class="image img-fluid rounded-top" alt=""></a>
                  <button type="button" class="btn btn-dark" style="width:100%">COMING SOON</button>
                </div>
                <div class="container p-2">
                  <h2 style="text-align: center; color:white;font-size: 18px;">Geneforge 1 - Mutagen</h2>
                  <p style="color: grey;text-align: center;">Free Jun 30 - Jul 07</p>
                </div>
              </div>
              <!-- Four -->
              <div class="col-lg-3">
                <div>
                  <a href="game.php"><img src="./img2/download-iratus--lord-of-the-dead-offer-1ucid.jpg"
                    class="image img-fluid rounded-top" alt=""></a>
                  <button type="button" class="btn btn-dark" style="width:100%">COMING SOON</button>
                </div>
                <div class="container p-2">
                  <h2 style="text-align: center; color:white;font-size: 18px;">Iratus: Lord of the Dead</h2>
                  <p style="color: grey;text-align: center;">Free Jun 30 - Jul 07</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Element four -->
      <div class="container p-5">
        <h2 class="text">Games with Achievements</h2>
        <div class="games swiper">
          <div class="swiper-wrapper">
            <!-- One -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-the-caligula-effect-2-offer-wbx8l.jpg" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">The Caligula Effect 2</div>
                <div class="d-flex pt-2">
                  <div class="text-white bg-primary pt-1 px-1 rounded-2">-30%</div>
                  <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???165,000</div>
                  <div class="pt-2" style="color: white;">???165,000</div>
                </div>
              </div>
            </div>
            <!-- Two -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/image.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Fall Guys</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div>
            <!-- Three -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-my-lovely-wife-offer-qhscc.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">My Lovely Wife</div>
                <div class="pt-2" style="color: white;">???165,000</div>
              </div>
            </div>
            <!-- Four -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-gravitar-recharged-offer-1ylhh.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Gravitar Recharged</div>
                <div class="pt-2" style="color: white;">???93,000</div>
              </div>
            </div>
            <!-- Five -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-house-party-offer-4n9bh.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">House Party</div>
                <div class="pt-2" style="color: white;">???233,000</div>
              </div>
            </div>
            <!-- Six -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-lamentum-offer-4o5si.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Lamentum</div>
                <div class="pt-2" style="color: white;">???175,000</div>
              </div>
            </div>
            <!-- Seven -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/redout.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Redout: Enhanced Edition</div>
                <div class="pt-2" style="color: white;">???186,000</div>
              </div>
            </div>
            <!-- Eight -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/skul.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Skul: The Hero Slayer</div>
                <div class="pt-2" style="color: white;">???186,000</div>
              </div>
            </div>
            <!-- Nine -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/salt.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Salt and Sacrifice</div>
                <div class="pt-2" style="color: white;">???186,000</div>
              </div>
            </div>
            <!-- Ten -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/winderling.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Wunderling DX</div>
                <div class="pt-2" style="color: white;">???140,900</div>
              </div>
            </div> -->
            <!-- Eleven -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/download-imagine-earth-offer-12owm.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Imagine Earth</div>
                <div class="pt-2" style="color: white;">???220,900</div>
              </div>
            </div> -->
            <!-- Twelve -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/download-wildermyth-offer-rmvpz.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Wildermyth</div>
                <div class="pt-2" style="color: white;">???233,000</div>
              </div>
            </div> -->
            <!-- Thirteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/startwar.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">LEGO?? Star Wars???: The Skywalker Saga</div>
                <div class="pt-2" style="color: white;">???822,500</div>
              </div>
            </div> -->
            <!-- Fourteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/download-weird-west-offer-13tjq.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Weird West</div>
                <div class="pt-2" style="color: white;">???599,900</div>
              </div>
            </div> -->
            <!-- Fifteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/strange.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">STRANGER OF PARADISE FINAL FANTASY ORIGIN</div>
                <div class="pt-2" style="color: white;">???1,339,900</div>
              </div>
            </div> -->
          </div>
          <div class="row">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
      <!-- Element five -->
      <div class="container p-5">
        <div class="row">
          <!-- One -->
          <div class="col-md-6">
            <a href="game.php"><img src="./img2/godofwar.png" class="image img-fluid rounded-4" alt=""></a>
            <div class="container p-2">
              <h2 style="text-align: left; color:white;font-size: 18px;">God Of War - 50% off</h2>
              <p style="color: grey;text-align: left;">Venture into the brutal Norse realms and fight to fulfill a
                deeply personal quest.</p>
              <div class="d-flex pt-2">
                <div class="text-white bg-primary pt-1 px-1 rounded-2">-20%</div>
                <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???1,139,000</div>
                <div class="pt-2" style="color: white;">???911,200</div>
              </div>
            </div>
          </div>
          <!-- Two -->
          <div class="col-md-6">
            <a href="game.php"><img src="./img2/roller.png" class="img-fluid rounded-4" alt=""></a>
            <div class="container p-2">
              <h2 style="text-align: left; color:white;font-size: 18px;">Roller Champions - Play for Free!</h2>
              <p style="color: grey;text-align: left;">Welcome to Disco Fever, Season 1 of Roller Champions! Download
                free and Roll to Glory!</p>
              <div class="pt-2" style="color: white; font-size: 18px;">Free</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Element six -->
      <div class="container p-5">
        <h2 class="text">Recently Updated</h2>
        <div class="games swiper">
          <div class="swiper-wrapper">
            <!-- One -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/wonderland.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Tiny Tina's Wonderlands</div>
                <div class="pt-2" style="color: white;">???1,000,000</div>
              </div>
            </div>
            <!-- Two -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/hotwheels.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">HOT WHEELS UNLEASHED???</div>
                <div class="pt-2" style="color: white;">???499,000</div>
              </div>
            </div>
            <!-- Three -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/r6s-y6-epic-rainbow.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Rainbow Six Siege Standard Edition</div>
                <div class="d-flex pt-2">
                  <div class="text-white bg-primary pt-1 px-1 rounded-2">-60%</div>
                  <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???347,000</div>
                  <div class="pt-2" style="color: white;">???138,800</div>
                </div>
              </div>
            </div>
            <!-- Four -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/survival.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Surviving the Aftermath</div>
                <div class="pt-2" style="color: white;">???409,999</div>
              </div>
            </div>
            <!-- Five -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/house.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">House Flipper</div>
                <div class="pt-2" style="color: white;">???220,000</div>
              </div>
            </div>
            <!-- Six -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/sherlock.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Sherlock Holmes Chapter One</div>
                <div class="pt-2" style="color: white;">???699,999</div>
              </div>
            </div>
            <!-- Seven -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/idle.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Idle Champions of the Forgotten Realms</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div>
            <!-- Eight -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/rocket.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Rocket League??</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div>
            <!-- Nine -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/tinhyeukhunglong.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Jurassic World Evolution 2</div>
                <div class="pt-2" style="color: white;">???910,000</div>
              </div>
            </div>
            <!-- Ten -->
            <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/hextech.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Hextech Mayhem: A League of Legends Story???</div>
                <div class="pt-2" style="color: white;">???140,999</div>
              </div>
            </div>
            <!-- Eleven -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/dragon.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Neverwinter</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div>
            <!-- Twelve -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/prison.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Prison Architect</div>
                <div class="pt-2" style="color: white;">???249,998</div>
              </div>
            </div> -->
            <!-- Thirteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/chivalry.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Chivalry 2</div>
                <div class="pt-2" style="color: white;">???370,000</div>
              </div>
            </div> -->
            <!-- Fourteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/ranch.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Ranch Simulator</div>
                <div class="pt-2" style="color: white;">???220,000</div>
              </div>
            </div> -->
            <!-- Fifteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/eve.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">EVE Online</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div> -->
            <!-- Sixteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/warship.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">World of Warships</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div> -->
            <!-- Seventeen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/genshin.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">Genshin Impact</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div> -->
            <!-- Eightteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/snow.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">EVE Online</div>
                <div class="pt-2" style="color: white;">???380,000</div>
              </div>
            </div> -->
            <!-- Nineteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/pingball.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">EVE Online</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div> -->
            <!-- </div> -->
            <!-- Nineteen -->
            <!-- <div class="swiper-slide">
              <img class="image img-fluid" src="./img2/core.png" alt="">
              <div class="box1 pt-3">
                <div class="text1">EVE Online</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div> -->
          </div>
          <div class="row">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
      <div class="container p-5">
        <div class="row">
          <!-- One -->
          <div class="col-md-6">
            <a href="game.php"><img src="./img2/egs-goodcompany-chasingcarrots-s1-2560x1440-2560x1440-60b8725ddc66.png"
              class="image img-fluid rounded-4" alt=""></a>
            <div class="container p-2">
              <h2 style="text-align: left; color:white;font-size: 18px;">Good Company</h2>
              <p style="color: grey;text-align: left;">Build your own trail-blazing tech corporation and become a
                production powerhouse - now available with multiplayer!</p>
              <div class="d-flex pt-2">
                <div class="text-white bg-primary pt-1 px-1 rounded-2">-20%</div>
                <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???220,000</div>
                <div class="pt-2" style="color: white;">???176,000</div>
              </div>
            </div>
          </div>
          <!-- Two -->
          <div class="col-md-6">
            <a href="game.php"><img src="./img2/egs-thecycle-frontier-breaker-1920x1080-8c79558869c9.png" class="img-fluid rounded-4" alt=""></a>
            <div class="container p-2">
              <h2 style="text-align: left; color:white;font-size: 18px;">The Cycle: Frontier - Season 1</h2>
              <p style="color: grey;text-align: left;">The Cycle: Frontier is live now! Experience this PvPvE Extraction
                Shooter driven by suspense and danger for free!</p>
              <div class="pt-2" style="color: white; font-size: 18px;">Free</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Element Seven -->
      <div class="container p-5">
        <h2 class="text">Most Popular</h2>
        <div class="games swiper">
          <div class="swiper-wrapper">
            <!-- One -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-the-caligula-effect-2-offer-wbx8l.jpg" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">The Caligula Effect 2</div>
                <div class="d-flex pt-2">
                  <div class="text-white bg-primary pt-1 px-1 rounded-2">-30%</div>
                  <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???165,000</div>
                  <div class="pt-2" style="color: white;">???165,000</div>
                </div>
              </div>
            </div>
            <!-- Two -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/prison.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Prison Architect</div>
                <div class="pt-2" style="color: white;">???249,998</div>
              </div>
            </div>
            <!-- Three -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-lamentum-offer-4o5si.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Lamentum</div>
                <div class="pt-2" style="color: white;">???175,000</div>
              </div>
            </div>
            <!-- Four -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/eve.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">EVE Online</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div>
            <!-- Five -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/r6s-y6-epic-rainbow.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Rainbow Six Siege Standard Edition</div>
                <div class="d-flex pt-2">
                  <div class="text-white bg-primary pt-1 px-1 rounded-2">-60%</div>
                  <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???347,000</div>
                  <div class="pt-2" style="color: white;">???138,800</div>
                </div>
              </div>
            </div>
            <!-- Six -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/hextech.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Hextech Mayhem: A League of Legends Story???</div>
                <div class="pt-2" style="color: white;">???140,999</div>
              </div>
            </div>
            <!-- Seven -->
            <div class="swiper-slide">
            <a href="game.php"><img class="image img-fluid" src="./img2/rocket.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Rocket League??</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div>
            <!-- Eight -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/skul.png" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Skul: The Hero Slayer</div>
                <div class="pt-2" style="color: white;">???186,000</div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>
      <!-- Element eight -->
      <div class="container p-5">
        <h2 class="text">New To The Epic Games Store</h2>
        <div class="games swiper">
          <div class="swiper-wrapper">
            <!-- One -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/image.png" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Fall Guys</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div>
            <!-- Two -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid"
                src="./img2/XXXX_Store_Portrait_1200x1600_1200x1600-7a934dde19d172d4e9c51fce0a4114d8.jpg" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">Roller Champions???</div>
                <div class="pt-2" style="color: white;">Free</div>
              </div>
            </div>
            <!-- Three -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-a-game-of-thrones-offer-1q8ei.jpg" alt=""></a>
              <div class="box1 pt-3">
                <div class="text1">A Game Of Thrones: The Board Game Digital Edition</div>
                <div class="d-flex pt-2">
                  <div class="text-white bg-primary pt-1 px-1 rounded-2">-100%</div>
                  <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???186,000</div>
                  <div class="pt-2" style="color: white;">Free</div>
                </div>
              </div>
            </div>
            <!-- Four -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid"
                src="./img2/EGS_CarMechanicSimulator2018_RedDotGames_S2_1200x1600-f285924f9144353f57ac4631f0c689e6.jpg"
                alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">King's Bounty: Crossworlds</div>
                <div class="d-flex pt-2">
                  <div class="text-white bg-primary pt-1 px-1 rounded-2">-75%</div>
                  <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???165,000</div>
                  <div class="pt-2" style="color: white;">???41,250</div>
                </div>
              </div>
            </div>
            <!-- Five -->
            <div class="swiper-slide">
              <a href="game.php"><img class="image img-fluid" src="./img2/download-kings-bounty-crossworlds-offer-1t72c.jpg" alt=""></a>
              <div class="box1">
                <div class="text1 pt-3">Car Mechanic Simulator 2018</div>
                <div class="d-flex pt-2">
                  <div class="text-white bg-primary pt-1 px-1 rounded-2">-100%</div>
                  <div class="pt-2 px-2" style="color: #F5F5F599; text-decoration: line-through;">???186,000</div>
                  <div class="pt-2" style="color: white;">Free</div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </div>
      </div>

      <!-- Element-nine -->
      <div class="container p-5">
        <div class="row">
          <!-- One -->
          <div class="col-md-8">
            <a href="game.php"><img src="./img2/e2e8a321c10b02555b1a.jpg" class="image img-fluid rounded-4" alt=""></a>
          </div>
          <!-- Two -->
          <div class="col-md-4">
            <div class="container">
              <h2 style="color:white">Explore Our Catalog</h2>
              <p style="color: grey;">Browse by genre, features, price, and more to find your next
                favorite game.</p>
              <button type="button" class="btn btn-light">Learn More</button>
            </div>
          </div>
        </div>
      </div>
  </main>
  
  

  <?php include 'footer.php'; ?>
  

  <script src="./js/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>