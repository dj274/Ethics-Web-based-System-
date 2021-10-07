<?php
require('../db.php');
session_start();
require('../Appliverify.php');

if(isset($_GET['id'])){

	  $username = stripslashes($_GET['id']);

    $username = mysqli_real_escape_string($conn,$username);
    
    $username= $_SESSION["username"];
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

if($row['Applicant']==1){
  $Applicant =$row['Applicant']; }
if($row['Admin']==1){
  $Admin =$row['Admin']; }
if($row['EthicsComittee']==1){
  $Ethicscommittee =$row['EthicsComittee']; }
if($row['Reviewer']==1){
$reviewer =$row['Reviewer'];  }
            ?>
<!DOCTYPE html>
<html>
  <head>

    <link rel="stylesheet"  href="../style.css">
    <script src="../icons.js"></script>
    <script>
          if(performance.navigation.type == 2){
        location.reload(true);
      }
    document.addEventListener("DOMContentLoaded", () => {
        const rows = document.querySelectorAll("tr[data-href]");

        rows.forEach(row => {
            row.addEventListener("click", () =>{
                window.location.href = row.dataset.href;
            });
        });
    });

    var id = document.getElementById('trash');

    function myJsFunc(e) {
        e.stopPropagation();
        document.getElementById('trash').style.display='block';
        document.getElementById("appID").value = event.target.dataset.recordId;
        console.log(document.getElementById("appID").value);
    }

</script>
  <title>
    Automatic Ethical Approval System : Home
  </title>
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

      <div class="MainContent">
        <nav id="sidebar">
        <div class="title">
          <i class="fa fa-user" style="font-size:64px"></i><br>
              <a style="font-size: 25px"><?php echo $row["FullName"];?> | <?php echo $row["Username"];?></a>
        </div>
        <ul class="list-items">

            <li><a href="../Dashboard for all Users/All_Users_Dashboard.php"><i class="fas fa-bars"></i>Main Menu</a></li>
            <?php if(!isset($_REQUEST['username'])){ ?>
            <li><a href="../Applicant Interface/ApplicantDashboard.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="../Dashboard for all Users/Profile.php"><i class="fas fa-id-badge"></i>Profile</a></li>
            <li><a href="P1_EthicsReviewChecklistHome.php"><i class="fas fa-sticky-note"></i>Create an Application</a></li>
            <?php } ?>
			<li><a href="../User Manual/Applicant User Manual.php"><i class="fas fa-file-alt"></i>User Manual</a></li>
            <?php if(!(isset($_REQUEST["username"]))){ ?>
              <?php if(isset($Admin)){ ?>
                <li><a href="../Admin Interface/AdminDashboard.php"><i class="fas fa-tachometer-alt"></i>Admin Dashboard</a></li>
            <?php }?>            <?php if(isset($Applicant)){ ?>
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
                        <td style="text-align: center; vertical-align: middle; background-color:#F1EA00;">In Progress</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#FFB34B;">Submitted</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#00F12F;">Approved</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#F86C6C;">Minor Amendments (Not Approved)</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#FF3333;">Major Amendments (Not Approved)</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#F18E00;">Re-submitted</td>
                    </tr>
                </table>
      </nav>
<script>
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
    if (filter === "all applications" || (filter === cells[1].textContent.toLowerCase()))
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
      <div style="width: 100%; margin: 40px; text-align: center;">
                    <table id="ApplicationsMade" class="homedashboard">
                         <label style="box-shadow: 0 0px 16px rgba(0, 0, 0, 0.0) ;">View &nbsp;&nbsp;</label>
                        <select id="ApplicationDropdown"class="sortinghome" oninput="filterTable()">
                            <option value=""disabled selected>Select an option</option>
                            <option value="All Applications">All Applications</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Submitted">Submitted</option>
                            <option value="Approved">Approved</option>
                            <option value="Minor Amendments Required">Minor Amendments Required</option>
                            <option value="Major Amendments Required">Major Amendments Required</option>
                            <option value="Re-submitted">Re-submitted</option>
                        </select>
                  <th colspan="5" style="text-align: center; vertical-align: middle;">List of Applications</th>
              </tr>
              <tr>
                  
                  <th style="text-align: center; vertical-align: middle; width:400px;">Project Title</th>
                  <th style="text-align: center; vertical-align: middle; width:300px;" id="status">Status</th>
                  <th style="text-align: center; vertical-align: middle; width:400px;">Actions</th>
                  <th style="text-align: center; vertical-align: middle; width:250px;">Planned Start Date</th>
              </tr>

              <?php
        
            $query ="SELECT b.ApplicationID, Max(s.version) as max FROM `LinkingApplicationToDashboard` b INNER JOIN Section1_Project_Details s ON b.ApplicationID=s.ApplicationID and b.UserID='$user' GROUP by b.ApplicationID";
            
            $result =$conn->query($query);
           
              while($row = mysqli_fetch_assoc($result)) {
                $appid= $row['ApplicationID'];
                $max= $row['max'];
                 $sql = "SELECT b.ApplicationID, s.ProjectTitle,b.status,b.role,s.PlannedStartDate,s.version FROM LinkingApplicationToDashboard b,Section1_Project_Details s where b.ApplicationID=s.ApplicationID and b.ApplicationID='$appid' and b.UserID='$user' and version='$max' ";
                 $result1 = mysqli_query($conn, $sql);

                 if($row1 = mysqli_fetch_assoc($result1)) {
                   $row = $row1;
                  
                  }

                $statusColor = "white;";

                switch (strtolower($row['status'])) {
                    case "in progress":
                        $statusColor = "#F1EA00";
                        break;
                    case "submitted":
                        $statusColor = "#FFB34B";
                        break;
                    case "approved":
                        $statusColor = "#00F12F";
                        break;
                    case "major amendments required":
                        $statusColor = "#FF3333";
                        break;
                    case "minor amendments required":
                        $statusColor = "#F86C6C";
                        break;
                    case "re-submitted":
                        $statusColor = "#F18E00";
                        break;

                }

                $statusStyle = "background-color: " . $statusColor;
             ?>

        <tr style="<?php echo $statusStyle;?>" >
        <td style="text-align: center; vertical-align: middle;"><?php echo $row['ProjectTitle'] ;?></td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row['status'] ;?></td>
        <td style="text-align: center; vertical-align: middle; height:70px;">

      <?php      if($row['status']=="Approved" ||$row['status']=="submitted"||$row['status']=="Re-submitted"){ ?>

                     <a class="button" title = "View application" href="View_FullApplication_ForApplicantDashboard.php?id=<?php echo $row['ApplicationID'] ;?>">
                        <i class="fas fa-eye"></i></a>

      <?php      }elseif($row['status']=="Minor Amendments Required" ||$row['status']=="Major Amendments Required" ){ ?>
                     <?php if($row['role']=="Participant"){ ?>
                    <a class="button"  title = "View application" href="View_FullApplication_ForApplicantDashboard.php?id=<?php echo $row['ApplicationID'] ;?>">
                        <i class="fas fa-eye"></i></a>
                        <?php }elseif(($row['role']=="leader")){    ?>

                     <a class="button" title = "View application" href="View_FullApplication_ForApplicantDashboard.php?id=<?php echo $row['ApplicationID'] ;?>">
                        <i class="fas fa-eye"></i></a>
                     <a class="button" title = "Edit application" href="Summary_With_FullApplication.php?id=<?php echo $row['ApplicationID'] ;?>"><i class="fas fa-pencil-alt"></i></a>

                    <?php } ?>
       <?php     }else{ ?>
                       <?php if($row['role']=="Participant"){ ?>
                    <a class="button" title = "View application" href="View_FullApplication_ForApplicantDashboard.php?id=<?php echo $row['ApplicationID'] ;?>">
                        <i class="fas fa-eye"></i></a>
                        <?php }elseif(($row['role']=="leader")){    ?>
                    <a class="button" title = "View application" href="View_FullApplication_ForApplicantDashboard.php?id=<?php echo $row['ApplicationID'] ;?>">
                        <i class="fas fa-eye"></i></a>
                    <a class="button"  title = "Edit application"  href="Summary_With_FullApplication.php?id=<?php echo $row['ApplicationID'] ;?>"><i class="fas fa-pencil-alt"></i></a>

                    <a class="button" title = "Delete application" onclick="myJsFunc(event);" data-record-id="<?php echo $row['ApplicationID'] ;?>"><i class="fas fa-trash-alt"></i></a>
                         
            <?php  } } ?>
        </td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row['PlannedStartDate'] ;?> </td>
        </tr>
        <?php
                $nextPage = urlencode("Applicant Interface/ApplicantDashboard.php");
            }
            ?>
               <div id="trash" class="delete">
                <form action="../PHP/DeleteApplication.php" method="post">
                    <div class="promptbox">
                        <input type="hidden" id="appID" name="delete_data">
                        <input type="hidden" name="next" value=<?php echo $nextPage?>>
                        <h1>Are you sure you want to delete this application?</h1><br>
                            <button type="button" onclick="document.getElementById('trash').style.display='none'">No</button>
                            <button type="submit" name="ApplicantDashboard.php" onclick="document.getElementById('trash').style.display='none'">Yes</button>
                            </div>
                            </div>
                            </form>
                            </div>
</table>
</div>
            </div>
            <br>
            <br>
            <br>
            <br>
</body>
</html>
