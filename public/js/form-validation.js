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
                no_telepon: {
                    required: true,
                    minlength: 10,
                    maxlength: 12,
                    digits: true,
                },
                alamat: {
                    required: true,
                    minlength: 8,
                },
                nama_pelanggan: {
                    required: true,
                    minlength: 5,
                },

                alamat_pelanggan: {
                    required: true,
                    minlength: 8,
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
                no_telepon: {
                    required: "Masukkan No. Telepon",
                    minlength: "No Telepon Maksimal 10 nomor",
                    maxlength: "No Telepon Maksimal 13 nomor",
                    digits: "Masukkan Hanya Angka",
                },
                alamat: {
                    required: "Masukkan Alamat ",
                    minlength: "Alamat Minimal 8 Karakter",
                },
                nama_pelanggan: {
                    required: "Masukkan Nama Pelanggan",
                    minlength: "Nama Minimal 5 karakter",
                },
                alamat_pelanggan: {
                    required: "Masukkan Alamat Pelanggan",
                    minlength: "Alamat Minimal 8 karakter",
                },
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
