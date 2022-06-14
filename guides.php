<?php
include "connection.php";
include "navbar.php";
     $sql = "SELECT * FROM guide";
     $result = mysqli_query($conn, $sql);
     if(isset($_POST['filtre']))
     {     
        $date=$_POST['day_tour']; 
        $sql="SELECT *
        FROM guide
        WHERE Guide_Id NOT IN (
            SELECT guide.Guide_Id
            FROM guide 
            inner join booking on booking.Guide_Id=guide.Guide_Id
            inner join meeting on meeting.Booking_Id=booking.Booking_Id
            WHERE meeting.Date = '$date'
        )";
             $result = mysqli_query($conn, $sql);
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_guides.css">
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
        <form action="guides.php" method="post">
        <div class="Filter_Search">
            <p class="Filter_by">Filter Search By</p>
            <div class="By_langauge">By Langauge</div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="Arabic">
                <label class="Check_label form-check-label">Arabic </label>
            </div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="French">
                <label class="Check_label form-check-label">French  </label>
            </div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="English">
                <label class="Check_label form-check-label">English </label>
            </div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="Spanish">
                <label class="Check_label form-check-label">Spanish  </label>
            </div>
            <div class="form-check">
                <input class="Check form-check-input" type="checkbox" value="Korean">
                <label class="Check_label form-check-label">Korean  </label>
            </div>
            <div class="By_langauge">By Date</div>
            <input class="input_date" type="date" id="day_tour" name="day_tour">
            <button class="btn_filter"  value="filtre" name="filtre">submit</button>
        </div>
        </form>
        <!-------------------------- view profil ---------------------------->
        <div class="view_profile">
            <div class="grid-container">
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="hover_profile">
                    <img class="img_guide" src="<?php echo "pic_guides/" . $row["Picture"]?>" alt="">
                    <div class="hover_btn">
                        <a href="profile.php?Guide_Id=<?php echo $row["Guide_Id"] ?>"><button class="btn_profile">view the profile</button></a>
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