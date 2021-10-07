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



$row1 = array("Q1"=>"","Q2"=>"","Q3"=>"","Q4"=>"","Q5"=>"","Q6"=>"","Q7"=>"","Q8"=>"","Q9"=>"");

        $sql2 = "SELECT MAX(version) as max FROM Full_Section2_Risk_and_ethical_issues WHERE ApplicationID=" . $ApplicationID;

        $result2 = mysqli_query($conn, $sql2);

        $row = mysqli_fetch_assoc($result2);

        $max= $row['max'];

         

        $sql1 = "SELECT * FROM Full_Section2_Risk_and_ethical_issues WHERE ApplicationID='$ApplicationID' and version='$max'";

        

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

Section 2: Risk & Ethical Issues

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

  Automatic Ethical Approval System: Section 2 Risks and ethical issues

  </h1>



    <div style="text-align:center;margin-top:30px;">

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



<form id="my-form" action= "../PHP/Section2_Risk&EthicalIssues.php" method="post">

  <div class="container">

    <label for="apn"><b>Please list the principal inclusion and exclusion criteria</b></label>

    <br><br>

     <textarea rows="10" cols="30" wrap="physical" name="q1" required><?php echo $row1['Q1']?></textarea>



    <br>



    <label for="apn"><b>How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?</b></label>

    <br><br>

    <textarea rows="10" cols="30" wrap="physical"name="q2"required><?php echo $row1['Q2']?></textarea>



    <br>



    <label for="apn"><b>What are the potential risks and burdens for research participants and how will you minimise them?  (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, discomfort, distress, intrusion, inconvenience or changes to lifestyle.  Describe what steps would be taken to minimise risks and burdens as far as possible)</b></label>

    <br><br>

    <textarea rows="10" cols="30" wrap="physical"name="q3" required><?php echo $row1['Q3']?></textarea>



    <br>



    <label for="apn"><b>Please describe what measures you have in place in the event of any unexpected outcomes or adverse effects to participants arising from involvement in the project</b></label>

    <br><br>

    <textarea rows="10" cols="30" wrap="physical"name="q4" required><?php echo $row1['Q4']?></textarea>



    <br>



    <label for="apn"><b>Will interviews/questionnaires or group discussions include topics that might be sensitive, embarrassing or upsetting, or is it possible that criminal or other disclosures requiring action could occur during the study?</b></label>

    <br>

 <?php $r1 = substr($row1['Q5'], 0,3); ?>

      <?php  if($r1=='Yes'){ ?>

    <br><input type="radio" id="yes3" name="q5part1" checked onclick="manageTextArea(true, 'answerarea3');" value="Yes">

        <?php }else{?>

    <br><input type="radio" id="yes3" name="q5part1" onclick="manageTextArea(true, 'answerarea3');" value="Yes">

       <?php } ?>

        <label for="yes1">Yes, please describe the procedures in place to deal with these issues</label><br>

        <?php if($r1=="No") {?>

        

    <input type="radio" id="no3" name="q5part1" checked onclick="manageTextArea(false, 'answerarea3');" value="No">

        <?php }else{?>

     <input type="radio" id="no3" name="q5part1" onclick="manageTextArea(false, 'answerarea3');" value="No">

        <?php } ?>

        <label for="no1">No</label><br>

        <?php $result = substr($row1['Q5'], 4, 100); ?>



    <textarea rows="10" cols="30" wrap="physical" id="answerarea3" name="q5part2"><?php echo $result;?></textarea>



    <br>



    <label for="apn"><b>What is the potential benefit to research participants?</b></label>

    <br><br>

    <textarea rows="10" cols="30" wrap="physical"name="q6" required><?php echo $row1['Q6']?></textarea>



    <br>



    <label for="apn"><b>What are the potential risks to the researchers themselves?</b></label>

    <br><br>

    <textarea rows="10" cols="30" wrap="physical"name="q7" required><?php echo $row1['Q7']?></textarea>



    <br>



    <label for="apn"><b>Will there be any risks to the University?  (Consider issues such as reputational risk; research that may give rise to contentious or controversial findings; could the funder be considered controversial or have the potential to cause reputational risk to the University?)</b></label>

    <br>

        <?php  if($row1["Q8"]=='Yes'){?>

        	<br><input type="radio" id="yes2" name="q8" checked value="Yes" required>

        <?php } else{ ?>

            <br><input type="radio" id="yes2" name="q8"  value="Yes" required>

        <?php } ?>

         <label for="yes2">Yes</label><br>

         <?php if($row1["Q8"]=='No') {?>

        	<input type="radio" id="yes2" name="q8" checked value="No" required>

        <?php }else{?>

            <input type="radio" id="yes2" name="q8"  value="No" required>

        <?php } ?>

        <label for="no2">No</label><br>

    <br>



    <label for="apn"><b>Will any intervention or procedure, which would normally be considered a part of routine care, be withheld from the research participants? For example, the disturbance of a school child’s day or access to their normal educational entitlement and curriculum).</b></label>

    <br>

   <?php $result2 = substr($row1['Q9'], 0,3); ?>

      <?php  if($result2=='Yes'){?>

    <br><input type="radio" id="yes3" name="q9part1" checked onclick="manageTextArea(true, 'answerarea1');" value="Yes">

        <?php }else{?>

    <br><input type="radio" id="yes3" name="q9part1" onclick="manageTextArea(true, 'answerarea1');" value="Yes">

       <?php } ?>

        <label for="yes1">Yes, please describe the procedures in place to deal with these issues</label><br>

        <?php if($result2=='No') {?>

        <input type="radio" id="no1" name="q9part1" checked onclick="manageTextArea(false, 'answerarea1');" value="No">

        <?php }else{?>

        <input type="radio" id="no1" name="q9part1" onclick="manageTextArea(false, 'answerarea1');" value="No">

        <?php } ?>

        <label for="no1">No</label><br>

        <?php $result = substr($row1['Q9'], 4, 100); ?>

    <textarea rows="10" cols="30" wrap="physical" id="answerarea1" name="q9part2"><?php echo $result;?></textarea>





    <br>

        <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P12_Section3Recruitment&InformedConsent.php">

  <div class="pageButtons">

    <a href="P10_Section1Overview.php" class="button">Previous</a>

    <button type="submit">Next</button>

  </div>

</div>



</form>

</body>

</html>

