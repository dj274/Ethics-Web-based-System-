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
<head>
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
  padding-left: 30px;
}
</style>
<link rel="stylesheet"  href="../style.css">
    <script src="../icons.js"></script>
<title>Reviewer User Manual</title>
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

<h1>Reviewer User Manual</h1>

<h2> 1.Intended use </h2>

<p>Authics is an Ethical web-based system that allows you to apply for Ethical approvals online. </p>
<br>
<h2> 2. How to use/operate the product </h2>

<h3>Reviewer User</h3> 

<p>
1. Log in to Reviewer User Account.   <br>

2. Go to Reviewer Dashboard. <br>

3. Receive an application from the Ethics Committee.  <br>

4. View applicant application.  <br>

5. Edit applicant application.  <br>

6. Give feedback on the application. <br> 

7. Send application back to the Ethics Committee.
</p>

<br>
<h2>3. Description of the User Interface</h2>

 The user interface is designed to be easily navigable so that even a beginner will be able to easily navigate through the website. The layout of each webpage allows them to select the page they would like to access easily. 
<br>
<br>
<h3>3.1 General </h3>

Once logged in, the user will be directed to the main menu, where the user can access the Applicant Dashboard, Ethics Dashboard and Reviewer Dashboard granted that they have the authorisation to access certain Dashboards. <br>
<img src="images/Dashboard.jpg" alt="Dashboard">

<p>The profile page displays a table of all the relevant details of the user that is currently logged in. <p>
<img src="images/Profile.jpg" alt="Profile">

<p>Below all this information is the ‘Edit Profile’ button, this button can be used to change inaccurate information or information that needs to be updated. </p>
<img src="images/EditProfile.jpg" alt="EditProfile.jpg">

<h3>3.2 Reviewer </h3>

<p>There will be two assigned reviewers per application, however, the two reviewers are unable to see each other’s feedbacks, they will each have their own copy of the project application.
<br>
<br>
When the user is on the reviewer Dashboard, they will be able to see the applications assigned to them as a reviewer.</p>
<img src="images/ReviewerTable.jpg" alt="ReviewerTable">

<p>They can see the necessary information  involving the applicant's application, and have up to two actions, the 'View Application' to view, and 'Edit Application' to edit. </p>
<img src="images/ViewEdit.jpg" alt="ViewEdit.jpg">

<p>When the Reviewer edits the application, they can give feedback by making comments and state what needs to be improved or changed on the application and can recommend whether the applicant is required to make minor or major improvements or approve of the application, then submit it to the Ethics Committee.</p>
<img src ="images/ApproveNotApprove.jpg" alt="ApproveNotApprove.jpg"><br>

</div>
</div>
</body>
</html>