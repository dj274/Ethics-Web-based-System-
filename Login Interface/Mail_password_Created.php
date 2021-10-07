

<?php
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
if (isset($KentEmail))
  {//if "email" is filled out, proceed
  //check if the email address is invalid
  $mailcheck = spamcheck($KentEmail);
  if ($mailcheck==FALSE)
    {
    echo "Invalid input";
    }
  else
    {//send email
    
    $email = $KentEmail;
    $to = $email;
    $subject = "New User Created";
    $message = " Your account has been Successfully created your username and password is given below. 
                  Username: $username
                  Password: $password
    Use this link below to login to the website:
    https://raptor.kent.ac.uk/proj/co600/project/c27/Final/Login%20Interface/Login.php.
    ";
    $headers = "From : $email";

    if(mail($to,$subject,$message,$headers)){
            echo "Mail send Successfully";
            header("Location: Login.php");
    }
    }
  }
else
  {//if "email" is not filled out, display the form
 
  }
?>
