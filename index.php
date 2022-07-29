<?php
    @(include("pages/accesslog.php")) or die("this is file is not found");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Gym</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="icon" type="image/png" href="icon.png">
  <!-- Place favicon.ico in the root directory -->


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Gym</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <a href="login.php" class="btn btn-outline-primary my-2 my-sm-0">Login as Coach</a>
      </div>
    </div>
  </nav>

  <!-- Slide Show -->
  <div id="carouselEx" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselEx" data-slide-to="0" class="active"></li>
      <li data-target="#carouselEx" data-slide-to="1"></li>
      <li data-target="#carouselEx" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/1.jpg" alt="First slide">
        <div class="carousel-caption">
          <h1>Exercise</h1>
          <div class="lead">
            Exercise is defined as any movement that makes your muscles work and requires your body to burn calories.
            Additionally, studies have shown that combining aerobic exercise with resistance training can maximize fat loss and muscle mass maintenance, 
            which is essential for keeping the weight off
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/2.jpg" alt="Second slide">
        <div class="carousel-caption">
          <h1>Effect Of Exercise</h1>
          <div class="lead">
            To understand the effect of exercise on weight reduction, it is important to understand the relationship between exercise and energy expenditure.
            Your body spends energy in three ways: digesting food, exercising and maintaining body functions like your heartbeat and breathing.
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/30.jpg" alt="Third slide">
        <div class="carousel-caption">
          <h1>Coaches</h1>
          <div class="lead">
            We have some professional coaches, they will keep eye on you and help you you with your exercise.
            World-class certified personal trainers, energetic class instructors, and innovative fitness programs.
            we have the coaching, programs, and experience you need.
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselEx" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselEx" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- INFO -->

  <section class="info">
      <div class="container">
       <h2>Everything you need to stay in shape</h2>
       <p style="font-size:17px;">The hotel provides complimentary use of the exercise studio, sauna and resistance 
         swimming pool facilities on site and is open to residents only.
       </p>  
       <div class="slider-content">
        <div class="slider">
            <img src="img/one.jpg" alt="s1"/>
            <img src="img/two.jpg" alt="s2"/>
            <img src="img/three.jpg" alt="s3"/>
        </div>
        <hr style="width:300px;margin:20px auto;">
      </div>
      <p class="one">
         Keep up with your fitness routine whilst you're away with our free in-house gym. Packed 
         with cardio and resistance equipment and free weights, you can unwind after a busy day 
         in the capital at the 4-star Strand Palace Hotel.
      </p>
      <h3 class="one">Highlights:</h3>
      <ul>
       <li>Cross-trainer and treadmills.</li>
       <li>Stationary bikes and rowing machine.</li>
       <li>Free weights area.</li>
       <li>Floor-to-ceiling mirrors.</li>
       <li>Healthy snacks and juices available at Sacred Cafe.</li>  
      </ul> 
      <h3>Gym facilities:</h3>
      <p style="font-size:17px;">
          All guests over the age of 16 who visit the Strand Palace Hotel are invited to use 
          our in-house fitness room to exercise and unwind.<br><br>
          With a mix of equipment and weights, our gym will cater to you whether you want to 
          do a cardio workout, or if you want to give your muscles some strength training or 
          toning exercises.<br><br>
          Once you've worked up a sweat, cool down at the Sacred Cafe for a healthy snack or 
          a glass of juice, and replenish your energy before you take on the rest of the day.<br><br>
      </p>  
      </div>  
    </section>

    <!-- Footer -->
    
    <footer>
      <div>
        Created By Mohab &copy; 2020
      </div>
    </footer>
  
  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
