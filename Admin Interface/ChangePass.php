<?php



session_start();



require('../db.php');



if(isset($_SESSION['username']))



{



$useridcheck = $_SESSION['username'];







  $sql = "SELECT * FROM users WHERE Username='$useridcheck'";



        $result =$conn->query($sql);



        while($row =$result->fetch_assoc()){



            if($row['Admin']==1){



             $userid = $_SESSION['username'];



              }



              else{



                  header("Location:../Login Interface/Logout.php"); // Redirecting To Home Page







              }



    }







}



else{



header("Location:../Login Interface/Logout.php"); // Redirecting To Home Page



}







 $sql2 = "SELECT * FROM users WHERE Username = '$userid'";



 $resultb = mysqli_query($conn, $sql2);



 $usn = mysqli_fetch_assoc($resultb);









?>



	<!DOCTYPE html>



	<html>







	<head>



		<link rel="stylesheet" href="../style.css">



		<script src="../icons.js"></script>



		<script>



if(performance.navigation.type == 2){



   location.reload(true);



}



		document.addEventListener("DOMContentLoaded", () => {



			const rows = document.querySelectorAll("tr[data-href]");



			rows.forEach(row => {



				row.addEventListener("click", () => {



					window.location.href = row.dataset.href;



				});



			});



		});



		</script>



		<style>



           table.homedashboard tr:hover{



           cursor: auto;



  }



		</style>



		<title> Automatic Ethical Approval System : Change password </title>



	</head>



	<style></style>







	<body>



		</div>



		<div class="navbar">



			<div class="dropdown">



				<button class="dropbtn">



					<a href="#home"> <i class="fa fa-user" class="fa fa-caret-down">&nbsp;</i> <i class="fa fa-caret-down"></i> </a>



				</button>



				<div class="dropdown-content">



					<a href="../Login Interface/Logout.php"> <i class="fas fa-sign-out-alt"></i>Logout </a>



				</div>



			</div>



		</div>



		<div>



		    <div class="MainContent">



			<nav id="sidebar">



				<div class="title"> <i class="fa fa-user" style="font-size:64px"></i>



					<br>



					<a style="font-size: 16px"></a>



					              <a style="font-size: 25px"><?php echo $usn["FullName"];?> | <?php echo $userid;?></a>







				</div>



				<ul class="list-items">



					<li>



						<a href="../Dashboard for all Users/All_Users_Dashboard.php"> <i class="fas fa-bars"></i>Main Menu</a>



					</li>



					<!--<li>-->



						<!--<a href="AdminProfile.php"> <i class="fas fa-id-badge"></i>Profile </a>-->



					<!--</li>-->

					<li>
          <a href="AdminDashboard.php"> <i class="fas fa-home"></i>Home </a>
          </li>



					<li>



						<a href="Adding_user_to_the_system.php"> <i class="fas fa-sticky-note"></i>Create an User </a>



					</li>



				</ul>



			</nav>



            <!--</div>-->



            <br>



            <br>

            <?php

            $username = $_REQUEST['username'];







            $sql1 = "SELECT * FROM users where Username ='$username' ";



            $resultu = mysqli_query($conn, $sql1);



            $row1 = mysqli_fetch_assoc($resultu);





            mysqli_close($conn);





             ?>


<div style="margin: auto; margin-top: 40px;">
<form action= "../PHP/Cngpass.php" method="post">



  <div class="CreatingUser">







    <label for="uname"><b>User ID</b</label>



    <input type= "text" placeholder="User ID" name="UserID" value="<?php echo $row1['Username']; ?>" readonly required disabled="on">







    <label for="psw"><b>Create Password</b</label>



    <!-- <input type= "password" placeholder="Password" name="password" required> -->

    <input type="password" title="(8-20 characters, at least 1 uppercase & lowercase character, at least 1 number)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" placeholder="E.g. Password123" name="password" required>







    <label for="psw"><b>Confirm Password</b</label>



    <!-- <input type= "password" placeholder="Confirm password" name="confirm_password" required>

 -->

    <input type="password" title="(8-20 characters, at least 1 uppercase & lowercase character, at least 1 number)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" placeholder="Confirm password" name="confirm_password" required>

    <input type= "hidden" placeholder="User ID" name="UserID" value="<?php echo $row1["Username"];?>" required>







    <div class="pageButtons">



      <button onclick="window.confirm('Password Updated!');" type="submit" class="nextbtn1">Confirm</button>



    </div>



  </div>



</form>

</div>

</body>



</html>

