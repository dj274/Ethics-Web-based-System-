<?php



require("../db.php");








  if (isset($_REQUEST['confirm_password'])){



      // $Password = $_REQUEST['confirm_password'];
      
      $Password = stripslashes($_REQUEST['confirm_password']);
      $Password = hash('sha512', $Password);
    	$Password = mysqli_real_escape_string($conn,$Password);//testing purposes, remove after testing is done.


      $Username = $_REQUEST['UserID'];


           $query = "UPDATE users SET Password = '$Password' WHERE Username = '$Username'";


          // $query = "UPDATE users SET Password = '".md5($Password)."' WHERE Username = '$Username'";





        if (mysqli_query($conn, $query)) {



         "Record updated successfully";



    }



 else {



        "Error: " . $query . "<br>" . mysqli_error($conn);



    }



  }



?>

	<script type="text/javascript">

	 window.location.href = '../Admin Interface/AdminDashboard.php';



	function myFunction() {

		var person = prompt("Record updated!");

	}

	</script>

