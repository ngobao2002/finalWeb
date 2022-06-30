<?php

include 'database.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:login.php');
}

if(isset($_POST['update_order'])){

   $order_update_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `orders` SET payment_status = '$update_payment' WHERE id = '$order_update_id'") or die('query failed');
   $message[] = 'payment status has been updated!';

}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `orders` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_order.php');
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
    <title >Admin Placed Order</title>
</head>
<body class="bg-primary-color p-2">
    <?php include 'admin_header.php'; ?>
    <h1 class="mx-auto py-3 text-color" style="width: 500px;text-align: center; padding-bottom: 25px;">Admin Placed Order</h1>
    <div class="container">
        <?php
            $select_orders = mysqli_query($conn, "SELECT * FROM `orders`") or die('query failed');
            if(mysqli_num_rows($select_orders) > 0){
                while($fetch_orders = mysqli_fetch_assoc($select_orders)){
        ?>
        <div class="row pb-2">
            <div class="col-md-4 pb-2">
                <div class="card" style="width: auto;">
                    <div class="card-header text-center"><strong>Order Id :<span><?php echo $fetch_orders['user_id']; ?></span></strong></div>      
                    <ul class="list-group list-group-flush">
                        <!-- <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <p>Placed On: <span><?php echo $fetch_orders['placed_on']; ?></span></p>                                                            
                            </div>
                        </li> -->
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <p>Name : <span><?php echo $fetch_orders['name']; ?></span> </p>              
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <p>Phone Number : <span><?php echo $fetch_orders['number']; ?></span> </p>                
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <p>Email : <span><?php echo $fetch_orders['email']; ?></span> </p>               
                        </li>
                        <!-- <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <p>Address : <span><?php echo $fetch_orders['address']; ?></span></p>               
                        </li> -->
                        <li class="list-group-item">
                            <div class="d-flex justify-content-between">
                                <p>Payment Method : <span><?php echo $fetch_orders['method']; ?></span> </p>            
                        </li>
                    </ul>
                    </div>
                </div>               
            </div>
            <?php
         }
        }else{
            echo '<p class="empty">no orders placed yet!</p>';
        }
        ?>
        </div>
    </div>

    <?php include 'admin_footer.php'; ?>   
</body>
</html>