<?php
    (@include("classes.php")) or die("this file is not found");

    if (!isset($_POST["fullName"])) {
        (@header("location: ../users/player.php")) or die("this file is not found");
    } else {
        $name = $_POST["fullName"];
        $coachName = $_POST["coachName"];
        $mail = $_POST["email"];
        $mobile = $_POST["mobile"];
        $DateOBirth = $_POST["date"];

        $player = new Player;
        $player->setName($name);
        $player->setCoachName($coachName);
        $player->setMail($mail);
        $player->setMobile($mobile);
        $player->setDateOBirth($DateOBirth);

        $player->addPlayer();
    }
?>