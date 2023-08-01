<?php

$bmi=" ";
if($_POST!=null)
{
    $h=empty($_POST["height"]) ? 0 : $_POST["height"];
    $w=empty($_POST["weight"]) ? 0 : $_POST["weight"];
    $index =0;
    if($h !=0 && $w !=0)
        $index = round($w/($h*$h)* 703,2);
 
    $bmi=" ";
    $bmiStyle="alert alert-primary";
    if ($index < 18.5) {
        $bmi="underweight - BMI : " . $index;
        $bmiStyle="alert alert-secondary";
    } else if ($index < 25) {
        $bmi="normal - BMI : ". $index;
        $bmiStyle="alert alert-success";
    } else if ($index < 30) {
        $bmi="overweight - BMI : " . $index;  
        $bmiStyle="alert alert-warning";
    } else {
        $bmi="obese - BMI : " .$index;  
        $bmiStyle="alert alert-danger";
    }
}
 
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> CODE4EXAMPLE </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="partial/style.css">
  <link rel="stylesheet" href="partial/style4.css">
    <style>
      .container2{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        color: white;
      }
      .container3{
        min-height: 100vh;
        background: url(img/gym5.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        /* opacity: 0.5; */
      }
      .container1{
        opacity: 1;
      }
      h1{
        opacity: 1;
      }
    </style>
</head>
 
	<body>
  <?php include 'partial/header.php'; ?>
      <div class="container3">
        <div class="container2">
          <div class="container1">
            <h1>PHP BODY MASS INDEX (BMI)</h1>
            <form method="post">
                <div class="form-group">
                  <label for="height">Please Enter your Height in Inches :</label>
                  <input type="text" class="form-control" name="height" placeholder="69">
                </div>
                <div class="form-group">
                  <label for="weight">Please Enter your weight in Pounds :</label>
                  <input type="text" class="form-control"  name="weight" placeholder="150">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Calculate</button>
                </div>
              </form>
              <div class="<?=$bmiStyle?>" role="alert" id="bmi">
                <?php 
                echo $bmi;
                ?>
            </div>
          </div>
        </div>  
      </div>
   
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

</body>
</html>