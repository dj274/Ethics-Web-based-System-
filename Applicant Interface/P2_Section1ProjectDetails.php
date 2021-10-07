<?php
require('../db.php');

session_start();
require('../Appliverify.php');

unset($_SESSION["SearchUserRow"]);


if(isset($_GET['id'])){
    $ApplicationID = stripslashes($_GET['id']);

    $ApplicationID = mysqli_real_escape_string($conn,$ApplicationID);
    
    $_SESSION["ApplicationID"] = $ApplicationID ;
}else{
    
    if (isset($_SESSION['ApplicationID']))
    {
    $ApplicationID = $_SESSION["ApplicationID"];
    }
}

$sql1 = "SELECT MAX(version) as max FROM Section1_Project_Details WHERE ApplicationID='$ApplicationID'";
$result2 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result2);
$max= $row1['max'];

$SearchProjectRow = array("ProjectTitle"=>"","PlannedStartDate"=>"","PlannedEndDate">="","Funder"=>"");

if ($ApplicationID > 0)
{
    $sql = "SELECT * FROM Section1_Project_Details WHERE ApplicationID=$ApplicationID and version='$max'";
    
    if (mysqli_query($conn, $sql)) {
          $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)) {
            $SearchProjectRow = $row;
            }
    
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}

if (isset($_REQUEST['username'])) {
  $username = $_REQUEST["username"];
  
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
        function getMinDate()
        {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            if(dd<10){
                dd='0'+dd
            }
            if(mm<10){
                mm='0'+mm
            }
            today = yyyy+'-'+mm+'-'+dd;
            document.getElementById("planned start date").setAttribute("min", today);
        }
        function getMinDateEnd(e)
        {
            var minDate = new Date(e.target.value);
            minDate.setDate(minDate.getDate()+1);
            console.log(String(minDate.getMonth()+1));
            var today = minDate.getFullYear() + "-" + String("0" + (minDate.getMonth()+1)).slice(-2) + "-" + String("0" + minDate.getDate() -1).slice(-2);
            console.log(e.target.value);
            console.log(today);
            document.getElementById("planned end date").setAttribute("min", today);
        }
    </script>
    
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
Automatic Ethical Approval System: Project Details
</title>

</head>

<body onload="getMinDate()">
    
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
            <li><a data-href="../Applicant Interface/ApplicantDashboard.php" onclick="myJsFunc(event)"><i class="fas fa-home"></i>Home</a></li>
        </ul>
      </nav>
      <div style="width:100%;">
      <h1><br>
      Section 1: Project details
      </h1>
      
      <div style="text-align:center;margin-top:30px;">
    <span class="step active"></span>
    <span class="dash active"></span>
    <span class="step"></span>
    <span class="dash"></span>
    <span class="step"></span>
    <span class="dash"></span>
    <span class="step"></span>

    <span class="dash"></span>
    <span class="step"></span>
    <span class="dash"></span>
    <span class="step"></span>
    <span class="dash"></span>
    <span class="step"></span>

  </div>
  
          <div id="trash" class="delete">
            <div class="promptbox">
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

<form id="my-form" action="../PHP/AddApplication.php" method="post">
  <div class="container">
    <label for="ptitle"><b>Project title:</b</label>
    <input type= "text" placeholder="Project title..." name="ProjectTitle" id="project title" value="<?php echo $SearchProjectRow["ProjectTitle"]?>" required>

    <label for="psd"><b>Planned start date:</b</label>
    <input type= "date" name="PlannedStartDate" id="planned start date" value="<?php echo  $SearchProjectRow["PlannedStartDate"]?>" onchange="getMinDateEnd(event);" required>

    <label for="ped"><b>Planned end date:</b</label>
    <input type= "date" name="PlannedEndDate" id="planned end date" value="<?php echo  $SearchProjectRow["PlannedEndDate"]?>" onchange="getMinDateEnd(event);" required>

    <label for="fund"><b>Funder:</b</label>
    <input type= "text" placeholder="Funder..." name="Funder" id="fund" value="<?php echo  $SearchProjectRow["Funder"]?>" required>
    
    <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P3_Section2ApplicantDetails.php">

    <div class="pageButtons">
      <a href="P1_EthicsReviewChecklistHome.php" class="button">Previous</a>
      <button type="submit">Next</button>
    </div>
    
</div>
</div>
</form>
</div>
</div>
</body>
</html>


