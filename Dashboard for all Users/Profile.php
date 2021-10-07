<?php
session_start();
require('../db.php');
if(!isset($_SESSION['username'])){
   
    header("Location: ../Login Interface/Login.php");
}
if(isset($_REQUEST['username'])){
  $userid = stripslashes($_REQUEST['username']);
  $userid = mysqli_real_escape_string($conn,$userid);

}
else{
    $userid= $_SESSION['username'];

}
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
$sqla = "SELECT * FROM users WHERE Username='$userid'";
$resulta = mysqli_query($conn, $sqla);
$row1 = mysqli_fetch_assoc($resulta);

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

?>

<!DOCTYPE html>
<html>
  <head>
     
    <link rel="stylesheet"  href="../style.css">
    <script src="../icons.js"></script>
    <script>
</script>
  <title>
    Automatic Ethical Approval System: Profile
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

      <div class="MainContent">
        <nav id="sidebar">
        <div class="title">
          <i class="fa fa-user" style="font-size:64px"></i><br>
              <a style="font-size: 25px"><?php echo $row["FullName"];?> | <?php echo $row["Username"];?></a>
        </div>
        <ul class="list-items">
            <li><a href="All_Users_Dashboard.php"><i class="fas fa-bars"></i>Main Menu</a></li>
            <li><a href="Profile.php"><i class="fas fa-id-badge"></i>Profile</a></li>
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
            <div style="margin: auto;">
                <form name="form"  method="post"  style="text-align: center; margin: auto; margin-top: 40px;">
                    <table class="profile" style="width: 750px;">
        <tr>
        <td>Name</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["FullName"];?></td>
        </tr>
        
        <tr>
        <td>School/Department</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Department"];?></td>
        </tr>
        
        <tr>
        <td>Kent(ID) Email</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["KentEmail"];?></td>
        </tr>
        
        <tr>
        <td>Telephone</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Telephone"];?></td>
        </tr>
        
        <tr>
        <td>Postcode</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Postcode"];?></td>
        </tr>
        
        <tr>
        <td>Address</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Address"];?></td>
        </tr>
        
        <tr>
        <td>Level of Study</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["LevelOfStudy"];?></td>
        </tr>
      </table>
      <input type="hidden" name="username" value="<?php echo $row1['Username']?>">

      <br>

      <!--<form name="form"  method="post">-->
      <button onclick="javascript: form.action= 'EditUserprof.php?';" type="submit" class="nextbtn1">Edit profile
      </button>
      <!--</form>-->

      </form>
      </div>
  </body>

</html>


