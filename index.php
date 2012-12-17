<html>
    <head> 
        <title> Jquery Ajax Signup Form | www.imammubin.com </title>
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    </head>
    <body>
        <h1> Signup Form </h1>
        
        <form name="signupForm" id="signupForm">
            <input type="text" id="username" name="username" value="">
            <input type="text" id="password" name="password" value="">
            <input type="text" id="password2" name="password2" value="">
            <input type="text" id="email" name="email" value="">
            <input type="submit" id="submit" value="submit">
        </form>
        <div id="result"></div>
        
        <script type="text/javascript">
            $(document).ready(function(){
          
                $("#submit").click(function(){
                    var dataString=$("#signupForm").serialize();
                        $.post("signupProses.php",dataString,function(data){
                        if(data)=="ok"{
                            $("#result").html("signup succes, please check your email..");
                        }else{
                            $("#result").html("signup fail..");
                        }
                    })
                })
        
            });
        </script>
        
        <div id="footer"> from: <a href="http://imammubin.com">http://imammubin.com</a></div>
        
    </body>
</html>
