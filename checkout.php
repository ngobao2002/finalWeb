<?php

include 'database.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['order_btn'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $number = $_POST['number'];
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $method = mysqli_real_escape_string($conn, $_POST['method']);
   // $address = mysqli_real_escape_string($conn, $_POST['city']);

   $order_query = mysqli_query($conn, "SELECT * FROM orders WHERE name = '$name' AND number = '$number' AND email = '$email' AND method = '$method' AND method = '$method'") or die('query failed');
   if(mysqli_num_rows($order_query) > 0){
      $message[] = 'order already placed!'; 
   }else{
      mysqli_query($conn, "INSERT INTO `orders`(user_id, name, number, email, method) VALUES('$user_id', '$name', '$number', '$email', '$method')") or die('query failed');
      $message[] = 'order placed successfully!';
   }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body class="bg-light">
   
<?php include 'header.php'; ?>

<div class="heading text-center py-5">
   <h3>checkout</h3>
   <p> <a href="home.php">home</a> / checkout </p>
</div>

<section class="checkout container d-flex justify-content-center">

   <form action="" method="post" class="card col-lg-8">
      <h3 class="text-center py-3">game order</h3>
      <div class="row d-flex flex-wrap px-4">
         <div class="px-2">
            <div class="inputBox py-2 col">
               <span class="row-md text-capitalize mb-2">your name :</span>
               <input class="row-md w-100 py-2 border border-dark rounded" type="text" name="name" required placeholder="enter your name">
            </div>
            <div class="inputBox py-2">
               <span class="row-md text-capitalize mb-2">your number :</span>
               <input class="row-md w-100 py-2 border border-dark rounded" type="number" name="number" required placeholder="enter your number">
            </div>
            <div class="inputBox py-2">
               <span class="row-md text-capitalize mb-2">your email :</span>
               <input class="row-md w-100 py-2 border border-dark rounded" type="email" name="email" required placeholder="enter your email">
            </div>
            <div class="inputBox py-2">
               <span class="row-md text-capitalize mb-2">payment method :</span>
               <select name="method" class="row-md w-100 py-2 border border-dark rounded">
                  <option value="cash on delivery">cash on delivery</option>
                  <option value="credit card">credit card</option>
                  <option value="paypal">paypal</option>
                  <option value="paytm">paytm</option>
               </select>
            </div>
            <!-- <div class="inputBox py-2">
               <span class="row-md text-capitalize mb-2">city :</span>
               <input class="row-md w-100 py-2 border border-dark rounded" type="text" name="city" required placeholder="e.g. mumbai">
            </div>  -->
         </div>
      </div>
      <input type="submit" value="order now" class="btn btn-dark" name="order_btn">
   </form>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>