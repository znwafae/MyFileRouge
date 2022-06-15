<!------------- navbar -------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav>
        <div class="nav1"></div>
        <div class="navbar">
                <a href="guides.php">GUIDES</a>           
                <a href="about.php">ABOUT</a>
                <a href="gallery.php">GALLERY</a>
                <a href="home.php"><img src="pictures/Logo.png" alt="logo" class="imgLogo" /></a>
                <a href="home.php">HOME</a>
                <a href="cantact.php">CANTACT</a>
                <?php 
                    session_start();
                    if (isset($_SESSION['User_Id'])) {

                ?>
                    <a onclick="return confirm('Are you sure to logout?')" href='logout.php'>LOGOUT</a>
                <?php
                    }else{
                        echo " <a href='sign.php'>LOGIN</a>";
                     }
                ?>
              
        </div> 
</nav>
</body>
</html>