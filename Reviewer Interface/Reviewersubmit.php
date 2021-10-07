<?php 

session_start();

require('../db.php');
require('../reviewveri.php');

$ReviewerID = stripslashes($_POST['ReviewerID']);
$ReviewerID = mysqli_real_escape_string($conn,$ReviewerID);


$version = stripslashes($_POST['version']);
$version = mysqli_real_escape_string($conn,$version);


if(!isset($_POST['s1'])){

    $f1s4 = $_POST['f1s4'];

    $ApplicationID= $_SESSION['ApplicationID'];

    

    $sql = "UPDATE  Full_Section_Reviewed_Applications SET F1S4 = '$f1s4' WHERE ApplicationID='$ApplicationID'and ReviewerID='$ReviewerID' and version='$version'";

    $result = mysqli_query($conn,$sql);



}else{

  $f1s4 = $_POST['f1s4'];

  $s1 = $_POST['s1'];

  $s2 = $_POST['s2'];

  $s3 = $_POST['s3'];

  $s4 = $_POST['s4'];

  $s5 = $_POST['s5'];

  $s6 = $_POST['s6'];  

  $s7 = $_POST['s7'];

  $s8 = $_POST['s8'];

  $s9 = $_POST['s9'];

  $s10 = $_POST['s10'];

  $ApplicationID= $_SESSION['ApplicationID'];

  

    $sql = "UPDATE  Full_Section_Reviewed_Applications SET F1S4 = '$f1s4',S1 = '$s1',S2 = '$s2',S3 = '$s3',S4 = '$s4',S5 = '$s5',S6 = '$s6',S7 = '$s7',S8 = '$s8',S9 = '$s9',S10 = '$s10' WHERE ApplicationID='$ApplicationID'and ReviewerID='$ReviewerID'and version='$version'";

    $result = mysqli_query($conn,$sql);

    

}

if(isset($_POST['save'])){

     $sql2 = "UPDATE LinkingApplicationToReviewer SET status='In Progress' WHERE ApplicationID='$ApplicationID'and ReviewerID='$ReviewerID'";

    $result2 = mysqli_query($conn,$sql2);

    

    $sql1 = "UPDATE Full_Section_Reviewed_Applications SET status='In Progress' WHERE ApplicationID='$ApplicationID'and ReviewerID='$ReviewerID'and version='$version'";

    $result = mysqli_query($conn,$sql1);

    

    if (mysqli_query($conn, $sql1)) {

        header("Location:ReviewerDashboard.php");   

    }

}







if(isset($_POST['submit'])){



$recommend=$_POST['status'];

if($_POST['status']==""){

    $_SESSION["Error1"]= "Feedback is required"; 
   
    header("Location: ReviewApplicant.php");
 
}else{
    



$sql = "UPDATE Full_Section_Reviewed_Applications SET status='submitted',Recommendation='$recommend' WHERE ApplicationID='$ApplicationID'and ReviewerID='$ReviewerID'and version='$version'";

$result = mysqli_query($conn,$sql);

if($version==1){

$sql1 = "UPDATE LinkingApplicationToEthicsCommitteeMember set status='Pending' where ApplicationID='$ApplicationID'";

$result1 = mysqli_query($conn,$sql1);

}else{

    $sql1 = "UPDATE LinkingApplicationToEthicsCommitteeMember set status='Pending (Re-submitted)' where ApplicationID='$ApplicationID'";

$result1 = mysqli_query($conn,$sql1);

}

$sql1 = "UPDATE LinkingApplicationToReviewer SET status='submitted' WHERE ApplicationID='$ApplicationID'and ReviewerID='$ReviewerID';";

$result = mysqli_query($conn,$sql1);

unset ($_SESSION["Error1"]);


if (mysqli_query($conn, $sql)) {

         header("Location:ReviewerDashboard.php");   

        }

}
}
mysqli_close($conn);



?>