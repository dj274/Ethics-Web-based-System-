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
.ul{
    padding-left:20px;
}
</style>
<title>Admin User Manual</title>
<link rel="stylesheet"  href="../style.css">
    <script src="../icons.js"></script>
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
<h1>Admin User Manual</h1>

<h2> 1.Intended use </h2>

<p>Authics is an Ethical web-based system that allows you to apply for Ethical approvals online.</p>
<br>
<h2> 2. How to use/operate the product </h2>

<h3>Admin Committee User</h3>
<p>1. Log in to Admin User Account.  

<br>2. Go to Admin Dashboard.  

<br>3. Create an applicant.  

<br>4. Edit the user's information. 

<br>5. Edit the users' privileges.  

<br>6. View applicant profiles/dashboards. 

<br>7. View applicant applications. 
</p>

<br>
<h2>3. Description of the User Interface</h2>

<p>The user interface is designed to be easily navigable so that even a beginner will be able to easily navigate through the website. The layout of each webpage allows them to select the page they would like to access easily.</p>
<br>
<h3>3.1 General </h3>

<p>Once logged in, the user will be directed to the main menu, where the user can access the Applicant Dashboard, Ethics Dashboard and Reviewer Dashboard granted that they have the authorisation to access certain Dashboards. </p>
<img src="images/Dashboard.jpg" alt="Dashboard">


 

<p>The profile page displays a table of all the relevant details of the user that is currently logged in. </p>
<img src="images/Profile.jpg" alt="Profile">
 

<p>Below all this information is the ‘Edit Profile’ button, this button can be used to change inaccurate information or information that needs to be updated. </p>
<img src="images/EditProfile.jpg" alt="Edit Profile">

<h3>3.2 Admin </h3>

<p>When the user is on the Admin Dashboard, the admin user can see every user account on the system in a table along with their relevant information. </p>
<img src="images/AdminTable.jpg" alt="AdminTable.jpg">

<p>The four to six buttons depending on the roles assigned to a particular user, the actions buttons are ‘View Applicant’, ‘View Ethics Committee’,  ‘View Reviewer’, ‘Edit User’, ‘View Profile’, and ‘Change Password’: </p>

<p class="ul"> - The ‘View Applicant/Ethics Committee/Reviewer’ button allows the user to access the dashboards of a certain user.</p>    
<img src="images/ViewPage.jpg" alt="ViewPage.jpg">

    
<p class="ul"> - The ‘View Profile’ button allows the admin user to access view a certain user accounts profile and view the applications assigned to that user, whether Reviewer, Ethics Committee or Applicant.  </p>
<img src="images/Profile.jpg" alt="Profile">

<p class="ul">- The ‘Edit Profile’ button lets the admin user edit the profile information and user privileges, such as the name, email address, telephone, account type etc.  </p>
<img src="images/EditPage.jpg" alt="EditPage.jpg">


<p class="ul">- The ‘Access profile’ button allows the user to see the relevant information of that specific user. </p>
<img src="images/AccessProfile.jpg" alt="AccessProfile.jpg">

<p class="ul">- The ‘Change Password’ button allows the user to change the password of the selected user</p>
<img src="images/CPPage.jpg" alt="CPPage.jpg">

<p>The admin user can create applicants, by clicking on the 'Create a User’ button. When creating a user, the admin can insert all the relevant information of the new user. </p>
<img src="images/CreateUser.jpg" alt="CreateUser.jpg">

<p>
The admin user can also view and edit comments of the Ethics Committee and Reviewer by accessing the ethics committee or reviewers' dashboards. As well as view the applicants' applications. 
</p>

</div>
</div>
</body>
</html>