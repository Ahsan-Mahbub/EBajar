$(document).ready(function(){
    $("#submit").attr("disabled", 'disabled');
        $("#c_password").keyup(function() {
            var c_password = $(this).val();
            $.ajax({
                url: "password/create",
                type: "get",
                data: {
                    c_password: c_password
                },
                success: function(data)
                {
                    if (data == "matched") 
                    {
                        $(".icon").html("<i style='color:green;float: right;margin-top: -25px;' class ='fas fa-check'></i>");
                        $("#submit").attr("disabled", 'disabled');
                        $("#n_password").removeAttr("disabled", 'disabled');
                        $("#r_password").removeAttr("disabled", 'disabled');

                        $("#r_password").keyup(function() {
                            var r_password = $(this).val();
                            var n_password = $("#n_password").val();

                            if (r_password != '' && r_password == n_password) {
                                $(".r-icon").html("<i style='color:green;float: right;margin-top: -25px;' class ='fas fa-check'></i>");
                                $("#submit").removeAttr("disabled", 'disabled');
                                console.log("Password Matched")
                            } else {
                                $(".r-icon").html("<i style='color:red;float: right;margin-top: -25px;' class ='fas fa-window-close'></i>");
                                $("#submit").attr("disabled", 'disabled');
                            }
                        });

                    }
                    else
                    {
                        $(".icon").html("<i style='color:red;float: right;margin-top: -25px;' class ='fas fa-window-close'></i>");
                        $("#submit").attr("disabled", 'disabled');
                        $("#n_password").attr("disabled", 'disabled');
                        $("#r_password").attr("disabled", 'disabled');
                    }

                }

            })

        });
});