<?php



require("../db.php");



  if (isset($_REQUEST['FullName'])){
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

    

	$FullName = stripslashes($_REQUEST['FullName']);

    $FullName = mysqli_real_escape_string($conn,$FullName);

    

    $KentEmail = stripslashes($_REQUEST['Email']); 

    $KentEmail = mysqli_real_escape_string($conn,$KentEmail);

    

    $Telephone = stripslashes($_REQUEST['Telephone']);

    $Telephone = mysqli_real_escape_string($conn,$Telephone);

    

    $Postcode = stripslashes($_REQUEST['Postcode']);

    $Postcode = mysqli_real_escape_string($conn,$Postcode);

    

    $Address = stripslashes($_REQUEST['FirstLineAddress']);

    $Address = mysqli_real_escape_string($conn,$Address);

    

    $LevelOfStudy = stripslashes($_REQUEST['LevelOfStudy']);

    $LevelOfStudy = mysqli_real_escape_string($conn,$LevelOfStudy);

    

    $Department = stripslashes($_REQUEST['Department']);

    $Department = mysqli_real_escape_string($conn,$Department);

    

    $Role = stripslashes($_REQUEST['Role']);

    $Role = mysqli_real_escape_string($conn,$Role);

    

    $Username = stripslashes($_REQUEST['UserID']);

    $Username = mysqli_real_escape_string($conn,$Username);

    $sql_u = "SELECT * FROM users WHERE Username='$Username'";
    $res_u = mysqli_query($conn, $sql_u);
  	if (mysqli_num_rows($res_u) > 0) {
      session_start();
  	  $_SESSION["user_error"] = "Sorry... username already taken"; 	
      header("Location: ../Admin Interface/Adding_user_to_the_system.php");

  	}
    else{

    // $Password = stripslashes($_REQUEST['password']);

    // $Password = mysqli_real_escape_string($conn,$Password);

    

    // $UserID = "";

        

		// $trn_date = date("Y-m-d H:i:s");

		

    //         $query = "INSERT IGNORE INTO `users` (FullName, KentEmail, Telephone, Postcode, Address, LevelOfStudy, Department, Role, Username, Password ) 

    //         VALUES ('$FullName', '$KentEmail', '$Telephone','$Postcode','$Address', '$LevelOfStudy', '$Department', '$Role', '$Username', '".md5($Password)."')";

//                                                                 SHA512
// #####################################################################################################################################################################################


$Password = stripslashes($_REQUEST['password']);

$Password = hash('sha512', $Password);

$Password = mysqli_real_escape_string($conn,$Password);//remove echo after test



$UserID = "";

    

$trn_date = date("Y-m-d H:i:s");



        $query = "INSERT IGNORE INTO `users` (FullName, KentEmail, Telephone, Postcode, Address, LevelOfStudy, Department, Role, Username, Password ) 

        VALUES ('$FullName', '$KentEmail', '$Telephone','$Postcode','$Address', '$LevelOfStudy', '$Department', '$Role', '$Username', '$Password')";


// ######################################################################################################################################################################################

            



        $result = mysqli_query($conn,$query);

        if($result){

             header("Location: ../Admin Interface/Adding_user_to_the_system.php");

//               if(isset( $_REQUEST['Applicant'])){

//     $Applicant = $_REQUEST['Applicant'];



//     if ($Applicant == "on") {

//      $Applicant ="1";

//   }

//   }

//   else {

//     $Applicant="0";

//   }



//       $query2 = "UPDATE users SET Applicant = '$Applicant' WHERE Username = '$Username'";

//     if (mysqli_query($conn, $query2)) {

//      "Role1 updated successfully";

//   }

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
    $message = " Your account has been created your username and password is given below. 
                  Username: $Username
                  Password: $Password
    Use this link below to login to the website:
    https://raptor.kent.ac.uk/proj/co600/project/c27/Final/Login%20Interface/Login.php.
    ";
    $headers = "From : $email";

    if(mail($to,$subject,$message,$headers)){
            echo "Mail send Successfully";
            // header("../Login Interface/Logout.php");
    }
    }
  }
else
  {//if "email" is not filled out, display the form
 
  }






  if (isset($_REQUEST['Admin'])){

    $Admin = $_REQUEST['Admin'];



    if ($Admin == "on") {

     $Admin ="1";

    }

  }

  else {

    $Admin="0";

  }

     $query3 = "UPDATE users SET Admin = '$Admin' WHERE Username = '$Username'";

   if (mysqli_query($conn, $query3)) {

    "Role2 updated successfully";

  }



  if (isset($_REQUEST['Reviewer'])){

    $Reviewer = $_REQUEST['Reviewer'];





        if ($Reviewer == "on") {

         $Reviewer ="1";

       }

  }

  else {

    $Reviewer="0";

  }

      $query4 = "UPDATE users SET Reviewer = '$Reviewer' WHERE Username = '$Username'";

    if (mysqli_query($conn, $query4)) {

     "Role3 updated successfully";

}





  if (isset($_REQUEST['EthicsCommittee'])){

    $EthicsCommittee = $_REQUEST['EthicsCommittee'];





        if ($EthicsCommittee == "on") {

         $EthicsCommittee ="1";

       }

  }

  else {

    $EthicsCommittee="0";

  }



      $query5 = "UPDATE users SET EthicsComittee = '$EthicsCommittee' WHERE Username = '$Username'";

    if (mysqli_query($conn, $query5)) {

     "Role4 updated successfully";

}



            $UserID = mysqli_insert_id($conn);

            

            if ($UserID > 0)

            {

            if ($Role == "Applicant")

            {

                $query = "INSERT IGNORE INTO `Roles` (UserID, Admin, Reviewer, Committee_Member) VALUES ('$UserID', '0', '0','0')";

        

                $result2 = mysqli_query($conn,$query);

            }

            else if ($Role == "Admin")

            {

                $query = "INSERT IGNORE INTO `Roles` (UserID, Admin, Reviewer, Committee_Member) VALUES ('$UserID', '1', '0','0')";

        

                $result2 = mysqli_query($conn,$query);

            }

            else if ($Role == "Ethics Committee")

            {

                $query = "INSERT IGNORE INTO `Roles` (UserID, Admin, Reviewer, Committee_Member) VALUES ('$UserID', '0', '0','1')";

        

                $result2 = mysqli_query($conn,$query);

            }

            else if ($Role == "Reviewer")

            {

                $query = "INSERT IGNORE INTO `Roles` (UserID, Admin, Reviewer, Committee_Member) VALUES ('$UserID', '0', '1','0')";

        

                $result2 = mysqli_query($conn,$query);

            }

            }

            

        }else{

            echo "Registration unsuccessful";

              echo "Error: " . $query . "<br>" . mysqli_error($conn);

        }

    

    }

}



?>