<?php

session_start();
require('../db.php');
require('../Appliverify.php');

$SearchUserRow = array("Username"=>"", "FullName"=>"", "Department"=>"", "KentEmail"=>"", "LevelOfStudy"=>"");

if (isset($_SESSION['ApplicationID'])){
  $ApplicationID = $_SESSION["ApplicationID"];
}

if (isset($_SESSION['SearchUserRow']))
{
  $SearchUserRow = $_SESSION["SearchUserRow"];
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

$sameusr=$row['Username'];
$sql1 = "SELECT * FROM users Where Applicant='1' AND Username != '$sameusr'";
$resultu = mysqli_query($conn, $sql1);

    while ($row1 = mysqli_fetch_array($resultu)) {
            $name[] = $row1['Username'];
    
  }
  
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../style.css">
  <script src="../icons.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
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
    $(document).ready(function(){
     $( function() {
        var availableTags =[ "<?php echo implode('","',$name);?>" ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
});
    </script>
    
<title>
  Automatic Ethical Approval System: Applicant Details
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
    Section 2: Add other Applicants
  </h1>

    <div style="text-align:center;margin-top:30px;">
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
          
<form action="../PHP/SearchApplicant.php" id="searchForm"  method="post">
      </form>
    
        <form action="../PHP/AddApplicant.php" id="addForm" method="post">
        <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P3_Section2ApplicantDetails.php">
    </form>


<div class="container">
       <p style="text-align:center;">Please add applicants who are also involved in this project/application. If their are no other applicants involved in this project/application, please click the "Next" button to go to the next page.</p><br>
    <hr>
    <br>
<?php

$sameusr=$row['Username'];
$sql1 = "SELECT * FROM users Where Applicant='1' AND Username != '$sameusr'";
$resultu = mysqli_query($conn, $sql1);

 ?>
    
    
    <div class="ui-widget">
    <label for="tags"><b>Applicant Username:</b></label>
    
    <input type= "text" placeholder="Search Username..." name="Username" form="searchForm" id="tags" value="">
    
    </div>
    <button type="submit" name="search" form="searchForm" class="nextbtn1">Search Applicant</button>
    <br>
    <br>
    
     <label for="apn"><b>Applicant Name</b></label>

    <input type= "text" name="applicant name" id="applicant name" value="<?php echo $SearchUserRow["FullName"]?>" readonly>
              
      <label for="s/d"><b>Department</b></label>
    <input type= "text" name="School/Department" id="School/Department"  value="<?php echo $SearchUserRow["Department"]?>" readonly>

    <label for="email"><b>Kent(ID) Email</b></label>
    <input type= "text" name="email" id="email"  value="<?php echo $SearchUserRow["KentEmail"]?>" readonly>
    
    <label for="email"><b>Level Of Study</b></label>
    <input type= "text" name="LevelOfStudy" id="email"  value="<?php echo $SearchUserRow["LevelOfStudy"]?>" readonly>
    <br> 
    <br> 
    <br>
    
    <?php
    $sql4 = "SELECT MAX(version) as max FROM LinkingApplicationToApplicant b WHERE b.ApplicationID='$ApplicationID'";
    $result2 = mysqli_query($conn, $sql4);
    $row1 = mysqli_fetch_assoc($result2);
    $max= $row1['max'];
    


    $sql = "SELECT * FROM users u , LinkingApplicationToApplicant b WHERE b.ApplicationID='$ApplicationID' AND b.UserID=u.UserID AND b.role='Participant' and version='$max' ";
    
    if (mysqli_query($conn, $sql)) {
        $result = mysqli_query($conn, $sql);
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            
        }
        mysqli_close($conn);
        ?>
        
        <table class="applicants">
            <tr>
                <th colspan="9">&nbsp; Current Applicant Details
                </th>
            </tr>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Department</th>
                <th>Kent(ID) Email</th>
                <th>Level of Study</th>
                <th>Delete</th>
                </tr>
                
                <?php 
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>". $row["Username"]."</td>";
                    echo "<td>". $row["FullName"]."</td>";
                    echo "<td>". $row["Department"]."</td>";
                    echo "<td>". $row["KentEmail"]."</td>";
                    echo "<td>". $row["LevelOfStudy"]."</td>";
                    $nextPage = urlencode("Applicant Interface/P3_Section2ApplicantDetails.php");
                    
                    
                    echo "<td><a href='../PHP/DeleteApplicant.php?id=".$row["UserID"]."&next=$nextPage&version=$max'> <img alt='https://www.flaticon.com/free-icon/delete_1345874?term=delete&page=1&position=3&related_item_id=1345874' src='https://www.flaticon.com/svg/static/icons/svg/1345/1345874.svg' width='20' height='20'></a></td>";
                    
                }
                ?>
                
                <input type= "hidden" name="max"  value="<?php echo $max ; ?>" >

                </table>
                <br>
                <div class="pageButtons">
                    <a href="P2_Section1ProjectDetails.php" class="button">Previous</a>
                    <button type="submit" form="addForm" class="nextbtn1">Add applicant</button>
                    <a href="P4_Section3Declaration&Signatures.php" class="button">Next</a>
                    </div>
                    </div>
                    </body>
                    </html>