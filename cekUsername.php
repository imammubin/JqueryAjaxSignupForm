if($_POST){
    
    // searching in user data

    $user="admin"; // you can change this with your database username
    if($_POST["username"]!=$user){
      echo"ok";
    }

}
