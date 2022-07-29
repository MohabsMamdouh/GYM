<?php
    session_start();
    (@include('classes.php')) or die("this file is not found");

    if (!isset($_POST["login"])) {
        (@header("location: ../login.php")) or die("this file is not found");
    } else {
        $CoachMail = $_POST["Coach_Email"];
        $CoachPass = $_POST["Coach_Pass"];

        $coach = new Coach;
        $coach->setMail($CoachMail);
        $coach->setPass($CoachPass);

        if ($coach->coachLogin()) {
            $_SESSION['ID'] = $coach->getID();
            $_SESSION['Full_Name'] = $coach->getName();
            $_SESSION['Mail'] = $coach->getMail();
            $_SESSION['Password'] = $coach->getPass();
            $_SESSION['Mobile'] = $coach->getMobile();
            $_SESSION['Height'] = $coach->getHeight();

            (@header('location: ../users/home.php')) or die ("this file is not found");
        }
    }
?>