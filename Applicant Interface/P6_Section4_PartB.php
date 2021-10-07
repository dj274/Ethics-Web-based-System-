<?php
require('../db.php');

session_start();
require('../Appliverify.php');

$ApplicationID = $_SESSION["ApplicationID"];

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
        console.log(nextpage);
    }
    </script>

<title>
Automatic Ethical Approval System: Checklist Part B
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
    Section 4: Research Checklist (Part B)
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


<form id="my-form" action= "../PHP/Section4b.php" method="post">
     <input type="hidden" name="new" value="1"/>

  <div class="container">
        <p style="text-align: center; vertical-align: middle;">If you have selected "YES" for any of these questions, you will have to complete the full ethics application form which will be continued within this application</p><br>
    <hr>
    <br>
     <br>
    <table class="summary">
      <tr>
        <th style="text-align: center; vertical-align: middle; width:50px;">Question</th>
        <th style="text-align: center; vertical-align: middle;">Research that may need full review by the Sciences REAG</th>
        <th style="text-align: center; vertical-align: middle; width:50px;">YES</th>
        <th style="text-align: center; vertical-align: middle; width:50px;">NO</th>
      </tr>
      <tr>
        <td style="text-align: center; vertical-align: middle; width:50px;">1</td>
        <td>Does the research involve other vulnerable groups: eg, children; those with cognitive impairment?</td>

        <?php

        $sql1 = "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartB WHERE ApplicationID=" . $ApplicationID;
        $result2 = mysqli_query($conn, $sql1);
        $row1 = mysqli_fetch_assoc($result2);
         $max= $row1['max'];
        $sqld = "SELECT * FROM Section4_ResearchChecklist_PartB WHERE ApplicationID='$ApplicationID' and version='$max'";
        $resultA = mysqli_query($conn, $sqld);
        $row = mysqli_fetch_assoc($resultA);
        // echo $row['version'];
        if(isset($row["Q1"])) ?>

          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q1"]) && $row["Q1"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq1" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q1"]) && $row["Q1"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq1" value="no">
          </td>


        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">2</td>
          <td>Is the research to be conducted in such a way that the relationship between participant and researcher is unequal (eg, a subject may feel under pressure to participate in order to avoid damaging a relationship with the researcher)?</td>

          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q2"]) && $row["Q2"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq2" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q2"]) && $row["Q2"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq2" value="no">
          </td>

        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">3</td>
          <td>Does the project involve the collection of material that could be considered of a sensitive, personal, biographical, medical, psychological, social or physiological nature.</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q3"]) && $row["Q3"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq3" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q3"]) && $row["Q3"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq3" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">4</td>
          <td>Will the study require the cooperation of a gatekeeper for initial access to the groups or individuals to be recruited (eg, headmaster at a School; group leader of a self-help group)?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q4"]) && $row["Q4"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq4" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q4"]) && $row["Q4"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq4" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">5</td>
          <td>Will it be necessary for participants to take part in the study without their knowledge and consent at the time? (eg, covert observation of people in non-public places?)</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q5"]) && $row["Q5"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq5" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q5"]) && $row["Q5"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq5" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">6</td>
          <td>Will the study involve discussion of sensitive topics (eg, sexual activity; drug use; criminal activity)?</td>
           <td style="text-align: center; vertical-align: middle; width:50px;">
           <input <?php if(isset($row["Q6"]) && $row["Q6"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq6" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q6"]) && $row["Q6"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq6" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">7</td>
            <td>Are drugs, placebos or other substances (eg, food substances, vitamins) to be administered to the study participants or will the study involve invasive, intrusive or potentially harmful procedures of any kind?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q7"]) && $row["Q7"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq7" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q7"]) && $row["Q7"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq7" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">8</td>
            <td>Is pain or more than mild discomfort likely to result from the study?</td>
           <td style="text-align: center; vertical-align: middle; width:50px;">
           <input <?php if(isset($row["Q8"]) && $row["Q8"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq8" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q8"]) && $row["Q8"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq8" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">9</td>
            <td>Could the study induce psychological stress or anxiety or cause harm or negative consequences beyond the risks encountered in normal life?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q9"]) && $row["Q9"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq9" value="yes" required>
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q9"]) && $row["Q9"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq9" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">10</td>
            <td>Will the study involve prolonged or repetitive testing?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q10"]) && $row["Q10"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq10" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q10"]) && $row["Q10"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq10" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">11</td>
            <td>Will the research involve administrative or secure data that requires permission from the appropriate authorities before use?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q11"]) && $row["Q11"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq11" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q11"]) && $row["Q11"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq11" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">12</td>
            <td>Is there a possibility that the safety of the researcher may be in question (eg, international research; locally employed research assistants)?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q12"]) && $row["Q12"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq12" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q12"]) && $row["Q12"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq12" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">13</td>
            <td>Does the research involve participants carrying out any of the research activities themselves (i.e. acting as researchers as opposed to just being participants)?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q13"]) && $row["Q13"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq13" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q13"]) && $row["Q13"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq13" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">14</td>
            <td>Will the research take place outside the UK? You may find the find the Proportionate Risk Assessment document useful.</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q14"]) && $row["Q14"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq14" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q14"]) && $row["Q14"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq14" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">15</td>
            <td>Will the outcome of the research allow respondents to be identified either directly or indirectly (eg, through aggregating separate data sources gathered from the internet)?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q15"]) && $row["Q15"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq15" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q15"]) && $row["Q15"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq15" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">16</td>
            <td>Will research involve the sharing of data or confidential information beyond the initial consent given?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q16"]) && $row["Q16"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq16" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q16"]) && $row["Q16"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq16" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">17</td>
            <td>Will financial inducements (other than reasonable expenses and compensation for time) be offered to participants?</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q17"]) && $row["Q17"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq17" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q17"]) && $row["Q17"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq17" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">18</td>
            <td>Are there any conflicts of interest with the proposed research/research findings? (eg, is the researcher working for the organisation under research or might the research or research findings cause a risk of harm to the participants(s) or the researcher(s) or the institution?)</td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q18"]) && $row["Q18"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq18" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q18"]) && $row["Q18"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq18" value="no">
          </td>
        </tr>
        <tr>
            <td style="text-align: center; vertical-align: middle; width:50px;">19</td>
            <td>Will the study involve the publication, sharing or potentially insecure electronic storage and/or transfer of data that might allow identification of individuals, either directly or indirectly? (e.g. publication of verbatim quotations from an online forum; sharing of audio/visual recordings; insecure transfer of personal data such as addresses, telephone numbers etc.; collecting identifiable personal data on unprotected** internet sites.)
  [**Please note that Qualtrics and Sona Systems provide adequate data security and comply with the requirements of the EU-US Privacy Shield.]
  </td>
          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q19"]) && $row["Q19"] == 'yes') echo 'checked="checked"'; ?> type="radio" name="Bq19" value="yes">
          </td>


          <td style="text-align: center; vertical-align: middle; width:50px;">
          <input <?php if(isset($row["Q19"]) && $row["Q19"] == 'no') echo 'checked="checked"'; ?> type="radio" name="Bq19" value="no">
          </td>
        </tr>
    </table>
    <br>
    <input id="nextpage" type="hidden" name="nextpage" value="../Applicant Interface/P7_Section4_PartC.php">
    <div class="pageButtons">
      <a href="P5_Section4_PartA.php" class="button">Previous</a>
      <button type="submit">Next</button>
    </div>
</div>
</form>
</body>
</html>
