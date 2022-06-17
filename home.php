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
    <link rel="stylesheet" href="style_home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Italiana&display=swap');
</style>
<body>
<!--------------- header --------------->
    <div class="header1">
        <div class="">
            <img class="img_header1" src="pictures/Rectangle 4 (2).png" alt="">
        </div>
        <div class="box_slogan1">
            <p class="title_slogan1">Tangier Guides</p>
            <p class="slogan1">We're not here to find your guide, we are here to make your trip amazing</p>
               <a href="guides.php"><button class="btn_slogan1">FIND A GUIDE</button></a>
        </div>
        <div class="background"></div>
    </div>
<!------------------------------------ our services --------------------------------------->
    <div class=" ourServices ">
        <p class="title_our">our services</p>
        <p id="title_why">Why People choose Our Services</p>
        <div class="services d-flex justify-content-around justify-content-xl-around ">
            <div class="box box1">
                <img class="icons_services" src="pictures/happy 1.png" alt="">
                <p class="P_box">Get a friendly <br> 
                and caring service </p>
            </div>
            <div class="box box2">
                <img class="icons_services" src="pictures/private 1.png" alt="">
                <p class="P_box"> Competent and <br>
                 trutsted guides</p>
            </div>
            <div class="box box3">
                <img class="icons_services" src="pictures/counting 1.png" alt="">
                <p class="P_box">choose your <br>
                 own companion </p>
            </div>
        </div>
    </div>
<!------------------------ second section --------------------->
    <div class="second_section d-flex justify-content-around justify-content-xl-around">
            <div class="boxs">
                <img class="img1" src="pictures/P1150260 1.png" alt="">
            <p class="p1">Find yourself a local </p>
            <p class="p2">There’s no better way to feel <br> 
            the heartbeat of a city than <br>
            discovering it with a knowledgeable <br>
            local by your side now you can customize <br>
            a city tour with us </p>
                <a href="guides.php"><button class="bton">FIND A GUIDE</button></a>
            </div>
            <div class="boxs">
                <img class="img2" src="pictures/P1150395 1.png" alt="">
            </div>
            <div class="boxs">
                <p class="p3">Let’s show <br>
                 you Arround </p>
                <img class="img3" src="pictures/P1150265 1.png" alt="">
            </div> 
    </div>  
<!------------------------ testimonials ------------------------>
    <section class="testimonial">
            <img class="img_testimonial" src="pictures/Group 4.png" alt="">
        <div class="numbers d-flex justify-content-around justify-content-xl-around">
            <div class="nubr1">
                <p class="P_numbr">250</p>
                <p class="P_title">Lorem ipsum </p>
            </div>
            <div class="nubr2">
                <p class="P_numbr">1682</p>
                <p class="P_title">Lorem ipsum </p>
            </div>
            <div class="nubr3">
                <p class="P_numbr">4156</p>
                <p class="P_title">Lorem ipsum </p>
            </div>
        </div>
    </section>
    <div id="carouselExampleControls" class="carousel slide testimonials_box" data-bs-ride="carousel">
        <div class="title_testimonials">
            customer testimonials
        </div>
        <div class="carousel-inner">
          <div class=" Sliider carousel-item active">
                <div class="bgImg">
                    <img class="imgTestimonial" src="pictures/Group 4 (1).png" alt="">
                </div>
                <p class="P1_testimonial">Jony miy1</p>
                <p class="P2_testimonial">“ Our guides were extremely knowledgeable, friendly, <br>
                 and fun to be around. ”</p>     
            </div>


          <div class="Sliider carousel-item">
            <div class="bgImg">
                <img class="imgTestimonial" src="pictures/Group 4 (1).png" alt="">
            </div>
            <p class="P1_testimonial">Jony miy2</p>
            <p class="P2_testimonial">Lorem ipsum dolor sit amet, <br>
            consectetur adipiscing elit ut</p>
          </div>


          <div class="Sliider carousel-item">
            <div class="bgImg">
                <img class="imgTestimonial" src="pictures/Group 4 (1).png" alt="">
            </div>
            <p class="P1_testimonial">Jony miy3</p>
            <p class="P2_testimonial">Lorem ipsum dolor sit amet, <br>
            consectetur adipiscing elit ut</p>               </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
include "footer.php";
?>