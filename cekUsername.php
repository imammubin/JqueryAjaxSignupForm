if($_POST){
    
    // searching in user data

    $user="admin"; // you can can this with your database user
    if($_POST["username"]!=$user){
      echo"ok";
    }

}
