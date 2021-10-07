<?php
session_start();
require('../db.php');
require('../Appliverify.php');


if (isset($_SESSION['ApplicationID']))
{
    $ApplicationID = $_SESSION["ApplicationID"];
}

if ($ApplicationID > 0)
{
    
$row1 = array("Q1"=>"","Q2"=>"","Q3"=>"","Q4"=>"");
    $sql2 = "SELECT MAX(version) as max FROM Full_Section4_Confidentiality WHERE ApplicationID=" . $ApplicationID;
    $result2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result2);
    $max= $row['max'];
         
    $sql1 = "SELECT * FROM Full_Section4_Confidentiality WHERE ApplicationID='$ApplicationID' and version='$max'";
    if (mysqli_query($conn, $sql1)) {
          $result1 = mysqli_query($conn, $sql1);
         while($row = mysqli_fetch_assoc($result1)) {
              $row1 = $row;
              
            }
    } else {
      echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
}

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
Automatic Ethical Approval System: Section 4 Confidentiality
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
    Section 4: Confidentiality
  </h1>

    <div style="text-align:center;margin-top:30px;">
      <span class="step active finish"></span>
      <span class="dash active finish"></span>
      <span class="step active finish"></span>
      <span class="dash active finish"></span>
      <span class="step active finish"></span>
      <span class="dash active finish"></span>
      <span class="step active"></span>
      <span class="dash active"></span>
      <span class="step" ></span>
      <span class="dash"></span>
      <span class="step" ></span>
      <span class="dash"></span>
      <span class="step" ></span>
      <span class="dash"></span>
      <span class="step" ></span>
      <span class="dash"></span>
      <span class="step" ></span>
      <span class="dash"></span>
      <span class="step" ></span>
      <span class="dash"></span>
      <span class="step" ></span>
      <span class="dash"></span>
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

<form id="my-form" action= "../PHP/Section4_Confidentiality.php" method="post">
  <div class="container">
    <p>
      In this section personal data means any data relating to a participant who could potentially be identified.  It includes pseudonymised data capable of being linked to a participant through a unique code number.
      If you will be undertaking any of the following activities at any stage (including in the identification of potential participants) please give details and explain the safeguarding measures you will employ:</p><br><hr>
      <d1>
          <br>
        <dd>Electronic transfer by magnetic or optical media, email or computer networks</dd>
        <dd>Sharing of personal data outside the European Economic Area</dd>
        <dd>Use of personal addresses, postcodes, faxes, emails or telephone numbers</dd>
        <dd>Publication of direct quotations from respondents</dd>
        <dd>Publication of data that might allow identification of individuals, either directly or indirectly</dd>
        <dd>Use of audio/visual recording devices</dd>
        <dd>Storage of personal data on any of the following:</dd>
     </d1>
      <br>
      <d1>
        <dd> - Manual files</dd>
        <dd> - University computers</dd>
        <dd> - Home or other personal computers</dd>
        <dd> - Private company computers</dd>
        <dd> - Laptop computers</dd>
      </d1>
    </p>
    <br>
    </label>
    <textarea rows="10" cols="30" wrap="physical"name="q1"required><?php echo $row1['Q1'];?></textarea>

    <br>

    <label for="apn"><b>How will you ensure the confidentiality of personal data?  (eg, anonymisation or pseudonymisation of data)</b></label>
    <textarea rows="10" cols="30" wrap="physical"name="q2"required><?php echo $row1['Q2'];?></textarea>

    <br>

    <label for="apn"><b>Who will have access to participants’ personal data during the study?</b></label>
    <textarea rows="10" cols="30" wrap="physical"name="q3"required><?php echo $row1['Q3'];?></textarea>

    <br>

    <label for="apn"><b>How long will personal data be stored or accessed after the study has ended?  (If longer than 12 months, please justify)</b></label>
    <textarea rows="10" cols="30" wrap="physical"name="q4"required><?php echo $row1['Q4'];?></textarea>
    
    <br>
    <br>
        <p>
      Please note:  as best practice, and as a requirement of many funders, where practical, researchers must develop a data management and sharing plan to enable the data to be made available for re-use, eg, for secondary research, and so sufficient metadata must be conserved to enable this while maintaining confidentiality commitments and the security of data.
    </p>
    <br>
    <hr>
    <br>

  <div class="pageButtons">
  <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P14_Section5Incentives&Payments.php">
    <a href="P12_Section3Recruitment&InformedConsent.php" class="button">Previous</a>
    <button type="submit">Next</button>
  </div>
</div>

</form>
</body>
</html>