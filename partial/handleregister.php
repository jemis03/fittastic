<?php 

$showerror="false";
STATIC $Traineeindex = 0;
STATIC $Trainerindex = 0;

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'dbconnect.php';

    $registerfname=$_POST['registerfname'];
    $registerlname=$_POST['registerlname'];
    $registerdateofbirth=$_POST['registerdateofbirth'];
    $registerdateofbirth1=date("d/m/Y", strtotime($registerdateofbirth));
    $registergender=$_POST['registergender'];
    $registeremail=$_POST['registeremail'];
    $registerpassword=$_POST['registerpassword'];
    $registercpassword=$_POST['registercpassword'];
    $registerchoice=$_POST['registerchoice'];


    $exitsql="SELECT * FROM `users` WHERE user_email='$registeremail'";
    $result = mysqli_query($conn, $exitsql);
    $row= mysqli_num_rows($result);


    if ($row>0){
        $showerror="This email is ulready in use";
        header("Location: /fittastic/index.php?useremail=false");
    }
    else {
        if ($registerpassword==$registercpassword) {
            if ($registerchoice=="Trainee") {
               $sql="SELECT * FROM `users` WHERE user_choice='Trainee'";
               $cresult = mysqli_query($conn, $sql);
               $nrow= mysqli_num_rows($cresult);
            //    echo $nrow;
               for ($i=1; $i <= $nrow; $i++) { 
                   $crow= mysqli_fetch_assoc($cresult);
                   $Traineeindex=$crow['user_choice_id'];
               }
               $Traineeindex=$Traineeindex+1;
               $Trainee= "TE".$Traineeindex;
               $registersql="INSERT INTO `users` (`user_fname`, `user_lname`, `user_date_of_birth`, `user_gender`, `user_email`, `user_password`, `user_choice`, `user_choice_id`, `user_choice_code`) VALUES ('$registerfname', '$registerlname', '$registerdateofbirth1', '$registergender', '$registeremail', '$registerpassword', '$registerchoice','$Traineeindex','$Trainee')";
                $result = mysqli_query($conn, $registersql);
            //    echo $Trainee; 
            }
            else if($registerchoice=="Trainer") {
               $sql="SELECT * FROM `users` WHERE user_choice='Trainer'";
               $cresult = mysqli_query($conn, $sql);
               $nrow= mysqli_num_rows($cresult);
            //    echo $nrow;
               for ($i=1; $i <= $nrow; $i++) { 
                   $crow= mysqli_fetch_assoc($cresult);
                   $Trainerindex=$crow['user_choice_id'];
               }
               $Trainerindex=$Trainerindex+1;
               $Trainer= "TR".$Trainerindex;
               $registersql="INSERT INTO `users` (`user_fname`, `user_lname`, `user_date_of_birth`, `user_gender`, `user_email`, `user_password`, `user_choice`, `user_choice_id`, `user_choice_code`) VALUES ('$registerfname', '$registerlname', '$registerdateofbirth1', '$registergender', '$registeremail', '$registerpassword', '$registerchoice','$Trainerindex','$Trainer')";
                $result = mysqli_query($conn, $registersql);
            //    echo $Trainee; 
            }
            // else ($registerchoice=="Trainer") {
            //    $Trainer= "TR".$Trainerindex;
            //    $Trainerindex++; 
            //    echo $Trainer;
            // }
            // $hash=password_hash($signuppassword, PASSWORD_DEFAULT);
            if ($result) {
                $showalert="true";
                $showerror="success";
                header("Location: /fittastic/index.php?signupsuccess=true");
            }

        }
        else {
            $showerror="Password do not match";
            header("Location: /fittastic/index.php?signupsuccess=false");
        }
    }

    $showerror="false";


    // echo $registerfname;
    // echo $registerlname;
    // echo $registerdateofbirth;
    // echo $registergender;
    // echo $registeremail;
    // echo $registerpassword;
    // echo $registercpassword;
    // echo $registerchoice;

}
?>