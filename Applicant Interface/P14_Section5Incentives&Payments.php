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





$row1 = array("Q1"=>"","Q2"=>"","Q3"=>"");

      $sql2 = "SELECT MAX(version) as max FROM Full_Section5_Incentives_and_payments WHERE ApplicationID=" . $ApplicationID;

        $result2 = mysqli_query($conn, $sql2);

        $row = mysqli_fetch_assoc($result2);

        $max= $row['max'];

         

        $sql1 = "SELECT * FROM Full_Section5_Incentives_and_payments WHERE ApplicationID='$ApplicationID' and version='$max'";

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

<script>

    function manageTextArea(yesorno, answerID)

{



  if (yesorno)

  {

        document.getElementById(answerID).style.display = "block";

  }

  else {

      document.getElementById(answerID).style.display = "none";

  }

}

</script>

<title>

Automatic Ethical Approval System: Section 5 Incentives and payments

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

    Section 5: Incentives and payments

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



<form id="my-form" action= "../PHP/Section5_Incentives&Payments.php" method="post">

  <div class="container">

    <label for="apn"><b>Will research participants receive any payments, reimbursement of expenses or any other benefits or incentives for taking part in this research?</b></label>



     <?php $result1 = substr($row1['Q1'], 0,3); ?>

    <?php  if($result1=='Yes'){?>

    <br><input type="radio" id="yes1" name="q1part1" onclick="manageTextArea(true, 'area1');" value="Yes" checked>

    <?php }else{?>

    <br><input type="radio" id="yes1" name="q1part1" onclick="manageTextArea(true, 'area1');" value="Yes">

    <?php }?>

    <label for="yes1">Yes, give details</label><br>

    <?php if($result1=='No'||$result1=='No '){?>

        <input type="radio" id="no1" name="q1part1" onclick="manageTextArea(false, 'area1');" value="No"checked>

     <?php }else{ ?>   

        <input type="radio" id="no1" name="q1part1" onclick="manageTextArea(false, 'area1');" value="No">

<?php }?>

        <label for="no1">No</label><br>

        <?php $result = substr($row1['Q1'], 4, 100); ?>

    <textarea rows="10" cols="30" wrap="physical" id="area1"name="q1part2"><?php echo $result?></textarea>



    <br>



    <label for="apn"><b>Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research?  (If ‘yes’, please give details)</b></label>

     <?php $result1 = substr($row1['Q2'], 0,3); ?>

    <?php  if($result1=='Yes'){?>

    <br><input type="radio" id="yes1" name="q2part1" onclick="manageTextArea(true, 'area2');" value="Yes" checked>

    <?php }else{?>

    <br><input type="radio" id="yes1" name="q2part1" onclick="manageTextArea(true, 'area2');" value="Yes">

    <?php }?>

    <label for="yes1">Yes, give details</label><br>

    <?php if($result1=='No'||$result1=='No '){?>

        <input type="radio" id="no1" name="q2part1" onclick="manageTextArea(false, 'area2');" value="No"checked>

     <?php }else{ ?>   

        <input type="radio" id="no1" name="q2part1" onclick="manageTextArea(false, 'area2');" value="No">

<?php }?>

        <label for="no1">No</label><br>

        <?php $result = substr($row1['Q2'], 4, 100); ?>

    <textarea rows="10" cols="30" wrap="physical" id="area2"name="q2part2"><?php echo $result?></textarea>

    <br>



    <label for="apn"><b>Does the Chief Investigator or any other investigator/collaborator have any direct personal involvement (e.g. financial, share holding, personal relationship, etc) in the organisations sponsoring or funding the research that may give rise to a possible conflict of interest?</b></label>

     <?php $result1 = substr($row1['Q3'], 0,3); ?>

    <?php  if($result1=='Yes'){?>

    <br><input type="radio" name="q3part1" onclick="manageTextArea(true, 'area3');" value="Yes" checked>

    <?php }else{?>

    <br><input type="radio"  name="q3part1" onclick="manageTextArea(true, 'area3');" value="Yes">

    <?php }?>

    <label for="yes1">Yes, give details</label><br>

    <?php if($result1=='No'||$result1=='No '){?>

        <input type="radio"  name="q3part1" onclick="manageTextArea(false, 'area3');" value="No"checked>

     <?php }else{ ?>   

        <input type="radio" name="q3part1" onclick="manageTextArea(false, 'area3');" value="No">

<?php }?>

        <label for="no1">No</label><br>

        <?php $result = substr($row1['Q3'], 4, 100); ?>

    <textarea rows="10" cols="30" wrap="physical" id="area3"name="q3part2"><?php echo $result?></textarea>



<br>

  <div class="pageButtons">

        <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P15_Section6Publication&Dissemination.php">

    <a href="P13_Section4Confidentiality.php" class="button">Previous</a>

    <button type="submit">Next</button>

  </div>

</div>



</form>

</body>

</html>

