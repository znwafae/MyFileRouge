<?php
include "connection.php";
include "navbar.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_about.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Italiana&display=swap');
</style>
<body class="body_about">

<!--------------- header about --------------->
    <div>
        <img class="img_header2" src="pictures/Rectangle 30.png" alt="">
        <div class="box_slogan2">
            <p class="title_slogan2">About Tangier  Guides</p>
            <p class="slogan2">
                We're not here to find your guide, we are here to make you trip amazing
            </p>
            <a href="guides.php"><button  class="btn_slogan2">FIND A GUIDE</button></a>
        </div>
    </div>
<!--------------------- power tangier guides ----------------------->
    <div class="power">
        <p class="title_power">
            The Power Of Tangier Guides
        </p>
        <p class="text_power">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus <br>
             sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus <br> 
             dolor purus non enim praesent elementum facilisis leo, vel
        </p>
    </div>
<!------------------------ about services -------------------------->
    <div class=" d-flex justify-content-around justify-content-xl-around">
        <img class="img_about" src="pictures/P1150351 1.png" alt="">
        <div class="box_services">
            <p class="title_services">Our Services</p>
            <p class="text_services">Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                elit ut aliquam, purus sit amet luctus venenatis,  <br>
                lectus magna fringilla urna, porttitor rhoncus dolor <br>
                purus non enim praesent elementum facilisis leo, vel <br>
                fringilla est ullamcorper eget nulla
            </p>
        </div>
    </div>
<!-- ------------------------about guides ------------------------------>
    <div class=" about_guides d-flex justify-content-around justify-content-xl-around">
        <div class="about_guides">
            <p class="title_services">Our Services</p>
            <p class="text_services">Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                elit ut aliquam, purus sit amet luctus venenatis,  <br>
                lectus magna fringilla urna, porttitor rhoncus dolor <br>
                purus non enim praesent elementum facilisis leo, vel <br>
                fringilla est ullamcorper eget nulla
            </p>
        </div>
        <img class="img_about" src="pictures/P1150351 2.png" alt="">
    </div>
</body>
</html>
<?php
include "footer.php";
?>