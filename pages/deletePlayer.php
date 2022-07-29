<?php
    (@include("classes.php")) or die("this file is not found");

    if (!isset($_POST["fullName"])) {
        (@header("location: ../users/player.php")) or die("this file is not found");
    } else {
        $name = $_POST["fullName"];

        $player = new Player;
        $player->setName($name);

        $player->deletePlayer();
    }
?>