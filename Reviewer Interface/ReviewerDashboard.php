<?php
session_start();
require('../db.php');
require('../reviewveri.php');

$query = "select UserID, FullName from users where Username='$username'";
$result =$conn->query($query);
    while($row =$result->fetch_assoc()){
        $reviewerID =$row['FullName'];
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
             $reviewerID =$row['FullName'];
             if($row['Applicant']==1){
              $Applicant =$row['Applicant']; }
              if($row['Admin']==1){
              $Admin =$row['Admin']; }
              if($row['EthicsComittee']==1){
              $Ethicscommittee =$row['EthicsComittee']; }
              if($row['Reviewer']==1){
              $reviewer =$row['Reviewer'];  }


    
     $query ="SELECT b.ApplicationID, Max(s.version) as max FROM `LinkingApplicationToReviewer` b INNER JOIN Section1_Project_Details s ON b.ApplicationID=s.ApplicationID and b.ReviewerID='$username' GROUP by b.ApplicationID";

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="stylesheet"  href="../style.css">
    <script src="../icons.js"></script>

     <script>
    document.addEventListener("DOMContentLoaded", () => {
        const rows = document.querySelectorAll("tr[data-href]");

        rows.forEach(row => {
            row.addEventListener("click", () =>{
                window.location.href = row.dataset.href;
            });
        });
    });
    function filterTable() {
  // Variables
  let dropdown, table, rows, cells, country, filter;
  dropdown = document.getElementById("ApplicationDropdown");
  table = document.getElementById("ApplicationsMade");
  rows = table.getElementsByTagName("tr");
  filter = dropdown.value.toLowerCase();

  // Loops through rows and hides those with countries that don't match the filter
  for (let row of rows) { // `for...of` loops through the NodeList
    cells = row.getElementsByTagName("td");
      if (cells[1] != null)
  {
    // if the filter is set to 'All', or this is the header row, or 2nd `td` text matches filter
    if (filter === "all applications" || (filter === cells[3].textContent.toLowerCase()))
    {
      row.style.display = ""; // shows this row
    }
    else {
      row.style.display = "none"; // hides this row
    }
  }
  }
}
  </script>
  <title>
  Automatic Ethical Approval System: Reviewer Dashboard
  </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
  <style>
  </style>

  <body>

    </div>

      <div class="navbar">
        <div class="dropdown">
          <button class="dropbtn">
            <a href="#home">
              <i class="fa fa-user" class="fa fa-caret-down">&nbsp;</i>
              <i class="fa fa-caret-down"></i></a>
          </button>
          <div class="dropdown-content">
            <a href="../Login Interface/Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </div>
        </div>
      </div>

      <div>
          <div class="MainContent">
          <nav id="sidebar">
        <div class="title">
          <i class="fa fa-user" style="font-size:64px"></i><br>
              <a style="font-size: 25px"><?php echo $reviewerID;?> | <?php echo $username;?></a>
        </div>
        <ul class="list-items">
            <li><a href="../Dashboard for all Users/All_Users_Dashboard.php"><i class="fas fa-bars"></i>Main Menu</a></li>
            <?php if(!isset($_REQUEST['username'])){ ?>
            <li><a href="../Reviewer Interface/ReviewerDashboard.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="../Dashboard for all Users/Profile.php"><i class="fas fa-id-badge"></i>Profile</a></li>
            <?php }?>
			<li><a href="../User Manual/Reviewer User Manual.php"><i class="fas fa-file-alt"></i>User Manual</a></li>
            <?php if(!(isset($_REQUEST["username"]))){ ?>
              <?php if(isset($Admin)){ ?>
                <li><a href="../Admin Interface/AdminDashboard.php"><i class="fas fa-tachometer-alt"></i>Admin Dashboard</a></li>
            <?php }?>
            <?php if(isset($Applicant)){ ?>
            <li><a href="../Applicant Interface/ApplicantDashboard.php"><i class="fas fa-tachometer-alt"></i>Applicant Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($reviewer)){ ?>
            <li><a href="../Reviewer Interface/ReviewerDashboard.php"><i class="fas fa-tachometer-alt"></i>Reviewer Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($Ethicscommittee)){ ?>
            <li><a href="../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php"><i class="fas fa-tachometer-alt"></i>Ethics Dashboard</a></li>
            <?php } else{} ?>
            <?php } else{} ?>

        </ul>
        <table class="summary" style="width: 270px;">
                     <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:;">Open</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#F1EA00;">In Progress</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#FFB34B;">Submitted</td>
                    </tr>
                   
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#F18E00;">Re-submitted</td>
                    </tr>
                </table>
      </nav>
            <div style= "width:100%; margin: 40px; text-align: center;">
                 <table id="ApplicationsMade" class="homedashboard">
                         <label>View &nbsp;&nbsp;</label>
                        <select id="ApplicationDropdown"class="sortinghome" oninput="filterTable()">
                            <option value=""disabled selected>Select an option</option>
                            <option value="All Applications">All Applications</option>
                            <option value="open">Open</option>
                            <option value="In Progress">In Progress</option>
                            <option value="submitted">Submitted</option>
                            <option value="Re-submitted">Re-Submitted</option>



                        </select>
                  <th colspan="5" style="text-align: center; vertical-align: middle;">List of Applications</th>

              <tr>
                  <th style="text-align: center; vertical-align: middle;">Applicant Name</th>
                  <th style="text-align: center; vertical-align: middle;">School/Department</th>
                  <th style="text-align: center; vertical-align: middle; width:300px;">Project Title</th>
                  <th style="text-align: center; vertical-align: middle;">Status</th>
                   <th style="text-align: center; vertical-align: middle; width:300px;">Actions</th>
                  <!--<th style="text-align: center; vertical-align: middle;">Date Submitted</th>-->
              </tr>
      <?php

            $result2 =$conn->query($query);
            
            while($row2 =$result2->fetch_assoc()){
                $appid= $row2['ApplicationID'];
                $max= $row2['max'];
              
                $sql2="SELECT s.PlannedStartDate, c.status,c.ApplicationID,u.FullName,s.ProjectTitle ,u.Department FROM LinkingApplicationToDashboard b,LinkingApplicationToReviewer c, Section1_Project_Details s, users u where  b.ApplicationID=c.ApplicationID and u.UserID=b.UserID and c.ApplicationID=s.ApplicationID and b.ApplicationID=s.ApplicationID and s.version='$max' and c.ReviewerID='$username' and c.ApplicationID='$appid' and b.role='leader'";

                $result = mysqli_query($conn, $sql2);
                 while ($row =$result->fetch_assoc()){

                     $row1 = $row ;
                 }
                
                $statusColor = "white;";       
                switch (strtolower($row1['status'])) {
                  case "in progress":
                      $statusColor = "#F1EA00";
                      break;
                  case "submitted":
                      $statusColor = "#FFB34B";
                      break;
                  case "open":
                      $statusColor = "#";
                      break;
                  case "re-submitted":
                      $statusColor = "#F18E00";
                      break;
                  }
                  $statusStyle = "background-color: " . $statusColor;

                     
             ?>
        <tr style="<?php echo$statusStyle;?>">
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["FullName"]?></td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Department"]?></td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["ProjectTitle"]?></td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1['status'] ;?></td>
        <td style="text-align: center; vertical-align: middle;height:70px;">
          
            <?php if(!isset($_REQUEST['username'])){ ?>
            <?php if($row1['status']=="submitted"){ ?>
           <a class="button" href="ReviewedSummarypage.php?id=<?php echo $row2['ApplicationID'] ;?>">
                <i class="fas fa-eye"></i></a>
            <?php }elseif( $row1['status']=="In Progress"|| $row1['status']=="open" || $row1['status']=="Re-submitted" ){ ?>

             <a class="button" href="ReviewedSummarypage.php?id=<?php echo $row2['ApplicationID'] ;?>">
                <i class="fas fa-eye"></i></a>
            <a class="button" href="ReviewApplicant.php?id=<?php echo $row2['ApplicationID'] ;?>"><i class="fas fa-pencil-alt"></i></a>

             <?php } ?>
             <?php } ?>

        </td>
        </td>
       

        <?php }?>
        </tr>
      

      </table>
      </form>
      </div>
  </body>

</html>
