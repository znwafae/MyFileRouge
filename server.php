<?php
include "connection.php";
if(isset($_POST['login'])){
    $email = $_POST["Email"];
    $password = $_POST["Password"];

    $sql = "select * from user where email='".$email."'AND password='".$password."' limit 1"; 
    $result = mysql_query($sql);

    if(mysql_num_rows($result)==1){
        echo"you have successfully logged in";
        exit();
    }
    else{
        echo" you have entered incorrect password";
        exit();
    }
}





































// if(isset($_POST['signUp']))
// {
//     $fullname = $_POST["Full_Name"];
//     $country = $_POST["Country"];
//     $city = $_POST["City"];
//     $phone = $_POST["Phone"];
//     $email = $_POST["Email"];
//     $password = $_POST["Password"];

//     $stmt = $conn->prepare("SELECT Email FROM user where Email='".$email."'");
//     $stmt->execute();
//     $result = $stmt->get_result();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
//     $row_in4    = $result->fetch_assoc();
//     if($row_in4 == NULL){
//         $req = "INSERT INTO user (Full_Name, Country, City, Phone, Email, Password)
//          values ('$fullname','$country','$city','$phone','$email','$password')";
//         $res = mysqli_query($conn, $req);
//         header("location: home.php");
//     }
    
    


// }
// if(isset($_POST['submit'])){
//     $first      = $_POST['first'];
//     $last       = $_POST['last'];
//     $email      = $_POST['email'];
//     $phone      = $_POST['phone'];
//     $password   = $_POST['password'];
//     $stmt = $conn->prepare("select email  FROM client where email='".$email."'");
//     $stmt->execute();
//     $result = $stmt->get_result();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
//     $row_in4    = $result->fetch_assoc();
//     $array4     = $row_in4['email'];
//     if($array4 == $email){
//         $_SESSION['validate'] = true;
//         header("location: Sign-up.php");
//     }
//     else{
//     $req = "INSERT INTO client (firstName,lastName,email,phone,pass) values ('$first','$last','$email','$phone','$password')";
//     $res = mysqli_query($conn, $req);
//     $_SESSION['button'] = true;
//     $_SESSION['user']   = $first;
//     $_SESSION['admin']  = true;
//     $_SESSION['emid'] = $email;
//     header("location: index.php");
//     }
// }