$(document).ready(function () {
    $(".box").click(function (e) { 
        e.preventDefault();
        // Show Section Add Player
        if ($(this).hasClass("add")) {
            $(".res").addClass("d-none");
            $(".add_fun").removeClass("d-none");
        }

        // Show Section Update Player
        if ($(this).hasClass("update")) {
            $(".res").addClass("d-none");
            $(".update_fun").removeClass("d-none");
        }

        // Show Section Delete Player
        if ($(this).hasClass("delete")) {
            $(".res").addClass("d-none");
            $(".delete_fun").removeClass("d-none");
        }

        // Show Section Show All Players
        if ($(this).hasClass("show")) {
            $(".res").addClass("d-none");
            $(".show_fun").removeClass("d-none");
        }

        // Show Section Search in Players
        if ($(this).hasClass("search")) {
            $(".res").addClass("d-none");
            $(".search_fun").removeClass("d-none");
        }
    });

    // Add Player
    $("#add").click(function (e) { 
        e.preventDefault();
        var fullName = $("#afullName").val(),
            coachName = $("#acoachName").val(),
            email = $("#aemail").val(),
            mobile = $("#amobile").val(),
            date = $("#adate_o_birth").val();

        if (fullName != "" && coachName != "" && email != "" && mobile != "" && date != "") {
            $.ajax({
                type: "post",
                url: "../pages/addPlayer.php",
                data: {
                    fullName:fullName,
                    coachName:coachName,
                    email:email,
                    mobile:mobile,
                    date:date,
                },
                success: function(data) {
                    $("#addmessage").html(data);
                    $("#afullName").val("");
                    $("#acoachName").val("");
                    $("#aemail").val("");
                    $("#amobile").val("");
                    $("#adate_o_birth").val("");
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
            if (coachName == "") {
                $("#acoachName").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#lacoachName").css("color", "rgb(241, 87, 100)");
            }
            if (email == "") {
                $("#aemail").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#laemail").css("color", "rgb(241, 87, 100)");
            }
            if (mobile == "") {
                $("#amobile").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#lamobile").css("color", "rgb(241, 87, 100)");
            }
            if (date == "") {
                $("#adate_o_birth").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#ladate_o_birth").css("color", "rgb(241, 87, 100)");
            }
        }
    });

    // Update Player
    $("#update").click(function (e) { 
        e.preventDefault();
        var fullName = $("#ufullName").val(),
            coachName = $("#ucoachName").val(),
            email = $("#uemail").val(),
            mobile = $("#umobile").val(),
            date = $("#udate_o_birth").val();

        if (fullName != "") {
            if (coachName != "" || email != "" || mobile != "" || date != "") {
                $.ajax({
                    type: "post",
                    url: "../pages/updatePlayer.php",
                    data: {
                        fullName:fullName,
                        coachName:coachName,
                        email:email,
                        mobile:mobile,
                        date:date,
                    },
                    success: function(data) {
                        $("#updatemessage").html(data);
                        $("#ufullName").val("");
                        $("#ucoachName").val("");
                        $("#uemail").val("");
                        $("#umobile").val("");
                        $("#udate_o_birth").val("");
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
            if (coachName == "") {
                $("#ucoachName").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#lucoachName").css("color", "rgb(241, 87, 100)");
            }
            if (email == "") {
                $("#uemail").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#luemail").css("color", "rgb(241, 87, 100)");
            }
            if (mobile == "") {
                $("#umobile").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#lumobile").css("color", "rgb(241, 87, 100)");
            }
            if (date == "") {
                $("#udate_o_birth").css("border-bottom", "1px solid rgb(241, 87, 100)");
                $("#ludate_o_birth").css("color", "rgb(241, 87, 100)");
            }
        }
    });

    // Delete Player
    $("#delete").click(function (e) { 
        e.preventDefault();
        var fullName = $("#playerName").val();

        if (fullName != "") {
            $.ajax({
                type: "post",
                url: "../pages/deletePlayer.php",
                data: {
                    fullName:fullName
                },
                success: function(data) {
                    $("#deletemessage").html(data);
                    $("#playerName").val("");
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

    // Diplay All Player With Captain Name
    setInterval(function(){
        $('#playerNames').load('../pages/displayPlayer.php');
    },350);

    $('#playerNames').load('../pages/displayPlayer.php');

    // Search Player With Name or Email
    $("#searchBox").keyup(function (e) {
        var searchBox = $(this).val();
        if (searchBox != "") {
            // Show result when user write something
            $(document).bind('focusin.result click.result',function(e) {
                if ($(e.target).closest('#result, #searchBox').length) return;
                $(document).unbind('#result');
            });

            // Send Data of user to search.php
            $.ajax({
                type: "POST",
                url: "../pages/searchPlayer.php",
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