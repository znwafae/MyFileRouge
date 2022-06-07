<?php
include "connection.php";
include "navbar.php"; 
?>
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
</body>
<!--------------- header --------------->
        <div class="header_profile">
            <div class="box_description">
                <p class="full_name">Wafae Zouini</p>
                <p class="description">Lorem ipsum dolor sit amet, consectetur <br>
                    adipiscing elit ut aliquam, purus <br>
                   sit amet luctus venenatis</p>
                   <button class="btn_description">BOOK NOW</button>
            </div>
            <div class="box_img">
                <div >
                    <img class="img_profil" src="pictures/Rectangle 129.png" alt="">
                </div>
            </div>
        </div>
<!------------------- info --------------------------->
    <div class="info_guide">
        <div class="bg_info">
            <div class="Rows">
                <div class="row">
                    <div class="col-md ">
                        <p>Phone Number :</p>
                    </div>
                    <div class="col-md-8">
                        <p>0648752196</p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Email :</p>
                    </div>
                    <div class="col-md-8">
                        <p>nahid@gmail.com</p>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-md">
                        <p>Address :</p>
                    </div>
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor 40sit</p>
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
                        <p>English</p>
                        <p>English</p>
                        <p>English</p>
                    </div>  
                </div>
            </div>
        </div>°
    </div>
</body>
</html>
<?php
include "footer.php";
?>