$(document).ready(function(){
	datalist();
	$(document).on("submit", "#category_form", function (e) {
        e.preventDefault();
        let data = $(this).serializeArray();
        $.ajax({
            url: "/admin/category/store",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
            	datalist();
                toastr.success("Category data added successfully", "Success!");
                $("#close").click();
                $("#category_form").trigger("reset");
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
                    url: "/admin/category/"+data,
                    type: "delete",
                    dataType: "json",
                    success: function (response) {
                        datalist();
                        toastr.success("Category data deleted successfully", "Success!");
                    }
                })
            } else {
                swal("Your imaginary Category data is safe!");
            }
        });
    });

    $(document).on("click", "#status", function () {
        let data = $(this).attr("data");

        $.ajax({
            url: "/admin/category/show/"+data,
            type: "get",
            dataType: "json",
            success: function (response) {
                datalist();
                if (response.status === 0) {
                    toastr.success("Category status inactive", "Success!");
                } else {
                    toastr.success("Category status active", "Success!");
                }
            }
        })
    })
    $(document).on("click", ".edit", function () {
        let data = $(this).attr("data");

        $.ajax({
            url: "/admin/category/"+data+"/edit",
            type: "get",
            dataType: "json",
            success: function (response) {
                $("#category_name").val(response.category_name);
                $("#category_id").val(response.category_id);
            }
        })
    })
    $(document).on("submit", "#category_update_form", function (e) {
        e.preventDefault();
        let id = $(this).attr("#category_id");
        let data = $(this).serializeArray();
        console.log(id);
        $.ajax({
            url: "/admin/category/update",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("Category data updated successfully", "Success!");
                $("#close2").click();
                $("#category_update_form").trigger("reset");
            },
            error: function (error) {
                console.log(error);
            }
        })
    });

    $(document).on("submit", "#division_update_form", function (e) {
        e.preventDefault();
        let id = $(this).attr("#division_id");
        let data = $(this).serializeArray();
        console.log(id);
        $.ajax({
            url: "/admin/division/update",
            data: data,
            type: "post",
            dataType: "json",
            success: function (response) {
                datalist();
                toastr.success("Division data updated successfully", "Success!");
                $("#close2").click();
                $("#division_update_form").trigger("reset");
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

    function datalist(page_link="/admin/category/create") {
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