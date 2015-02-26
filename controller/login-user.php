<!--this is how you log in-->
<html class="body">
    <head>
    <title>Anna blog :3</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<div class="design">
<?php
require_once(__DIR__ . "/../model/config.php");

 $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
 $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_EMAIL);
 
 $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
 
 if($query->num_rows == 1) {
     $row = $query->fetch_array();
     
     if($row["password"] === crypt($password, $row["salt"])) {
         $_SESSION["authenticated"] = true;
         echo "<p>login was successsful</p>";
        
       
     }
     else {
         echo "<p>Invalid username and/or password</p>";
     }
 } 
 else {
     echo "<p>Invalid username and/or password</p>";
 }

?>
                        
<a  class=list-group-item href="../index.php">Main Page :3</a> 
                        


</div>
</html>
