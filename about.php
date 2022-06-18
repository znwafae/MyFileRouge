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
        Get ready to experince the thrill of a magical tour <br> 
        throughout tangier, its people, its culture, <br>
        its unuque landscapes, and original activities <br> 
        that will enchant your mind and senses
        </p>
    </div>
<!------------------------ about services -------------------------->
    <div class=" d-flex justify-content-around justify-content-xl-around">
        <img class="img_about" src="pictures/P1150351 1.png" alt="">
        <div class="box_services">
            <p class="title_services">Our Services</p>
            <p class="text_services">The Tangier Guides  website makes it easy to find 
            and meet locals who want to share not only tourist attractions 
            and famous must-sees, but also what’s happening ‘behind 
            the scenes’, as well as their favourite spots and best 
            things to do in the city you’re visiting.
            </p>
        </div>
    </div>
<!-- ------------------------about guides ------------------------------>
    <div class=" about_guides d-flex justify-content-around justify-content-xl-around">
        <div class="about_guides">
            <p class="title_services">Our Guides</p>
            <p class="text_services">Booking a guides  through our website is 
            the keyto <br> stress-free travel,each trip is organized by a local<br>
            expert who has been carefully selected and vetted.<br>With heaps 
            of on-the-ground knowledge, our <br>experts will make sure 
            your travels 
            are extraordinary,<br>as well as taking care of all the finer details.
            </p>
        </div>
        <img class="img_about" src="pictures/P1150351 2.png" alt="">
    </div>
</body>
</html>
<?php
include "footer.php";
?>