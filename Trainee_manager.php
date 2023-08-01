<?php

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="partial/style.css">
  <link rel="stylesheet" href="partial/style4.css">
  <style>
    .trainee1{
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      background: url(img/gym6.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }
    .table {
      max-width: 60vw;
      border-radius: 1rem;

    }
    .trainee1 h1{
      color: white;
      margin: 2rem;
      font-family: 'Ubuntu', sans-serif;
      font-weight: 900;
      font-size: 3.5rem;
    }
  </style>
</head>

<body>
  <?php include 'partial/header.php'; ?>
    <div class="trainee1">
    <h1>Trainee under your training</h1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Sno</th>
          <th scope="col">First name</th>
          <th scope="col">Last name</th>
          <th scope="col">Email id</th>
          <th scope="col">trainee id</th>
        </tr>
      </thead>
      <?php 

  $trci=$_SESSION['user_choice_id'];
  $trci=$trci-1;
  $trci=$trci*5;
  $f=$trci+1;
  $l=$trci+5;

  include 'partial/dbconnect.php';
  $sql="SELECT * FROM `users` WHERE user_choice='Trainee' AND user_choice_id>=$f AND user_choice_id<=$l";
  $result=mysqli_query($conn, $sql);
  $row=mysqli_num_rows($result);


  for ($i=0; $i < $row; $i++) { 
    $trow=mysqli_fetch_assoc($result);
    $fname=$trow['user_fname'];
    $lname=$trow['user_lname'];
    $email=$trow['user_email'];
    $idcode=$trow['user_choice_code'];

    echo '<tbody>
            <tr>
              <th scope="row" class="table-light">'.($i+1).'</th>
              <td class="table-light">'.$fname.'</td>
              <td class="table-light">'.$lname.'</td>
              <td class="table-light">'.$email.'</td>
              <td class="table-light">'.$idcode.'</td>
            </tr>
          </tbody>';
  }
  ?>

    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :' + rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
</script>


  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>