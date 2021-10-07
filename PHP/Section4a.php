<?php
session_start();
require('../db.php');
$NextPage = $_POST['nextpage'];
$ApplicationID = $_SESSION["ApplicationID"];
 $Aq1 = $_REQUEST['Aq1'];
 $Aq2 = $_REQUEST['Aq2'];
 $Aq3 = $_REQUEST['Aq3'];
 $Aq4 = $_REQUEST['Aq4'];
 $Aq5 = $_REQUEST['Aq5'];
 $Aq6 = $_REQUEST['Aq6'];
 $Aq7 = $_REQUEST['Aq7'];
 $Aq8 = $_REQUEST['Aq8'];
 $Aq9 = $_REQUEST['Aq9'];

$maxversion= "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartA WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
$row2 = mysqli_fetch_assoc($maxresult);
$max =  $row2['max'] ;
// echo "version ".$max; 



$sqlexist= "SELECT * FROM Section4_ResearchChecklist_PartA WHERE ApplicationID='$ApplicationID'";
if (mysqli_query($conn, $sqlexist)) {
    $result = mysqli_query($conn, $sqlexist);
    $row = mysqli_num_rows($result);
    if($row)
    {


        $sql = "UPDATE Section4_ResearchChecklist_PartA  SET Q1 = '$Aq1', Q2= '$Aq2', Q3 = '$Aq3', Q4= '$Aq4', Q5 = '$Aq5', Q6= '$Aq6', Q7 = '$Aq7', Q8= '$Aq8', Q9 = '$Aq9' WHERE ApplicationID='$ApplicationID' AND version = '$max'";

                    if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
              header("Location: $NextPage");
          } else {
             echo "Error: " . $sqlexist . "<br>" . mysqli_error($conn);
          }
    }
    
    else
    {

    $sql ="INSERT INTO Section4_ResearchChecklist_PartA (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`,ApplicationID, version) VALUES ('$Aq1', '$Aq2', '$Aq3', '$Aq4', '$Aq5', '$Aq6', '$Aq7', '$Aq8', '$Aq9','$ApplicationID', '1')";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully" ;
    header("Location: $NextPage");
    } 
    else
    {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    }
        mysqli_close($conn);



?>


