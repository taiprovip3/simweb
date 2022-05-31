$(document).ready(function(){

    $(window).keyup(function(e){
        if (e.key === "Escape") { // escape key maps to keycode `27`
            $(".generalModal").hide();
        }
    });
    $(window).scroll(function() {
        var getLen = $("*").scrollTop();
        if(getLen >= 1000){
            $("#iPerson").css("color","unset");
        }else{
            $("#iPerson").css("color","white");
        }
    });

    //Click iPerson
    $("#iPerson > p[id='anonymous']").click(function(){
        $("#authForm").show();
    });
    $("#closeForm").click(function(){
        $("#authForm").hide();
    });

    //ChangeForm
    $("#changeToRegister").click(function(){
        $("#loginForm").hide();
        $("#regisForm").show();
    });
    $("#changeToLogin").click(function(){
        $("#regisForm").hide();
        $("#loginForm").show();
    });

    //Click đăng ký
    $("#register").click(function(){
        var valid_email = false;
        var valid_password = false;
        var valid_repassword = false;

        var error_email = $("span[id='error-email']");
        var error_password = $("span[id='error-password']");
        var error_repassword = $("span[id='error-repassword']");

        var email = $("#regisForm").find("input[id='email']").val();
        var password = $("#regisForm").find("input[id='password']").val();
        var repassword = $("#regisForm").find("input[id='repassword']").val();

        var regex_email = /\S+@\S+\.\S+/;
        if(regex_email.test(email)){
            valid_email = true;
            error_email.hide();
        } else{
            valid_email = false;
            error_email.show();
        }

        var regex_password = /^[a-zA-Z0-9]{8,}$/;
        if(regex_password.test(password)){
            valid_password = true;
            error_password.hide();
        }else{
            valid_password = false;
            error_password.show();
        }

        if(repassword === password && repassword != ""){
            valid_repassword = true;
            error_repassword.hide();
        } else{
            valid_repassword = false;
            error_repassword.show();
        }

        if(valid_email == true && valid_password == true && valid_repassword == true){
            $("#regisForm").children("form").submit();
        }
    });

    $("form[id='regisFormSubmit']").submit(function(ev){
        ev.preventDefault();
        $.ajax({
            type: 'post',
            url: "./process/register.php",
            data: $(this).serialize(),
            datatype: 'html',
            success: function(result){
                if(result === "409"){
                    $("#announcer").attr('class', 'alert alert-danger');
                    $("#announcer").html("<strong>Lỗi!</strong> Tài khoản đã có người sử dụng.");
                    $("#announcer").show().fadeOut(7000);
                }else {
                    if(result === "200"){
                        $("#announcer").attr('class', 'alert alert-success');
                        $("#announcer").html("Đăng ký tài khoản thành công <strong><i class='fas fa-check-circle'></i></strong>");
                        $("#announcer").show().fadeOut(7000);
                        var email = $("#regisForm").find("input[id='email']").val();
                        $("#regisForm").hide();
                        $("#loginForm").show();
                        $("#loginForm").find("input[type='email']").val(email);
                        $("#loginForm").find("input[type='password']").focus();
                    }
                    if(result === "404"){
                        $("#announcer").attr('class', 'alert alert-danger');
                        $("#announcer").html("<strong>Lỗi!</strong> Đã xảy ra lỗi không xác định.");
                        $("#announcer").show().fadeOut(7000);
                    }
                }
            }
        });
    });

    //focus input register
    $("#regisForm").find("input").focus(function(){

        var error_email = $("span[id='error-email']");
        var error_password = $("span[id='error-password']");
        var error_repassword = $("span[id='error-repassword']");

        inputElement = $(this).attr('id');
        if(inputElement === "email"){
            error_email.hide();
        } else{
            if(inputElement === "password"){
                error_password.hide();
            } else{
                error_repassword.hide();
            }
        }
    });

    //rating hover
    $("#star1").hover(function(){
        $(this).attr('class', 'fas fa-star fa-5x');
        $("#star2").attr('class', 'far fa-star fa-5x');
        $("#star3").attr('class', 'far fa-star fa-5x');
        $("#star4").attr('class', 'far fa-star fa-5x');
        $("#star5").attr('class', 'far fa-star fa-5x');
    });
    $("#star2").hover(function(){
        $(this).attr('class', 'fas fa-star fa-5x');
        $("#star1").attr('class', 'fas fa-star fa-5x');
        $("#star3").attr('class', 'far fa-star fa-5x');
        $("#star4").attr('class', 'far fa-star fa-5x');
        $("#star5").attr('class', 'far fa-star fa-5x');
    });
    $("#star3").hover(function(){
        $(this).attr('class', 'fas fa-star fa-5x');
        $("#star1").attr('class', 'fas fa-star fa-5x');
        $("#star2").attr('class', 'fas fa-star fa-5x');
        $("#star4").attr('class', 'far fa-star fa-5x');
        $("#star5").attr('class', 'far fa-star fa-5x');
    });
    $("#star4").hover(function(){
        $(this).attr('class', 'fas fa-star fa-5x');
        $("#star1").attr('class', 'fas fa-star fa-5x');
        $("#star2").attr('class', 'fas fa-star fa-5x');
        $("#star3").attr('class', 'fas fa-star fa-5x');
        $("#star5").attr('class', 'far fa-star fa-5x');
    });
    $("#star5").hover(function(){
        $(this).attr('class', 'fas fa-star fa-5x');
        $("#star1").attr('class', 'fas fa-star fa-5x');
        $("#star2").attr('class', 'fas fa-star fa-5x');
        $("#star3").attr('class', 'fas fa-star fa-5x');
        $("#star4").attr('class', 'fas fa-star fa-5x');
    });

    //rating click
    $("#rate").click(function(){
        $("#rating-box").show();
    });
    $("#rating-close-i").click(function(){
        $(this).parent().parent().hide();
    });
    $("#rating-box").children("i").click(function(){
        var temp_star = $(this).attr('id');
        var star_rated = temp_star.substring(4);
        $.ajax({
            type: "POST",
            url: "./process/rate.php",
            data: {star: star_rated},
            datatype: 'html',
            success: function(result){
                alert(result);
            }
        });
        $("#rate").hide();
        $("#rating-box").hide();
        setTimeout(() => {
            $("#rate").show();
        }, 20000);
    });

});