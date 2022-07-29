$(document).ready(function () {
    $(".card").click(function (e) { 
        e.preventDefault();
        if ($(this).hasClass("player")) {
            window.location.href = "../users/player.php";
        }
        if ($(this).hasClass("coach")) {
            window.location.href = "../users/coach.php";
        }
        if ($(this).hasClass("load")) {
            window.location.href = "../users/load.php";
        }
        if ($(this).hasClass("media")) {
            window.location.href = "../users/media.php";
        }
        if ($(this).hasClass("report")) {
            window.location.href = "../users/report.php";
        }
        
    });
});