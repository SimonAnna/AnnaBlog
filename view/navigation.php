<head>
    <title>Anna blog :3</title>
    <link type="text/css" rel="stylesheet" href="style.css">
</head>
<div class="nav">
<?php
   require_once(__DIR__ . "/../model/config.php");
       require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
       die(); 
    }
?>
<nav>
    <ul>
        <li><a href="<?php echo $path . "post.php" ?>">Blog Post Form</a></li>
        <li><a href="<?php echo $path . "/../controller/read-posts.php" ?>">Read posts</a></li>
        <li><a href="<?php echo $path . "/../controller/logout-user.php" ?>">Logout</a></li>
    </ul>
</nav>
</div>