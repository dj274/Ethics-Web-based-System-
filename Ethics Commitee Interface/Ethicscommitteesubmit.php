<?php 

session_start();

require('../db.php');
require('../ethicsveri.php');


function custom_copy($src, $dst) { 
  
    // open the source directory
    $dir = opendir($src); 
  
    // Make the destination directory if not exist
    @mkdir($dst); 
  
    // Loop through the files in source directory
    while( $file = readdir($dir) ) { 
  
        if (( $file != '.' ) && ( $file != '..' )) { 
            if ( is_dir($src . '/' . $file) ) 
            { 
  
                // Recursively calling custom copy function
                // for sub directory 
                custom_copy($src . '/' . $file, $dst . '/' . $file); 
  
            } 
            else { 
                copy($src . '/' . $file, $dst . '/' . $file); 
            } 
        } 
    } 
  
    closedir($dir);
} 


$ApplicationID= $_SESSION['ApplicationID'];

$EthicsID= $_POST['ethicsid'];

$version=$_POST['version'];


$sqla = "SELECT * FROM users u , LinkingApplicationToApplicant b  WHERE ApplicationID=$ApplicationID and b.UserID=u.UserID and b.role='leader'and version='$version'";
$resulta = mysqli_query($conn, $sqla);
if ($row1 = mysqli_fetch_assoc($resulta)) {
  
 
  $username =$row1['Username'];
}



  



if(!isset($_POST['S1'])){

    $f1s4 = $_POST['F1S4'];

   

$sql = "SELECT * from  Full_Section_Comment_Applications WHERE ApplicationID='$ApplicationID'and EthicsID='$EthicsID'and version='$version'";

if (mysqli_query($conn, $sql)) {

    

    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result); 

    if ($row){

        $sql = "UPDATE  Full_Section_Comment_Applications SET F1S4 = '$f1s4' WHERE ApplicationID='$ApplicationID'and EthicsID='$EthicsID'and version='$version'";

        $result = mysqli_query($conn,$sql); }

    else{

     

        $sql = "INSERT INTO  Full_Section_Comment_Applications(F1S4,ApplicationID,status,EthicsID,version) VALUES('$f1s4','$ApplicationID','Pending','$EthicsID','$version')";

        $result = mysqli_query($conn,$sql); 

    }

} 

}else{

  $f1s4 = $_POST['F1S4'];

  $s1 = $_POST['S1'];

  $s2 = $_POST['S2'];

  $s3 = $_POST['S3'];

  $s4 = $_POST['S4'];

  $s5 = $_POST['S5'];

  $s6 = $_POST['S6'];  

  $s7 = $_POST['S7'];

  $s8 = $_POST['S8'];

  $s9 = $_POST['S9'];

  $s10 = $_POST['S10'];

$sql = "SELECT * from  Full_Section_Comment_Applications WHERE ApplicationID='$ApplicationID'and EthicsID='$EthicsID'and version='$version'";

if (mysqli_query($conn, $sql)) {

   

    $result = mysqli_query($conn, $sql);

    $row = mysqli_num_rows($result); 

    if ($row){

        $sql = "UPDATE  Full_Section_Comment_Applications SET F1S4 = '$f1s4',S1 = '$s1',S2 = '$s2',S3 = '$s3',S4 = '$s4',S5 = '$s5',S6 = '$s6',S7 = '$s7',S8 = '$s8',S9 = '$s9',S10 = '$s10' WHERE ApplicationID='$ApplicationID'and EthicsID='$EthicsID'and version='$version'";

        $result = mysqli_query($conn,$sql); 

        

    }else{

    

         $sql = "INSERT INTO  Full_Section_Comment_Applications(F1S4 ,S1 ,S2 ,S3 ,S4 ,S5 ,S6 ,S7 ,S8 ,S9 ,S10,ApplicationID,status,EthicsID,version) VALUES('$f1s4','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$ApplicationID','Pending','$EthicsID','$version')";

       

        $result = mysqli_query($conn,$sql); 

         

    }

}

}



if(isset($_POST['save'])){

    header("Location:Page1_EthicsCommitee_Dashboard.php");   

}

if(isset($_POST['submit'])){

    if(isset( $_POST['status'])){

        $Status = $_POST['status'];
    }else{
        header("Location:CommentApplicantFullApplication.php?error='empty'");   

    }


$sql = "UPDATE LinkingApplicationToEthicsCommitteeMember SET status='$Status' WHERE ApplicationID='$ApplicationID'";

$result = mysqli_query($conn,$sql);

$sql = "UPDATE Full_Section_Comment_Applications SET status='$Status' WHERE ApplicationID='$ApplicationID'and version='$version'";

$result = mysqli_query($conn,$sql);

$sql1 = "UPDATE LinkingApplicationToApplicant SET status='$Status' WHERE ApplicationID='$ApplicationID'and version='$version'";

$result1 = mysqli_query($conn,$sql1);

$sql1 = "UPDATE LinkingApplicationToDashboard SET status='$Status' WHERE ApplicationID='$ApplicationID'";

$result2 = mysqli_query($conn,$sql1);



if($Status=="Minor Amendments Required" || $Status=="Major Amendments Required" ){

   
$filedir= '../Applicant Interface/uploads/' .$username. '/' .$ApplicationID. '/' .$version;

$version= $version+1;

$dstfile= '../Applicant Interface/uploads/' .$username. '/' .$ApplicationID. '/' .$version ;
if (!file_exists($filedir)) {
mkdir($dstfile, 0777, true);
}
custom_copy($filedir, $dstfile);

   

$sql16 = "INSERT IGNORE INTO Section3_Declaration (Q1 ,SupervisorName, SupervisorEmail, ApplicationID,version) SELECT Q1 ,SupervisorName, SupervisorEmail, ApplicationID,'$version' FROM Section3_Declaration WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result1 = mysqli_query($conn,$sql16);    

    

$sql17 = "INSERT IGNORE INTO Section1_Project_Details (ProjectTitle,PlannedStartDate,PlannedEndDate,Funder,ApplicationID,version) SELECT ProjectTitle,PlannedStartDate,PlannedEndDate,Funder,ApplicationID,'$version' FROM Section1_Project_Details WHERE ApplicationID = '$ApplicationID'ORDER BY version DESC";

$result2 = mysqli_query($conn,$sql17);    



$sql17 = "INSERT IGNORE INTO LinkingApplicationToApplicant (ApplicationID,UserID,role,version,status) SELECT ApplicationID,UserID,role,'$version',status FROM LinkingApplicationToApplicant WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result3 = mysqli_query($conn,$sql17);    





$sql18 = "INSERT IGNORE INTO Section4_ResearchChecklist_PartA (Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,Q7 ,Q8 ,Q9 ,ApplicationID,version) SELECT Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,Q7 ,Q8 ,Q9 ,ApplicationID,'$version' FROM Section4_ResearchChecklist_PartA WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC ";

$result4 = mysqli_query($conn,$sql18);



$sql2 = "INSERT IGNORE INTO Section4_ResearchChecklist_PartB (Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,Q7 ,Q8 ,Q9 ,Q10, Q11 ,Q12 ,Q13,Q14 ,Q15,Q16 ,Q17 ,Q18 ,Q19 ,ApplicationID,version) SELECT Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,Q7 ,Q8 ,Q9,Q10, Q11 ,Q12 ,Q13,Q14 ,Q15,Q16 ,Q17 ,Q18 ,Q19 ,ApplicationID,'$version' FROM Section4_ResearchChecklist_PartB WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result5 = mysqli_query($conn,$sql2);



$sql3 = "INSERT IGNORE INTO Section4_ResearchChecklist_PartC (Q1 ,ApplicationID,version) SELECT Q1 ,ApplicationID,'$version' FROM Section4_ResearchChecklist_PartC WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result6 = mysqli_query($conn,$sql3);

$sql4 = "INSERT IGNORE INTO Section4_ResearchChecklist_PartD (Q1 ,ApplicationID,version) SELECT Q1 ,ApplicationID,'$version' FROM Section4_ResearchChecklist_PartD WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result7 = mysqli_query($conn,$sql4);

$sql5 = "INSERT IGNORE INTO Full_Section1_Overview (Q1 ,ApplicationID,version) SELECT Q1 ,ApplicationID,'$version' FROM Full_Section1_Overview WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result8 = mysqli_query($conn,$sql5);

$sql6 = "INSERT IGNORE INTO Full_Section2_Risk_and_ethical_issues (Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,Q7 ,Q8 ,Q9 ,ApplicationID,version) SELECT Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,Q7 ,Q8 ,Q9 ,ApplicationID,'$version' FROM Full_Section2_Risk_and_ethical_issues WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result9 = mysqli_query($conn,$sql6);

$sql7 = "INSERT IGNORE INTO Full_Section3_Recruitment_and_informed_consent (Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,Q7 ,Q8 ,ApplicationID,version) SELECT Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,Q7 ,Q8 ,ApplicationID,'$version' FROM Full_Section3_Recruitment_and_informed_consent WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result10 = mysqli_query($conn,$sql7);

$sql8 = "INSERT IGNORE INTO Full_Section4_Confidentiality (Q1 ,Q2 ,Q3 ,Q4 , ApplicationID,version) SELECT Q1 ,Q2 ,Q3 ,Q4 ,ApplicationID,'$version' FROM Full_Section4_Confidentiality WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result11 = mysqli_query($conn,$sql8);

$sql9 = "INSERT IGNORE INTO Full_Section5_Incentives_and_payments (Q1 ,Q2 ,Q3 , ApplicationID,version) SELECT Q1 ,Q2 ,Q3 ,ApplicationID,'$version' FROM Full_Section5_Incentives_and_payments WHERE ApplicationID = '$ApplicationID'";

$result12 = mysqli_query($conn,$sql9);

$sql10 = "INSERT IGNORE INTO Full_Section6_Publications_and_dissemination (Q1 ,Q2 , ApplicationID,version) SELECT Q1 ,Q2 ,ApplicationID,'$version' FROM Full_Section6_Publications_and_dissemination WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result13 = mysqli_query($conn,$sql10);

$sql11 = "INSERT IGNORE INTO Full_Section7_Management_of_the_research (Q1 ,Q2 , Q3, ApplicationID,version) SELECT Q1 ,Q2 ,Q3, ApplicationID,'$version' FROM Full_Section7_Management_of_the_research WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result14 = mysqli_query($conn,$sql11);

$sql12 = "INSERT IGNORE INTO Full_Section8_Insurance_Indemnity (Q1 ,ApplicationID,version) SELECT Q1 ,ApplicationID,'$version' FROM Full_Section8_Insurance_Indemnity WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result15 = mysqli_query($conn,$sql12);

$sql13 = "INSERT IGNORE INTO Full_Section9_Children (Q1 ,Q2 ,Q3 ,Q4 ,ApplicationID,version) SELECT Q1 ,Q2 ,Q3 ,Q4 ,ApplicationID,'$version' FROM Full_Section9_Children WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result16 = mysqli_query($conn,$sql13);

$sql14 = "INSERT IGNORE INTO Full_Section10_Participants_unable_to_consent_for_themselves (Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,ApplicationID,version) SELECT Q1 ,Q2 ,Q3 ,Q4 ,Q5 ,Q6 ,ApplicationID,'$version' FROM Full_Section10_Participants_unable_to_consent_for_themselves WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result17 = mysqli_query($conn,$sql14);

$sql15 = "INSERT IGNORE INTO Full_Section11_Declaration (Q1 ,ApplicationID,version) SELECT Q1,ApplicationID,'$version' FROM Full_Section11_Declaration WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

$result18 = mysqli_query($conn,$sql15);



              header("Location:Page1_EthicsCommitee_Dashboard.php");   

       

}else{

    header("Location:Page1_EthicsCommitee_Dashboard.php");   

       

}



}



mysqli_close($conn);



?>