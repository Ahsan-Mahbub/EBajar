$(document).ready(function () {
    datalist();
    $(document).on("submit", "#sub_category_form", function (e) {
        e.preventDefault();
        let data = $(this).serializeArray();
        $.ajax({
            url: "/admin/sub_category/store",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("Sub Category data added successfully", "Success!");
                $("#close").click();
                $("#sub_category_form").trigger("reset");
            },
            error: function (error) {
                console.log($data);
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
                    url: "/admin/sub_category/"+data,
                    type: "delete",
                    dataType: "json",
                    success: function (response) {
                        datalist();
                        toastr.success("Sub Category data deleted successfully", "Success!");
                    }
                })
            } else {
                swal("Your imaginary Sub Category data is safe!");
            }
        });
    });
    $(document).on("click", "#status", function () {
        let data = $(this).attr("data");

        $.ajax({
            url: "/admin/sub_category/show/"+data,
            type: "get",
            dataType: "json",
            success: function (response) {
                datalist();
                if (response.status === 0) {
                    toastr.success("Sub Category status inactive", "Success!");
                } else {
                    toastr.success("Sub Category status active", "Success!");
                }
            }
        })
    })

    $(document).on("click", ".edit", function () {
        let data = $(this).attr("data");

        $.ajax({
            url: "/admin/sub_category/"+data+"/edit",
            type: "get",
            dataType: "json",
            success: function (response) {
                console.log(response);
                $("#e_category_name").val(response.category_name);
                $("#e_brand_name").val(response.brand_name);
                $("#e_sub_category_name").val(response.sub_category_name);
                $("#sub_category_id").val(response.sub_category_id);
            }
        })
    })

    $(document).on("submit", "#sub_category_update_form", function (e) {
        e.preventDefault();
        let id = $(this).attr("#sub_category_id");
        let data = $(this).serializeArray();
        console.log(id);
        $.ajax({
            url: "/admin/sub_category/update",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("Sub Category data updated successfully", "Success!");
                $("#close2").click();
                $("#sub_category_update_form").trigger("reset");
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

    function datalist(page_link="/admin/sub_category/create") {
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
