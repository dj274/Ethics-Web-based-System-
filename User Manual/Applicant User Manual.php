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
<title>Applicant User Manual</title>
<link rel="stylesheet"  href="../style.css">
    <script src="../icons.js"></script>
</head>
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
      
<h1>Applicant User Manual</h1>


<h2> 1.Intended use </h2>

<p>Authics is an Ethical web-based system that allows you to apply for Ethical approvals online. </p>
<br>

<h2> 2. How to use/operate the product </h2>

<h3>Applicant</h3> 

<p></p>
1. Log in to the applicant user account.<br> 

2. Go to the applicant dashboard.<br>

3. Click on Create an application and start an application.<br>

4. Fill in the first application form.<br>

5. Fill in the second application form. <br>

6. Wait for the Ethics Committee’s response.<br>
         <ul>
        <p class="ul"> - If the application was unapproved, the applicant must adjust the application then resubmit. </p>

7. Application Approved.
</p>
<br>
<h2>3. Description of the User Interface</h2>

<p> The user interface is designed to be easily navigable so that even a beginner will be able to easily navigate through the website. The layout of each webpage allows them to select the page they would like to access easily. </p>
<br>
<h3>3.1 General </h3>

Once logged in, the user will be directed to the main menu, where the user can access the Applicant Dashboard, Ethics Dashboard and Reviewer Dashboard granted that they have the authorisation to access certain Dashboards. 
<img src="images/Dashboard.jpg" alt="Dashboard">


The profile page displays a table of all the relevant details of the user that is currently logged in. 
<img src="images/Profile.jpg" alt="Profile">

 	 

Below all this information is the ‘Edit Profile’ button, this button can be used to change inaccurate information or information that needs to be updated.
<img src="images/EditProfile.jpg" alt="Edit Profile">
<br>
<h3>3.2 Applicant </h3>
<p>
On the Applicant Dashboard, the user can see the list of their applications in a table at the centre of the page. The relevant information can be seen in the table. On the action's column, you will be able to edit or delete a project application depending on the status.  <br>
<img src="images/ApplicantTable.jpg" alt="ApplicantTable.jpg">


The ‘Create an Application’ buttons will let the user start creating an application. Once clicked he will be directed to the first application form. <br>
<img src="images/FirstApplication1.jpg" alt="FirstApplication1.jpg" height="500px">

 

After completing the first application form, the user will be directed to the second application form.
<img src="images/SecondApplication2.jpg" alt="SecondApplication2.jpg" height="350px">
 

The applicant will be required to upload three separate documents. The ‘Choose file’ button will allow the applicant to browse their documents on their computer and select a file, the button to the left is to delete the selected file, and the button to the right is to upload the file document.</p>
<img src="images/FileUpload.jpg" alt="FileUpload.jpg">

 

Once both the applications have been completed, the applicant can then submit the submit the application. Or save it when the application is not yet complete, and they would like to edit it later.</p>
<img src="images/SaveSubmit.jpg" alt="SaveSubmit.jpg">


Below the ‘Create an Application’ button, the distinct colours represent the different status of an application so that the applicant can identify which of their applications requires further editing. </p>
<img src="images/ApplicantProgress.jpg" alt="ApplicantProgress.jpg">
 

On the ‘Actions’ column the applicant can click on the buttons ‘View Application’, ‘Edit Application’ and ‘Delete Application’ to  view, edit,or delete their applications on the dashboard if it has not yet been submitted. </p>
<img src="images/ViewEditDelete.jpg" alt="ViewEditDelete.jpg">

</div>
</div>
</div>

</body>
</html>