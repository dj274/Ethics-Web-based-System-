<?php

session_start();

require('../db.php');

require('../ethicsveri.php');


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

   function func1(event) {





    event.stopPropagation();



}

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

        if (filter === "Computing" || (filter === cells[1].textContent.toLowerCase())){

      row.style.display = ""; // shows this row

    }

        if (filter === "Economics" || (filter === cells[1].textContent.toLowerCase())){

      row.style.display = "Economics"; // shows this row

    }

        if (filter === "Business" || (filter === cells[1].textContent.toLowerCase())){

      row.style.display = "Business"; // shows this row

    }
  
        if (filter === "Arts" || (filter === cells[1].textContent.toLowerCase())){

      row.style.display = "Arts"; // shows this row

    }

  }

  }

}

</script>



  <title>

  Automatic Ethical Approval Systems: Ethics Dashboard

  </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>

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

              <a style="font-size: 25px"><?php echo $row['FullName'];?> | <?php echo $username;?></a>

        </div>

        <ul class="list-items">

           <li><a href="../Dashboard for all Users/All_Users_Dashboard.php"><i class="fas fa-bars"></i>Main Menu</a></li>
           <?php if(!isset($_REQUEST['username'])){ ?>
           <li><a href="../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php"><i class="fas fa-home"></i>Home</a></li>
           <li><a href="../Dashboard for all Users/Profile.php"><i class="fas fa-id-badge"></i>Profile</a></li>
           <?php } ?>
		   <li><a href="../User Manual/Ethics Committee User Manual.php"><i class="fas fa-file-alt"></i>User Manual</a></li>
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
                        <td style="text-align: center; vertical-align: middle; background-color:#F1EA00;">Pending</td>
                    </tr>
                    <tr>
                        <td style="text-align: center; vertical-align: middle; background-color:#FFB34B;">Under Review</td>
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

            <div style="width: 100%; margin: 40px; text-align: center;">



                        <table id="ApplicationsMade" class="homedashboard">

                         <label>View &nbsp;&nbsp;</label>

                        <select id="ApplicationDropdown"class="sortinghome" oninput="filterTable()">

                            <option value=""disabled selected>Select an option</option>

                            <option value="All Applications">All Applications</option>

                            <option value="Pending">Pending</option>

                            <option value="submitted">Submitted</option>

                            <option value="Approved">Approved</option>

                            <option value="Minor Amendments Required">Minor Amendments Required</option>

                            <option value="Major Amendments Required">Major Amendments Required</option>

                            <option value="Pending (Re-submitted)">Pending (Re-submitted)</option>
                            <option value="Under Review (Re-submitted)">Under Review (Re-submitted)</option>

                            <option value="Department" disabled>Department</option>
                            <option value="Computing">Computing</option>
                            <option value="Economics">Economics</option>
                            <option value="Business">Business</option>
                            <option value="Arts">Arts</option>
                            

                        </select>



                       </td>

             <th colspan="6" style="text-align: center; vertical-align: middle;">List of Applications</th>





              <tr>

                  <th style="text-align: center; vertical-align: middle; width:500px;">Applicant Name</th>

                  <th style="text-align: center; vertical-align: middle; width:300px;">School/Department</th>

                  <th style="text-align: center; vertical-align: middle; width:400px;">Project Title</th>

                  <th style="text-align: center; vertical-align: middle; width:500px;">Status</th>

                  <th style="text-align: center; vertical-align: middle; width:500px;">Actions</th>

                  <th style="text-align: center; vertical-align: middle; width:300px;">Reviewer Assigned To</th>

              </tr>



              <?php


            $query ="SELECT b.ApplicationID, Max(s.version) as max FROM `LinkingApplicationToEthicsCommitteeMember` b INNER JOIN Section1_Project_Details s ON b.ApplicationID=s.ApplicationID  GROUP by b.ApplicationID";

            $result2 =$conn->query($query);

            while($row2 =$result2->fetch_assoc()){
                 $appid=$row2['ApplicationID'];
                 $max= $row2['max'];

                $sql2="SELECT s.PlannedStartDate, c.status,c.ApplicationID,u.FullName,s.ProjectTitle ,u.Department FROM LinkingApplicationToDashboard b,LinkingApplicationToEthicsCommitteeMember c, Section1_Project_Details s, users u where  b.ApplicationID=c.ApplicationID and u.UserID=b.UserID and c.ApplicationID=s.ApplicationID and b.ApplicationID=s.ApplicationID and s.version='$max' and c.ApplicationID='$appid' and b.role='leader'";


                $result = mysqli_query($conn, $sql2);

                 if($row =$result->fetch_assoc()){

                     $row2 = $row ;
                    
                    }


               // Checking for reviewer logs in

                $sql1 ="SELECT ReviewerID FROM `LinkingApplicationToReviewer` where ApplicationID='$appid'";

                $result = mysqli_query($conn, $sql1);
                $row1z = array();
                $row2z =array();
                while($row = mysqli_fetch_assoc($result)){

                     $row1z[] = $row['ReviewerID']; 
                     
                }
                    if(isset($row1z[0])){
                    $sql1 ="SELECT Fullname FROM users where Username='$row1z[0]'";
                    $result = mysqli_query($conn, $sql1);
                    while($row = mysqli_fetch_assoc($result)){
                      $row2z[0] = $row['Fullname']; 
                     
                    }
                  }
                  if(isset($row1z[1])){
                    $sql1 ="SELECT Fullname FROM users where Username='$row1z[1]'";
                    $result = mysqli_query($conn, $sql1);
                    while($row = mysqli_fetch_assoc($result)){
                      $row2z[1] = $row['Fullname']; 
                     
                    }
                  }else{
                    $row1z[1]="";
                  }

                
                 
                $sqlb = "SELECT users.FullName  FROM users , LinkingApplicationToApplicant  WHERE LinkingApplicationToApplicant.ApplicationID='$appid' AND LinkingApplicationToApplicant.role='Participant'and LinkingApplicationToApplicant.UserID=users.UserID";

                $resultbc = mysqli_query($conn, $sqlb);

                $name= array();

                while($row5 = mysqli_fetch_assoc($resultbc)) {

                    $name[] = $row5['FullName'];
                  }

                  $statusColor = "white;";

                  switch (strtolower($row2['status'])) {
                      case "pending":
                          $statusColor = "#F1EA00";
                          break;
                      case "under review":
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
                      case "under review (re-submitted)":
                          $statusColor = "#FFB34B";
                          break;
                      case "pending (re-submitted)":
                          $statusColor = "#F1EA00";
                          break;

                  }

                  $statusStyle = "background-color: " . $statusColor;

             ?>

         <div onclick="func2()">

        <tr style="<?php echo$statusStyle;?>"  >

        <td style="text-align: center; vertical-align: middle;"><?php echo $row2['FullName'] ;?></td>

        <td style="text-align: center; vertical-align: middle;"><?php echo $row2['Department'] ;?></td>

        <td style="text-align: center; vertical-align: middle;"><?php echo $row2['ProjectTitle'] ;?></td>

        <td style="text-align: center; vertical-align: middle;"><?php echo $row2['status'] ;?></td>

        <td data-href="" style="text-align: center; vertical-align: middle ;height:70px;"onclick="func1(event)">



        <?php if($row2['status']=="Pending" || $row2['status']=="Pending (Re-submitted)" ){ ?>





        <?php  if($username==$row1z[0] || $username==$row1z[1] ||$FullName==$row2['FullName'] ){ ?>



        <a class="button" href="Ethicsviewfullapplication.php?id=<?php echo $row2['ApplicationID'] ;?>">

                <i class="fas fa-eye"></i></a>



        <?php  }else{  ?>



                <?php $x=0;  $w=1;

                    if($FullName){

                        for($x; $x < count($name); $x++){

                            if($FullName==$name[$x]){

                                $w=2; ?>

                                <a class="button" href="Ethicsviewfullapplication.php?id=<?php echo $row2['ApplicationID'] ;?>">

                                <i class="fas fa-eye"></i></a>



            <?php       break; }  } }

                    if($w==1){  ?>

                     <a class="button" href="Ethicsviewfullapplication.php?id=<?php echo $row2['ApplicationID'] ;?>">

                        <i class="fas fa-eye"></i></a>

                    <a class="button" href="CommentApplicantFullApplication.php?id=<?php echo $row2['ApplicationID'] ;?>"><i class="fas fa-pencil-alt"></i></a>

            <?php     }?>





 <?php }    }elseif($row2['status']=="Under Review"  ||$row2['status']=="submitted" || $row2['status']=="Approved" ||$row2['status']=="Minor Amendments Required"||$row2['status']=="Major Amendments Required" || $row2['status']=="Under Review (Re-submitted)"){ ?>



            <a class="button" href="Ethicsviewfullapplication.php?id=<?php echo $row2['ApplicationID'] ;?>">

                <i class="fas fa-eye"></i></a>

      <?php } ?>

      </td>

      <?php

               ?>



            <td style="text-align: center; vertical-align: middle;"><?php if(isset($row1z[0])){

            echo $row2z[0].": ". $row1z[0]." " ;}else{ echo "No Reviewers Assigned" ;}if($row1z[1]==""){}else if(isset($row1z[1])){ echo $row2z[1].": ".$row1z[1]; }else{ }

             ?></td>



        </td>





        </tr>

        </div>



        <?php } ?>

      </table>





  </body>





</html>
