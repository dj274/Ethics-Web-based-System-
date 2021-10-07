<?php
session_start();
require('../db.php');
require('../Appliverify.php');


if(isset($_GET['id'])){

  $ApplicationID = stripslashes($_GET['id']);
  $ApplicationID = mysqli_real_escape_string($conn,$ApplicationID);  
  $_SESSION["ApplicationID"] = $ApplicationID ;

}else{

$ApplicationID = $_SESSION["ApplicationID"];

}
 $sqla = "SELECT * FROM users u , LinkingApplicationToApplicant b  WHERE ApplicationID=$ApplicationID and b.UserID=u.UserID and b.role='leader'";
    $resulta = mysqli_query($conn, $sqla);
  if ($row1 = mysqli_fetch_assoc($resulta)) {
      $user = $row1['Username'];
      $userID= $row1['UserID'];
      $dep = $row1['Department'];
      $fullname = $row1['FullName'];
  }
  
//For the first application php code
 $sql1 = "SELECT * FROM users where Username='$user'";
 $resultu = mysqli_query($conn, $sql1);
  

$sql1 = "SELECT * FROM Section1_Project_Details WHERE ApplicationID=" . $ApplicationID;
$result3 = mysqli_query($conn,$sql1);

$sqla = "SELECT * FROM users, LinkingApplicationToApplicant WHERE LinkingApplicationToApplicant.ApplicationID="  . $ApplicationID . " AND LinkingApplicationToApplicant.UserID=users.UserID and LinkingApplicationToApplicant.role='Participant'";
$resulta = mysqli_query($conn, $sqla);

 $sql3 = "SELECT * FROM Section3_Declaration WHERE ApplicationID=" . $ApplicationID ." ORDER BY ApplicationID ASC";
$result13 = mysqli_query($conn,$sql3);

 $sql2 = "SELECT * FROM Section3_Declaration WHERE ApplicationID=" . $ApplicationID ." ORDER BY ApplicationID ASC";
 $result14 = mysqli_query($conn, $sql2);

$sqlb = "SELECT * FROM Section4_ResearchChecklist_PartA WHERE ApplicationID=" . $ApplicationID;
$resultb = mysqli_query($conn, $sqlb);

$sqlc = "SELECT * FROM Section4_ResearchChecklist_PartB WHERE ApplicationID=" . $ApplicationID;
$resultc = mysqli_query($conn, $sqlc);

$sqld = "SELECT * FROM Section4_ResearchChecklist_PartC WHERE ApplicationID=" . $ApplicationID;
$resultd = mysqli_query($conn, $sqld);

$sqle = "SELECT * FROM Section4_ResearchChecklist_PartD WHERE ApplicationID=" . $ApplicationID;
$resulte = mysqli_query($conn, $sqle);

//For the second application php code
$sqlsection1 = "SELECT * FROM Full_Section1_Overview WHERE ApplicationID=" . $ApplicationID;
$result1 = mysqli_query($conn,$sqlsection1);

$sqlsection2 = "SELECT * FROM Full_Section2_Risk_and_ethical_issues WHERE ApplicationID=" . $ApplicationID;
$result2 = mysqli_query($conn,$sqlsection2);

$sqlsection3 = "SELECT * FROM Full_Section3_Recruitment_and_informed_consent WHERE ApplicationID=" . $ApplicationID;
$r = mysqli_query($conn,$sqlsection3);
    
$sqlsection4 = "SELECT * FROM Full_Section4_Confidentiality WHERE ApplicationID=" . $ApplicationID;
$result4 = mysqli_query($conn,$sqlsection4);

$sqlsection5 = "SELECT * FROM Full_Section5_Incentives_and_payments WHERE ApplicationID=" . $ApplicationID;
$result5 = mysqli_query($conn,$sqlsection5);

$sqlsection6 = "SELECT * FROM Full_Section6_Publications_and_dissemination WHERE ApplicationID=" . $ApplicationID;
$result6 = mysqli_query($conn,$sqlsection6);

$sqlsection7 = "SELECT * FROM Full_Section7_Management_of_the_research WHERE ApplicationID=" . $ApplicationID;
$result7 = mysqli_query($conn,$sqlsection7);

$sqlsection8 = "SELECT * FROM Full_Section8_Insurance_Indemnity WHERE ApplicationID=" . $ApplicationID;
$result8 = mysqli_query($conn,$sqlsection8);

$sqlsection9 = "SELECT * FROM Full_Section9_Children  WHERE ApplicationID=" . $ApplicationID;
$result9 = mysqli_query($conn,$sqlsection9);

$sqlsection10 = "SELECT * FROM Full_Section10_Participants_unable_to_consent_for_themselves WHERE ApplicationID=" . $ApplicationID;
$result10 = mysqli_query($conn,$sqlsection10);

$sqlsection11 = "SELECT * FROM Full_Section11_Declaration WHERE ApplicationID=". $ApplicationID;
$result11 = mysqli_query($conn,$sqlsection11);

mysqli_close($conn);

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../style.css">
    <script src="../scripts.js"></script>
    <script src="../icons.js"></script>

<title>
Automatic Ethical Approval System: Edit Application
</title>

</head>
<body>
    <div class="navbar">
        <div class="dropdown">
          <button class="dropbtn">
            <a href="#home">
              <i class="fa fa-user" class="fa fa-caret-down">&nbsp;</i>
              <i class="fa fa-caret-down"></i></a>
          </button>
          <div class="dropdown-content">
            <a href="ApplicantDashboard.php"><i class="fas fa-home"></i>Home</a>
            <a href="../Login Interface/Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </div>
        </div>
      </div>
  <h1>
      <br>
   Edit Application
  </h1>
  <br>
  <br>
  
   <table id="Applicants" class="summary">
         <?php     if ($row1 = mysqli_fetch_assoc($resultu)) { 
  ?>
        <tr>
            <th>Applicant Details</th>
            <th>Details</th>
            <th style="width:15%"><form action="P3_Section2ApplicantDetails.php">
            </form>
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
    </tr
            <?php }
        ?>
        </table>
  
     <table id="Applicants" class="summary">
        <tr>
            <th colspan="10">ETHICS REVIEW CHECKLIST FOR RESEARCH WITH HUMAN PARTICIPANTS</th>
        </tr>
          <?php  if($row1 = mysqli_fetch_assoc($result3)) {  
          ?>
        <tr>
            <th>Section 1: Project Details</th>
            <th>Details</th>
            <th style="width:15%"><form action="P2_Section1ProjectDetails.php">
            <button type="submit" class="nextbtn1">Edit Section 1</button>
            </form></th>
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
        <tr>
            <th>Section 2: Other Applicant Details</th>
            <th ></th>
            <th ></th>
            <th ></th>
            <th style="width:15%"><form action="P3_Section2ApplicantDetails.php">
            <button type="submit" class="nextbtn1">Edit Section 2</button>
            </form></th>
        </tr>
  <tr>
    <th style="text-align: center; vertical-align: middle;">Name</th>
    <th style="text-align: center; vertical-align: middle;">Department</th>
    <th style="text-align: center; vertical-align: middle;">Kent(ID) Email</th>
    <th style="text-align: center; vertical-align: middle;">Level of Study</th>
    <th style="text-align: center; vertical-align: middle;">Delete</th>
  </tr>
      
 <?php 
while($row = mysqli_fetch_assoc($resulta)) {
         echo "<tr>";
         echo "<td>". $row["FullName"]."</td>";
         echo "<td>". $row["Department"]."</td>";
         echo "<td>". $row["KentEmail"]."</td>";
         echo "<td>". $row["LevelOfStudy"]."</td>";
        

         $nextPage = urlencode("Applicant Interface/Summary_With_FullApplication.php");
        
        
         echo "<td><a href='../PHP/DeleteApplicant.php?id=".$row["UserID"]."&next=$nextPage'> <img alt='https://www.flaticon.com/free-icon/delete_1345874?term=delete&page=1&position=3&related_item_id=1345874' src='https://www.flaticon.com/svg/static/icons/svg/1345/1345874.svg' width='20' height='20'></a></td>";
}
?>
</table>
  
     <table id="Applicants" class="summary">
        <tr>
            
            <th>Section 3: Declaration & Signatures</th>
            <th>Details</th>
            <th style="width:15%"><form action="P4_Section3Declaration&Signatures.php">
            <button type="submit" class="nextbtn1">Edit Section 3</button>
            </form></th>
            
        </tr>
    <tr><?php if($row = mysqli_fetch_assoc($result13)) { ?>
      <td>Agreed with the terms and conditions</td>
      <td colspan="2"><?php echo $row['Q1']; ?></td>
      <?php }?>
    </tr>
    <tr>
    <th style="text-align: center; vertical-align: middle;">Supervisor(s) Name</th>
    <th style="text-align: center; vertical-align: middle;">Supervisor(s) Email</th>
    <th style="text-align: center; vertical-align: middle;">Delete</th>
  </tr>
      
<?php 
while($row = mysqli_fetch_assoc($result14)) {
    echo "<tr>";
    echo "<td>". $row["SupervisorName"]."</td>";
    echo "<td>". $row["SupervisorEmail"]."</td>";
    $nextPage = urlencode("Applicant Interface/Summary_With_FullApplication.php");
        
        
    echo "<td><a href='../PHP/DeleteSupervisor.php?id=".$row["SupervisorID"]."&next=$nextPage'> <img alt='https://www.flaticon.com/free-icon/delete_1345874?term=delete&page=1&position=3&related_item_id=1345874' src='https://www.flaticon.com/svg/static/icons/svg/1345/1345874.svg' width='20' height='20'></a></td>";
}
?>


        <?php  if($row = mysqli_fetch_assoc($resultb)) {
     ?>
     </table>
  
     <table id="Applicants" class="summary">
    <tr>
      <th>Section 4: Research Checklist (Part A)</th>
      <th>Research that may need to be reviewed by an NHS Research Ethics Committee, the Social Care Research Ethics Committee (SCREC) or other external ethics committee (if yes, please give brief details as an annex)</th>
      
      <th style="width:15%"><form action="P5_Section4_PartA.php">
            <button type="submit" class="nextbtn1">Edit Section 4</button>
            </form>
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
      <th style="width:15%"><form action="P6_Section4_PartB.php">
            <button type="submit" class="nextbtn1">Edit Section 4</button>
            </form></th>
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
         <th style="width:15%"><form action="P7_Section4_PartC.php">
            <button type="submit" class="nextbtn1">Edit Section 4</button>
            </form></th>
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
       <th style="width:15%"><form action="P8_Section4_PartD.php">
            <button type="submit" class="nextbtn1">Edit Section 4</button>
            </form></th>
    </tr>
    <tr>
      <td>Does the research have the potential to radicalise people who are vulnerable to supporting terrorism or becoming terrorists themselves?</td>
      <td colspan="2">&nbsp;<?php echo $row["Q1"];?></td>
    </tr>
    <?php }?>
  </table>
  <br>
  <br>
  <div class="pageButtons">
      <form method="post"action="submit.php"><br>
     <button type="submit" name="save"  class="nextbtn1">Save Application</button>
     <button type="submit" name="submit" class="nextbtn1">Submit Applciation</button>
     </form>
    </div>
     <br>
    <br>
     <br>
   
</body>
</html>