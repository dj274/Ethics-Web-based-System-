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
//For the first application php code
if(isset($_POST['filter'])){
if($_POST['filter']=="admin"){
$sql1 = "SELECT * FROM users WHERE Admin='1' ";
}
elseif($_POST['filter']=="app"){
$sql1 = "SELECT * FROM users WHERE Applicant ='1'";
}
elseif($_POST['filter']=="Ethics"){
$sql1 = "SELECT * FROM users WHERE EthicsComittee='1'";
}
elseif($_POST['filter']=="rev"){
$sql1 = "SELECT * FROM users WHERE Reviewer='1'";
}
elseif($_POST['filter']=="school"){
$sql1 = "SELECT * FROM users ORDER BY Department ASC; ";
}
elseif($_POST['filter']=="und"){
$sql1 = "SELECT * FROM users WHERE LevelOfStudy='Undergraduate'";
}
elseif($_POST['filter']=="postgr"){
$sql1 = "SELECT * FROM users WHERE LevelOfStudy='Taught Postgraduate'";
}
elseif($_POST['filter']=="respost"){
$sql1 = "SELECT * FROM users WHERE LevelOfStudy ='Research Postgraduate'";
}
elseif($_POST['filter']=="staff"){
$sql1 = "SELECT * FROM users WHERE Reviewer='1' AND EthicsComittee='1'";
}
elseif($_POST['filter']=="all"){
$sql1 = "SELECT * FROM users ";
}
}
else{
$sql1 = "SELECT * FROM users ";
}
$resultu = mysqli_query($conn, $sql1);
$sql2 = "SELECT * FROM users WHERE Username = '$userid'";
$resultb = mysqli_query($conn, $sql2);
$usn = mysqli_fetch_assoc($resultb);

if (isset($_REQUEST['username'])) {
  $username = $_REQUEST ["username"];
  $query = "select * from users where Username='$username'";
     $result =$conn->query($query);
      $row =$result->fetch_assoc();
      $user = $row['UserID'];
      if($row['Applicant']==1){
        $Applicant =$row['Applicant']; }
        if($row['Admin']==1){
        $Admin =$row['Admin']; }
        if($row['EthicsComittee']==1){
        $Ethicscommittee =$row['EthicsComittee']; }
        if($row['Reviewer']==1){
        $reviewer =$row['Reviewer'];  }
}
else{
$username= $_SESSION["username"];
}
         $query = "select * from users where Username='$username'";
            $result =$conn->query($query);
             $row =$result->fetch_assoc();
             $user = $row['UserID'];
             if($row['Applicant']==1){
              $Applicant =$row['Applicant']; }
              if($row['Admin']==1){
              $Admin =$row['Admin']; }
              if($row['EthicsComittee']==1){
              $Ethicscommittee =$row['EthicsComittee']; }
              if($row['Reviewer']==1){
              $reviewer =$row['Reviewer'];  }
mysqli_close($conn);
?>
<?php
 $_SESSION["user_error"]= " "; 

if ($_SESSION['user_error']== "Username is set.") {
    
  $_SESSION['user_error']=" ";
 }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../style.css">
    <script src="../icons.js">
    </script>
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
      #sidebar {
          /* position: fixed; */
          height: 100%;
          width: 275px;
}
    </style>
    <title> Automatic Ethical Approval System : Home 
    </title>
  </head>
  <style>
  </style>
  <body>
    </div>
  <div class="navbar">
    <div class="dropdown">
      <button class="dropbtn">
        <a href="#home"> 
          <i class="fa fa-user" class="fa fa-caret-down">&nbsp;
          </i> 
          <i class="fa fa-caret-down">
          </i> 
        </a>
      </button>
      <div class="dropdown-content">
        <a href="../Login Interface/Logout.php"> 
          <i class="fas fa-sign-out-alt">
          </i>Logout 
        </a>
      </div>
    </div>
  </div>
  <div>
    <div class="MainContent">
      <nav id="sidebar">
        <div class="title"> 
          <i class="fa fa-user" style="font-size:64px">
          </i>
          <br>
          <a style="font-size: 16px">
          </a>
          <a style="font-size: 25px">
            <?php echo $usn["FullName"];?> | 
            <?php echo $userid;?>
          </a>
        </div>
        <ul class="list-items">
          <li>
            <a href="../Dashboard for all Users/All_Users_Dashboard.php"> 
              <i class="fas fa-bars">
              </i>Main Menu
            </a>
          </li>
          <!--<li>-->
          <!--	<a href="../PHP/Backupdb.php"> <i class="fas fa-bars"></i>Backup Database</a>-->
          <!--</li>-->
          <!--<li>-->
          <!--<a href="AdminProfile.php"> <i class="fas fa-id-badge"></i>Profile </a>-->
          <!--</li>-->
          <li>
            <a href="AdminDashboard.php"> 
              <i class="fas fa-home">
              </i>Home
            </a>
          </li>
          <li>
            <a href="Adding_user_to_the_system.php"> 
              <i class="fas fa-sticky-note">
              </i>Create an User 
            </a>
          </li>
		  <li>
			<a href="../User Manual/Admin User Manual.php">
			  <i class="fas fa-file-alt">
			  </i>User Manual
			</a>
		  </li>
          <?php if(isset($Admin)){ ?>
            <li><a href="../Admin Interface/AdminDashboard.php"><i class="fas fa-tachometer-alt"></i>Admin Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($Applicant)){ ?>
            <li><a href="../Applicant Interface/ApplicantDashboard.php"><i class="fas fa-tachometer-alt"></i>Applicant Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($reviewer)){ ?>
            <li><a href="../Reviewer Interface/ReviewerDashboard.php"><i class="fas fa-tachometer-alt"></i>Reviewer Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($Ethicscommittee)){ ?>
            <li><a href="../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php"><i class="fas fa-tachometer-alt"></i>Ethics Dashboard</a></li>
            <?php } else{} ?>
        </ul>
      </nav>
      <div style="width: 100%; margin: 40px;">
        <form method="post" action="" style="text-align: center;">
          <table class="homedashboard">
            <label>View &nbsp;&nbsp;
            </label>
            <select onchange="this.form.submit()" name="filter" class="sortinghome">
              <option value="" disabled selected >Select an option
              </option>
              <option value="all"> All Users
              </option>
              <option value="admin">All Admin Users
              </option>
              <option value="app">All Applicant Users
              </option>
              <option value="Ethics">All Ethics Commitee Users
              </option>
              <option value="rev">All Reviewer Users
              </option>
              <option value="" disabled >Select a school
              </option>
              <option value="school">School/Deparment
              </option>
              <option value="" disabled >Designation
              </option>
              <option value="und">Undergraduate
              </option>
              <option value="postgr">Taught Postgraduate
              </option>
              <option value="respost">Reasearch Postgraduate
              </option>
              <option value="staff">Staff
              </option>
            </select>
            <th colspan="6" style="text-align: center; vertical-align: middle;">List of Users</th>
            <!-- <button>View</button> -->
            <tr>
              <th style="text-align: center; vertical-align: middle;">Full Name
              </th>
              <th style="text-align: center; vertical-align: middle;">Kent(ID) Email
              </th>
              <th style="text-align: center; vertical-align: middle; width:200px;">Designation
              </th>
              <th style="text-align: center; vertical-align: middle;">School/Deparment
              </th>
              <th style="text-align: center; vertical-align: middle; width:200px;">Role
              </th>
              <th style="text-align: center; vertical-align: middle; width:350px;">Actions
              </th>
            </tr>
            </form>
          <?php
while($row1 =$resultu->fetch_assoc()){
?>
          <form name="form"  method="post">
            <tr>
              <input type="hidden" name="username" value="<?php echo $row1['Username']?>">
              <td style="text-align: center; vertical-align: middle;">
                <?php echo $row1["FullName"];?>
              </td>
              <td style="text-align: center; vertical-align: middle;">
                <?php echo $row1["KentEmail"];?>
              </td>
              <td style="text-align: center; vertical-align: middle;">
                <?php echo $row1["LevelOfStudy"];?>
              </td>
              <td style="text-align: center; vertical-align: middle;">
                <?php echo $row1["Department"];?>
              </td>
              <td style="text-align: center; vertical-align: middle;">
                <!-- <?php echo $row1["Role"];?> -->
                <div style="text-align:left;" class="">
                  <input type="checkbox" name="Admin" value="" onclick="return false;" 
                         <?php if($row1[ "Admin"]=="1" ) echo "checked='true' disabled";?>> Admin
                  <br>
                  <input type="checkbox" name="Reviewer" value="" onclick="return false;" 
                         <?php if($row1[ "Reviewer"]=="1" ) echo "checked='true' disabled";?>> Reviewer
                  <br>
                  <input type="checkbox" name="EthicsComittee" value="" onclick="return false;" 
                         <?php if($row1[ "EthicsComittee"]=="1" ) echo "checked='true' disabled";?>> Ethics comittee 
                </div>
              </td>
              <td style="text-align: center; vertical-align: middle;">
                <button title='View applicant' type="submit" name="viewus" value="view" onclick="javascript: form.action='../Applicant Interface/ApplicantDashboard.php?';">
                  <i class="fas fa-eye">
                  </i> 
                </button>
				<?php if($row1[ "EthicsComittee"]=="1" ) echo "<button title='View Ethics Commitee' type='submit' onclick=\"javascript: form.action= '../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php?'\" > <i class=\"fas fa-users\"></i>
                  </i></button>";?>
				
				<?php if($row1[ "Reviewer"]=="1" ) echo "<button title='View Reviewer' type='submit' onclick=\"javascript: form.action= '../Reviewer Interface/ReviewerDashboard.php'\" > <i class=\"fas fa-user-check\"></i>
                  </i></button>";?>

                <button title='Edit user' type="submit" name="editus" value="edit" onclick="javascript: form.action='EditUser.php';"> 
                  <i class="fas fa-pencil-alt">
                  </i> 
                </button>
                <button title= 'View Profile' type="submit" name ="profile" onclick="javascript: form.action= '../Dashboard for all Users/Profile.php'"> 
                  <i class="fas fa-id-badge">
                  </i> 
                </button>
                <button title='Change password' type="submit" name ="pass" onclick="javascript: form.action= 'ChangePass.php'"> 
                  <i class="fas fa-key">
                  </i>
                </button>

                
          </form>
            </td>
          </tr>
        <?php }
?>
        </table>
      </form>
  </div>
  </body>
</html>
