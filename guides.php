<?php
include "connection.php";
include "navbar.php";
     $sql = "SELECT * FROM guide";
     $result = mysqli_query($conn, $sql);
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
            <p class="title_slogan4">Our Guides</p>
            <p class="slogan2">
                We're not here to find your guide, we are here to make you trip amazing
            </p>
            <button  class="btn_slogan2">FIND A GUIDE</button>
        </div>
    </div>
<!----------------- power guides -------------->
    <div class="power">
        <p class="title_PowerG">
            The Power Of Tangier Guides
        </p>
        <p class="text_PowerG">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus <br>
             sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus <br> 
             dolor purus non enim praesent elementum facilisis leo, vel
        </p>
    </div>
<!------------------------- Search -------------------->
    <div class="find_guide">
        <div class="Filter_Search">
            <p class="Filter_by">Filter Search By</p>
            <div class="By_langauge">By Langauge</div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="" id="">
                <label class="Check_label form-check-label">Arabic </label>
            </div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="" id="">
                <label class="Check_label form-check-label">French  </label>
            </div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="" id="">
                <label class="Check_label form-check-label">English </label>
            </div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="" id="">
                <label class="Check_label form-check-label">Spanish  </label>
            </div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="" id="">
                <label class="Check_label form-check-label">Korean  </label>
            </div>
            <div class="By_langauge">By Date</div>
            <input class="input_date" type="date" id="day_tour" name="day_tour">
        </div>
<!-------------------------- view profil ---------------------------->
        <div class="view_profile">
            
            <div class="grid-container">



                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="hover_profile">
                    <img class="img_guide" src="<?php echo "pic_guides/" . $row["Picture"]?>" alt="">
                    <div class="hover_btn">
                        <a href="profile.html"><button class="btn_profile">view the profile</button></a>
                    </div>
                </div>
                <?php
                endwhile
                ?>




            </div>
        </div>
    </div>     

</body>
</html>
<?php
include "footer.php";
?>