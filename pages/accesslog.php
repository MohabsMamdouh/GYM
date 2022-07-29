<?php
    session_start();
    if(isset( $_SESSION['ID']) && !empty($_SESSION['ID'])){
        (@header("location: users/home.php")) or die("this file is not found");
    } else {
        return true;
    }

?> 