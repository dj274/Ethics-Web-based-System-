<?php
session_start();
require("../db.php");
if (isset($_POST['email-address'])){

  $email = stripslashes($_REQUEST['email-address']); 

  $email = mysqli_real_escape_string($conn,$email); 

//Checking is user existing in the database or not
 
  $query = "SELECT * FROM `users` WHERE KentEmail='$email'";

  $result = mysqli_query($conn,$query) or die(mysqli_error());

  $rows = mysqli_num_rows($result);
  if($rows==1){
    if($rows= $result->fetch_assoc()){

      
      // header("Location: Mail.php");
    }
  }else

  {
    $Emailerror = "The email address does not exist"; 
    header("Location: Forgot.php?error='$Emailerror'");

  }
  
}




function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail 
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
  
  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }



if (isset($_REQUEST['email-address']))
  {
    
    
    //if "email" is filled out, proceed
  //check if the email address is invalid
  $mailcheck = spamcheck($_REQUEST['email-address']);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
      $selector =bin2hex(random_bytes(8));
      $token = random_bytes(32);
      $url = "https://raptor.kent.ac.uk/proj/co600/project/c27/Final/Login%20Interface/ResetPassword.php?selector=".$selector."&validator=".bin2hex($token);
      
      $expires = date("U") +1800;

      $email = $_POST['email-address'];
      $sql = "Delete from pwdReset where pwdResetEmail='$email'";
      $result = mysqli_query($conn,$sql) ;
      if(mysqli_num_rows($result) > 0){
       
      }else{
         echo "No Records Found!";
      }
      $hashedToken = password_hash($token, PASSWORD_DEFAULT);
      
   
      $sql = "Insert into pwdReset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) values('$email','$selector','$hashedToken','$expires')";
      $result = mysqli_query($conn,$sql) ;
     
      mysqli_close($conn);

      $to = $email;
      $subject = "Password Reset Request";
      $message = 'We received a password reset request. Click on the link to reset your password or copy the link and paste in the url section  '.$url;
  
      $headers = "From : $email";

      if(mail($to,$subject,$message,$headers)){
            
              $Emailerror = "Mail sent Successfully"; 
              header("Location: Forgot.php?error='$Emailerror'");
          
      }
      }
    }
  else
    {//if "email" is not filled out.
      $Emailerror="Error!";
      header("Location: Forgot.php?error='$Emailerror'");
    }
?>
