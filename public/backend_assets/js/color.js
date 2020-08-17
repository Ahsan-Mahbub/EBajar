$(document).ready(function()
{
    datalistcolor()
//    add ajax
$(document).on("submit" , "#Color_form" , function (e){
   e.preventDefault();
    console.log("working");
   var data = $(this).serializeArray();
   $.ajax({
       url      :"/admin/color/store",
       data     :data,
       type     :"post",
       dataType :"json",
       success:function(response){
           swal("done!", "New Color Added", "success");
           $("#close").click();
           $("#Color_form").trigger("reset");
       },
       error:function(error)
       {
            console.log(error);
       }
       });
    });
    //end add ajax


    // delete ajax
    $("#data_lists").on("click" , ".delete", function()
{
var id=$(this).attr('data');
console.log(id);

    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete)
            {
                $.ajax({
                   url:"/admin/color/"+id,
                   type:"delete",
                   dataType:"json",
                    success:function (response) {
                       datalistcolor()
                        swal("done!", "Your Data Deleted Successfully", "success");
                    }
                });
            }
            else
                {
                    swal("Your Data Is Safe :) ")
                }
        });
});
    //delete ajax end

    //edit ajax
    $(document).on("click" , ".edit" , function(){
    let editdata = $(this).attr("data");
    $.ajax({
        url:"/admin/color/"+editdata+"/edit",
        type:"get",
        dataType:"json",
        success:function(response)
        {
            $("#color_name").val(response.color_name);
            $("#color_id").val(response.color_id);
        }
    });
    });
    //end edit ajax

    //update ajax
    $(document).on("submit" , "#color_update_form", function(e)
    {
        e.preventDefault();
        let id = $(this).attr("#color_id");
        let data = $(this).serializeArray();
        console.log(id);
        $.ajax({
            url:"/admin/color/update",
            data:data,
            type:"post",
            dataType:"json",
            success:function (response)
            {
            datalistcolor();
                toastr.success("Brand data updated successfully", "Success!");
             $("#close2").click();
             $("#color_update_form").trigger("reset");
            },
            error:function(error)
            {
                console.log(error);
            }
        });
    });
    //end update ajax

    //datalist ajax
    function datalistcolor()
    {
        $.ajax({
            url   : "/admin/showlist",
            type  :'get',
            dataType: 'html',
            success:function(data)
            {
                $("#data_lists").html(data)
            }
        });
    }
//    end datalist ajax
});
