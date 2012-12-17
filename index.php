<html>
    <head> 
        <title> Jquery Ajax Signup Form | www.imammubin.com </title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <body>
        <h1> Signup Form </h1>
        
        <form name="signupForm" id="signupForm">
            <input type="text" id="username" name="username" value=""> <div id="cekUsername"></div>
            <input type="text" id="password" name="password" value=""> <div id="cekPassword"></div>
            <input type="text" id="password2" name="password2" value=""> <div id="cekPassword2"></div>
            <input type="text" id="email" name="email" value=""> <div id="cekEmail"></div>
            <input type="submit" id="submit" value="submit">
        </form>
        <div id="result"></div>
        
        <script type="text/javascript">
            $(document).ready(function(){
          
                $("#username").keyUp(function(){
                    var username=$("#username").val();
                    $.post("cekUsername.php",dataString,function(data){
                        if(data)=="ok"{
                            $("#cekUsername").html("ok");
                        }else{
                            $("#cekUsername").html("try another username");
                        }
                    });
                });

                $("#password").keyUp(function(){
                    var lenPW=$("#password").val();
                        if(lenPW>5)"{
                            $("#cekPassword").html("ok");
                        }else{
                            $("#cekPassword").html("Password must be in 6 character");
                        }
                 });


                $("#password2").keyUp(function(){
                    var password=$("#password").val();
                    var password2=$("#password2").val();
                        if(password==password2)"{
                            $("#cekPassword2").html("ok);
                        }else{
                            $("#cekPassword2").html("Password not same");
                        }
                 });

                $("#submit").click(function(){
                    var dataString=$("#signupForm").serialize();
                    $.post("signupProses.php",dataString,function(data){
                        if(data)=="ok"{
                            $("#result").html("signup succes, please check your email..");
                        }else{
                            $("#result").html("signup fail..");
                        }
                    });
                });

            });
        </script>
        
        <div id="footer"> from: <a href="http://imammubin.com">http://imammubin.com</a></div>
        
    </body>
</html>
