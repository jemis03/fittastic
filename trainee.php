<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="partial/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  <link rel="stylesheet" href="partial/style4.css">

  <title>Hello, world!</title>
  <style>
    .content{
    position: relative;
    min-height: 110vh;
    padding: 4rem 8rem;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-image: url(/fittastic/img/gym27.jpg);
    background-size: cover;
    }

    .content1{
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .card{
        margin: 2rem;
    }
  </style>
</head>

<body>
  <?php include 'partial/header.php'?>
  <div class="content">
    <div class="content1">
      <div class="card" style="width: 18rem;">
        <img src="img/diet.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Diet</h5>
          <p class="card-text">Diet.</p>
          <a href="Diet.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="img/gym9.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Work out</h5>
          <p class="card-text"> workout tips.</p>
          <a href="workoutdemo.php" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>

      <div class="content1">
        <div class="card" style="width: 18rem;">
          <img src="img/gym11.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Store</h5>
            <p class="card-text">visit a store.</p>
            <a href="Yoga.php" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="img/gym19.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Watcher</h5>
            <p class="card-text">watcher.</p>
            <a href="Watcher.php" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

      </div>
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


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

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
</body>

</html>