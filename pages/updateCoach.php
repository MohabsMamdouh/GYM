<?php
    (@include("classes.php")) or die("this file is not found");

    if (!isset($_POST["fullName"])) {
        (@header("location: ../users/coach.php")) or die("this file is not found");
    } else {
        $name = $_POST["fullName"];
        $mail = $_POST["email"];
        $mobile = $_POST["mobile"];
        $Height = $_POST["height"];

        $coach = new Coach;
        $coach->setName($name);
        $coach->setMail($mail);
        $coach->setMobile($mobile);
        $coach->setHeight($Height);

        $coach->updatecoach();
    }
?>