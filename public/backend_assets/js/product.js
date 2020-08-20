$(document).ready(function () { 
	datalist()
    let max_field = 3;
    let i = 1;
    let wrapper = $(".input_field");
    let add_button = $("#plus");
    $(add_button).click(function (e) {
        e.preventDefault();
        if (i < max_field) {
            i++;
            $(wrapper).append(`<div><div class="form-group">
                                    <div class="row">
                                        <div class='col-lg-6 col-md-6'>
                                            <div class='card'>
                                                <div class='card-body'>
                                                     <input type='file' id='input-file-now'  name='images[]' class='dropify' />
                                                </div>
                                            </div>
                                        </div>
                                        <button class='btn btn-danger' id='minus'><i class='fa fa-times'></i></button>
                                    </div>
                                    </div></div>`);
            $('.dropify').dropify();
        }
    });

    $(wrapper).on("click", "#minus", function (e) {
        e.preventDefault();
        $(this).closest('div').remove();
        i--;
    });

    // $(document).on('change', '#category_name', function () {
    //     let data = $(this).val();

    //     $.ajax({
    //         url: "/admin/product/category/" + data,
    //         type: "get",
    //         dataType: "json",
    //         success: function (response) {
    //             let b = $();
    //             $.each(response.data, function (i, item) {
    //                 b = b.add("<option value=" + item.sub_category_id + ">" + item.sub_category_name + "</option>")
    //             });
    //             $("#sub_category_name").html(b);
    //         }
    //     })
    // });
    // $(document).on('change','#sub_category_name', function(){
    //     ;
    // });


   $(document).on('change', '#category_name', function () {
        let data = $(this).val();

        $.ajax({
            url: "/admin/product/category/" + data,
            type: "get",
            dataType: "json",
            success: function (response) {
                let b = $();
                $.each(response.data, function (i, item) {
                    b = b.add("<option value=" + item.sub_category_id + ">" + item.sub_category_name + "</option>")
                });
                console.log("#sub_category_name");
                $("#sub_category_name").html(b);
            }
        })
    });

   $(document).on('change', '#sub_category_name', function () {
        let data = $(this).val();

        $.ajax({
            url: "/admin/product/sub_category/" + data,
            type: "get",
            dataType: "json",
            success: function (response) {
                let b = $();
                $.each(response.data, function (i, item) {
                    b = b.add("<option value=" + item.brand_id + ">" + item.brand_name + "</option>")
                });
                console.log("#brand_name");
                $("#brand_name").html(b);
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

    function datalist(page_link="/admin/list") {
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

