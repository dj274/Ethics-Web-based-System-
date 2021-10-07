<?php
session_start();
require('../db.php');
$NextPage = $_POST['nextpage'];
$ApplicationID = $_SESSION["ApplicationID"];
$Dq1 = $_REQUEST['Dq1'];

$maxversion= "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartD WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
$row2 = mysqli_fetch_assoc($maxresult);
$max =  $row2['max'] ;

$sqlexist= "SELECT * FROM Section4_ResearchChecklist_PartD WHERE ApplicationID='$ApplicationID'";
if (mysqli_query($conn, $sqlexist)) {
    $result = mysqli_query($conn, $sqlexist);
    $row = mysqli_num_rows($result);
    if($row)
    {   
            


        $sql = "UPDATE Section4_ResearchChecklist_PartD  SET Q1 = '$Dq1' WHERE ApplicationID='$ApplicationID' AND version = '$max'";

                    if (mysqli_query($conn, $sql)) {
            //  echo "Record updated successfully";

          } else {
             echo "Error: " . $sqlexist . "<br>" . mysqli_error($conn);
          }
    }
    
    else
    {

    $sql = "INSERT INTO Section4_ResearchChecklist_PartD (`Q1`, `ApplicationID`, `version`) VALUES ('$Dq1', '$ApplicationID', '1')";

    if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully" ;
    } 
    else
    {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    }
$maxversion= "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartD WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
$row2 = mysqli_fetch_assoc($maxresult);
$max =  $row2['max'] ; 
    
if (isset($_POST['finish'])) {

$row1 = array();
$row3 =array();
$row6 = array();
    $sql1 = "SELECT * FROM Section4_ResearchChecklist_PartB WHERE ApplicationID='$ApplicationID'and version='$max'";
    $sql2 = "SELECT * FROM Section4_ResearchChecklist_PartC WHERE ApplicationID='$ApplicationID'and version='$max'";
    $sql3 = "SELECT * FROM Section4_ResearchChecklist_PartD WHERE ApplicationID='$ApplicationID'and version='$max'";
    if (mysqli_query($conn, $sql1)) {
          $result1 = mysqli_query($conn, $sql1);
          $result2 = mysqli_query($conn, $sql2);
          $result3 = mysqli_query($conn, $sql3);
            if($row = mysqli_fetch_assoc($result1)) { $row1 = $row; }
             if($row2 = mysqli_fetch_assoc($result2)) { $merge= array_merge($row1, $row3);}
             if($row5 = mysqli_fetch_assoc($result3)) { $merge1= array_merge($merge, $row5);}
            $sum = 0;
                   foreach ($merge1 as $value) {
            
                                if($value=="yes"){
                                    $sum = $sum+1;
                                }
                        }
                    if($sum>0){
                        header("Location:../Applicant Interface/P9_FullEthicsResearchHome.php");
                    }else {
                        header("Location:../Applicant Interface/Summary_With_FullApplication.php");
                    }
    }
}
else
{
    header("Location: $NextPage");
}
mysqli_close($conn);

?>
