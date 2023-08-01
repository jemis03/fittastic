<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'dbconnect.php';
    $loginemail=$_POST['loginemail'];
    $loginpassword=$_POST['loginpassword'];
    $exitsql="SELECT * FROM `users` WHERE user_email='$loginemail'";
    $result = mysqli_query($conn, $exitsql);
    $numrow=mysqli_num_rows($result);
  
    if ($numrow==1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_password']==$loginpassword){
            
            session_start();
            $_SESSION['login']=true;
            $_SESSION['loginemail']=$loginemail;
            $_SESSION['user_fname']=$row['user_fname'];
            $_SESSION['user_lname']=$row['user_lname'];
            $_SESSION['user_sno']=$row['user_sno'];
            $_SESSION['user_choice']=$row['user_choice'];
            
            // echo $row['user_choice'];
            if ($row['user_choice']=="Trainee") {
                echo "yes";
                header("Location: /fittastic/trainee.php?loginsuccess=true");
            }
            else if($row['user_choice']=="Trainer"){
                $_SESSION['user_choice_id']=$row['user_choice_id'];
                header("Location: /fittastic/trainer.php?loginsuccess=true");
            }
        }
        else {
            header("Location: /fittastic/index.php?loginsuccess=false");
        }
    }
}
?>