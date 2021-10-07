<?php
session_start();
require('../db.php');
require('../Appliverify.php');

if(isset($_GET['id'])){
    $username =$_GET['id'];
    $username= $_SESSION["username"];
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
<html>
<style>
img{
	display: block;
	margin-left: auto;
	margin-right: auto;
	margin-top: 5px;
	margin-bottom: 30px;
	border: solid;
	border-width: 1px;
}
.ul {
  padding-left: 20px;
}
</style>
<link rel="stylesheet"  href="../style.css">
    <script src="../icons.js"></script>
<title>Ethics Committee User Manual</title>
<body>
<div class="navbar">
        <div class="dropdown">
          <button class="dropbtn">
            <a href="#home">
              <i class="fa fa-user" class="fa fa-caret-down">&nbsp;</i>
              <i class="fa fa-caret-down"></i></a>
          </button>
          <div class="dropdown-content">
            <a href="../Admin Interface/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </div>
        </div>
      </div>

      <div>
          <div class="MainContent">
          <nav id="sidebar">
        <div class="title">
          <i class="fa fa-user" style="font-size:64px"></i><br>
              <a style="font-size: 25px"><?php echo $row["FullName"];?> | <?php echo $row["Username"];?></a>
        </div>
        <ul class="list-items">
           <li><a href="../Dashboard for all Users/All_Users_Dashboard.php"><i class="fas fa-bars"></i>Main Menu</a></li>
        </ul>
        </nav>
        
        <div style="margin-left: 100px;" class="container">

<h1>Ethics Committee User Manual</h1>

<h2> 1.Intended use </h2>

<p>Authics is an Ethical web-based system that allows you to apply for Ethical approvals online. </p>
<br>

<h2> 2. How to use/operate the product </h2>

<h3>Ethics Committee User</h3> 

<p>
1. Log in to the Ethics Committee user account.  <br> 

2. Go to the Ethics Committee dashboard.  <br> 

3. View applicant application.  <br> 

4. Assign 2 Reviewers. <br> 

5. Wait for Reviewers feedback. <br> 

6. Recieve both the Reviewers feedback.<br> 

7. Submit application - approve, minor adjustments, major adjustments.
</p>

<br>
<h2>3. Description of the User Interface</h2>

<p> The user interface is designed to be easily navigable so that even a beginner will be able to easily navigate through the website. The layout of each webpage allows them to select the page they would like to access easily. </p>
<br>
<h3>3.1 General </h3>

<p>Once logged in, the user will be directed to the main menu, where the user can access the Applicant Dashboard, Ethics Dashboard and Reviewer Dashboard granted that they have the authorisation to access certain Dashboards.</p>
<img src="images/Dashboard.jpg" alt="Dashboard">

 
<p>The profile page displays a table of all the relevant details of the user that is currently logged in.</p>
<img src="images/Profile.jpg" alt="Profile">
 
<p>Below all this information is the ‘Edit Profile’ button, this button can be used to change inaccurate information or information that needs to be updated. </p>
<img src="images/EditProfile.jpg" alt="Edit Profile">

<h3>3.2 Ethics Committee </h3>
<p>On the Ethics committee Dashboard, the user can see a list of the submitted application of the applicants, with the relevant information. </p>
<img src="images/EthicsTable.jpg" alt="EthicsTable.jpg">

<p>The Ethics Committee can also see which of reviewers have been assigned to an application, if there have not been any reviewers assigned to it then in the ‘Reviewer Assigned To’ column will say "No Reviewers Assigned.  </p>

<p>On the ‘Actions’ column, the ethics committee can view or edit the application: </p>
<p class="ul">- When the Ethics Committee User clicks on the 'View Application' button, they will be able to view the application belonging to the applicant of their choice, and can assign 2 reviewers to the application by searching the username of a reviewer and submit it.</p>
<img src="images/AssignReviewer.jpg" alt="AssignReviewer.jpg">
<p class="ul">- When the Ethics Committee User clicks on the 'Edit Application' button, they will be able to see  the 2 different versions of the  application received from the reviewers. </p>
<img src="images/Version1Version2.jpg" alt="Version1Version2.jpg"> 

<p>Once the reviewer submits the application, it is sent back to the Ethics Committee to approve or whether adjustments is required. </p>
<img src ="images/ApproveNotApprove.jpg" alt="ApproveNotApprove.jpg"><br>

</div>
</div>
</div>
</body>
</html>