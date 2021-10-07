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
    
    $sql2 = "SELECT MAX(version) as max FROM Full_Section9_Children WHERE ApplicationID=" . $ApplicationID;
    $result2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result2);
    $max= $row['max'];
     
    $sql1 = "SELECT * FROM Full_Section9_Children WHERE ApplicationID='$ApplicationID' and version='$max'"; 
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
Automatic Ethical Approval System: Section 9 Children
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
    Section 9: Children
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
      <span class="step active finish" ></span>
      <span class="dash active finish"></span>
      <span class="step active" ></span>
      <span class="dash active"></span>
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

<form id="my-form" action= "../PHP/Section9_Children.php" method="post">
  <div class="container">

    <label for="apn"><b>Do you plan to include any participants who are children under 16?  (If no, go to next section)</b></label>
   <?php if($row1['Q1']=="Yes"){?>
    <br><input type="radio" id="yes1" name="q1" value="Yes" checked>
    <?php }else {?>
        <br><input type="radio" id="yes1" name="q1" value="Yes">
    <?php }?>
        <label for="yes1">Yes</label><br>
    <?php if($row1['Q1']=="No"){?>
        <input type="radio" id="no1" name="q1" value="No" checked>
        <?php }else{?>
        <input type="radio" id="no1" name="q1" value="No">
    <?php }?>
        <label for="no1">No</label><br>

    <br>

    <label for="apn"><b>Please specify the potential age range of children under 16 who will be included and give reasons for carrying out the research with this age group</b></label>
    <textarea rows="10" cols="30" wrap="physical"name="q2" required><?php echo $row1['Q2']?></textarea>

    <br>

    <label for="apn"><b>Please describe the arrangements for seeking informed consent from a person with parental responsibility and/or from children able to give consent for themselves</b></label>
    <textarea rows="10" cols="30" wrap="physical"name="q3"required><?php echo $row1['Q3']?></textarea>

    <br>

    <label for="apn"><b>If you intend to provide children under 16 with information about the research and seek their consent or agreement, please outline how this process will vary according to their age and level of understanding</b></label>
    <textarea rows="10" cols="30" wrap="physical"name="q4"required><?php echo $row1['Q4']?></textarea>

    <br>

  <div class="pageButtons">
        <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P19_Section10ParticipantsUnableToConsentForThemselves.php">
    <a href="P17_Section8InsuranceIndemnity.php" class="button">Previous</a>
    <button type="submit">Next</button>
  </div>
</div>

</form>
</body>
</html>

