<?php
// session_start();
require 'connection.php';
// $idUSER = $_SESSION['User_Id'];
$Guide_Id = $_GET['Guide_Id'];
$date = date('Y-m-d');
$Price = $_GET['Price'];
$Date = $_GET['date'];
$Time = $_GET['Time'];

if (isset($_POST['BOOK'])) {

    $bookSql = "INSERT INTO `booking`(`Guide_Id`, `Y-m-d`, `Price`) VALUES ('$Guide_Id','$date','$Price')"; 
    $meetSql = "INSERT INTO `meeting`( `date`, `Time`) VALUES ('$Date','$Time')";
    $conn->query($bookSql,$meetSql);

}
if(isset($_REQUEST['Guide_Id']))
 {
    $id = $_REQUEST['Guide_Id'];
    // returne language
    $sqlSelect_L ="SELECT language.Name
    FROM guide INNER JOIN guide_language ON guide.Guide_Id=guide_language.Guide_Id 
    INNER JOIN language ON guide_language.Language_Id=language.Language_Id
    WHERE guide.Guide_Id='$id'";
    //  returne info 
    $sqlSelect = "SELECT * FROM `guide` WHERE Guide_Id = '$id' "; 
    $result_L = $conn->query($sqlSelect_L);
    $row_L = $result_L -> fetch_array();  
    $result = $conn->query($sqlSelect);
    $row = $result -> fetch_array();  
}
?>
<?php include "navbar.php";?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Italiana&display=swap');
</style>
<body>
<!--------------- header --------------->
    <form class="headerBG"method="POST" action="" >
        <div class="header_profile">
            <div class="box_description">
                <p class="full_name"><?php echo $row["Full_Name"]?></p>
                <p class="description"><?php echo $row["Description"]?></p>    
            </div>
            <div class="box_img">
                <div>
                    <img class="img_profil" src="<?php echo "pic_guides/" . $row["Picture"]?>" alt="">
                </div>
            </div>
            <!------------------------- info ------------------------------>
            <div class="Guide_Information">
                <p class="title_Information" >Guide Information</p>
                <p class="text_Information"><?php echo $row["Information"]?></p>
                <p class="title_Information">Guide Cantact</p>
                <div  class="Rows">
                    <div class="row">
                        <div class="col-md ">
                            <p>Phone Number :</p>
                        </div>
                        <div class="col-md-8 ">
                            <p class="phon"><?php echo $row["Phone"]?></p>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-md ">
                            <p>Email :</p>
                        </div>
                        <div class="col-md-8 ">
                            <p class="email"><?php echo $row["Email"]?></p>
                        </div>  
                    </div>
                </div>
                <div class="atms_Guide">
                    <img class="Social_guide" src="pictures/icons8-instagram-50 (3).png" alt="">
                    <img class="Social_guide" src="pictures/icons8-facebook-50 (2).png" alt="">
                </div>
            </div>
    </form>
    <!--------------- booking -------------------------->
    <form action="profile.php?Guide_Id=<?php echo $row["Guide_Id"]?>" class="book_tour">
        <p class="title_book">BOOK THIS GUIDE</p>
            <select  name="Price" class="select_Price form-select" aria-label="Default select example">
                <option name="Price" disabled selected>Tour Price:</option>
                <option name="Price" >12$ for 1 person</option>
                <option name="Price" >17$ for 2 person</option>
                <option name="Price" >22$ for 3 person</option>
                <option name="Price" >26$ for 4 person</option>
                <option name="Price" >30$ for 5 person</option>
            </select>
            <select  class="select_Price form-select" aria-label="Default select example">
                <option disabled selected>Select a time:</option>
                <option name="Time" >8:00 PM</option>
                <option name="Time" >8:30 PM</option>
                <option name="Time" >9:00 PM</option>
            </select>
            <div class="date">
                <div class="row">
                    <div class="col-md ">
                        <p class="language_P">Date :</p>
                    </div>
                    <div class="col-md">
                        <p class="date_P"><?php echo $_GET["date"];?></p>
                    </div>  
                </div>
            </div>
            <div class="language">
                <div class="row">
                    <div class="col-md ">
                        <p class="language_P">language :</p>
                    </div>
                    <div class="col-md">
                        <?php while ($row_L = mysqli_fetch_assoc($result_L)): ?>
                            <p class="date_P"><?php echo $row_L["Name"]?></p>
                        <?php
                        endwhile
                        ?>
                    </div>  
                </div>
            </div>
            <button type="submit" name="BOOK" class="btn_book">BOOK NOW</button>
    </form>
</body>
</html>
<?php
include "footer.php";
?>