<?php
echo '<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <link rel="stylesheet" href="partial/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <title>Hello, world!</title>
</head>

<body>';

if (isset($_GET['logoutsuccess']) && $_GET['logoutsuccess']=="true") {
    echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert" >
            <strong>Success!</strong> You logout is successfull please login for best exprience.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}

if (isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="true") {
    echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert" >
            <strong>Success!</strong> You login is successfull.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}

if (isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false") {
    echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert" >
            <strong>Error!</strong> You login is failed please try again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true") {
    echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert" >
            <strong>Success!</strong> You signup successfully please login to this website.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}

if (isset($_GET['useremail']) && $_GET['useremail']=="false") {
    echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert" >
            <strong>Error!</strong>This email address is alredy in use please try again with another email address.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="false") {
    echo '<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert" >
            <strong>Error!</strong> You password is not matched please try again.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
}


    echo '<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1-1.jpg" class="d-block w-100" height="800vh" alt="...">
                <div class="carousel-caption d-none d-md-block carousel-bottom" id="carousel-bottom">
                        <h5>Fittastic</h5>
                        <p>Some representative placeholder content for the first slide.</p>';
 



        echo'<div class="slider-btn">
        <button type="button" class="btn btn-1 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#registermodal" id="btna">
        Register
        </button>
        <button type="button" class="btn btn-2 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#loginmodal" id="btna">Login</button>
        </div>';

    



                            
                    echo'</div>
            </div>
            <div class="carousel-item">
                <img src="img/1-2.jpg" class="d-block w-100" height="800vh" alt="...">
                <div class="carousel-caption d-none d-md-block carousel-bottom" id="carousel-bottom">
                    <h5>Fittastic</h5>
                    <p>Some representative placeholder content for the second slide.</p>';

                
                        echo'<div class="slider-btn">
                        <button type="button" class="btn btn-1 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#registermodal" id="btna">
                        Register
                        </button>
                        <button type="button" class="btn btn-2 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#loginmodal" id="btna">Login</button>
                        </div>';
                                
                
                
                                            
                                    echo'</div>
                            </div>
            <div class="carousel-item">
                <img src="img/1-3.jpg" class="d-block w-100" height="800vh" width="80vh" alt="...">
                <div class="carousel-caption d-none d-md-block carousel-bottom" id="carousel-bottom">
                    <h5>Fittastic</h5>
                    <p>Some representative placeholder content for the third slide.</p>';




                        echo'<div class="slider-btn">
                        <button type="button" class="btn btn-1 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#registermodal" id="btna">
                        Register
                        </button>
                        <button type="button" class="btn btn-2 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#loginmodal">Login</button>
                        </div>';
                    
                
                
                
                                            
                                    echo'</div>
                            </div>
            <div class="carousel-item">
                <img src="img/1-4.jpg" class="d-block w-100" height="800vh" alt="...">
                <div class="carousel-caption d-none d-md-block carousel-bottom" id="carousel-bottom">
                    <h5>Fittastic</h5>
                    <p>Some representative placeholder content for the third slide.</p>';



                        echo'<div class="slider-btn">
                        <button type="button" class="btn btn-1 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#registermodal" id="btna">
                        Register
                        </button>
                        <button type="button" class="btn btn-2 my-2 my-sm-0 mr-sm-2" data-toggle="modal" data-target="#loginmodal" id="btna">Login</button>
                        </div>';

                
                
                
                                            
                                    echo'</div>
                            </div>';

            include 'partial/registermodal.php';
            include 'partial/loginmodal.php';
            include 'partial/logoutmodal.php';
       echo '</div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>';
    ?>

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>
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