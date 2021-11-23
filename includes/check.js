$(document).ready(function () {

    $('#signIN').click(function (e) {
        e.preventDefault();
        var password = $('#password').val();
        var username = $("#username").val();
        $.ajax({
            url: 'user.php',
            method: "POST",
            data: ({username: username, password: password}),
            dataType: "html",
            success: function (data) {
                if (data == false) {
                    $('#res').text('Wrong password or username');
                    $("#res").addClass('red');
                    $("#res").removeClass('green');
                } else {

                    $("#res").removeClass('red');
                    $("#res").addClass('green');
                    document.location.href = 'index.php';
                }
            }

        })

    })

    $('#username').bind('blur', function () {
        var username = $("#username").val();
        $.ajax({
            url: "user.php",
            method: "POST",
            data: ({username: username}),
            dataType: "html",


            success: function (data) {

                if (data == true) {
                    $('#signIN').prop('disabled', true);
                    $("#res").text("enter your password");
                    $("#res").addClass('green');
                    $("#res").removeClass('red');
                    $('#password').prop('disabled', false);
                    $('#sff').click(function () {
                        $('#signIN').prop('disabled', false);
                    })
                } else {
                    $("#res").text("Unregistered username");
                    $("#res").addClass('red');
                    $("#res").removeClass('green');
                    $('#signIN').prop('disabled', true);
                    $('#password').prop('disabled', true);
                    $('#sff').click(function () {
                        $('#signIN').prop('disabled', true);
                    })
                }
            }
        })
    })
})
