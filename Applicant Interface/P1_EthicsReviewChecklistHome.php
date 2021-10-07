<?php 
session_start();
require('../db.php');
require('../Appliverify.php');
if(!isset($_SESSION['username'])){
  header("Location:../Login Interface/Logout.php"); 
}


$sql= "select MAX(ApplicationID) As id from LinkingApplicationToApplicant";
     if (mysqli_query($conn, $sql)) {
          $result = mysqli_query($conn, $sql);
         if($row = mysqli_fetch_assoc($result)) {
          $ApplicationID = $row['id'];
         
          $ApplicationID= $ApplicationID+1;
       
         $_SESSION ["ApplicationID"] = $ApplicationID;
       
         }else{
          $ApplicationID = 0;
         }
         
    }else{
      $ApplicationID = 0;
    }
   
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style.css">
    <script src="../icons.js"></script>
                <script>
        var id = document.getElementById('trash');
    
    function myJsFunc(e) {
        e.stopPropagation();
        var nextpage = e.target.dataset.href;
        document.getElementById('trash').style.display='block';
        document.getElementById("nextButton").href = nextpage;
        console.log(nextpage);
    }
    </script>
<style>
p {
  color: black;
  font-family: PT Sans ;
  font-size: 150%;
  position:static;
  background-color: white;
  border: 5px solid rgb(51, 116, 212);
  padding: 30px;
  margin: 50px;
  border-radius: 20px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3) ;
}


#button{
  font-family: sans-serif;
  font-weight: normal;
  font-size: 20px;
  background-color: rgb(96, 155, 243);
  color: black;
  padding: 50px 50px 50px 50px;
  margin: 5px;
  text-decoration: none;
  border-radius: 10px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3) ;
}

#button:hover, button:hover {
  background-color: rgb(77, 224, 102);
  cursor:pointer;
}

.center {
  margin: 10;
  position: absolute;
  top: 85%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

</style>

<title>
  Automatic Ethical Approval System: Ethics Review Checklist 
</title>

</head>

<body>
<div class="navbar">
        <div class="dropdown">
             <button class="dropbtn">
                 <a href="#home">
                     <i class="fa fa-user" class="fa fa-caret-down"></i>
                     <i class="fa fa-caret-down"></i></a>
             </button>
            
        <div class="dropdown-content">
            <a href="ApplicantDashboard.php"><i class="fas fa-home"></i>Home</a>
            <a data-href="../Login Interface/Logout.php" onclick='myJsFunc(event)'><i class="fas fa-sign-out-alt"></i>Logout</a>
        </div>
        </div>
        </div>
        <br>
        <br>
        <br>
  <h1>
    ETHICS REVIEW CHECKLIST FOR RESEARCH WITH HUMAN PARTICIPANTS – FACULTY OF SCIENCES
  </h1>
   <div id="trash" class="delete">
            <div class="promptbox">
                <input type="hidden" id="appID">
                <input type="hidden" id="appID">
                <h1>Are you sure you want to quit this application?</h1>
                <br>
                <br>
                <div class="pageButtons">
                <a class="button" onclick="document.getElementById('trash').style.display='none'">No</a>
                <a class="button" onclick="document.getElementById('trash').style.display='none'" href="" id="nextButton">Yes</a>
            </div>
        </div>
    </div>

  <p>
    A checklist should be completed for every research project in order to identify whether a full application for ethics approval needs to be submitted. The principal investigator or, where the principal investigator is a student, the supervisor, is responsible for exercising appropriate professional judgement in this review.
  </p>

  <p>
    This checklist must be completed before potential participants are approached to take part in any research. All forms must be signed by the School’s Research Ethics Advisory Group representative.
  </p>
  <a class="center" href="P2_Section1ProjectDetails.php" id="button">Start Application</a>

</body>
</html>
