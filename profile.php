<?php
session_start();
require 'connection.php';
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
    // returne address info
    $sqlSelect = "SELECT * FROM `address`
    INNER JOIN `guide`
    ON `address`.`Address_Id` = `guide`.`Address_Id`
    WHERE Guide_Id = '$id' " ;
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
                <div >
                    <img class="img_profil" src="<?php echo "pic_guides/" . $row["Picture"]?>" alt="">
                </div>
            </div>
        <!-- ----------------------- info ------------------------------>
        <div class="Guide_Information">
            <p class="title_Information" >Guide Information</p>
            <p class="text_Information">Ayoub, He's calm,  patient, and a good listener.
                He was a grade school teacher when he was younger, 
                and it shows. He taught us so much about the history, 
                culture, and society of Morocco and especially Tangiers.
                He took us to great shopping opportunities without us feeling</p>
            <p class="title_Information">Guide Cantact</p>
            <div  class="Rows">
                <div class="row">
                    <div class="col-md colMd">
                        <p>Phone Number :</p>
                    </div>
                    <div class="col-md-8 col8">
                        <p class="phon"><?php echo $row["Phone"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md colMd">
                        <p>Email :</p>
                    </div>
                    <div class="col-md-8 col8">
                        <p class="email"><?php echo $row["Email"]?></p>
                </div>  
            </div>
        </div>
        <div class="atms_Guide">
                <img class="Social_guide" src="pictures/icons8-instagram-50 (3).png" alt="">
                <img class="Social_guide" src="pictures/icons8-facebook-50 (2).png" alt="">
            </div>
    </form>
    <form action="" class="book_tour">
        <p class="title_book">BOOK THIS TOUR</p>
            <select class="select_Price form-select" aria-label="Default select example">
                <option selected>Tour Price:</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="select_Price form-select" aria-label="Default select example">
                <option selected>Select a time:</option>
                <option value="1">One</option>
                <option value="3">Three</option>
            </select>
    </form>








            <!-- <div class="Rows">
                <div class="row">
                    <div class="col-md ">
                        <p>Phone Number :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Phone"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Email :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Email"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Birthday :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Birthdate"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md ">
                        <p>Address :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Adress"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md ">
                        <p>City :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["City"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md ">
                        <p>Country :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Country"]?></p>
                    </div>  
                </div>
            </div>
        </div>
        <div class="bg_language">
            <div class="language">
                <div class="row">
                    <div class="col-md ">
                        <p>language :</p>
                    </div>

                    <div class="col-md">
                        <?php while ($row_L = mysqli_fetch_assoc($result_L)): ?>
                            <p><?php echo $row_L["Name"]?></p>
                        <?php
                        endwhile
                        ?>
                    </div>  
                </div>
            </div>
        </div> -->
    
<!------------------- info --------------------------->
    <!-- <div class="info_guide">
        <div class="bg_info">
            <div class="Rows">
                <div class="row">
                    <div class="col-md ">
                        <p>Phone Number :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Phone"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Email :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Email"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Birthday :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Birthdate"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md ">
                        <p>Address :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Adress"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md ">
                        <p>Adress_Bis :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Adress_Bis"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md ">
                        <p>Post_Code :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Post_Code"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md ">
                        <p>City :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["City"]?></p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md ">
                        <p>Country :</p>
                    </div>
                    <div class="col-md-8">
                        <p><?php echo $row["Country"]?></p>
                    </div>  
                </div>
            </div>
        </div> -->
        <!-- <div class="bg_language">
            <div class="language">
                <div class="row">
                    <div class="col-md ">
                        <p>language :</p>
                    </div>

                    <div class="col-md">
                        <?php while ($row_L = mysqli_fetch_assoc($result_L)): ?>
                            <p><?php echo $row_L["Name"]?></p>
                        <?php
                        endwhile
                        ?>
                    </div>  
                </div>
            </div>
        </div> -->
        <!-- <div class="bg_price">
            <div class="language">
                <div class="row">
                    <div class="col-md ">
                        <p>Price :</p>
                    </div>
                    <div class="col-md">
                        <p><?php echo $row["Price"]?></p>
                    </div>  
                </div>
            </div>
        </div> -->
    </div>
</body>
</html>
<?php
include "footer.php";
?>

<!-- <button class="btn_description">BOOK NOW</button> -->