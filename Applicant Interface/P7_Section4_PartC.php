<?php
session_start();
require('../db.php');
require('../Appliverify.php');

$ApplicationID = $_SESSION["ApplicationID"];

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
 <link rel="stylesheet" href="../style.css">
    <script src="../icons.js"></script>
        <script>
        var id = document.getElementById('trash');

    function myJsFunc(e) {
      e.stopPropagation();
        var nextpage = e.target.dataset.href;
        document.getElementById('trash').style.display='block';
        document.getElementById("nextpage").value = nextpage;
        console.log(nextpage);
    }
    </script>

<title>
Automatic Ethical Approval System: Checklist Part C
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
    Section 4: Research Checklist (Part C)
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
    <span class="step active"></span>
    <span class="dash active"></span>
    <span class="step"></span>
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

<form id="my-form" action= "../PHP/Section4c.php" method="post">
         <input type="hidden" name="new" value="1"/>

  <div class="container">
      <p style="text-align: center; vertical-align: middle;">If you have selected "YES" for this question, you will have to complete the full ethics application form which will be continued within this application</p><br>
    <hr>
    <br>
     <br>

  <table class="summary">
      <tr>
          <th style="text-align: center; vertical-align: middle; width:50px;">Question</th>
        <th style="text-align: center; vertical-align: middle;">Security Sensitive Material</th>
        <th style="text-align: center; vertical-align: middle; width:50px;">YES</th>
        <th style="text-align: center; vertical-align: middle; width:50px;">NO</th>
      </tr>
      <tr>
          <td style="text-align: center; vertical-align: middle; width:50px;">1</td>
        <td>Does your research involve access to or use of material covered by the Terrorism Act? (The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).
        </td>
        <?php

         $sql1 = "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartC WHERE ApplicationID=" . $ApplicationID;
        $result2 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result2);
         $max= $row1['max'];
        $sqld = "SELECT * FROM Section4_ResearchChecklist_PartC WHERE ApplicationID='$ApplicationID' and version='$max'";
        $resultA = mysqli_query($conn, $sqld);
        $row = mysqli_fetch_assoc($resultA);
      
        if(isset($row['Q1']))?>
      <td style="text-align: center; vertical-align: middle; width:50px;">
      <input <?php if(isset($row["Q1"]) && $row["Q1"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Cq1" value="yes" required>
      </td>

      <td style="text-align: center; vertical-align: middle; width:50px;">
      <input <?php if(isset($row["Q1"]) && $row["Q1"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Cq1" value="no" required>
      </td>
    </tr>
    </table>
    <br>
    <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P8_Section4_PartD.php">
    <div class="pageButtons">
      <a href="P6_Section4_PartB.php" class="button">Previous</a>
      <button type="submit">Next</button>
    </div>
</div>
</form>
</body>
</html>
