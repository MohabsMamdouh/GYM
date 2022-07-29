<?php
    (@include("classes.php")) or die("this file is not found");

    if (!isset($_POST["fullName"])) {
        (@header("location: ../users/coach.php")) or die("this file is not found");
    } else {
        $name = $_POST["fullName"];
        $mail = $_POST["email"];
        $pass = $_POST["password"];
        $mobile = $_POST["mobile"];
        $Height = $_POST["height"];

        $coach = new Coach;
        $coach->setName($name);
        $coach->setMail($mail);
        $coach->setPass($pass);
        $coach->setMobile($mobile);
        $coach->setHeight($Height);

        $coach->addcoach();
    }
?>