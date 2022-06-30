<?php

include 'database.php';

session_start();

error_reporting(0);
if (isset($_POST['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $email= $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(!$result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    }else{
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- CSS only -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous"
    />
    <title>Login</title><meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/b4a6d67654.js" crossorigin="anonymous"></script>


    <!--Slick Slide-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!--Custom stylesheet-->
    <link rel="stylesheet" href="./css/login.css">

    

</head> 
<body>
    <div class="container bg-primary-color pt-5">
        <form action="" method="POST" class="login-email pt-2 ", style="color: white; text-align:center">
            <p class="login-text pt-2" style="text-align: center; font-size: 1.5rem; color: white; margin: 3; font-weight:1000; ">Sign in with an Peaceful Games Account</p>
            <div class="input-group">
                <input class="text-white" type="email" placeholder="Email" name="email" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" <?php echo $password; ?> required>
            </div>
            <div class="input-group pt-3">
                <button name="submit" class="btn mx-auto ">Sign in </button>
            </div>
            <p class="privacy-text pt-4" style="color: white; text-align: center;"><a href="Privacy.php" >Privacy Policy</a></p>
            <p class="login-register-text" style="color: grey; text-align: center;">Don't have an Peaceful Games account? <a href="register.php">Sign up</a></p>
            <p class="all-sign-in-option" style="color: grey; text-align: center;">Back to <span></span><a href="Privacy.php">all in options</a></p>
            
        </form>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src=".main.js"></script>
</body>
</html>