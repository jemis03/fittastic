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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="partial/style4.css">

    <title>Hello, world!</title>
    <style>
        .content {
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
    </style>
</head>

<body>
    <?php include 'partial/header.php'?>
    <div class="content">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to our Gym!</h1>
            <p class="lead"> we believe that fitness is not just a destination; it's a journey that leads to a healthier and happier life. Our gym is more than just a place to work out; it's a community of like-minded individuals striving to achieve their fitness goals and supporting each other along the way. Whether you're a fitness enthusiast or just starting your fitness journey, we have everything you need to succeed.</p>
            <hr class="my-4">
            <h4>Why Choose Us?</h4>
            <p>
                State-of-the-Art Facilities: <br/>Our gym is equipped with the latest and most advanced fitness equipment, creating an environment that fosters growth, progress, and results. From top-of-the-line cardio machines to cutting-edge strength training equipment, we have it all.<br/><br/>
                
                Expert Personal Trainers:<br/> Our certified and experienced personal trainers are dedicated to helping you reach your fitness objectives. They will design personalized workout plans tailored to your individual needs, guide you through proper form and technique, and provide continuous motivation and support.<br/><br/>
                
                Diverse Group Classes:<br/> Our group fitness classes offer a fun and dynamic way to work out, led by energetic and passionate instructors. Whether you're into high-intensity workouts like HIIT and CrossFit or prefer a more calming practice like yoga or Pilates, our diverse range of classes caters to all fitness levels.<br/><br/>
                
                Clean and Safe Environment:<br/> Your health and safety are our top priorities. We maintain a clean and sanitized gym environment, following strict hygiene protocols and ensuring all equipment is well-maintained for your peace of mind.<br/><br/>
                
                Wellness Programs:<br/>we believe that fitness goes beyond physical exercise. We offer various wellness programs that encompass nutrition advice, stress management, and overall well-being, providing you with a holistic approach to living a healthier life.<br/><br/>
                
                Supportive Community:<br/> Joining our gym means becoming a part of a supportive and welcoming community. You'll find encouragement, camaraderie, and friendship as you work towards your goals together.<br/><br/>
                
                Flexible Memberships:<br/> We understand that everyone has different schedules and fitness objectives. That's why we offer flexible membership options to fit your lifestyle, whether you prefer short-term commitments or long-term memberships.<br/><br/>
                
                </p>

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