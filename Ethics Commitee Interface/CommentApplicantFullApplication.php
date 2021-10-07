<?php
session_start();
require('../db.php');
require('../ethicsveri2.php');

$error="";
if(isset($_GET['error'])){
  if($_GET['error']=="empty"){
    $error="No decision is made on the application.";
  }
}
$username= $_SESSION['username'];

if(isset($_GET['id'])){
  $ApplicationID = stripslashes($_GET['id']);
  $ApplicationID = mysqli_real_escape_string($conn,$ApplicationID);

$_SESSION["ApplicationID"]=$ApplicationID;

}else{
$ApplicationID = $_SESSION["ApplicationID"];
}

  $sqla = "SELECT * FROM users u , LinkingApplicationToApplicant b  WHERE ApplicationID=$ApplicationID and b.UserID=u.UserID and b.role='leader'";
    $resulta = mysqli_query($conn, $sqla);
  if ($row = mysqli_fetch_assoc($resulta)) {
      $user = $row['Username'];
      $userID= $row['UserID'];
      $dep = $row['Department'];
      $fullname = $row['FullName'];
  }

$maxversion= "SELECT MAX(version) as max FROM Full_Section_Comment_Applications WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
if ($row = mysqli_fetch_assoc($maxresult)) {
    $max1 =  $row['max'] ;

}




//For the first application php code
 $sql1 = "SELECT * FROM users where Username='$user'";
 $resultu = mysqli_query($conn, $sql1);

 $sqlSide = "SELECT * FROM users where Username='$username'";
 $resultSide = mysqli_query($conn, $sqlSide);

 if ($side = mysqli_fetch_assoc($resultSide)) {
 }

$maxversion= "SELECT MAX(version) as max FROM Section1_Project_Details WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
if ($row = mysqli_fetch_assoc($maxresult)) {
    $max =  $row['max'] ;

}


$sql1 = "SELECT * FROM Section1_Project_Details WHERE ApplicationID='$ApplicationID'and version='$max'";
$result3 = mysqli_query($conn,$sql1);

$sqla = "SELECT * FROM users, LinkingApplicationToApplicant WHERE LinkingApplicationToApplicant.ApplicationID='$ApplicationID' AND LinkingApplicationToApplicant.UserID=users.UserID and LinkingApplicationToApplicant.role='Participant'and version='$max'";
$resulta = mysqli_query($conn, $sqla);

$sql3 = "SELECT * FROM Section3_Declaration WHERE ApplicationID='$ApplicationID'and version='$max'";
$result13 = mysqli_query($conn,$sql3);

$sql2 = "SELECT * FROM Section3_Declaration WHERE ApplicationID=" . $ApplicationID ." and version='$max' ORDER BY ApplicationID ASC";
$result14 = mysqli_query($conn, $sql2);

$sqlb = "SELECT * FROM Section4_ResearchChecklist_PartA WHERE ApplicationID='$ApplicationID' and version='$max'";
$resultb = mysqli_query($conn, $sqlb);

$sqlc = "SELECT * FROM Section4_ResearchChecklist_PartB WHERE ApplicationID='$ApplicationID' and version='$max'";
$resultc = mysqli_query($conn, $sqlc);

$sqld = "SELECT * FROM Section4_ResearchChecklist_PartC WHERE ApplicationID='$ApplicationID' and version='$max'";
$resultd = mysqli_query($conn, $sqld);

$sqle = "SELECT * FROM Section4_ResearchChecklist_PartD WHERE ApplicationID='$ApplicationID' and version='$max'";
$resulte = mysqli_query($conn, $sqle);

//For the second application php code
$sqlsection1 = "SELECT * FROM Full_Section1_Overview WHERE ApplicationID='$ApplicationID' and version='$max'";
$result1 = mysqli_query($conn,$sqlsection1);

$sqlsection2 = "SELECT * FROM Full_Section2_Risk_and_ethical_issues WHERE ApplicationID='$ApplicationID' and version='$max'";
$result2 = mysqli_query($conn,$sqlsection2);

$sqlsection3 = "SELECT * FROM Full_Section3_Recruitment_and_informed_consent WHERE ApplicationID='$ApplicationID' and version='$max'";
$r = mysqli_query($conn,$sqlsection3);

$sqlsection4 = "SELECT * FROM Full_Section4_Confidentiality WHERE ApplicationID='$ApplicationID' and version='$max'";
$result4 = mysqli_query($conn,$sqlsection4);

$sqlsection5 = "SELECT * FROM Full_Section5_Incentives_and_payments WHERE ApplicationID='$ApplicationID' and version='$max'";
$result5 = mysqli_query($conn,$sqlsection5);

$sqlsection6 = "SELECT * FROM Full_Section6_Publications_and_dissemination WHERE ApplicationID='$ApplicationID' and version='$max'";
$result6 = mysqli_query($conn,$sqlsection6);

$sqlsection7 = "SELECT * FROM Full_Section7_Management_of_the_research WHERE ApplicationID='$ApplicationID' and version='$max'";
$result7 = mysqli_query($conn,$sqlsection7);

$sqlsection8 = "SELECT * FROM Full_Section8_Insurance_Indemnity WHERE ApplicationID='$ApplicationID' and version='$max'";
$result8 = mysqli_query($conn,$sqlsection8);

$sqlsection9 = "SELECT * FROM Full_Section9_Children  WHERE ApplicationID='$ApplicationID' and version='$max'";
$result9 = mysqli_query($conn,$sqlsection9);

$sqlsection10 = "SELECT * FROM Full_Section10_Participants_unable_to_consent_for_themselves WHERE ApplicationID='$ApplicationID' and version='$max'";
$result10 = mysqli_query($conn,$sqlsection10);

$sqlsection11 = "SELECT * FROM Full_Section11_Declaration WHERE ApplicationID='$ApplicationID'and version='$max'";
$result11 = mysqli_query($conn,$sqlsection11);

$row1z=array();
$sqlz = "select ReviewerID from Full_Section_Reviewed_Applications WHERE ApplicationID='$ApplicationID'and version='$max'";
$resultz = mysqli_query($conn,$sqlz);
while ($rowz = mysqli_fetch_assoc($resultz)) {
   $row1z[] = $rowz['ReviewerID'];
  }
  
   if(isset($row1z[0])){
    $reviewer1= $row1z[0];
   }else{
    $reviewer1="";
   }
   if(isset($row1z[1])){
    $reviewer2= $row1z[1];
   }else{
    $reviewer2="";
   }


$sqlr = "select * from Full_Section_Reviewed_Applications WHERE ApplicationID='$ApplicationID' and ReviewerID='$reviewer1'and version='$max'";
$result12 = mysqli_query($conn,$sqlr);

$sqlr2 = "select * from Full_Section_Reviewed_Applications WHERE ApplicationID='$ApplicationID' and ReviewerID='$reviewer2'and version='$max'";
$resultr2 = mysqli_query($conn,$sqlr2);


$username= $_SESSION['username'];
$sq = "SELECT * FROM users WHERE Username='$username'";
$re =$conn->query($sq);
    if($row =$re->fetch_assoc()){
         $EthicsID = $row['FullName'];
      }
 $row4 = array("F1S4"=>"","S1"=>"","S2"=>"","S3"=>"","S4"=>"","S5"=>"","S6"=>"","S7"=>"","S8"=>"","S9"=>"","S10"=>"");
 $rowz = array("F1S4"=>"","S1"=>"","S2"=>"","S3"=>"","S4"=>"","S5"=>"","S6"=>"","S7"=>"","S8"=>"","S9"=>"","S10"=>"");

$sqlr = "select * from Full_Section_Reviewed_Applications WHERE ApplicationID='$ApplicationID' and ReviewerID='$reviewer1'and version='$max'";

$sqlr2 = "select * from Full_Section_Reviewed_Applications WHERE ApplicationID='$ApplicationID' and ReviewerID='$reviewer2'and version='$max'";

   $result1234 = mysqli_query($conn,$sqlr);
        if($row45 = mysqli_fetch_assoc($result1234)) {
            $stats=$row45['status'];

            if($stats=='open'||$stats=='In Progress'){}else{

              $result12 = mysqli_query($conn,$sqlr);
              if($row4 = mysqli_fetch_assoc($result12)) { }
            }
        }
        $resu = mysqli_query($conn,$sqlr2);
        if($r5 = mysqli_fetch_assoc($resu)) {
            $status=$r5['status'];

            if($status=='open'||$status=='In Progress'){}else{

            $resultr2 = mysqli_query($conn,$sqlr2);
            if ($rowz = mysqli_fetch_assoc($resultr2)) {}
            }
        }
$sql13 = "SELECT * FROM Full_Section_Comment_Applications where ApplicationID='$ApplicationID'and version='$max1'";
$res13 = mysqli_query($conn, $sql13);


 $sql = "SELECT * FROM Full_Section_Comment_Applications where ApplicationID='$ApplicationID' and EthicsID='$EthicsID'and version='$max1'";
 $res = mysqli_query($conn, $sql);
 if ($row = mysqli_fetch_assoc($res)) {
   $row3=$row;
  }else{
       $row3 = array("F1S4"=>"","S1"=>"","S2"=>"","S3"=>"","S4"=>"","S5"=>"","S6"=>"","S7"=>"","S8"=>"","S9"=>"","S10"=>"");

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
              //  $user = $row['UserID'];
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
  <link rel="stylesheet" href="../style.css">
     <script src="../scripts.js"></script>
    <script src="../icons.js"></script>


<title>
Automatic Ethical Approval System: Comment Application
</title>

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
            <a href="../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php"><i class="fas fa-home"></i>Home</a>
            <a href="../Login Interface/Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </div>
        </div>
      </div>
      <div class="MainContent">
        <nav id="sidebar">
        <div class="title">
          <i class="fa fa-user" style="font-size:64px"></i><br>
              <a style="font-size: 25px"><?php echo $side["FullName"];?> | <?php echo $side["Username"];?></a>
        </div>
        <ul class="list-items">
            <li><a href="../Dashboard for all Users/All_Users_Dashboard.php"><i class="fas fa-bars"></i>Main Menu</a></li>
            <li><a href="../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="../Dashboard for all Users/Profile.php"><i class="fas fa-id-badge"></i>Profile</a></li>
            <?php if(isset($Admin)){ ?>
            <li><a href="../Admin Interface/AdminDashboard.php"><i class="fas fa-tachometer-alt"></i>Admin Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($Applicant)){ ?>
            <li><a href="../Applicant Interface/ApplicantDashboard.php"><i class="fas fa-tachometer-alt"></i>Applicant Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($reviewer)){ ?>
            <li><a href="../Reviewer Interface/ReviewerDashboard.php"><i class="fas fa-tachometer-alt"></i>Reviewer Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($Ethicscommittee)){ ?>
            <li><a href="../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php"><i class="fas fa-tachometer-alt"></i>Ethics Dashboard</a></li>
            <?php } else{} ?>

        </ul>
    </nav>
    <div style="margin: auto; width: 100%;">
      <h1>
        <?php
          $x=1;
          for($x;$x<=$max;$x++){ ?>
          <?php  if($max==$x){ ?>
          <button type="submit" class="button" style ="background-color: #4CAF50;"onclick=" window.open('Ethicsviewfullapplication.php?id=<?php echo $ApplicationID ;?>&id2=<?php echo $x ;?>', '_blank'); return false;" >version <?php echo $x ; ?></button>

          <?php  }else{ ?>
          <button type="submit" class="button" onclick=" window.open('Ethicsviewfullapplication.php?id=<?php echo $ApplicationID ;?>&id2=<?php echo $x ;?>', '_blank'); return false;" >version <?php echo $x ; ?></button>

        <?php  }  } ?>
      </h1>
      <div>
  <h1>
    Application Summary
  </h1>
  <br>


   <form method="post"action="Ethicscommitteesubmit.php" style="text-align: center;">
     <table id="Applicants" class="summary">
        <tr>
            <th colspan="10">ETHICS REVIEW CHECKLIST FOR RESEARCH WITH HUMAN PARTICIPANTS</th>
        </tr>
          <?php  if($row1 = mysqli_fetch_assoc($result3)) {
          ?>
        <tr>
            <th>Section 1: Project Details</th>
            <th>Details</th>
            <th style="width:15%">

           </th>
        </tr>
        <tr>
            <td>Project title</td>
            <td colspan="6"><?php echo $row1["ProjectTitle"];?></td>
        </tr>
        <tr>
            <td>Planned start date</td>
            <td colspan="6"><?php echo $row1["PlannedStartDate"];?></td>
        </tr>
        <tr>
            <td>Planned end date</td>
            <td colspan="6"><?php echo $row1["PlannedEndDate"]?></td>
        </tr>
        <tr>
            <td>Funder</td>
            <td colspan="6"><?php echo $row1["Funder"]?></td>
        </tr>
        <?php }
        ?>
</table>
   <table id="Applicants" class="summary">
         <?php     if ($row1 = mysqli_fetch_assoc($resultu)) {
  ?>
        <tr>
            <th>Applicant Details</th>
            <th>Details</th>
            <th style="width:15%">

            </th>
        </tr>
    <tr>
      <td>Applicant name</td>
      <td colspan="2"><?php echo $row1["FullName"];?>&nbsp;</td>
    </tr>
    <tr>
      <td>School/Department</td>
      <td colspan="2"><?php echo $row1["Department"];?>&nbsp;</td>
    </tr>
    <tr>
      <td>Email</td>
      <td colspan="2"><?php echo $row1["KentEmail"];?>&nbsp;</td>
    </tr>
    <tr>
      <td>Telephone</td>
      <td colspan="2"><?php echo $row1["Telephone"];?>&nbsp;</td>
    </tr>
    <tr>
      <td>Postcode</td>
      <td colspan="2"><?php echo $row1["Postcode"];?>&nbsp;</td>
    </tr>
    <tr>
      <td>Address</td>
      <td colspan="2"><?php echo $row1["Address"];?>&nbsp;</td>
    </tr>
    <tr>
      <td>Level of Study</td>
      <td colspan="2"><?php echo $row1["LevelOfStudy"];?>&nbsp;</td>
    </tr>
            <?php }
        ?>
        </table>
     <table id="Applicants" class="summary">
        <tr>
            <th>Section 2: Other Applicant Details</th>
            <th ></th>
            <th ></th>
            <th style="width:15%"><form action="P3_Section2ApplicantDetails.php"></form></th>
        </tr>
  <tr>
    <th>Name</th>
    <th>Department</th>
    <th>Kent(ID) Email</th>
    <th>Level of Study</th>
  </tr>

 <?php
while($row = mysqli_fetch_assoc($resulta)) {
         echo "<tr>";
         echo "<td>". $row["FullName"]."</td>";
         echo "<td>". $row["Department"]."</td>";
         echo "<td>". $row["KentEmail"]."</td>";
         echo "<td>". $row["LevelOfStudy"]."</td>";


}
?>
</table>

     <table id="Applicants" class="summary">
        <tr>

            <th>Section 3: Declaration & Signatures</th>
            <th>Details</th>

        </tr>
    <tr>
      <td>Agreed with the terms and conditions</td>
      <td colspan="2"></td>
    </tr>
    <tr>
    <th>Supervisor(s) Name</th>
    <th>Supervisor(s) Email</th>
  </tr>

<?php
while($row = mysqli_fetch_assoc($result14)) {
    echo "<tr>";
    echo "<td>". $row["SupervisorName"]."</td>";
    echo "<td>". $row["SupervisorEmail"]."</td>";

}
?>
        <?php  if($row = mysqli_fetch_assoc($resultb)) {
     ?>
     </table>

     <table id="Applicants" class="summary">
    <tr>
      <th>Section 4: Research Checklist (Part A)</th>
      <th>Research that may need to be reviewed by an NHS Research Ethics Committee, the Social Care Research Ethics Committee (SCREC) or other external ethics committee (if yes, please give brief details as an annex)</th>

      <th style="width:15%">

      </th>
    </tr>
    <tr>
      <td>Will the study involve recruitment of patients through the NHS or the use of NHS patient data or samples?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q1"];?></td>
    </tr>

    <tr>
      <td>Will the study involve the collection of tissue samples (including blood, saliva, urine, etc.) or other biological samples from participants, or the use of existing samples?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q2"];?></td>
    </tr>
    <tr>
      <td>Will the study involve participants, or their data, from adult social care, including home care, or residents from a residential or nursing care home?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q3"];?></td>
    </tr>
    <tr>
      <td>Will the study involve research participants identified because of their status as relatives or carers of past or present users of these services?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q4"];?></td>
    </tr>
    <tr>
      <td>Does the study involve participants aged 16 or over who are unable to give informed consent (e.g. people with learning disabilities or dementia)?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q5"];?></td>
    </tr>
    <tr>
      <td>Is the research a social care study funded by the Department of Health?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q6"];?></td>
    </tr>
    <tr>
      <td>Is the research a health-related study involving prisoners?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q7"];?></td>
    </tr>
    <tr>
      <td>Is the research a clinical investigation of a non-CE Marked medical device, or a medical device which has been modified or is being used outside its CE Mark intended purpose, conducted by or with the support of the manufacturer or another commercial company to provide data for CE marking purposes? (a CE mark signifies compliance with European safety standards)</td>
      <td colspan="2">&nbsp;<?php echo $row["Q8"];?></td>
    </tr>
    <tr>
      <td>Is the research a clinical trial of an investigational medicinal product or a medical device?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q9"];?></td>
    </tr>
        <?php } if($row = mysqli_fetch_assoc($resultc)) {
     ?>
    <tr>
      <th>Section 4: Research Checklist (Part B)</th>
      <th>Research that may need full review by the Sciences REAG</th>
      <th style="width:15%"></th>
    </tr>
    <tr>
      <td>Does the research involve other vulnerable groups: eg, children; those with cognitive impairment?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q1"];?></td>
    </tr>
    <tr>
      <td>Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q2"];?></td>
    </tr>
    <tr>
      <td>Does the project involve the collection of material that could be considered of a sensitive, personal, biographical, medical, psychological, social or physiological nature.</td>
      <td colspan="2">&nbsp;<?php echo $row["Q3"];?></td>
    </tr>
    <tr>
      <td>Will the study require the cooperation of a gatekeeper for initial access to the groups or individuals to be recruited (eg, headmaster at a School; group leader of a self-help group)?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q4"];?></td>
    </tr>
    <tr>
      <td>Will it be necessary for participants to take part in the study without their knowledge and consent at the time? (eg, covert observation of people in non-public places?)</td>
      <td colspan="2">&nbsp;<?php echo $row["Q5"];?></td>
    </tr>
    <tr>
      <td>Will the study involve discussion of sensitive topics (eg, sexual activity; drug use; criminal activity)?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q6"];?></td>
    </tr>
    <tr>
      <td>Are drugs, placebos or other substances (eg, food substances, vitamins) to be administered to the study participants or will the study involve invasive, intrusive or potentially harmful procedures of any kind?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q7"];?></td>
    </tr>
    <tr>
      <td>Is pain or more than mild discomfort likely to result from the study?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q8"];?></td>
    </tr>
    <tr>
      <td>Could the study induce psychological stress or anxiety or cause harm or negative consequences beyond the risks encountered in normal life?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q9"];?></td>
    </tr>
    <tr>
      <td>Will the study involve prolonged or repetitive testing?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q10"];?></td>
    </tr>
    <tr>
      <td>Will the research involve administrative or secure data that requires permission from the appropriate authorities before use?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q11"];?></td>
    </tr>
    <tr>
      <td>Is there a possibility that the safety of the researcher may be in question (eg, international research; locally employed research assistants)?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q12"];?></td>
    </tr>
    <tr>
      <td>Does the research involve participants carrying out any of the research activities themselves (i.e. acting as researchers as opposed to just being participants)?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q13"];?></td>
    </tr>
    <tr>
      <td>Will the research take place outside the UK? You may find the find the Proportionate Risk Assessment document useful.</td>
      <td colspan="2">&nbsp;<?php echo $row["Q14"];?></td>
    </tr>
    <tr>
      <td>Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q15"];?></td>
    </tr>
    <tr>
      <td>Will research involve the sharing of data or confidential information beyond the initial consent given?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q16"];?></td>
    </tr>
    <tr>
      <td>Will financial inducements (other than reasonable expenses and compensation for time) be offered to participants?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q17"];?></td>
    </tr>
    <tr>
      <td>Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)</td>
      <td colspan="2">&nbsp;<?php echo $row["Q18"];?></td>
    </tr>
    <tr>
      <td>Will the study involve the publication, sharing or potentially insecure electronic storage and/or transfer of data that might allow identification of individuals, either directly or indirectly? (e.g. publication of verbatim quotations from an online forum; sharing of audio/visual recordings; insecure transfer of personal data such as addresses, telephone numbers etc.; collecting identifiable personal data on unprotected** internet sites.)
      [**Please note that Qualtrics and Sona Systems provide adequate data security and comply with the requirements of the EU-US Privacy Shield.]
      </td>
      <td colspan="2">&nbsp;<?php echo $row["Q19"];?></td>
    </tr>
    <?php  } if($row = mysqli_fetch_assoc($resultd)) {
     ?>
    <tr>
      <th>Section 4: Research Checklist (Part C)</th>
      <th>Security Sensitive Material</th>
         <th style="width:15%"></th>
    </tr>
    <tr>
      <td>Does your research involve access to or use of material covered by the Terrorism Act?(The Terrorism Act (2006) outlaws the dissemination of records, statements and other documents that can be interpreted as promoting and endorsing terrorist acts. By answering ‘yes’ you are registering your legitimate use of this material with the Research Ethics Advisory Group. In the event of a police investigation, this registration will help you to demonstrate that your use of this material is legitimate and lawful).</td>
      <td colspan="2">&nbsp;<?php echo $row["Q1"];?></td>
    </tr>
    <?php  } if($row = mysqli_fetch_assoc($resulte)) {
     ?>
    <tr>
      <th>Section 4: Research Checklist (Part D)</th>
      <th>Prevent Agenda</th>
       <th style="width:15%"></th>
    </tr>
    <tr>
      <td>Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q1"];?></td>
    </tr>

          <?php if($row4['F1S4']==""){ }else{ ?>
           <th colspan="3">Section 4 Reviewer 1 Feedback</th>

           <tr><td colspan="3"><?php echo $row4['F1S4']; }?></td></tr>
        <tr>
        <?php if($rowz['F1S4']==""){ }else{ ?>
           <th colspan="3">Section 4 Reviewer 2 Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['F1S4']; }?></td></tr>
           <tr>
		 <?php    foreach( $res13 as $row){  if($row['F1S4']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 4 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['F1S4']; } ?></tr>
 <?php }  ?>
        <tr>
            <th colspan="3">Section 4 Ethics committee Feedback</th>
       <tr>

       <td colspan="3">

		      <textarea  name='F1S4' id='F1S4' placeholder='Write comment here'><?php echo $row3['F1S4'];?></textarea>
		 </td>

	    </tr>
  </table>

  <br>
  <br>
  <?php } if($row1 = mysqli_fetch_assoc($result1)) {
        ?>
  <table id="SecondApplication" class="summary">
      <tr>
          <th colspan="3">&nbsp;FULL ETHICS APPLICATION FOR RESEARCH WITH HUMAN PARTICIPANTS</th>
     </tr>

     <tr>
      <th>Section 1: Overview</th>
      <th>Details</th>
      <th style="width:15%"></th>
    </tr>
    <tr>
      <td>Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?</td>
      <td colspan="2"><?php echo $row1["Q1"];?></td>

    </tr>
    <?php if($row4['S1']==""){ }else{ ?>
     <th colspan="3">Section 1 Reviewer 1 Feedback</th>
     <tr><td colspan="3"><?php echo $row4['S1']; } ?></td></tr>
     <tr>
    <?php if($rowz['S1']==""){ }else{ ?>
           <th colspan="3">Section 1 Reviewer 2 Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S1']; }?></td></tr>

    <tr>
		    <?php    foreach( $res13 as $row){  if($row['S1']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 1 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S1']; } ?></tr>
        <?php }  ?>
      <tr>
         <th colspan="3">Section 1 Ethics committee Feedback</th>
      <tr>
           <td style="height:70px;" colspan="3">

		      <textarea name='S1' id='S1' placeholder='Write comment here'><?php echo $row3['S1'];?></textarea>
		 </td>
	 </tr>

    <?php }
    if($row1 = mysqli_fetch_assoc($result2)) {
        ?>
     <tr>
      <th>Section 2: Risks & Ethical Issues</th>
      <th>Details</th>
      <th style="width:15%"></th>
    </tr>
     <tr>
      <td>Please list the principal inclusion and exclusion criteria</td>
      <td colspan="2"><?php echo $row1["Q1"];?></td>
    </tr>

     <tr>
      <td>How long will each research participant be in the study in total, from when they give informed consent until their last contact with the research team?</td>
      <td colspan="2">  <?php echo  $row1["Q2"];?></td>
    </tr>
     <tr>
      <td>What are the potential risks and burdens for research participants and how will you minimise them?  (Describe any risks and burdens that could occur as a result of participation in the research, such as pain, discomfort, distress, intrusion, inconvenience or changes to lifestyle.  Describe what steps would be taken to minimise risks and burdens as far as possible)</td>
      <td colspan="2"><?php echo $row1["Q3"];?></td>
    </tr>
     <tr>
      <td>Please describe what measures you have in place in the event of any unexpected outcomes or adverse effects to participants arising from involvement in the project</td>
      <td colspan="2"><?php echo $row1["Q4"];?></td>
    </tr>
     <tr>
      <td>Will interviews/questionnaires or group discussions include topics that might be sensitive, embarrassing or upsetting, or is it possible that criminal or other disclosures requiring action could occur during the study? If yes, please describe the procedures in place to deal with these issues</td>
      <td colspan="2"><?php echo $row1["Q5"];?></td>
    </tr>
     <tr>
      <td>What is the potential benefit to research participants?</td>
      <td colspan="2"><?php echo $row1["Q6"];?></td>
    </tr>
     <tr>
      <td>What are the potential risks to the researchers themselves?</td>
      <td colspan="2"><?php echo $row1["Q7"];?></td>
    </tr>
     <tr>
      <td>Will there be any risks to the University?  (Consider issues such as reputational risk; research that may give rise to contentious or controversial findings; could the funder be considered controversial or have the potential to cause reputational risk to the University?)</td>
      <td colspan="2"><?php echo $row1["Q8"];?></td>
    </tr>
     <tr>
      <td>Will any intervention or procedure, which would normally be considered a part of routine care, be withheld from the research participants?  (If yes, give details and justification).  For example, the disturbance of a school child’s day or access to their normal educational entitlement and curriculum).</td>
      <td colspan="2"><?php echo $row1["Q9"];?></td>
    </tr>

       <?php if($row4['S2']==""){ }else{ ?>
    <th colspan="3">Section 2 Reviewer 1  Feedback</th>
       <tr><td colspan="3"><?php echo $row4['S2']; } ?></td></tr>
       <tr>
        <?php if($rowz['S2']==""){ }else{ ?>
           <th colspan="3">Section 2 Reviewer 2  Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S2']; }?></td></tr>
         <tr>

		 <?php    foreach( $res13 as $row){  if($row['S2']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 2 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S2']; } ?></tr>
      <?php }  ?>
        <tr>
           <th colspan="3">Section 2 Ethics committee Feedback</th>
       <tr> <td colspan="3">

		      <textarea name='S2'  id='S2' placeholder='Write comment here'><?php echo $row3['S2'];?></textarea>
		 </td>
	  </tr>
<?php } ?>
    <?php
if($row2 = mysqli_fetch_assoc($r)) {


  ?>
    <tr>
      <th>Section 3: Recruitment & Informed Consent</th>
      <th>Details</th>
      <th style="width:15%"></th>
    </tr>
    <tr>
      <td>How and by whom will potential participants, records or samples be identified?</td>
      <td colspan="2"><?php echo $row2["Q1"];?></td>
    </tr>
     <tr>
      <td>Will this involve reviewing or screening identifiable personal information of potential participants or any other person?  (If ‘yes’, give details)</td>
      <td colspan="2"><?php echo $row2["Q2"];?></td>
    </tr>
    <tr>
      <td>Has prior consent been obtained or will it be obtained for access to identifiable personal information?</td>
      <td colspan="2"><?php echo $row2["Q3"];?></td>
    </tr>
    <tr>
      <td>Will you obtain informed consent from or on behalf of research participants?  (If ‘yes’ please give details.  If you are not planning to gain consent, please explain why not).</td>
      <td colspan="2"><?php echo $row2["Q4"];?></td>
    </tr>
    <tr>
      <td>Will you record informed consent in writing?  (If ‘no’, how will it be recorded?)</td>
      <td colspan="2"><?php echo $row2["Q5"];?></td>
    </tr>
    <tr>
      <td>How long will you allow potential participants to decide whether or not to take part?</td>
      <td colspan="2"><?php echo $row2["Q6"];?></td>
    </tr>
    <tr>
      <td>What arrangements have been made for persons who might not adequately understand verbal explanations or written information given in English, or have special communication needs?  (eg,  translation, use of interpreters?)</td>
     <td colspan="2"><?php echo $row2["Q7"];?></td>
    </tr>

    <tr>
      <td>If no arrangements will be made, explain the reasons (eg, resource constraints)</td>
      <td colspan="2"><?php echo $row2["Q8"];?></td>
    </tr>
    <?php if($row4['S3']==""){ }else{ ?>
     <th colspan="3">Section 3 Reviewer 1  Feedback</th>
     <tr><td colspan="3"><?php echo $row4['S3']; } ?></td></tr>
     <tr>
    <?php if($rowz['S3']==""){ }else{ ?>
           <th colspan="3">Section 3 Reviewer 2  Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S3']; }?></td></tr>
    <tr>

		 <?php    foreach( $res13 as $row){  if($row['S3']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 3 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S3']; } ?></tr>
 <?php }  ?>
        <tr>
        <th colspan="3">Section 3 Ethics committee Feedback</th>
       <tr>
       <td colspan="3">

		      <textarea name='S3'  id='S3' placeholder='Write comment here'><?php echo $row3['S3'];?></textarea>
		 </td>
	 </tr>
   <?php }
            if($row2 = mysqli_fetch_assoc($result4)) {

  ?>
    <tr>
      <th>Section 4: Confidentiality</th>
      <th>Details</th>
      <th style="width:15%"></th>
    </tr>
    <tr>
      <td> In this section personal data means any data relating to a participant who could potentially be identified.  It includes pseudonymised data capable of being linked to a participant through a unique code number.
          If you will be undertaking any of the following activities at any stage (including in the identification of potential participants) please give details and explain the safeguarding measures you will employ:
      <br>
      <br>

      <d1>
        <dd> - Electronic transfer by magnetic or optical media, email or computer networks</dd>
        <dd> - Sharing of personal data outside the European Economic Area</dd>
        <dd> - Use of personal addresses, postcodes, faxes, emails or telephone numbers</dd>
        <dd> - Publication of direct quotations from respondents</dd>
        <dd> - Publication of data that might allow identification of individuals, either directly or indirectly</dd>
        <dd> - Use of audio/visual recording devices</dd>
        <br>
        <dd> - Storage of personal data on any of the following:</dd>
     </d1>
      <br>

      <d1>
        <dd> - Manual files</dd>
        <dd> - University computers</dd>
        <dd> - Home or other personal computers</dd>
        <dd> - Private company computers</dd>
        <dd> - Laptop computers</dd>
      </d1></td>
      <td colspan="2"><?php echo $row2["Q1"];?></td>
    </tr>
    <tr>
    <tr>
      <td>How will you ensure the confidentiality of personal data?  (eg, anonymisation or pseudonymisation of data)</td>
      <td colspan="2"><?php echo $row2["Q2"];?></td>
    </tr>
    <tr>
      <td>Who will have access to participants’ personal data during the study?</td>
      <td colspan="2"><?php echo $row2["Q3"];?></td>
    </tr>
    <tr>
      <td>How long will personal data be stored or accessed after the study has ended?  (If longer than 12 months, please justify)</td>
     <td colspan="2"><?php echo $row2["Q4"];?></td>
    </tr>
    <?php if($row4['F1S4']==""){ }else{ ?>
           <th colspan="3">Section 4 Reviewer 1  Feedback</th>

           <tr><td colspan="3"><?php echo $row4['S4']; }?></td></tr>
        <tr>
        <?php if($rowz['F1S4']==""){ }else{ ?>
           <th colspan="3">Section 4 Reviewer 2  Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S4']; }?></td></tr>
           <tr>
		 <?php    foreach( $res13 as $row){  if($row['S4']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 4 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S4']; } ?></tr>
 <?php }  ?>
        <tr>
        <th colspan="3">Section 4 Ethics committee Feedback</th>
        <tr>
        <td colspan="3">
        		<textarea name='S4'  id='S4' placeholder='Write comment here'><?php echo $row3['S4'];?></textarea>
	  </tr>

<?php }

            if($row2 = mysqli_fetch_assoc($result5)) {
  ?>

    <tr>
      <th>Section 5: Incentives & Payments</th>
      <th>Details</th>
            <th style="width:15%"></th>
    </tr>
      <tr>
      <td>Will research participants receive any payments, reimbursement of expenses or any other benefits or incentives for taking part in this research?  (If ‘yes’, please give details)</td>
      <td colspan="2"><?php echo $row2["Q1"];?></td>
    </tr>
    <tr>
      <td>Will individual researchers receive any personal payment over and above normal salary, or any other benefits or incentives, for taking part in this research?  (If ‘yes’, please give detai)</td>
      <td colspan="2"><?php echo $row2["Q2"];?></td>
    </tr>
    <tr>
      <td>Does the Chief Investigator or any other investigator/collaborator have any direct personal involvement (e.g. financial, share holding, personal relationship, etc) in the organisations sponsoring or funding the research that may give rise to a possible conflict of interest?  (If ‘yes’, please give details) </td>
      <td colspan="2"><?php echo $row2["Q3"];?></td>
    </tr>
       <?php if($row4['S5']==""){ }else{ ?>
    <th colspan="3">Section 5 Reviewer 1  Feedback</th>
        <tr><td colspan="3"><?php echo $row4['S5']; } ?></td></tr>
        <tr>
        <?php if($rowz['S5']==""){ }else{ ?>
           <th colspan="3">Section 5 Reviewer 2  Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S5']; }?></td></tr>
           <tr>
		 <?php    foreach( $res13 as $row){  if($row['S5']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 5 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S5']; } ?></tr>
 <?php }  ?>
        <tr>
        <th colspan="3">Section 5 Ethics committee Feedback</th>
        <tr>

        <td colspan="3">
        <textarea name='S5' id='S5'placeholder='Write comment here'><?php echo $row3['S5'];?></textarea>
		 </td></tr>
	  </tr>
<?php }
            if($row2 = mysqli_fetch_assoc($result6)) {
  ?>
    <tr>
      <th>Section 6: Publication & Dissemination</th>
      <th>Details</th>
      <th style="width:15%"></th>
    </tr>
    <tr>
      <td>How do you intend to report and disseminate the results of the study?  If you do not plan to report or disseminate the results please give your justification</td>
      <td colspan="2"><?php echo $row2["Q1"];?></td>
    </tr>
    <tr>
      <td>Will you inform participants of the results?  (Please give details of how you will inform participants or justify if not doing so)</td>
      <td colspan="2"><?php echo $row2["Q2"];?></td></td>
    </tr>
        <?php if($row4['S6']==""){ }else{ ?>
		<th colspan="3">Section 6 Reviewer 1  Feedback</th>
       <tr><td colspan="3"><?php echo $row4['S6']; } ?></td></tr>
       <tr>
    <?php if($rowz['S6']==""){ }else{ ?>
           <th colspan="3">Section 6 Reviewer 2  Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S6']; }?></td></tr>
           <tr>
		 <?php    foreach( $res13 as $row){  if($row['S6']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 6 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S6']; } ?></tr>
 <?php }  ?>
        <tr>
            <th colspan="3">Section 6 Ethics committee Feedback</th>
        <tr>
        <td colspan="3">


            <textarea name='S6' id='S6' placeholder='Write comment here'><?php echo $row3['S6'];?></textarea>
		 </td></tr>
	    </tr>
<?php }
 if($row2 = mysqli_fetch_assoc($result7)) {
  ?>
    <tr>
      <th>Section 7: Management of the research</th>
      <th>Details</th>
       <th style="width:15%"></th>
    </tr>
    <tr>
      <td>Other key investigators/collaborators.  (Please include all grant co-applicants, protocol authors and other key members of the Chief Investigator’s team, including non-doctoral student researchers)</td>
      <td colspan="2"><?php echo $row2["Q1"];?></td>
    </tr>
    <tr>
      <td>Has this or a similar application been previously rejected by a research Ethics Committee in the UK or another country?  (If yes, please give details of rejected application and explain in the summary of main issues how the reasons for the unfavourable opinion have been addressed in this application)</td>
      <td colspan="2"><?php echo $row2["Q2"];?></td>
    </tr>
    <tr>
      <td>Where will the research take place?</td>
      <td colspan="2"><?php echo $row2["Q3"];?></td>
    </tr>
<?php if($row4['S7']==""){ }else{ ?>
     <th colspan="3">Section 7 Reviewer 1 Feedback</th>
       <tr><td colspan="3"><?php echo $row4['S7']; }?></td></tr>
       <tr>
    <?php if($rowz['S7']==""){ }else{ ?>
           <th colspan="3">Section 7 Reviewer 2 Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S7']; }?></td></tr>
           <tr>
		 <?php    foreach( $res13 as $row){  if($row['S7']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 7 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S7']; } ?></tr>
 <?php }  ?>
        <tr>
        <th colspan="3">Section 7 Ethics committee Feedback</th>
        <tr>

        <td colspan="3">
        <textarea name='S7' id='S7' placeholder='Write comment here'><?php echo $row3['S7'];?></textarea>
		 </td></tr>
	  </tr>

<?php }
 if($row2 = mysqli_fetch_assoc($result8)) {
  ?>
     <tr>
      <th>Section 8: Insurance/Indemnity</th>
      <th>Details</th>
      <th style="width:15%"></th>
    </tr>
      <tr>
      <td>Does UoK’s insurer need to be notified about your project before insurance cover can be provided?
      The majority of research carried out at UoK is covered automatically by existing policies, however, if your project entails more than usual risk or involves an overseas country in the developing world or where there is or has recently been conflict, please check with the Insurance Office that cover can be provided.</td>
      <td colspan="2"><?php echo $row2["Q1"];?></td>
      </tr>
         <?php if($row4['S8']==""){ }else{ ?>
      <th colspan="3">Section 8 Reviewer 1 Feedback</th>
 <tr><td colspan="3"><?php echo $row4['S8']; } ?></td></tr>
      <tr>
    <?php if($rowz['S8']==""){ }else{ ?>
           <th colspan="3">Section 8 Reviewer 2 Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S8']; }?></td></tr>
           <tr>
		 <?php    foreach( $res13 as $row){  if($row['S8']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 8 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S8']; } ?></tr>
 <?php }  ?>
        <tr>
        <th colspan="3">Section 8 Ethics committee Feedback</th>
        <tr>
        <td colspan="3">

            <textarea name='S8' id='S8' placeholder='Write comment here'><?php echo $row3['S8'];?></textarea>
		 </td>
	  </tr>
<?php }
 if($row2 = mysqli_fetch_assoc($result9)) {
  ?>
      <tr>
      <th>Section 9: Children</th>
      <th>Details</th>
         <th style="width:15%"></th>
    </tr>
    <tr>
      <td>Do you plan to include any participants who are children under 16?  (If no, go to next section)</td>
     <td colspan="2"><?php echo $row2["Q1"];?></td>
      </tr>
      <tr>
      <td>Please specify the potential age range of children under 16 who will be included and give reasons for carrying out the research with this age group</td>
      <td colspan="2"><?php echo $row2["Q2"];?></td>
      </tr>
      <tr>
      <td>Please describe the arrangements for seeking informed consent from a person with parental responsibility and/or from children able to give consent for themselves</td>
      <td colspan="2"><?php echo $row2["Q3"];?></td>
      </tr>
      <tr>
      <td>If you intend to provide children under 16 with information about the research and seek their consent or agreement, please outline how this process will vary according to their age and level of understanding</td>
     <td colspan="2"><?php echo $row2["Q4"];?></td>
      </tr>
        <?php if($row4['S9']==""){ }else{ ?>
      <th colspan="3">Section 9 Reviewer 1 Feedback</th>
        <tr><td colspan="3"><?php echo $row4['S9']; }?></td></tr>
        <tr>
    <?php if($rowz['S9']==""){ }else{ ?>
           <th colspan="3">Section 9 Reviewer 2 Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S9']; }?></td></tr>
    <tr>
		 <?php    foreach( $res13 as $row){  if($row['S9']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 9 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S9']; } ?></tr>
 <?php }  ?>
        <tr>
            <th colspan="3">Section 9 Ethics committee Feedback</th>
       <tr>
       <td colspan="3">

		      <textarea name='S9' id='S9' placeholder='Write comment here'><?php echo $row3['S9'];?></textarea>
		 </td></tr>
	  </tr>
<?php }
 if($row2 = mysqli_fetch_assoc($result10)) {
  ?>
      <tr>
      <th>Section 10: Participants unable to consent for themselves</th>
      <th>Details</th>
        <th style="width:15%"></th>
    </tr>
    <tr>
      <td>Do you plan to include any participants who are adults unable to consent for themselves through physical or mental incapacity?  (If yes, the research must be reviewed by an NHS REC or SCREC)</td>
      <td colspan="2"><?php echo $row2["Q1"];?></td>
      </tr>
      <tr>
      <td>Is the research related to the ‘impairing condition’ that causes the lack of capacity, or to the treatment of those with that condition?</td>
      <td colspan="2"><?php echo $row2["Q2"];?></td>
      </tr>
      <tr>
      <td>Could the research be undertaken as effectively with people who do have the capacity to consent to participate?</td>
      <td colspan="2"><?php echo $row2["Q3"];?></td>
      </tr>
      <tr>
      <td>Is it possible that the capacity of participants could fluctuate during the research?  (If yes, the research must be reviewed by an NHS REC or SCREC)</td>
      <td colspan="2"><?php echo $row2["Q4"];?></td>
      </tr>
      <tr>
      <td>Who inside or outside the research team will decide whether or not the participants have the capacity to give consent?  What training/experience will they have to enable them to reach this decision?</td>
      <td colspan="2"><?php echo $row2["Q5"];?></td>
      </tr>
      <tr>
      <td>What will be the criteria for withdrawal of participants?</td>
      <td colspan="2"><?php echo $row2["Q6"];?></td>
      </tr>
         <?php if($row4['S10']==""){ }else{ ?>
       <th colspan="3">Section 10 Reviewer 1 Feedback</th>
        <tr><td colspan="3"><?php echo $row4['S10']; } ?></td></tr>
        <tr>
    <?php if($rowz['S10']==""){ }else{ ?>
           <th colspan="3">Section 10 Reviewer 2 Feedback</th>

           <tr><td colspan="3"><?php echo $rowz['S10']; }?></td></tr>
           <tr>
		 <?php    foreach( $res13 as $row){  if($row['S10']==""){ }elseif($EthicsID==$row['EthicsID']){ } else{ ?>
        <th colspan="3">Section 10 Ethics Committee  <?php echo $row['EthicsID'] ?> Feedback</th>
        <tr> <td colspan="3"><?php echo  $row['S10']; } ?></tr>
 <?php }  ?>
        <tr>
            <th colspan="3">Section 10 Ethics committee Feedback</th>
		   <tr>
		   <td colspan="3">


		       <textarea name='S10' id='S10' placeholder='Write comment here'><?php echo $row3['S10'];?></textarea>  </tr>
		   </td>
	  </tr>


<?php }
 if($row2 = mysqli_fetch_assoc($result11)) {
  ?>
       <tr>
      <th>Section 11: Declaration</th>
      <th>Details</th>
      <th style="width:15%"></th>
    </tr>
    <tr>
      <td>Agreed with the terms and conditions</td>
      <td colspan="2"><?php echo $row2["Q1"];?></td>
    </tr>
    <tr>
    <?php
   $filedir =   '../Applicant Interface/uploads/' .$user. '/' .$ApplicationID. '/' .$max;
   $otherfiledir = '../Applicant Interface/uploads/' .$user. '/' .$ApplicationID. '/' .$max . '/other';
   if (!file_exists($filedir)) {
    mkdir($filedir, 0777, true);
}

if (!file_exists($otherfiledir)) {
    mkdir($otherfiledir, 0777, true);
}

$files = scandir($filedir);

if (count($files) >5)
{
    $secondCompleted = true;
}
else
{
    $secondCompleted = false;
}

$otherfiles = scandir($otherfiledir);
   ?>


            <th>Section 12: Supporting Documents</th>
            <th></th>
            <th style="width:15%"><form action="P21_Section12SupportingDocuments.php">

            </form>
            </th>
            <tr>
                <th style="text-align: center;">Document Type</th>
                <th colspan="2" style="text-align: center;">File Name & Type</th>
            </tr>
        </tr>
        <tr>
        <td style="text-align: center; vertical-align: middle;">Research Proposal</td>
            <td colspan="2" style="text-align: center; vertical-align: middle;">
              <?php
                   for ($a = 2; $a < count($files); $a++)
                    {
                        if(strpos($files[$a], "Research Proposal") !== false){
                        ?>
                        <a style="display: block;" href="<?php echo $filedir . '/'. $files[$a]?>"><?php echo $files[$a]?></a>
                        <?php
                        }
                    }
                    ?>
        </td>
        </tr>
                <tr>
                    <td style="text-align: center; vertical-align: middle;">Consent Form</td>
            <td colspan="2" style="text-align: center; vertical-align: middle;">
                   <?php
                   for ($a = 2; $a < count($files); $a++)
                    {
                        if (strpos($files[$a], "Consent Form") !== false)
                        {
                        ?>
                        <a style="display: block;" href="<?php echo  $filedir . '/'. $files[$a]?>"><?php echo $files[$a]?></a>
                        <?php
                        }
                    }
                    ?>
        </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle;">Participant Information Sheet</td>
            <td colspan="2" style="text-align: center; vertical-align: middle;">
                   <?php
                   for ($a = 2; $a < count($files); $a++)
                    {
                        if (strpos($files[$a], "PIS") !== false)
                        {
                        ?>
                        <a style="display: block;" href="<?php echo  $filedir . '/'. $files[$a]?>"><?php echo $files[$a]?></a>
                        <?php
                        }
                    }
                    ?>
        </td>
        </tr>
        <tr>
            <th colspan="3" style="text-align: center; vertical-align: middle; height:30px;">Other Relevant Documents</th>
        </tr>
         <tr>
            <td colspan="3" style="text-align: center; vertical-align: middle;">
                    <?php
                   for ($a = 2; $a < count($otherfiles); $a++)
                    {
                        ?>
                        <a style="display: block;" href="<?php echo  $otherfiledir . $otherfiles[$a]?>"><?php echo $otherfiles[$a]?></a>
                        <?php
                    }
                    ?>
        </td>
        </tr>
     <?php }
  ?>
  </table>
  <input type="hidden" name="ethicsid" value="<?php echo $EthicsID ?>" >
    <input type="hidden" name="version" value="<?php echo $max ?>" >


          <br>

          <button type="submit" name="save"  class="nextbtn1">Save Application</button>
          <br>
          Reviewer 1 Recommendation: <?php
          if(isset($row4['Recommendation'])) {
            if($row4['Recommendation']!==""){
              echo $row4['Recommendation']; $disablebutton1="false" ;
            }  
          }else{ $disablebutton1 ="true" ; }
          ?>
          <br>
          Reviewer 2 Recommendation: <?php
          if(isset($rowz['Recommendation'])) {
            if($rowz['Recommendation']!==""){
              echo $rowz['Recommendation']; $disablebutton2="false" ;
           } }else{ $disablebutton2 ="true" ; }
           
          ?>
          <br>
        <br>

        <?php if($disablebutton1=="false" && $disablebutton2=="false"){
              
          ?>
             <select name="status" class="sortinghome" >
                 <option  value=""disabled selected>Approved / Not Approved</option>
                 <option value="Approved">Approved</option>
                 <option value="Minor Amendments Required">Minor Amendments Required</option>
                 <option value="Major Amendments Required">Major Amendments Required</option>
            </select>

      <button type="submit" name="submit" class="nextbtn1" >Submit Application</button>
      <?php }else{ $error="Cannot submit until both reviewers have reviewed the application";}?>
      <a style="color: red;"><?php echo $error ?></a>
      <br>
      <br>
      </form>
    </div>
</div>
</div>
</body>
</html>
