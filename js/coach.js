$(document).ready(function () {
    $(".box").click(function (e) { 
        e.preventDefault();
        // Show Section Add Coach
        if ($(this).hasClass("add")) {
            $(".res").addClass("d-none");
            $(".add_fun").removeClass("d-none");
        }

        // Show Section Update Coach
        if ($(this).hasClass("update")) {
            $(".res").addClass("d-none");
            $(".update_fun").removeClass("d-none");
        }

        // Show Section Delete Coach
        if ($(this).hasClass("delete")) {
            $(".res").addClass("d-none");
            $(".delete_fun").removeClass("d-none");
        }

        // Show Section Show All Coaches
        if ($(this).hasClass("show")) {
            $(".res").addClass("d-none");
            $(".show_fun").removeClass("d-none");
        }

        // Show Section Search in Coaches
        if ($(this).hasClass("search")) {
            $(".res").addClass("d-none");
            $(".search_fun").removeClass("d-none");
        }
    });

    // Add Coach
    $("#add").click(function (e) { 
        e.preventDefault();
        var fullName = $("#afullName").val(),
            email = $("#aemail").val(),
            password = $("#apassword").val(),
            mobile = $("#amobile").val(),
            height = $("#aheight").val();

        if (fullName != "" && email != "" && password != "" && mobile != "" && height != "") {
            $.ajax({
                type: "post",
                url: "../pages/addCoach.php",
                data: {
                    fullName:fullName,
                    email:email,
                    password:password,
                    mobile:mobile,
                    height:height,
                },
                success: function(data) {
                    $("#addmessage").html(data);
                    $("#afullName").val("");
                    $("#aemail").val("");
                    $("#apassword").val("");
                    $("#amobile").val("");
                    $("#aheight").val("");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown, data) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); alert("Error: " + XMLHttpRequest);
                    $("#addmessage").html(data);
                } 
            });
        } else {
            if (fullName == "") {
                $("#afullName").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#lafullName").css("color", "rgb(241, 87, 100)");
            }
            if (email == "") {
                $("#aemail").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#laemail").css("color", "rgb(241, 87, 100)");
            }
            if (password == "") {
                $("#apassword").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#lapassword").css("color", "rgb(241, 87, 100)");
            }
            if (mobile == "") {
                $("#amobile").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#lamobile").css("color", "rgb(241, 87, 100)");
            }
            if (height == "") {
                $("#aheight").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#laheight").css("color", "rgb(241, 87, 100)");
            }
        }
    });

    // Update Coach
    $("#update").click(function (e) { 
        e.preventDefault();
        var fullName = $("#ufullName").val(),
            email = $("#uemail").val(),
            mobile = $("#umobile").val(),
            height = $("#uheight").val();

        if (fullName != "") {
            if (email != "" || mobile != "" || height != "") {
                $.ajax({
                    type: "post",
                    url: "../pages/updateCoach.php",
                    data: {
                        fullName:fullName,
                        email:email,
                        mobile:mobile,
                        height:height,
                    },
                    success: function(data) {
                        $("#updatemessage").html(data);
                        $("#ufullName").val("");
                        $("#uemail").val("");
                        $("#umobile").val("");
                        $("#uheight").val("");
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown, data) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); alert("Error: " + XMLHttpRequest);
                        $("#updatemessage").html(data);
                    } 
                });
            }
        } else {
            $("#ufullName").css("border-bottom", "1px solid rgb(241, 87, 100)");
            $("#lufullName").css("color", "rgb(241, 87, 100)");
            if (email == "") {
                $("#uemail").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#luemail").css("color", "rgb(241, 87, 100)");
            }
            if (mobile == "") {
                $("#umobile").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#lumobile").css("color", "rgb(241, 87, 100)");
            }
            if (height == "") {
                $("#uheight").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#luheight").css("color", "rgb(241, 87, 100)");
            }
        }
    });

    // Delete Coach
    $("#delete").click(function (e) { 
        e.preventDefault();
        var fullName = $("#CoachName").val();

        if (fullName != "") {
            $.ajax({
                type: "post",
                url: "../pages/deleteCoach.php",
                data: {
                    fullName:fullName
                },
                success: function(data) {
                    $("#deletemessage").html(data);
                    $("#CoachName").val("");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown, data) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); alert("Error: " + XMLHttpRequest);
                    $("#deletemessage").html(data);
                } 
            });
        } else {
            $("#CoachName").css("border-bottom", "1px solid rgb(241, 87, 100)");
            $("#lCoachName").css("color", "rgb(241, 87, 100)");
        }
    });

    // Diplay All Coaches With number of Player
    setInterval(function(){
        $('#CoachNames').load('../pages/displayCoach.php');
    },350);

    $('#CoachNames').load('../pages/displayCoach.php');

    // Search Coach With Name or Email
    $("#searchBox").keyup(function (e) {
        var searchBox = $(this).val();
        if (searchBox != "") {
            // Show result when user write something
            $(document).bind('focusin.result click.result',function(e) {
                if ($(e.target).closest('#result, #searchBox').length) return;
                $(document).unbind('#result');
            });

            // Send Data of user
            $.ajax({
                type: "POST",
                url: "../pages/searchCoach.php",
                data: {search:searchBox},
                success: function(data) {
                    $("#result").html(data);
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                    alert("Status: " + textStatus); alert("Error: " + errorThrown); alert("Error: " + XMLHttpRequest);
                }
            });
        }
    });
});