// login
$(document).ready(function(){
        

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
                    window.location = "Dashboard.php";
                }else{
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





// registeration

$("#sn").click(function(){
    var username = $("#user1").val().trim(),
            password = $("#pass").val().trim(),
            full = $('#full').val().trim(),
            confirm = $('#confirm').val().trim();

            if( username != "" && password != "" && full != "" && confirm != ""){

                $.ajax({
                    method : 'post',
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
 
                         console.log(response);
                        $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span>   You have successfully Registered ! !</div>');
                        $("#sn").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
                        });
                        
                       window.location = "Dashboard.php";
                     
                        // console.log(response);
                        } 
                   
                    }
                });
            }else{
                $("#error").fadeIn(1000, function(){
                    $("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>  Empty Field !</div>');
                    $("#sn").html('<span class="glyphicon glyphicon-log-in"></span>   Create Account');
                    });

            }

            
                
});



$("#deactivate").click(function(){

    // console.log($(this).data('target'));
    let c = $(this).data('target');
    $.ajax({
    url:'deactivate.php',
    method:'post',
    data:{c},
    success:function(one,two,three){
        // console.log($(this).data('target'))
        console.log(one);
        console.log(two);
        console.log(three);
        // window.Reload();
        // window.location = "members.php";
        
    },
    error:function(xhr,status,error){
        console.log(xhr);
        console.log(status);
        console.log(error);
    }
    });

});





$("#activate").click(function(){

        // console.log($(this).data('view'));
        let a = $(this).data('view');
        $.ajax({
        url:'activate.php',
        method:'post',
        data:{a},
        success:function(one,two,three){
            // console.log($(this).data('a'));
            console.log(one);
            console.log(two);
            console.log(three);
            // window.Reload();
            // window.location = "members.php";
            
        },
        error:function(xhr,status,error){
            console.log(xhr);
            console.log(status);
            console.log(error);
        }
        });
    
});

// $("#delete").click(function(){
//     confirm('Are you sure?' , function(){
//     // console.log($(this).data('view'));
//     let cardid = $(this).data('a');
//     $.ajax({
//     url:'activate.php',
//     method:'post',
//     data:{cardid},
//     success:function(one,two,three){
//         console.log($(this).data('a'));
//         console.log(one);
//         console.log(two);
//         console.log(three);
//         // window.Reload();
//         window.location = "members.php";
        
//     },
//     error:function(xhr,status,error){
//         console.log(xhr);
//         console.log(status);
//         console.log(error);
//     }
//     });
// });
// });



// end of document ready 
});