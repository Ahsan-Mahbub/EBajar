$(document).ready(function(){
    datalist();

    $(document).on("submit", "#brand_form", function (e) {
        e.preventDefault();
        let data = $(this).serializeArray();
        $.ajax({
            url: "/admin/brand/store",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("Brand data added successfully", "Success!");
                $("#close").click();
                $("#brand_form").trigger("reset");
            },
            error: function (error) {
                console.log(error);
            }
        })
    });

    $(document).on("click", ".delete", function () {
        let data = $(this).attr("data");
        console.log(data);

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
                    url: "/admin/brand/"+data,
                    type: "delete",
                    dataType: "json",
                    success: function (response) {
                        datalist();
                        toastr.success("Brand data deleted successfully", "Success!");
                    }
                })
            } else {
                swal("Your imaginary Brand data is safe!");
            }
        });
    });

    $(document).on("click", "#status", function () {
        let data = $(this).attr("data");

        $.ajax({
            url: "/admin/brand/show/"+data,
            type: "get",
            dataType: "json",
            success: function (response) {
                datalist();
                if (response.status === 0) {
                    toastr.success("Brand status inactive", "Success!");
                } else {
                    toastr.success("Brand status active", "Success!");
                }
            }
        })
    })

    $(document).on("click", ".edit", function () {
        let data = $(this).attr("data");

        $.ajax({
            url: "/admin/brand/"+data+"/edit",
            type: "get",
            dataType: "json",
            success: function (response) {
                $("#brand_name").val(response.brand_name);
                $("#description").val(response.description);
                $("#brand_id").val(response.brand_id);
            }
        })
    })

    $(document).on("submit", "#brand_update_form", function (e) {
        e.preventDefault();
        let id = $(this).attr("#brand_id");
        let data = $(this).serializeArray();
        console.log(id);
        $.ajax({
            url: "/admin/brand/update",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("Brand data updated successfully", "Success!");
                $("#close2").click();
                $("#brand_update_form").trigger("reset");
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

    function datalist(page_link="/admin/brand/create") {
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
})