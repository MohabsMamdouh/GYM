<?php
    @(include("../pages/access.php")) or die("this is file is not found");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Gym | Coach</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="../site.webmanifest">
  <link rel="icon" type="image/png" href="../icon.png">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/login.css">
  <link rel="stylesheet" href="../css/player.css">

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
                    <li class="nav-item">
                        <a class="nav-link" href="home.php"><?php echo $_SESSION["Full_Name"] ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Players Functions -->
    <section class="content">
        <div class="container">
            <div class="box add">
                <h5>Add Coach</h5>
            </div>
            <div class="box update">
                <h5>Update Coach</h5>
            </div>
            <div class="box delete">
                <h5>Delete Coach</h5>
            </div>
            <div class="box show">
                <h5>Show All</h5>
            </div>
            <div class="box search">
                <h5>Search Coach</h5>
            </div>
        </div>
    </section>
    <section class="fun">
        <div class="container">
            <div class="res add_fun d-none">
                <form action="" method="">
                    <h4>Add Coach</h4>
                    <div id="addmessage"></div>
                    <label for="afullName" id="lafullName">
                        Coach Name:
                        <input type="text" id="afullName" placeholder="Type Coach Name" required>
                    </label>
                    <label for="aemail" id="laemail">
                        Coach Mail:
                        <input type="email" id="aemail" placeholder="Type Coach Mail" required>
                    </label>
                    <label for="apassword" id="lapassword">
                        Coach Password:
                        <input type="password" id="apassword" placeholder="Type Coach Password" required>
                    </label>
                    <label for="amobile" id="lamobile">
                        Coach Mobile:
                        <input type="tel" id="amobile" placeholder="Type Coach Mobile" required>
                    </label>
                    <label for="aheight" id="laheight">
                        Coach Height:
                        <input type="number" id="aheight" placeholder="Type Coach Height" required>
                    </label>
                    <button type="submit" id="add" class="btn btn-primary">Add Coach</button>
                </form>
            </div>
            <div class="res update_fun d-none">
                <form action="" method="">
                    <h4>Update Coach</h4>
                    <div id="updatemessage"></div>
                    <label for="ufullName" id="lufullName">
                        Coach Name:
                        <input type="text" id="ufullName" placeholder="Type Coach Name to Update his info" required>
                    </label>
                    <label for="uemail" id="luemail">
                        Coach Mail:
                        <input type="email" id="uemail" placeholder="Type Coach Mail">
                    </label>
                    <label for="umobile" id="lumobile">
                        Coach Mobile:
                        <input type="tel" id="umobile" placeholder="Type Coach Mobile">
                    </label>
                    <label for="uheight" id="luheight">
                        Coach Height:
                        <input type="number" id="uheight" placeholder="Type Coach Height">
                    </label>
                    <button type="submit" id="update" class="btn btn-success">Update Coach</button>
                </form>
            </div>
            <div class="res delete_fun d-none">
                <form action="" method="">
                    <h4>Delete Coach</h4>
                    <div id="deletemessage"></div>
                    <label for="CoachName" id="lCoachName">
                        Coach Name:
                        <input type="text" id="CoachName" placeholder="Type Coach Name" required>
                    </label>
                    <button type="submit" id="delete" class="btn btn-danger">Delete Coach</button>
                </form>
            </div>
            <div class="res show_fun d-none">
                <h4>All Coaches</h4>
                <!-- All Coach -->
                <div class="table-responsive">
					<table class="table table bordered" id="CoachNames"></table>
                </div>
            </div>
            <div class="res search_fun form-group d-none">
                <div class="input-group">
                    <h4>Search in Coaches</h4>
                    <span class="input-group-addon">Search</span>
                    <input type="text" id="searchBox" placeholder="Search by Name or Email or Mobile" class="form-control">
                </div>
                <div class="table-responsive">
                    <table class="table table bordered" id="result"></table>
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
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/coach.js"></script>
</body>

</html>
