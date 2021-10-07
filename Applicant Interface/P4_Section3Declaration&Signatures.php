<?php
session_start();
require('../db.php');
require('../Appliverify.php');

$ApplicationID = $_SESSION["ApplicationID"];
$user= $_SESSION["username"];


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
             
$sql4 = "SELECT MAX(version) as max FROM Section3_Declaration b WHERE b.ApplicationID='$ApplicationID'";
$result2 = mysqli_query($conn, $sql4);
$row1 = mysqli_fetch_assoc($result2);
$max= $row1['max'];

$sql5 = "SELECT * FROM Section3_Declaration WHERE ApplicationID = $ApplicationID";
$result3 = mysqli_query($conn, $sql5);
$row2 = mysqli_fetch_assoc($result3);

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
        //document.getElementById("nextpage").value = nextpage;
        document.getElementById("nextBtn").href = nextpage;
        console.log(nextpage);
    }
    </script>
<title>
Automatic Ethical Approval System: Declaration & Signatures
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
    Section 3: Declaration
  </h1>

  <div style="text-align:center;margin-top:30px;">
    <span class="step active finish"></span>
    <span class="dash active finish"></span>
    <span class="step active finish"></span>
    <span class="dash active finish"></span>
    <span class="step active"></span>
    <span class="dash active"></span>
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
                <a id="nextBtn" class="button">Yes</a>
            </div>
        </div>
    </div>

<form name="form" id="my-form" action="../PHP/AddSupervisor.php" method="post">
  <div class="container">
    <p>Please note that it is your responsibility to follow, and to ensure that, all researchers involved with your project follow accepted ethical practice and appropriate professional ethical guidelines in the conduct of your study.  You must take all reasonable steps to protect the dignity, rights, safety and well-being of participants. This includes providing participants with appropriate information sheets, ensuring informed consent and ensuring confidentiality in the storage and use of data.
    </p>
    <br>
    <hr>
    <br>
     <br>
     <table>
      <tr>
        <td>I agree with the terms and conditions</td>
        <td>
            <input type= "checkbox" name="Terms" id="agreeterms:" value="yes" <?php if(isset($row2["Q1"]) && $row2["Q1"] =="yes" ) echo "checked='true'";?>  onclick="currCheck(event)" required></td>

            </tr>
            </table>
            <br>
            <br>
    <label for="supname"><b>Supervisor Name:</b</label>
    <input type= "text" placeholder="Supervisor Name..." <?php if(!empty($row2["SupervisorName"])) echo "value=".$row2["SupervisorName"];?> name="SupervisorName" id="supervisor name">

    <label for="supname"><b>Supervisor Email:</b</label>
    <input type= "text" placeholder="Supervisor Email..." <?php if(!empty($row2["SupervisorEmail"])) echo "value=".$row2["SupervisorEmail"];?> name="SupervisorEmail" id="supervisor email">
    <br> 
    <br>
<?php
 
$sql = "SELECT * FROM Section3_Declaration WHERE ApplicationID='$ApplicationID' and version='$max' ORDER BY ApplicationID ASC";

if (mysqli_query($conn, $sql)) {
  $result = mysqli_query($conn, $sql);


} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<table class="applicants">
  <tr>
    <th>Supervisor(s) Name</th>
    <th>Supervisor(s) Email</th>
    <th>Delete</th>
  </tr>
      
<?php 

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>". $row["SupervisorName"]."</td>";
        echo "<td>". $row["SupervisorEmail"]."</td>";
        
        $nextPage = urlencode("Applicant Interface/P4_Section3Declaration&Signatures.php");
        
        
        echo "<td><a href='../PHP/DeleteSupervisor.php?id=".$row["SupervisorName"]."&next=$nextPage&id2=$max&id3=$ApplicationID'> <img alt='https://www.flaticon.com/free-icon/delete_1345874?term=delete&page=1&position=3&related_item_id=1345874' src='https://www.flaticon.com/svg/static/icons/svg/1345/1345874.svg' width='20' height='20'></a></td>";
    }
?>

</table>
    <br>
      <br>
        <br>
   
       <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P4_Section3Declaration&Signatures.php">
    <div class="pageButtons">
      <a href="P3_Section2ApplicantDetails.php" class="button">Previous</a>
      <button type="submit" onclick="javascript: form.action= '../PHP/AddSupervisor.php'" class="nextbtn1">Add Supverisor</button>
      <!-- <a href="P5_Section4_PartA.php" class="button">Next</a> -->
      <button type="submit" onclick="javascript: form.action= '../PHP/decleration.php'" class="nextbtn1">Next</button>

      </form>
    </div>
</div>


</body>
</html>