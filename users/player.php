<?php
    @(include("../pages/access.php")) or die("this is file is not found");
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Gym | Player</title>
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
                <h5>Add Player</h5>
            </div>
            <div class="box update">
                <h5>Update Player</h5>
            </div>
            <div class="box delete">
                <h5>Delete Player</h5>
            </div>
            <div class="box show">
                <h5>Show All</h5>
            </div>
            <div class="box search">
                <h5>Search Player</h5>
            </div>
        </div>
    </section>
    <section class="fun">
        <div class="container">
            <div class="res add_fun d-none">
                <form action="" method="">
                    <h4>Add Player</h4>
                    <div id="addmessage"></div>
                    <label for="afullName">
                        Player Name:
                        <input type="text" id="afullName" placeholder="Type Player Name" required>
                    </label>
                    <label for="acoachName">
                        Coach Name:
                        <input type="text" id="acoachName" placeholder="Type Coach Name" required>
                    </label>
                    <label for="aemail">
                        Player Mail:
                        <input type="email" id="aemail" placeholder="Type Player Mail" required>
                    </label>
                    <label for="amobile">
                        Player Mobile:
                        <input type="tel" id="amobile" placeholder="Type Player Mobile" required>
                    </label>
                    <label for="adate_o_birth">
                        Date of Birth:
                        <input type="date" id="adate_o_birth" placeholder="Date Of Birth" required>
                    </label>
                    <button type="submit" id="add" class="btn btn-primary">Add Player</button>
                </form>
            </div>
            <div class="res update_fun d-none">
                <form action="" method="">
                    <h4>Update Player</h4>
                    <div id="updatemessage"></div>
                    <label for="ufullName">
                        Player Name:
                        <input type="text" id="ufullName" placeholder="Type Player Name to Update his info" required>
                    </label>
                    <label for="ucoachName">
                        Coach Name:
                        <input type="text" id="ucoachName" placeholder="Type Coach Name">
                    </label>
                    <label for="uemail">
                        Player Mail:
                        <input type="email" id="uemail" placeholder="Type Player Mail">
                    </label>
                    <label for="umobile">
                        Player Mobile:
                        <input type="tel" id="umobile" placeholder="Type Player Mobile">
                    </label>
                    <label for="udate_o_birth">
                        Date of Birth:
                        <input type="date" id="udate_o_birth" placeholder="Date Of Birth">
                    </label>
                    <button type="submit" id="update" class="btn btn-success">Update Player</button>
                </form>
            </div>
            <div class="res delete_fun d-none">
                <form action="" method="">
                    <h4>Delete Player</h4>
                    <div id="deletemessage"></div>
                    <label for="playerName">
                        Player Name:
                        <input type="text" id="playerName" placeholder="Type Player Name" required>
                    </label>
                    <button type="submit" id="delete" class="btn btn-danger">Delete Player</button>
                </form>
            </div>
            <div class="res show_fun d-none">
                <h4>All Player</h4>
                <div class="table-responsive">
					<table class="table table bordered" id="playerNames"></table>
                </div>
            </div>
            <div class="res search_fun form-group d-none">
                <div class="input-group">
                    <h4>Search in Players</h4>
                    <span class="input-group-addon">Search</span>
                    <input type="text" name="searchBox" id="searchBox" placeholder="Search by Name or Email" class="form-control">
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
    <script src="../js/player.js"></script>
</body>

</html>
