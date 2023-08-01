<?php
 session_start();
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img class="navbar-brand" src="img/gym2.jpg" width="50px" height="50px"></img>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">';
    $user_choice=$_SESSION['user_choice'];
    if (isset($_SESSION['login']) && $_SESSION['login']==true){
      if($user_choice=="Trainer"){
        echo '<a class="nav-link btn-shadow" href="trainer.php">Home</a></li>';
      }
      else {
        echo '<a class="nav-link btn-shadow" href="trainee.php">Home</a></li>';
      }
    }
    
    echo '<li class="nav-item">
          <a class="nav-link btn-shadow" href="aboutus.php">About Us</a>
          </li>
          <li class="nav-item">
          <a class="nav-link btn-shadow" href="contact.php">Contact Us</a>
  </li>';


      if (isset($_SESSION['login']) && $_SESSION['login']==true){
        echo '<li class="nav-item">
      <button type="button" class="btn btn-4 nav-link btn-shadow" id="box-shadow" data-toggle="modal" data-target="#feedbackmodaly">
      Feedback
      </button>
      </li>';
      }
      else {
        echo '<li class="nav-item">
        <button type="button" class="btn btn-4 nav-link btn-shadow" id="box-shadow" data-toggle="modal" data-target="#feedbackmodaln">
        Feedback
        </button>
      </li>';
      }
      echo '<li class="nav-item">
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button type="button" class="btn btn-outline-success my-2 my-sm-0 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#logoutModal">logout</button>
    </form>
  </div>
</nav>';

include 'partial/logoutmodal.php';
include 'partial/feedbacky.php';
include 'partial/feedbackn.php';

?>

