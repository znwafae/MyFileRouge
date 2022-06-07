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
    <link rel="stylesheet" href="style_gallery.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Italiana&display=swap');
</style>
<body>
<!--------------- header about --------------->
    <div>
        <img class="img_header2" src="pictures/Rectangle 37.png" alt="">
        <div class="box_slogan2">
            <p class="title_slogan4"> Our Gallery</p>
            <p class="slogan2">
                We're not here to find your guide, we are here to make you trip amazing
            </p>
            <a href="guides.php"><button  class="btn_slogan2">FIND A GUIDE</button></a>
        </div>
    </div>
<!------------------------ gallery -------------------->
    <div class="our_gallery">
        <img class="img_gallery" src="pictures/Rectangle 40.png" alt="">
        <div class=" box_gallery d-flex justify-content-around justify-content-xl-around">
            <img class="flex_gallery1" src="pictures/Rectangle 41.png" alt="">
            <img class="flex_gallery2" src="pictures/Rectangle 44.png" alt="">
        </div>
        <img class="img_gallery" src="pictures/Rectangle 43.png" alt="">
        <div class=" box_gallery d-flex justify-content-around justify-content-xl-around">
            <img class="flex_gallery1" src="pictures/Rectangle 52.png" alt="">
            <img class="flex_gallery2" src="pictures/Rectangle 51.png" alt="">
        </div>
        <img class="img_gallery" src="pictures/Rectangle 53.png" alt="">
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
        <div class=" box_gallery d-flex justify-content-around justify-content-xl-around">
            <img class="flex_gallery1" src="pictures/Rectangle 56.png" alt="">
            <img class="flex_gallery2" src="pictures/Rectangle 57.png" alt="">
        </div>
        <img class="img_gallery" src="pictures/Rectangle 47.png" alt="">
        <div class=" box_gallery d-flex justify-content-around justify-content-xl-around">
            <img class="flex_gallery1" src="pictures/Rectangle 49.png" alt="">
            <img class="flex_gallery2" src="pictures/Rectangle 55.png" alt="">
        </div>
        <img class="img_gallery" src="pictures/Rectangle 50.png" alt="">
        <div class=" box_gallery d-flex justify-content-around justify-content-xl-around">
            <img class="flex_gallery1" src="pictures/Rectangle 58.png" alt="">
            <img class="flex_gallery2" src="pictures/Rectangle 59.png" alt="">
        </div>
        <img class="img_gallery" src="pictures/Rectangle 54.png" alt="">
        <div class=" box_gallery d-flex justify-content-around justify-content-xl-around">
            <img class="flex_gallery1" src="pictures/Rectangle 62.png" alt="">
            <img class="flex_gallery2" src="pictures/Rectangle 63.png" alt="">
        </div>
    </div>
</body>
</html>
<?php
include "footer.php";
?>