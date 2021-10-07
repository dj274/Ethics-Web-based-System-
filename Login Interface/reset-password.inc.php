<?php
require('../db.php');

if(isset($_POST["resetbutton"])){

    $selector = stripslashes($_POST['selector']); 

    $selector = mysqli_real_escape_string($conn,$selector); 

    $validator  = stripslashes($_POST['validator']); 

    $validator = mysqli_real_escape_string($conn,$validator); 

   
    $password  = stripslashes($_POST['password']); 

    $password = mysqli_real_escape_string($conn,$password); 

    $confirm_password  = stripslashes($_POST['confirm_password']); 

    $confirm_password = mysqli_real_escape_string($conn,$confirm_password); 

    if(empty($password)|| empty($confirm_password)){
        header("Location: ResetPassword.php?newpd=empty&selector='$selector'&validator='$validator'");
        exit();
    }else if( $password !=$confirm_password){
        header("Location: ResetPassword.php?newpd=pwdnotsame&selector=".$selector."&validator=".$validator);
        exit();
    }
    $currentDate = date("U");
    $sql = "SELECT * FROM pwdReset WHERE pwdResetSelector='$selector' AND pwdResetExpires>='$currentDate'";
    $result = mysqli_query($conn,$sql) ;
     
      if(!$result){
        echo "There was an error ";
        exit();
      }
        if(!$row=mysqli_fetch_assoc($result)){
            echo "Youu need to re-submit your reset request. ";
            exit();
        }else{
            $tokenBin = hex2bin($validator);
            $tokenCheck =password_verify($tokenBin,$row["pwdResetToken"]);
            if($tokenCheck == false){
                echo "You need to re-submit your reset request. ";
                exit();
            }else if($tokenCheck == true){
                $tokenEmail = $row["pwdResetEmail"];

                $sql = "SELECT * FROM users where KentEmail='$tokenEmail' ";
                $result = mysqli_query($conn,$sql) ;
     
                if(!$result){
                  echo "There was an error ";
                  exit();
                }else{

                    if(!$row=mysqli_fetch_assoc($result)){
                        echo "There was an error ";
                        exit();
                    }else{
                        $Password = stripslashes($password);
                        $Password = hash('sha512', $Password);
                        $Password = mysqli_real_escape_string($conn,$Password);

                        $sql = "UPDATE users SET Password ='$Password' WHERE KentEmail = '$tokenEmail'";
                        $result = mysqli_query($conn,$sql) ;

                        if(!$result){
                            echo "There was an error ";
                            exit();
                        }else{
                           //remove echo after test

                            $sql = "Delete from pwdReset where pwdResetEmail='$tokenEmail'";
                            $result = mysqli_query($conn,$sql) ;
                            if(!$result){
                                echo "There was an error ";
                                exit();
                            }else{
                                $updated = "Password Updated! Enter you Login Details"; 
                                header("Location:Login.php?update=$updated");
                            }
                        }
                    }

                }


            }
        }
      

} else{
    header('Location: Forgot.php');
}

?>