<?php

include 'database.php';

error_reporting(0);
session_start();
if (isset($_POST['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email= $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'") or die('query failed');
    if ($password == $cpassword){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password, user_type)
                    VALUES('$username', '$email', '$password', '$user_type')";
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo "<script>alert('Wow! User Registration Successful.')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";

            }else{
                echo "<script>alert('Woops! Something wrong went.')</script>";
            }
        }else{
            echo "<script>alert('Woops! Email Already Exists.')</script>";
        }
        
    }else{
        echo "<script>('Password Not Matched')</script>";
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
    <title>Sign up</title><meta charset="UTF-8">
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
        <form action = "" method="POST" class="login-email pt-2 ", style="color: white; text-align:center">
            <p class="login-text pt-2 font-roboto" style="text-align: center; font-size: 1.5rem; color: white; margin: 3; font-weight:800; ">Sign Up</p>
            <div class="input-group">
                <input class="text-white" type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input class="text-white" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input class="text-white" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input class="text-white" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group pt-3">
                <select name="user_type" class="box">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                </select>
            </div>
            <div class="input-group pt-3">
                <button name="submit" class="btn mx-auto font-roboto">Register </button>
            </div>
            <p class="privacy-text pt-4" style="color: white; text-align: center;"><a href="Privacy.php" >Privacy Policy</a></p>
            <p class="login-register-text" style="color: grey; text-align: center;">Have an Peaceful Games account? <a href="login.php">Sign In</a></p>
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