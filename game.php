<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="css/game.css" rel="stylesheet" type="text/css"/>
    <script src="./js/main.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-dark">
    <h1 class="mx-auto pt-3" style="width: 300px;text-align: center; color: azure; padding-bottom: 25px;">God of War</h1>
    <div class="container">
      <div class="row">
        <div class="col-md-9" class="float-start">
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true" class="float-start">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="50000">
                <video width="100%" height="auto" autoplay controls muted>
                  <source src="img/game-video.mp4" type="video/mp4">
                </video>
              </div>
                <div class="carousel-item">
                  <img src="./img/game.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/game2.jpg" class="d-block w-100" alt="...">
                </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
      <div class="text font-roboto"> 
        <h5> Enter the Norse realm</h5>
        <p>His vengeance against the Gods of Olympus years behind him, Kratos now lives as a man in the realm of Norse Gods and monsters. It is in this harsh, unforgiving world that he must fight to survive… and teach his son to do the same.</p>
        <h5> Grasp a second chance</h5>
        <p>Kratos is a father again. As mentor and protector to Atreus, a son determined to earn his respect, he is forced to deal with and control the rage that has long defined him while out in a very dangerous world with his son.</p>
        <h5></h5>
      </div>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
    

          <div class="col-md-3">
            <img id="main-img" src="./img/game1.jpg" width="100%" >
            <div id="price">
              <span >$39.99</span>
            </div>
            <a class="btn btn-primary " href="#" role="button"><strong>BUY NOW</strong></a>
            <button type="button" class="btn btn-outline-secondary btn-block btn-md"><strong>ADD TO</strong></button>
            
            <!--Flex Bootstrap 5-->
            <div class="d-flex flex-column bd-highlight md-3 font-roboto">
              <div class="border-bottom border-secondary d-flex justify-content-between">
                <h5 class="text-start">Developer</h5> 
                <h5 class="text-end">Santa Monica Studio</h5> 
              </div>
              <div class="border-bottom border-secondary d-flex justify-content-between">
                <h5 class="text-start">Publisher</h5> 
                <h5 class="text-end">PlayStation PC LLC</h5> 
              </div>
              <div class="border-bottom border-secondary d-flex justify-content-between">
                <h5 class="text-start">Release Date</h5> 
                <h5 class="text-end">01/14/22</h5> 
              </div>
              <div class="border-bottom border-secondary d-flex justify-content-between">
                <h5 class="text-start">Platform</h5> 
                <h5 class="text-end">Windows</h5> 
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>