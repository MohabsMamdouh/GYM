<?php
    include("classes.php");
    $q = $_POST["search"];
    $player = new Player;
    $player->setSearch($q);
    $player->searchPlayer();
?>