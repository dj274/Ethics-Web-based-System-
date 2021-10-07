<?php

 session_start();



 session_unset();

 

	require('../db.php');

	

    // If form submitted, insert values into the database.

    if (isset($_POST['username'])){



		$Username = stripslashes($_REQUEST['username']); 

		$Username = mysqli_real_escape_string($conn,$Username); 

		

		$Password = stripslashes($_REQUEST['password']);

		// $Password = mysqli_real_escape_string($conn,$Password);

                    // SHA512 
   ##############################################################################################################
    $Password = hash('sha512', $Password);

    echo	$Password = mysqli_real_escape_string($conn,$Password);//testing purposes, remove after testing is done.
   ##############################################################################################################

 

	//Checking is user existing in the database or not

    // $query = "SELECT * FROM `users` WHERE Username='$Username' and Password='".md5($Password)."'";

                                                // SHA512 
    ########################################################################################################################
    echo    $query = "SELECT * FROM `users` WHERE Username='$Username' and Password='$Password'";//remove echo after test
    #########################################################################################################################
		$result = mysqli_query($conn,$query) or die(mysqli_error());

    $rows = mysqli_num_rows($result);

    

    

    if($rows==1){

 

      if($rows= $result->fetch_assoc()){

              $_SESSION["CurrentUserID"] = $rows["UserID"];

            

          if($rows["Role"]=="Admin"|| $rows["Role"]=="Applicant" || $rows["Role"]=="Ethics Committee"|| $rows["Role"]=="Reviewer"){

              $_SESSION["username"]=$rows["Username"];   

            header("Location: ../Dashboard for all Users/All_Users_Dashboard.php"); // Redirect user to dashboard

          }

        }

        

    }else

    {
      $_SESSION["Error"]= "Username or Password is incorrect."; 
      header("Location: ../Login Interface/Login.php");
    //echo "<div class='pageButtons'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='../Login Interface/Login.php'>Login</a></div>";

    }

  }

?>