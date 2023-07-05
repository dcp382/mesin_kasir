$(function () {
    "use strict";

    // $.validator.setDefaults({
    //     submitHandler: function () {
    //         alert("submitted!");
    //     },
    // });
    $(function () {
        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3,
                },
                password: {
                    required: true,
                    minlength: 5,
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password",
                },
                email: {
                    required: true,
                    email: true,
                },
            },
            messages: {
                name: {
                    required: "Masukkan Nama Anda",
                    minlength: "Nama Minimal 10 Kata",
                },
                password: {
                    required: "Masukkan Password Anda",
                    minlength: "Password Minimal 8 Karakter",
                },
                confirm_password: {
                    required: "Masukkan Password Anda",
                    minlength: "Password Minimal 8 Karakter",
                    equalTo: "Masukkan Kata Sandi Yang Sama",
                },
                email: "Masukkan Email Yang Valid",
            },
            errorPlacement: function (label, element) {
                label.addClass("mt-2 text-danger");
                label.insertAfter(element);
            },
            highlight: function (element, errorClass) {
                $(element).parent().addClass("has-danger");
                $(element).addClass("form-control-danger");
            },
        });
    });
});
