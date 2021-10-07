<?php

session_start();

require('../db.php');

require('../Appliverify.php');



$ApplicationID = $_SESSION["ApplicationID"];

    



if (isset($_REQUEST['username'])) {

  $username = $_REQUEST ["username"];

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

<link rel="stylesheet" href="../style.css">

<script src="../scripts.js"></script>

   <script src="../icons.js"></script>

        <script>

        var id = document.getElementById('trash');

    

    function myJsFunc(e) {

     e.stopPropagation();

        var nextpage = e.target.dataset.href;

        document.getElementById('trash').style.display='block';

        document.getElementById("nextpage").value = nextpage;

    }

    </script>



<title>

Automatic Ethical Approval System: Section 11 Declaration

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

            <a data-href="../Login Interface/Logout.php" onclick='myJsFunc(event)'><i class="fas fa-sign-out-alt"></i>Logout</a>

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

            <li><a data-href="../Dashboard for all Users/All_Users_Dashboard.php" onclick="myJsFunc(event)"><i class="fas fa-bars"></i>Main Menu</a></li>

            <li><a data-href="../Applicant Interface/ApplicantDashboard.php" onclick="myJsFunc(event);"><i class="fas fa-home"></i>Home</a></li>

        </ul>

      </nav>

      <div style="width:100%;">

<h1><br>

Section 11: Declaration

</h1>



<div style="text-align:center;margin-top:30px;">

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish" ></span>

<span class="dash active finish"></span>

<span class="step active" ></span>

<span class="dash active"></span>

    <span class="step" ></span>

</div>

            <div id="trash" class="delete">

            <div class="promptbox">

                <input type="hidden" id="appID">

                <input type="hidden" id="appID">

                <h1>Are you sure you want to quit this application?</h1>

                <br>

                <br>

                <div class="pageButtons">

                <button onclick="document.getElementById('trash').style.display='none'">No</button>

                <button onclick="document.getElementById('trash').style.display='none'" type="submit" form="my-form">Yes</button>

            </div>

        </div>

    </div>



<form id="my-form" action= "../PHP/Section11_Declaration.php" method="post">

<div class="container">

<p>To be signed by the Chief Investigator</p><br>

<p>I agree to comply, and will ensure that all researchers involved with the study comply with all relevant legislation, accepted ethical practice, University of Kent policies and appropriate professional ethical guidelines during the conduct of this research project.</p><br>

<p>If any significant changes are made to the design of the research I will notify the Faculty of Sciences Research Ethics and Advisory Group (REAG) and understand that further review may be required before I can proceed to implement the change(s).</p><br>

<p>I agree that I will notify the Faculty of Sciences Research Ethics Advisory Group of any unexpected adverse events that may occur during my research I agree to notify the Faculty of Sciences Research Ethics Advisory Group of any complaints I receive in connection with this research project.</p>

<br>

<hr>

<br>

<table>

<tr>

<td>I agree with the terms and conditions</td>

<td><input type= "checkbox" name="Terms" id="agreeterms:" value="yes"  onclick="currCheck(event)"></td>

</tr>

</table>

<br>



<div class="pageButtons">

      <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P21_Section12SupportingDocuments.php">

<a href="P19_Section10ParticipantsUnableToConsentForThemselves.php" class="button">Previous</a>

    <button type="submit">Next</button>

</div>

</div>



</form>

</body>

</html>



