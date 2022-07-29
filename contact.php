<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Gym | Contact</title>
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
        height: 538px;
        margin-bottom: 20px;
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
            <ul class="navbar-nav mr-auto float-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a href="login.php" class="btn btn-outline-primary my-2 my-sm-0">Login as Coach</a>
            </div>
        </div>
    </nav>

    <!-- Login Form -->

    <section class="login_content">
        <form action="" method="post">
            <h3>-- Contact Us --</h3>
            <input type="text" name="Name" id="Name" placeholder="Type Your Name">
            <input type="email" name="Email" id="Email" placeholder="Type Your Email">
            <input type="tel" name="tel" id="tel" placeholder="Telphone">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
            <button type="submit" class="btn btn-outline-success">Send</button>
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