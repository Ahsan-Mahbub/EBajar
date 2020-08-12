$(document).ready(function () {
    datalist();
    $(document).on("submit", "#sub_district_form", function (e) {
        e.preventDefault();
        let data = $(this).serializeArray();
        $.ajax({
            url: "/admin/sub_district/store",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("Sub District data added successfully", "Success!");
                $("#close").click();
                $("#sub_district_form").trigger("reset");
            },
            error: function (error) {
                console.log(error);
            }
        })
    });
    $(document).on("click", ".delete", function () {
        let data = $(this).attr("data");

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "/admin/sub_district/"+data,
                    type: "delete",
                    dataType: "json",
                    success: function (response) {
                        datalist();
                        toastr.success("Sub District data deleted successfully", "Success!");
                    }
                })
            } else {
                swal("Your imaginary sub district data is safe!");
            }
        });
    });
    $(document).on("click", "#status", function () {
        let data = $(this).attr("data");

        $.ajax({
            url: "/admin/sub_district/show/"+data,
            type: "get",
            dataType: "json",
            success: function (response) {
                datalist();
                if (response.status === 0) {
                    toastr.success("Sub District status inactive", "Success!");
                } else {
                    toastr.success("Sub District status active", "Success!");
                }
            }
        })
    })

    $(document).on("click", ".edit", function () {
        let data = $(this).attr("data");

        $.ajax({
            url: "/admin/sub_district/"+data+"/edit",
            type: "get",
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#district_name").val(response.district_name);
                $("#sub_district_name").val(response.sub_district_name);
                $("#sub_district_id").val(response.sub_district_id);
            }
        })
    })

    $(document).on("submit", "#sub_district_update_form", function (e) {
        e.preventDefault();
        let id = $(this).attr("#sub_district_id");
        let data = $(this).serializeArray();
        console.log(id);
        $.ajax({
            url: "/admin/sub_district/update",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("Sub District data updated successfully", "Success!");
                $("#close2").click();
                $("#sub_district_update_form").trigger("reset");
            },
            error: function (error) {
                console.log(error);
            }
        })
    });

    $("#data_lists").on("click", ".page-link", function(e) {
        e.preventDefault();
        let page_link = $(this).attr('href');
        datalist(page_link);
    });

    $(document).on("keyup", ".search", function () {
        datalist();
    });

    function datalist(page_link="/admin/sub_district/create") {
        let search = $(".search").val();

        $.ajax({
            url: page_link,
            data:{search : search},
            type: "get",
            datatype: "html",
            success: function (response) {
                $("#data_lists").html(response);
            }
        })
    }

});
