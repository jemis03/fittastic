<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'dbconnect.php';
    $feedback_rating=$_POST['rating'];
    session_start();
    $loginemail=$_SESSION['loginemail'];
    // echo $loginemail;
    $exitsql="SELECT * FROM `feedback` WHERE feedback_email='$loginemail'";
    $result = mysqli_query($conn, $exitsql);
    $row = mysqli_fetch_assoc($result);
    // $feedback_sno=$row['feedback_sno'];
    $numrow=mysqli_num_rows($result);
    // echo $numrow;
    if ($numrow!=1) {
        // echo "yes";
        // echo $loginemail;
        // echo $_SESSION['user_fname'];
        // echo $feedback_rating;
        $user_fname=$_SESSION['user_fname'];
        $user_lname=$_SESSION['user_lname'];
        $loginemail=$_SESSION['loginemail'];
        $user_sno=$_SESSION['user_sno'];
        $user_choice=$_SESSION['user_choice'];
        // echo "20";
        $fsql="INSERT INTO `feedback` (`feedback_fname`, `feedback_lname`, `feedback_email`, `feedback_rating`, `feedback_user`, `feedback_time`, `feedback_choice`) VALUES ('$user_fname', '$user_lname', '$loginemail', '$feedback_rating', '$user_sno', '1','$user_choice')";
        $fresult=mysqli_query($conn, $fsql);
        // echo var_dump($result);
        if ($fresult) {
            echo "yes insert";
            if ($user_choice=="Trainer") {
                header("Location: /fittastic/trainer.php?feedbacksuccess=true");
            }
            else {
                header("Location: /fittastic/trainee.php?feedbacksuccess=true");
            }
        }
        else {
            echo "no insert";
            if ($user_choice=="Trainer") {
                header("Location: /fittastic/trainer.php?feedbacksuccess=false");
            }
            else {
                header("Location: /fittastic/trainee.php?feedbacksuccess=false");
            }
        }
       
    }
    else {
        echo "40";
    $feedback_sno=$row['feedback_sno'];
    $feedback_time=$row['feedback_time'];
    $feedback_time++;
    echo $feedback_time;
    echo $feedback_sno;
    $ufsql="UPDATE `feedback` SET `feedback_rating`='$feedback_rating', `feedback_time`= '$feedback_time' WHERE `feedback`.`feedback_sno` = $feedback_sno";
    $fresult=mysqli_query($conn, $ufsql);
        if ($fresult) {
            echo "yes";
            if ($user_choice=="Trainer") {
                header("Location: /fittastic/trainer.php?updatefeedbacksuccess=true");
            }
            else {
                header("Location: /fittastic/trainee.php?updatefeedbacksuccess=true");
            }
        }
        else {
            echo "no";
            if ($user_choice=="Trainer") {
                header("Location: /fittastic/trainer.php?updatefeedbacksuccess=false");
            }
            else {
                header("Location: /fittastic/trainee.php?updatefeedbacksuccess=false");
            }
        } 
    }
}
?>