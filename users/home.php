<?php
    @(include("../pages/access.php")) or die("this is file is not found");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Gym | Home</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="../site.webmanifest">
  <link rel="icon" type="image/png" href="../icon.png">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/home.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="home.php">Gym</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php"><?php echo $_SESSION["Full_Name"] ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- optioins -->
    <section class="content">
        <div class="container">
            <div class="card coach">
                <img src="../img/30.jpg" alt="Coach">
                <div class="text-content">
                    <h5>Coaches</h5>
                </div>
            </div>
            <div class="card player">
                <img src="../img/players.jpg" alt="Players">
                <div class="text-content">
                    <h5>Players</h5>
                </div>
            </div>
            <div class="card load">
                <img src="../img/load.jpg" alt="Loads">
                <div class="text-content">
                    <h5>Loads</h5>
                </div>
            </div>
            <div class="card media">
                <img src="../img/video.jpg" alt="Media">
                <div class="text-content">
                    <h5>Media</h5>
                </div>
            </div>
            <div class="card Report">
                <img src="../img/report.png" alt="Report">
                <div class="text-content">
                    <h5>Reports</h5>
                </div>
            </div>
        </div>
    </section>
    
  
    <!-- Footer -->
    <footer>
        <div>
            Created By Mohab &copy; 2020
        </div>
    </footer>
  
    <script src="../js/vendor/modernizr-3.8.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.4.1.min.js"><\/script>')</script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set','transport','beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    <script src="../js/home.js"></script>
</body>

</html>
