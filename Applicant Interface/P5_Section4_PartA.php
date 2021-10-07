<?php
require('../db.php');

session_start();
require('../Appliverify.php');

if(isset($_GET['id'])){
  $ApplicationID = stripslashes($_GET['id']);

  $ApplicationID = mysqli_real_escape_string($conn,$ApplicationID);
  
  $_SESSION["ApplicationID"] = $ApplicationID ;
}else{
$ApplicationID = $_SESSION["ApplicationID"];
 $_SESSION["ApplicationID"];
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
Automatic Ethical Approval System: Checklist Part A
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
    Section 4: Research Checklist (Part A)
  </h1>

  <div style="text-align:center;margin-top:30px;">
    <span class="step active finish"></span>
    <span class="dash active finish"></span>
    <span class="step active finish"></span>
    <span class="dash active finish"></span>
    <span class="step active finish"></span>
    <span class="dash active finish"></span>
    <span class="step active "></span>

    <span class="dash active"></span>
    <span class="step"></span>
    <span class="dash"></span>
    <span class="step"></span>
    <span class="dash"></span>
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

<form id="my-form" action="../PHP/Section4a.php" method="post">
 <input type="hidden" name="new" value="1"/>

  <div class="container">

    <table class="summary">
      <tr>
        <th style="text-align: center; vertical-align: middle; width:50px;">Question</th>
        <th style="text-align: center; vertical-align: middle;">Research that may need to be reviewed by an NHS Research Ethics Committee, the Social Care Research Ethics Committee (SCREC) or other external ethics committee</th>
        <th style="text-align: center; vertical-align: middle;">YES</th>
        <th style="text-align: center; vertical-align: middle;">NO</th>
      </tr>
      <tr>
        <td style="text-align: center; vertical-align: middle; width:50px;">1</td>
        <td>Will the study involve recruitment of patients through the NHS or the use of NHS patient data or samples?
        </td>

        <?php
        $sql1 = "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartA WHERE ApplicationID=" . $ApplicationID;
        $result2 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result2);
         $max= $row1['max'];
        $sqld = "SELECT * FROM Section4_ResearchChecklist_PartA WHERE ApplicationID='$ApplicationID' and version='$max'";
        $resultA = mysqli_query($conn, $sqld);
        $row = mysqli_fetch_assoc($resultA);
        // echo $row['version'];
      
        if(isset($row["Q1"]))?>

                  <td style="text-align: center; vertical-align: middle; width:50px;">
                    <input <?php if(isset($row["Q1"]) && $row["Q1"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq1" value="yes" required>
                  </td>
                  <td style="text-align: center; vertical-align: middle; width:50px;">
                    <input <?php if(isset($row["Q1"]) && $row["Q1"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq1" value="no">
                  </td>
                </tr>
                <tr>
                  <td style="text-align: center; vertical-align: middle; width:50px;">2</td>
                  <td>Will the study involve the collection of tissue samples (including blood, saliva, urine, etc.) or other biological samples from participants, or the use of existing samples?</td>
                  <td style="text-align: center; vertical-align: middle; width:50px;">
                    <input <?php if(isset($row["Q2"]) && $row["Q2"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq2" value="yes" required>
                  </td>


                  <td style="text-align: center; vertical-align: middle; width:50px;">
                    <input <?php if(isset($row["Q2"]) && $row["Q2"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq2" value="no">
                  </td>
                </tr>

                <td style="text-align: center; vertical-align: middle; width:50px;">3</td>
                <td>Will the study involve participants, or their data, from adult social care, including home care, or residents from a residential or nursing care home?</td>
                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q3"]) && $row["Q3"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq3" value="yes" required>
                </td>


                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q3"]) && $row["Q3"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq3" value="no">
                </td>
              </tr>
              <tr>
                <td style="text-align: center; vertical-align: middle; width:50px;">4</td>
                <td>Will the study involve research participants identified because of their status as relatives or carers of past or present users of these services? </td>
                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q4"]) && $row["Q4"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq4" value="yes" required>
                </td>


                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q4"]) && $row["Q4"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq4" value="no">
                </td>
              </tr>
              <tr>
                <td style="text-align: center; vertical-align: middle; width:50px;">5</td>
                <td>Does the study involve participants aged 16 or over who are unable to give informed consent (e.g. people with learning disabilities or dementia)?</td>
                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q5"]) && $row["Q5"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq5" value="yes" required>
                </td>


                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q5"]) && $row["Q5"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq5" value="no">
                </td>
              </tr>
              <tr>
                <td style="text-align: center; vertical-align: middle; width:50px;">6</td>
                <td>Is the research a social care study funded by the Department of Health?</td>
                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q6"]) && $row["Q6"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq6" value="yes" required>
                </td>


                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q6"]) && $row["Q6"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq6" value="no">
                </td>
              </tr>
              <tr>
                <td style="text-align: center; vertical-align: middle; width:50px;">7</td>
                <td>Is the research a health-related study involving prisoners?</td>
                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q7"]) && $row["Q7"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq7" value="yes" required>
                </td>


                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q7"]) && $row["Q7"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq7" value="no">
                </td>
              </tr>
              <tr>
                <td style="text-align: center; vertical-align: middle; width:50px;">8</td>
                <td>Is the research a clinical investigation of a non-CE Marked medical device, or a medical device which has been modified or is being used outside its CE Mark intended purpose, conducted by or with the support of the manufacturer or another commercial company to provide data for CE marking purposes? (a CE mark signifies compliance with European safety standards)</td>
                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q8"]) && $row["Q8"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq8" value="yes" required>
                </td>


                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q8"]) && $row["Q8"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq8" value="no">
                </td>
              </tr>
              <tr>
                <td style="text-align: center; vertical-align: middle; width:50px;">9</td>
                <td>Is the research a clinical trial of an investigational medicinal product or a medical device?</td>
                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q9"]) && $row["Q9"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Aq9" value="yes" required>
                </td>


                <td style="text-align: center; vertical-align: middle; width:50px;">
                  <input <?php if(isset($row["Q9"]) && $row["Q9"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Aq9" value="no">
                </td>
              </tr>

    </table>
    <br>
    <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P6_Section4_PartB.php">
    <div class="pageButtons">
        <a href="P4_Section3Declaration&Signatures.php" class="button">Previous</a>
        <button type="submit">Next</button>
    </div>

</div>
</form>
</body>
</html>
