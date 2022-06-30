<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <link href="./css/game.css" rel="stylesheet" type="text/css"/>
  <script src="./js/main.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  
</head>
<body class="bg-dark">
    <div class="container border-bottom" >
        <div class="row p-4">
            <div class="col-md-6 d-flex justify-content-center align-items-center text-white flex-column mb-2" style="height: 500px">
                <h1 class="text-center ">Peaceful Shop</h1>
                <p>Vietnam's leading game buying and selling website</p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex flex-column ps-5 pe-5">
                        <h5 >Viewing</h5>
                        <span class="counter text-center">100</span>
                    </div>
                    <div class="d-flex flex-column ps-5 pe-5">
                        <h5 >User</h5>
                        <span class="counter text-center">100</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="text-center pt-2">
                    <img src="./img/about.jpg" class="opacity-50 rounded-2" alt="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div id="services" class="container text-center p-4 border-bottom" style="color:white">
    <h2>SERVICES</h2>
    <br> 
    <div class="row slideanim">
        <div class="col-sm-4">
        <span class="glyphicon glyphicon-off logo-small"></span>
        <h4>POWER</h4>
        <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
        <span class="glyphicon glyphicon-heart logo-small"></span>
        <h4>LOVE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
        <span class="glyphicon glyphicon-lock logo-small"></span>
        <h4>JOB DONE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div class="col-sm-4">
        <span class="glyphicon glyphicon-leaf logo-small"></span>
        <h4>GREEN</h4>
        <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>CERTIFIED</h4>
        <p>Lorem ipsum dolor sit amet..</p>
        </div>
        <div class="col-sm-4">
        <span class="glyphicon glyphicon-wrench logo-small"></span>
        <h4 style="color:#303030;">HARD WORK</h4>
        <p>Lorem ipsum dolor sit amet..</p>
        </div>
    </div>
    </div>

    <div id="contact" class="container bg-grey" style="color:white">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
        <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
        <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
        </div>
        <div class="col-sm-7 slideanim">
        <div class="row">
            <div class="col-sm-6 form-group pb-2">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
            <div class="col-sm-12 form-group">
            <button class="btn btn-info pull-right " type="submit" style="width:100%">Send</button>
            </div>
        </div>
        </div>
    </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $('.counter').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function (now) {
                 $(this).text(Math.ceil(now));
                }
            });
        });
    });  
</script>
</html>