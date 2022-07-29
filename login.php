<?php
    @(include("pages/accesslog.php")) or die("this is file is not found");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Gym | Login</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="icon" type="image/png" href="icon.png">
  <!-- Place favicon.ico in the root directory -->


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">

  <meta name="theme-color" content="#fafafa">
  <style>
      .login_content {
        margin-top: 100px;
      }

      .alert-danger {
        display: block;
        width: 90%;
        margin: auto;
        text-align: center;
        font-weight: 500;
      }
  </style>
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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
            <a href="login.php" class="btn btn-outline-primary my-2 my-sm-0">Login as Coach</a>
            </div>
        </div>
    </nav>

    <!-- Login Form -->

    <section class="login_content">
        <form action="pages/login.php" method="post">
            <h3>-- Login Coach --</h3>
            <?php
                if (isset($_GET["error"])) {
                    ?>
                    <span class="alert alert-danger" role="alert">Your Email or your Password Is Wrong</span>
                    <?php
                }
            ?>
            <input type="email" name="Coach_Email" id="Coach_Email" placeholder="Type Your Email">
            <input type="password" name="Coach_Pass" id="Coach_Pass" placeholder="Type Your Password">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </form>
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
