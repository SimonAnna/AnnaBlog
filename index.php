
<html class="body">
<head>
    <title>Anna blog :3</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>

<div class="design">
<h1>Welcome to my blog :3</h1>
    <?php
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/header.php");
if (authenticateUser()){
require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/view/footer.php");  
?>
<nav class="list-group">
                        
                        <a  class=list-group-item href="login.php">Login :3</a> 
                        <a  class=list-group-item href="register.php">Register :3</a>

                    </nav>
</div>
</html>



