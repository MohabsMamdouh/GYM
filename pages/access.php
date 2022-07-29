<?php
    session_start();
    if(isset($_SESSION['ID']) && !empty($_SESSION['ID'])){
        return true;
    } else {
        (@header("location: ../login.php?login-first")) or die("this file is not found");
    }

?> 