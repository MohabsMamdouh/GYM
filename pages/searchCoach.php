<?php
    (@include("classes.php")) or die("this file is not found");
    $q = $_POST["search"];
    $coach = new Coach;
    $coach->setSearch($q);
    $coach->searchcoach();
?>