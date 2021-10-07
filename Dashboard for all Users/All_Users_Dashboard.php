<?php
session_start();
require('../db.php');
if(!isset($_SESSION['username'])){
   
    header("Location: ../Login Interface/Login.php");
}
$userid= $_SESSION['username'];
$sql = "SELECT * FROM users WHERE Username='$userid'";
$result =$conn->query($sql);
while($row =$result->fetch_assoc()){
        if($row['Applicant']==1){
        $Applicant =$row['Applicant']; }
        if($row['Admin']==1){
        $Admin =$row['Admin']; }
        if($row['EthicsComittee']==1){
        $Ethicscommittee =$row['EthicsComittee']; }
        if($row['Reviewer']==1){
        $reviewer =$row['Reviewer'];  }
}
if (isset($_REQUEST['username'])) {
  
  $username = $_REQUEST ["username"];
  $query = "select * from users where Username='$username'";
     $result =$conn->query($query);
      $row =$result->fetch_assoc();
      $user = $row['UserID'];
}
else{
$username= $_SESSION["username"];
}
         $query = "select * from users where Username='$username'";
            $result =$conn->query($query);
             $row =$result->fetch_assoc();
             $user = $row['UserID'];
            ?>
<!DOCTYPE html>
<html>
  <head>
     
    <link rel="stylesheet"  href="../style.css">
    <script src="../icons.js"></script>
    <script>
</script>
  <title>
    Automatic Ethical Approval System: Main menu
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
              <i class="fa fa-user" class="fa fa-caret-down">&nbsp;</i>
              <i class="fa fa-caret-down"></i></a>
          </button>
          <div class="dropdown-content">
            <a href="../Login Interface/Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </div>
        </div>
      </div>
      <div style="display: flex;">
        <nav id="sidebar">
        <div class="title">
          <i class="fa fa-user" style="font-size:64px"></i><br>
              <a style="font-size: 25px"><?php echo $row["FullName"];?> | <?php echo $row["Username"];?></a>
        </div>
        <ul class="list-items">
            <li><a href="All_Users_Dashboard.php"><i class="fas fa-bars"></i>Main Menu</a></li>
            <li><a href="Profile.php"><i class="fas fa-id-badge"></i>Profile</a></li>
        </ul>
      </nav>
      
      <div class="MenuBox">
      <?php if(isset($Admin)){ ?>
        <button onclick="location.href='../Admin Interface/AdminDashboard.php'" style="font-size: 15px;" class="box1"><br><img src="admin.jpg" width="175px"><i class="fas fa-tachometer-alt"></i>Admin Dashboard</button>
        <?php } else{} ?>
        <?php if(isset($Applicant)){ ?>
        <button onclick="location.href='../Applicant Interface/ApplicantDashboard.php'"  style="font-size: 15px;" class="box2"><br><img src="applicant.jpg"width="175px"><i class="fas fa-tachometer-alt"></i>Applicant Dashboard</button>
        <?php } else{} ?>
        <?php if(isset($reviewer)){ ?>
        <button onclick="location.href='../Reviewer Interface/ReviewerDashboard.php'"style="font-size: 15px;" class="box3"><br><img src="reviewer.jpg"width="175px"><i class="fas fa-tachometer-alt"></i>Reviewer Dashboard</button>
        <?php } else{} ?>
        <?php if(isset($Ethicscommittee)){ ?>
        <button  onclick="location.href='../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php'" style="font-size: 15px;" class="box4"><br><img src="ethics.jpg"width="175px"><i class="fas fa-tachometer-alt"></i>Ethics Dashboard</button>
        <?php } else{} ?>
      </div>
        </body>
        </html>

