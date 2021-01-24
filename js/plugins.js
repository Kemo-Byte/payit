// login
$(document).ready(function(){
        
    $('#send').on('click',function(){
        var m = $('#area').val(),
            sub = $('#sub').val();
        if(confirm('Are You Sure !')){
        window.location = "mailto:kamalkafi12@gmail.com?subject=" +  sub + "&body=" + m;
        }
    });


    $("#in").click(function(){
        var username = $("#user").val().trim(),
            password = $("#pass").val().trim();

        if( username != "" && password != "" ){
            $.ajax({
            url:'checkUser.php',
            type:'post',
            data:{username:username,password:password},
            success:function(response){
                var msg = "";
                console.log(response);
                if(response == 1){
                    window.location = "profile.php";
                } else if(response == 2) {
                    msg = "Account is not activated yet!";
                
                $("#message").html(msg);
                $("#message").addClass('alert alert-danger');
                }              
                else{
                    msg = "Invalid username and password!";
                
                $("#message").html(msg);
                $("#message").addClass('alert alert-danger');
                }
            },
            error:function(xhr,status,error){
                console.log(xhr);
                console.log(status);
                console.log(error);
            }
            });
        }else{
                $("#message").html("Empty Field !");
                $("#message").addClass('alert alert-danger');
            }
    });
});




// registeration

$("#sn").click(function(){
    var username = $("#user1").val().trim(),
            password = $("#pass").val().trim(),
            full = $('#full').val().trim(),
            confirm = $('#confirm').val().trim();

            if( username != "" && password != "" && full != "" && confirm != ""){

                $.ajax({
                    method : 'POST',
                    url : 'reg.php',
                    data : {username,password,full,confirm},
                    beforeSend: function() {
                    $("#error").fadeOut();
                    $("#sn").html('<span class="glyphicon glyphicon-transfer"></span>   sending ...');
                    },
                    success : function(response) {
                        if(response == 1){
                            // console.log(response);
                        $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry ! This Username is Exists</div>');
                        $("#sn").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
                        });
                        
                        }
                        if(response == 2){
                            $("#error").fadeIn(1000, function(){
                            $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span>   Sorry Password is Mis match !</div>');
                            $("#sn").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
                            });
                            // console.log(response);
                        } 
                        if(response==3){
                         //$("#sn").html('Signing Up ...');
                         console.log(response);
                        $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span>   You have successfully Registered ! !</div>');
                        $("#sn").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
                        });
                        
                    //    window.location = "login.php";
                     
                        // console.log(response);
                        } 
                        // else {
                        // // $("#error").fadeIn(1000, function(){
                        // // $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>  username !</div>');
                        // // $("#sn").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
                        
                        // // });
                        // console.log(response);
                        // }
                        // console.log(response);
                    }
                });
            }else{
                $("#error").fadeIn(1000, function(){
                    $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>  Empty Field !</div>');
                    $("#sn").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
                    });

            }

            
                
});

