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
$row1 = array("Q1"=>"");
    
        $sql1 = "SELECT MAX(version) as max FROM Full_Section1_Overview WHERE ApplicationID=" . $ApplicationID;
        $result2 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result2);
        $max= $row['max'];
         
        $sqld = "SELECT * FROM Full_Section1_Overview WHERE ApplicationID='$ApplicationID' and version='$max'";
        
       
    
    
    if (mysqli_query($conn, $sqld)) {
         $resultA = mysqli_query($conn, $sqld);
         while($row = mysqli_fetch_assoc($resultA)) {
              $row1 = $row;
              
            }
    } else {
      echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
    }
    // echo $row1['version'];
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
Automatic Ethical Approval System: S1 Overview
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
    Section 1: Overview
  </h1>

  <div style="text-align:center;margin-top:30px;">
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
<form id="my-form" action= "../PHP/Section1_Overview.php" method="post">
  <div class="container">
    <label for="p"><b>Lay Summary (Please provide a brief summary of the study)</b</label>
      <br><br>
    <textarea rows="10" cols="30" wrap="physical"name="Q1"><?php echo $row1['Q1']; ?></textarea required>
    
    <br>
    <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P11_Section2Risk&EthicalIssues.php">
    <div class="pageButtons">
        <a href="P9_FullEthicsResearchHome.php" class="button">Previous</a>
      <button type="submit">Next</button>
    </div>
    
</div>
</form>
</body>
</html>