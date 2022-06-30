<?php

include 'database.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link href="../css/admin.css" rel="stylesheet" type="text/css"/>
    <title >Admin Page</title>
</head>
<?php include 'admin_header.php'; ?>
<body class="bg-primary-color">
    <h1 class="mx-auto py-3 text-color" style="width: 300px;text-align: center; padding-bottom: 25px;">Dashboard</h1>
    <div class="container">
        <div class="row pb-4 d-flex flex-justify-content-center flex-wrap">
            <div class="col-md-3">
                <?php 
                    $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
                    $number_of_orders = mysqli_num_rows($select_orders);
                ?>
                <div class="d-flex flex-column" id="order_placed">
                    <span class="border-top-2"><p class="p-2 m-1"><strong>Order Placed</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-cart-check-fill p-1" viewBox="0 0 16 16">
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                        </svg>
                        <!-- Data day ne -->
                        <!-- <h3 class="p-2 text-end">10</h3> -->
                        <h3 class="p-2 text-end"><?php echo $number_of_orders; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php 
                    $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                    $number_of_products = mysqli_num_rows($select_products);
                ?>
                <div class="d-flex flex-column" id="product_added">
                <span class="border-top-2"><p class="p-2 m-1"><strong>Product Added</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-cart-plus p-1" viewBox="0 0 16 16">
                        <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                        </svg>
                        <!-- Data day ne -->
                        <!-- <h3 class="p-2 text-end">35</h3> -->
                        <h3 class="p-2 text-end"><?php echo $number_of_products; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php 
                    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
                    $number_of_users = mysqli_num_rows($select_users);
                ?>
                
                <div class="d-flex flex-column" id="user">
                <span class="border-top-2"><p class="p-2 m-1"><strong>User</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-person-fill p-1" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <!-- Data day ne -->
                        <!-- <h3 class="p-2 text-end">3</h3> -->
                        <h3 class="p-2 text-end"><?php echo $number_of_users; ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php 
                    $select_account = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
                    $number_of_account = mysqli_num_rows($select_account);
                ?>
                <div class="d-flex flex-column" id="total_account">
                <span class="border-top-2"><p class="p-2 m-1"><strong>Total Account</strong></p></span>
                    <div class="d-flex justify-content-between">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="50" fill="dark" class="bi bi-person-check-fill p-1" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        </svg>
                        <!-- Data day ne -->
                        <!-- <h3 class="p-2 text-end">3</h3> -->
                        <h3 class="p-2 text-end"><?php echo $number_of_account; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>    
</html>