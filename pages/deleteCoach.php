<?php
    (@include("classes.php")) or die("this file is not found");

    if (!isset($_POST["fullName"])) {
        (@header("location: ../users/coach.php")) or die("this file is not found");
    } else {
        $name = $_POST["fullName"];

        $coach = new Coach;
        $coach->setName($name);

        $coach->deleteCoach();
    }
?>