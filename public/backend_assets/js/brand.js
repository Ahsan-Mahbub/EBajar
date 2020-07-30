$(document).ready(function () {
    datalist();
    $(document).on("submit", "#brand_form", function (e) {
        e.preventDefault();
        let data = $(this).serializeArray();
        $.each(data, function (key, value) {
            $("#" + data[key].name).html("");
        })
        $.ajax({
            url: "/admin/brand/store",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("brand data added successfully", "Success!");
                $("#close").click();
                $("#brand_form").trigger("reset");
            },
            error: function (error) {
                if (error.status === 422) {
                    toastr.warning("Field is empty", "Warning!");
                } else {
                    toastr.error("Application errors", "Error!");
                }
                $.each(error.responseJSON.errors, function (i, value) {
                    $("#" + i).html(value[0]);
                })
            }
        })
    });
    
    $("#data_lists").on("click", ".page-link", function (e) {
        e.preventDefault();
        let page_link = $(this).attr('href');
        datalist(page_link);
    });

    $(document).on("keyup", ".search", function () {
        datalist();
    });

    function datalist(page_link = "/admin/brand/create") {
        let search = $(".search").val();

        $.ajax({
            url: page_link,
            data: {search: search},
            type: "get",
            datatype: "html",
            success: function (response) {
                $("#data_lists").html(response);
            }
        })
    }

});
