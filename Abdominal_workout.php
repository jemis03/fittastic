<?php
echo "Abdominal_workout";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="partial/style1.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="partial/style.css">
    <link rel="stylesheet" href="partial/style4.css">
    <link rel="stylesheet" href="partial/style5.css">

    <title>Hello, world!</title>
    <style>
    .content {
        /* position: relative; */
        min-height: 110vh;
        /* padding: 4rem 8rem; */
        display: flex;
        /* justify-content: center;
    align-items: center; */
        flex-direction: column;
        background-image: url(/fittastic/img/gym39.jpg);
        background-size: cover;
    }

    .box3:hover{
      cursor: pointer;
    }
    .box4{
      margin: 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .box2{
      display: flex;
      /* margin-left: 26rem; */
      /* justify-content: center;
      align-items: center; */

    }
    .content1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card {
        margin: 0.5rem;
    }

    #htitle{
      margin-left: 26rem;
    }
    </style>
</head>

<body>
    <?php include 'partial/header.php'?>
    <div class="content">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="Yoga.php">Yoga</a>
            <a href="Body_shape_up.php">Body_shape_up</a>
            <a href="Stretching.php">Stretching</a>
            <a href="Arm_workout.php">Arm_workout</a>
            <a href="Abdominal_workout.php">Abdominal_workout</a>
        </div>

        <div id="main">
          <div class="box2">
            <button class="openbtn" onclick="openNav()">&#9776; Categary</button>
            <h1  id="htitle" style="color: white;">Title</h1>
          </div>
          <div class="box4">
            <div class="content1">
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
            </div>


            <div class="content1">
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
            </div>

            <div class="content1">
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
              <div class="card box3" style="width: 18rem;">
                <img src="img/gym2.jpg" class="card-img-top" alt="Image not found">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="https://www.amazon.in/dp/B01N9JLNNK/ref=redir_mobile_desktop?_encoding=UTF8&aaxitk=5a33cab64cb64340d57b8024352fda8e&hsa_cr_id=5023982370302&pd_rd_plhdr=t&pd_rd_r=5130bf3b-3e25-41ee-b539-238c62713b5a&pd_rd_w=tEeQi&pd_rd_wg=xHj8m&ref_=sbx_be_s_sparkle_mcd_asin_0_img" class="card-link" target="_blank">Visit to this link</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <script>
    $(function() {
        $(".rateyo").rateYo().on("rateyo.change", function(e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :' + rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });

    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidebar").style.width = "260px";
        document.getElementById("main").style.marginLeft = "260px";
        document.getElementById("htitle").style.marginLeft = "20rem";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
    </script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>