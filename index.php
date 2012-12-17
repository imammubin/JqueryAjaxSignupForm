<html>
<head> 
<title> Jquery Ajax Signup Form </title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
<h1> Signup Form </h1>
<form name="signupForm" id="signupForm">
<input type="submit" id="submit" value="submit">
</form>
<script type="text/javascript">
$(document).ready(function(){
  
  $("#submit").click(function(){
    alert("Submit Form");
  })

});
</script>
<div id="footer"> from: <a href="http://imammubin.com">http://imammubin.com</a></div>
</body>
</html>
