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

                  header("Location: ../Login Interface/Logout.php"); // Redirecting To Home Page



              }



    }

                

}

else{

header("Location: ../Login Interface/Logout.php"); // Redirecting To Home Page

}



 $sql2 = "SELECT * FROM users WHERE Username = '$userid'";

 $resultb = mysqli_query($conn, $sql2);

 $usn = mysqli_fetch_assoc($resultb);

 

 





  mysqli_close($conn);



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

		<title> Automatic Ethical Approval System : Edit User </title>

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

<br>

<br>

<?php

require('../db.php');

$username = $_REQUEST['username'];



$sql1 = "SELECT * FROM users where Username ='$username' ";

$resultu = mysqli_query($conn, $sql1);

$row1 = mysqli_fetch_assoc($resultu);

mysqli_close($conn);



?>


<div style="margin: auto; margin-top: 40px;">
<form action= "../PHP/EdUser.php" method="post">

  <div class="CreatingUser">

    <label for="uname">

      <b>Full Name</b

      </label>

      <input type= "text" placeholder="Full Name" name="FullName" value="<?php echo $row1["FullName"];?>" required>

      <label for="uname">

        <b>Kent(ID) Email</b

        </label>

        <input type= "text" placeholder="ab123@kent.ac.uk" name="Email" value="<?php echo $row1["KentEmail"];?>" required>

        <label for="uname">

          <b>Telephone</b

          </label>

          <input type= "text" placeholder="Phone no.." name="Telephone" value="<?php echo $row1["Telephone"];?>" required>

          <label for="uname">

            <b>Postcode</b

            </label>

            <input type= "text" placeholder="Postcode.." name="Postcode" value="<?php echo $row1["Postcode"];?>" required>

            <label for="uname">

              <b>First Line Address</b

              </label>

              <input type= "text" placeholder="First line address.." name="FirstLineAddress" value="<?php echo $row1["Address"];?>" required>

              <label for="Role">

                <b>Level Of Study/Staff </b

                </label>

                <select id="LevelOfStudy" name="LevelOfStudy" >

                  <option value="<?php echo $row1["LevelOfStudy"];?>"><?php echo $row1["LevelOfStudy"];?></option>

                  <option value="Undergraduate">Undergraduate</option>

                  <option value="Taught Postgraduate">Taught Postgraduate</option>

                  <option value="Research Postgraduate">Research Postgraduate</option>

                  <option value="Staff">Staff</option>

                </select>

              </select>

              <label for="Department">

                <b>Department</b

                </label>

                <select id="Department" name="Department" required>

                  <option value="<?php echo $row1["Department"];?>"><?php echo $row1["Department"];?></option>

                  <option value="Computing">Computing</option>

                  <option value="Economics">Economics</option>

                  <option value="Business">Business</option>

                  <option value="Arts">Arts</option>

                </select>

                <label>

                  <b> Account type(s) </b>

                </label>

                <br>

                <br>

                <style>

                #role {

                  border:1px solid #ccc;

                  padding:10px;

                  margin:0 0 10px;

                  display:block;

                }

                

                #role:hover {

                  background:#eee;

                  cursor:pointer;

                }

                </style>

                <label id="role"> <input style="margin:10px;" type="checkbox" name="Applicant" <?php if($row1["Applicant"] == "1") echo"checked='true'";?>> Applicant</label>

                <br>

                <label id="role"> <input style="margin:10px;" type="checkbox" name="Admin" <?php if($row1["Admin"] == "1") echo"checked='true'";?>> Admin</label>

                <br>

                <label id="role"> <input style="margin:10px;" type="checkbox" name="EthicsCommittee" <?php if($row1["EthicsComittee"] == "1") echo"checked='true'";?>> Ethics Committee</label>

                <br>

                <label id="role"> <input style="margin:10px;" type="checkbox" name="Reviewer" <?php if($row1["Reviewer"] == "1") echo"checked='true'";?>> Reviewer</label>

                <br>

                <label for="Role">

                  <b> Default Role </b>

                </label>

                <select id="Department" name="Role" required>

                  <option value="<?php echo $row1["Role"];?>"><?php echo $row1["Role"];?></option>

                  <option <?php if (($row1['Applicant']==0)) echo "Readonly disabled='true'" ;?> value="Applicant">Applicant</option>

                  <option <?php if (($row1['EthicsComittee']==0)) echo "Readonly disabled='true'" ;?>value="Ethics Committee">Ethics Commitee</option>

                  <option<?php if (($row1['Reviewer']==0)) echo "Readonly disabled='true'" ;?> value="Reviewer">Reviewer</option>

                  <option <?php if (($row1['Admin']==0)) echo "Readonly disabled='true'" ;?> value="Admin">Admin</option>

                </select>

                <input type= "hidden" placeholder="User ID" name="UserID" value="<?php echo $row1["Username"];?>" required>

                <button onclick="window.confirm('Updated!');" type="submit" class="nextbtn1">Confirm</button>

              </div>

            </div>

          </form>
</div>
        </body>

        </html>