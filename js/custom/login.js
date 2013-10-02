/// <reference path="../vendor/jquery-2.0.0-vsdoc.js" />
$(document).ready(function () {
    //   history.forward(0);   
    $("#loginForm").validate({
        submitHandler: function (form) {

            var str = hex_md5($('#password').val()) + randomNum;
            $('#password').val(hex_md5(str));
            form.submit();
        }
    });
})