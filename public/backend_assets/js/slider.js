$(document).ready(function () {
  datalist();
  $(document).on("submit", "#slider_form", function (e) {
    e.preventDefault();
    var data = $('#slider_form').get(0);
    $.ajax({
        url:"/admin/slider/store",
        type:'post',
        data: new FormData(data),
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        success:function(data){
          if (data.status==201){
          datalist();
          toastr.success("Slider data added successfully", "Success!");
          $("#close").click();
          $("#slider_form").trigger("reset");
          }
        },
        error:function(errors){
          console.log(error);
        }
    });
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
                    url: "/admin/slider/"+data,
                    type: "delete",
                    data:{"_token": "{{ csrf_token() }}"},
                    dataType: "json",
                    success: function (response) {
                        datalist();
                        toastr.success("Slider data deleted successfully", "Success!");
                    }
                })
            } else {
                swal("Your imaginary SLider data is safe!");
            }
        });
    });

  $("#data_lists").on("click", ".page-link", function (e) {
        e.preventDefault();
        let page_link = $(this).attr('href');
        datalist(page_link);
    });

    $(document).on("keyup", ".search", function () {
        datalist();
    });

    function datalist(page_link = "/admin/slider/create") {
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