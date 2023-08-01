<?php 
//  echo "yes";  
// echo var_dump(isset($_POST['submit']));
// echo var_dump(isset($_POST['name']));
// echo var_dump(isset($_POST['email']));
// echo var_dump(isset($_POST['mobile']));
// echo var_dump(isset($_POST['comment']));
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['comment'])){
// echo "yes";

  include ('smtp/PHPMailerAutoload.php');
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $comment=$_POST['comment'];
  // echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>yes";
  $html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$comment</td></tr></table>";

  $mail=new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host="smtp.gmail.com";
  $mail->Post=587;
  $mail->SMTPSecure="tls";
  $mail->SMTPAuth=true;
  $mail->Username="lathiyajems@gmail.com";
  $mail->Password="Lathiya@123";
  $mail->SetFrom("lathiyajems@gmail.com");
  $mail->addAddress("lathiyajems@gmail.com");
  $mail->IsHTML(true);
  $mail->Subject="New contact us";
  $mail->Body=$html;
  $mail->SMTPOption=array('ssl'=>array(
    'verify_peer'=>false,
    'varify_peer_name'=>false,
    'allow_self-signed'=>false
  ));
  if ($mail->send()) {
    echo "Mail send";
  }
  else {
    echo "Error occured";
  }

}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
  
  <link rel="stylesheet" href="partial/style.css">
  <link rel="stylesheet" href="partial/style4.css">
  <title>Discuss on coding</title>

</head>

<body>
  <?php include 'partial/header.php';?>

  <!-- this is a slider -->
  <section class="contact background">
    <div class="content">
      <h1>Contact Us</h1>
      <p>Have questions or want to join our fitness community? Reach out to our friendly team for inquiries, membership details, and more. We're here to support your fitness journey. Get in touch now!</p>
    </div>
    <div class="containerc">
      <div class="contactinfo">
        <div class="box">
          <div class="icon">
          <i class="bi bi-geo-alt-fill"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
          </svg>
          </div>
          <div class="text">
            <h4 style="color: white;">Address</h4>
            <p>SP boys hostel, Ahmedabad, Gujarat</p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
          <i class="bi bi-telephone-fill"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg>
          </div>
          <div class="text">
            <h4 style="color: white;">Phone</h4>
            <p>+91 984 567 4567</p>
          </div>
        </div>
        <div class="box">
          <div class="icon">
          <i class="bi bi-envelope-fill"></i>
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
          </svg>
          </div>
          <div class="text">
            <h4 style="color: white;">Email</h4>
            <p>lathiyajemis512@gmail.com</p>
          </div>
        </div>
      </div>
      <div class="contactform">
   
        <form method="POST" id="frmcontactus">
          <h2>Send message</h2>
          <div class="inputbox">
            <input type="text" name="name" id="name" required="required">
            <span>Full name</span>
          </div>
          <div class="inputbox">
            <input type="text" name="email" id="email" required="required">
            <span>Email</span>
          </div>
          <div class="inputbox">
            <input type="text" name="mobile" id="mobile" required="required">
            <span>Mobile</span>
          </div>
          <div class="inputbox">
            <textarea name="comment" id="comment" required="required"></textarea>
            <span>Type your message...</span>
          </div>
          <div class="inputbox">
            <button type="submit" name="submit" class="btn btn-success my-2 my-sm-0 mr-sm-2" id="submit">Send</button>
          </div>
        </form>
      </div>

    </div>
  </section>


    <!-- <?php include 'extra/_footer.php';?> -->

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
    <script>
      jQuery('#frmcontactus').on('submit',function(e){
        // alert('a');
        jQuery('#submit').html('Please Wait...');
        jQuery('#submit').attr('disabled',true);
        jQuery.ajex({
          url:'submit.php',
          type:'post',
          data:jQuery('#frmcontactus').serialize(),
          success:function(result){
            jQuery('#msg').html(result);
            jQuery('#submit').html('Please Wait...');
            jQuery('#submit').attr('disabled',false);
            jQuery('#frmcontactus')[0].reset();
          }
        });
        e.preventDefault();
      });
    </script>
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