<?php
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<h1> Signup Form </h1>
<form name="signupForm" id="signupForm">
<input type="submit" id="submit" value="submit">
</form>
?>
$(document).ready(function(){
  $("#submit").click(function(){
    alert("Submit Form");
  })

});
