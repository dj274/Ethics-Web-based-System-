<?php

session_start();
require('../db.php');

require('../Appliverify.php');

if (isset($_SESSION['ApplicationID'])){
    $ApplicationID = $_SESSION["ApplicationID"];
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
  position: relative;
}

#button:hover, button:hover {
  background-color: rgb(77, 224, 102);
  cursor:pointer;
}

</style>

<title>
Automatic Ethical Approval System: Full Ethics Application
</title>

</head>

<body>
   <div class="navbar">
        <a data-href="../Login Interface/Logout.php" onclick='myJsFunc(event)'><i class="fas fa-save"></i>Save & Quit</a>
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
    FULL ETHICS APPLICATION FOR RESEARCH WITH HUMAN PARTICIPANTS – FACULTY OF SCIENCES

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
    
    <div>
  <p>
    If any of the questions in Sections 4 (Part B) and/or (Part C) and/or (Part D) is answered ‘yes’, a full ethics application must be made to the REAG.  This also applies for studies not defined as ‘research’ in the narrow sense, i.e. evaluations/audits, etc.  Complete this form and submit it  along with supporting documentation: a copy of the full research proposal; any participant information sheets and consent forms; any surveys, interview schedules; any advertising material or proposed website wording.  It is important to note that you must not commence any research with human participants until full approval has been given by the Research Ethics Advisory Group – you will be notified via email when this has been granted.
<br>
<br>
    During term time we aim to process a research ethics application within two weeks, however during vacation periods and busy times (e.g. exams and marking period) it can take up to four weeks. It is the applicant's responsibility to ensure that their application is submitted in good time.
    </p>
    <div style="text-align: center;">
    <br>
    <br>
    <a href="P10_Section1Overview.php" id="button">Start Application</a>
    </div>
    </div>
    

</body>
</html>
