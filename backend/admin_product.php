<?php

include 'database.php';

session_start();

if(isset($_POST['add_product'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $price = $_POST['price'];
   $image = $_FILES['image']['name'];
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'upload_game/'.$image;

   $select_product_name = mysqli_query($conn, "SELECT name FROM `products` WHERE name = '$name'") or die('query failed');

   if(mysqli_num_rows($select_product_name) > 0){
      $message[] = 'Game already added';
   }else{
      $add_product_query = mysqli_query($conn, "INSERT INTO `products`(name, price, image) VALUES('$name', '$price', '$image')") or die('query failed');

      if($add_product_query){
         if($image_size > 2000000){
            $message[] = 'image size is too large';
         }else{
            move_uploaded_file($image_tmp_name, $image_folder);
            $message[] = 'game added successfully!';
         }
      }else{
         $message[] = 'game could not be added!';
      }
   }
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_image_query = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die('query failed');
   $fetch_delete_image = mysqli_fetch_assoc($delete_image_query);
   unlink('upload_games/'.$fetch_delete_image['image']);
   mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die('query failed');
   header('location:admin_product.php');
}

if(isset($_POST['update_product'])){

   $update_p_id = $_POST['update_p_id'];
   $update_name = $_POST['update_name'];
   $update_price = $_POST['update_price'];

   mysqli_query($conn, "UPDATE `products` SET name = '$update_name', price = '$update_price' WHERE id = '$update_p_id'") or die('query failed');

   $update_image = $_FILES['update_image']['name'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_folder = 'upload_games/'.$update_image;
   $update_old_image = $_POST['update_old_image'];

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image file size is too large';
      }else{
         mysqli_query($conn, "UPDATE `products` SET image = '$update_image' WHERE id = '$update_p_id'") or die('query failed');
         move_uploaded_file($update_image_tmp_name, $update_folder);
         unlink('upload_games/'.$update_old_image);
      }
   }

   header('location:admin_product.php');

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
    <title >Admin Products</title>
</head>
<body class="bg-primary-color">
    <section class="add-games">
        <h1 class="mx-auto p-5 text-color" style="width: 300px;text-align: center; ">Products</h1>
        <div class="d-flex justify-content-center" >
            <form style="width: 500px; background-color:white; border:10px ; border-radius:5px" class="p-2">
                <div class="mb-3">
                    <h2 class="text-center">Add product</h2>
                    <input class="form-control mb-2" type="text" placeholder="Name of product" aria-label="name of product">
                    <input class="form-control mb-2" type="text" placeholder="Price" aria-label="price"> 
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Image</label>
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                    <div class="d-flex justify-content-center ">
                        <button name="add_product" type="button" class="btn btn-success" style="position:center;">Add product</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section class="show-games">
        <div class="container d-flex flex-wrap justify-content-center">
            <?php
                $select_products = mysqli_query($conn, "SELECT * FROM `products`") or die('query failed');
                if(mysqli_num_rows($select_products) > 0){
                    while($fetch_products = mysqli_fetch_assoc($select_products)){
            ?>
            <div class="card col-lg-2 py-3 border">
                <img src="upload_games/<?php echo $fetch_products['image']; ?>" alt="">
                    <div class="name"><?php echo $fetch_products['name']; ?></div>
                    <div class="price">$<?php echo $fetch_products['price']; ?></div>
                    <a href="admin_product.php?update=<?php echo $fetch_products['id']; ?>" class="col-md-5 btn btn-primary m-1 p-0">update</a>
                    <a href="admin_product.php?delete=<?php echo $fetch_products['id']; ?>" class="col-md-5 btn btn-primary m-1 p-0" onclick="return confirm('delete this product?');">delete</a>
                </div>
                <?php
                    }
                }else{
                    echo '<p class="empty">no products added yet!</p>';
                }
                ?>
        </div>
    </section>

    <section class="edit-games">
      <div class="container d-flex flex-wrap justify-content-center mt-3 pb-5">
         <?php
            if(isset($_GET['update'])){
               $update_id = $_GET['update'];
               $update_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = '$update_id'") or die('query failed');
               if(mysqli_num_rows($update_query) > 0){
                  while($fetch_update = mysqli_fetch_assoc($update_query)){
         ?>
         
         <form action="" method="post" enctype="multipart/form-data" class="card d-flex justify-content-center w-25 p-4 font-rubik border rounded border-dark shadow">
            <input type="hidden" name="update_p_id" value="<?php echo $fetch_update['id']; ?>">
            <input type="hidden" name="update_old_image" value="<?php echo $fetch_update['image']; ?>">
            <div class="py-auto">
               <img class="img d-block w-100 mb-3" src="upload_games/<?php echo $fetch_update['image']; ?>" alt="">
            </div>
            <input type="text" name="update_name" value="<?php echo $fetch_update['name']; ?>" class="px-2 py-2 border rounded border-dark mb-2 text-capitalize" required placeholder="enter product name">
            <input type="number" name="update_price" value="<?php echo $fetch_update['price']; ?>" min="0" class="px-2 py-2 border rounded border-dark mb-2" required placeholder="enter product price">
            <input type="file" class="px-2 py-2 border rounded border-dark mb-2" name="update_image" accept="image/jpg, image/jpeg, image/png">
            <div class="row d-flex flex-wrap justify-content-center">
               <input type="submit" value="update" name="update_product" class="col-md-5 btn btn-primary m-1 p-2 text-capitalize">
               <input type="reset" value="cancel" id="close-update" class="col-md-5 btn btn-light m-1 py-1 text-capitalize">
            </div>
         </form>
      
         <?php
               }
            }
            }else{
               echo '<script>document.querySelector(".edit-product-form").style.display = "none";</script>';
            }
         ?>
      </div>
   </section>
</body>
</html>