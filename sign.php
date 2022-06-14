<?php
include "connection.php";
include "navbar.php"; 
if(isset($_POST['signUp']))
{
    $fullname = $_POST["Full_Name"];
    $country = $_POST["Country"];
    $city = $_POST["City"];
    $phone = $_POST["Phone"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    $stmt = $conn->prepare("SELECT Email FROM user where Email='".$email."'");
    $stmt->execute();
    $result = $stmt->get_result();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
    $row_in4    = $result->fetch_assoc();
    if($row_in4 == NULL){
        $req = "INSERT INTO user (Full_Name, Country, City, Phone, Email, Password)
         values ('$fullname','$country','$city','$phone','$email','$password')";
        $res = mysqli_query($conn, $req);
        header("location: home.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_sign.css">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Italiana&display=swap');
</style>
<body>
<!------------------ form cantact ------------->
    <img class="background_image" src="pictures/Rectangle 123.png" alt="">
        <div class="login_form">
            <div class="form_box">
                <div class="button_box">
                    <div id="btn"></div>
                    <button type="button" class="toggle_btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle_btn" onclick="signUp()">sign up</button>
                </div>
                <form method = "POST" action="server.php" id="login" class="input_group">
                    <input type="text" class="input_field" placeholder="Email" name="Email">
                    <input type="text" class="input_field" placeholder="password" name="Password">
                    <button type="submit" class="submit_btn" name="login">Log In</button>
                </form>
                <form action="sign.php" id="signUp" class="input_group" method = "POST">
                    <input type="text" class="input_field" placeholder="Full Name" name="Full_Name">
                    <input type="text" class="input_field" placeholder="country" name="Country">
                    <input type="text" class="input_field" placeholder="city" name="City">
                    <input type="text" class="input_field" placeholder="Phone" name="Phone">
                    <input type="text" class="input_field" placeholder="email" name="Email">
                    <input type="text" class="input_field" placeholder="password" name="Password">
                    <button type="submit" class="submit_btn" name="signUp">Sign Up</button>
                </form>
            </div>
        </div>
        <p class="copyright_login">©TangierGuides2022 </p>
        <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signUp");
        var z = document.getElementById("btn");

        function signUp(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>
</html> 