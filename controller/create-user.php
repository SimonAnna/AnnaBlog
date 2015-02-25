<?php
  require_once(__DIR__ . "/../model/config.php");
  
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
  $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_EMAIL);
  
  echo $password;
  
  $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
  
  echo $salt;
  
  $hashedpassword = crypt($passwoord, $salt);
  
  $query = $_SESSION["connection"]->query("INSERT INTO users SET "
          . "email = '$email',"
          . "username = '$username',"
          . "password = '$hashedpassword',"
          . "salt = '$salt'");
  
  if($query) {
      echo "succesfully created user: $username";
  } 
  else {
      echo "<p>" . $_SESSION["connection"]->error . "</p>";
  }