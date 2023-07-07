$(function () {
    $(".btndeletecust").click(function (e) {
        e.preventDefault();
        var deleteid = $(this).attr("data-id");
        console.log(deleteid);

        swal({
            title: "Apakah anda yakin?",
            text: "Setelah dihapus, Anda tidak dapat memulihkan Data ini lagi!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                            "content"
                        ),
                    },
                    type: "DELETE",
                    url: "/admin/customer/delete/" + deleteid,
                    data: {
                        _token: "{!! csrf_token() !!}",
                    },
                    success: function (response) {
                        swal(response.status, {
                            icon: "success",
                        }).then((result) => {
                            location.reload();
                        });
                    },
                });
            }
        });
    });
});
