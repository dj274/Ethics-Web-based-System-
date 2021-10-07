<?php

session_start();

require('../db.php');

// require('../Appliverify.php');



$ApplicationID = $_SESSION["ApplicationID"];

$version= $_POST['version'];



if(isset($_POST['submit'])){

    

    $sql1 = "UPDATE  LinkingApplicationToApplicant SET status = 'submitted'  WHERE ApplicationID='$ApplicationID'and version ='$version'";

    $result1 = mysqli_query($conn,$sql1);

    

    $sql2 = "UPDATE  LinkingApplicationToDashboard SET status = 'submitted'  WHERE ApplicationID='$ApplicationID' ";

    $result2 = mysqli_query($conn,$sql2);

    

    $sql = "INSERT INTO LinkingApplicationToEthicsCommitteeMember(status,ApplicationID) VALUES('submitted','$ApplicationID')";



        if (mysqli_query($conn, $sql)) {

        header("Location: ApplicantDashboard.php"); } 

}





if(isset($_POST['save'])){

    

    $sql2 = "UPDATE  LinkingApplicationToApplicant SET status = 'In Progress'  WHERE ApplicationID='$ApplicationID'and version ='$version'";

    $result2 = mysqli_query($conn,$sql2);

    

    $sql = "UPDATE  LinkingApplicationToDashboard SET status = 'In Progress'  WHERE ApplicationID='$ApplicationID' ";

    

        if (mysqli_query($conn, $sql)) {

        header("Location: ApplicantDashboard.php"); } 

}





if(isset($_POST['Resubmit'])){

    

    $sql15 = "INSERT IGNORE INTO Full_Section_Reviewed_Applications (F1S4 ,S1 ,S2 ,S3 ,S4 ,S5 ,S6 ,S7 ,S8 ,S9 ,S10,ApplicationID,status,ReviewerID,version,Recommendation) SELECT '' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'',ApplicationID,'open',ReviewerID,'$version',Recommendation FROM Full_Section_Reviewed_Applications WHERE ApplicationID = '$ApplicationID' ORDER BY version DESC";

    

    $result15 = mysqli_query($conn,$sql15);

  

    $sql17 = "INSERT IGNORE INTO Full_Section_Comment_Applications (F1S4 ,S1 ,S2 ,S3 ,S4 ,S5 ,S6 ,S7 ,S8 ,S9 ,S10,ApplicationID,status,EthicsID,version) SELECT '' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'' ,'',ApplicationID,'Pending',EthicsID,'$version' FROM Full_Section_Comment_Applications WHERE ApplicationID = '$ApplicationID'ORDER BY version DESC";



    $result17 = mysqli_query($conn,$sql17);

    

        

    $sql4 = "UPDATE Full_Section_Reviewed_Applications SET  Recommendation='', status='open' WHERE ApplicationID='$ApplicationID' and version='$version'";

    $result4 = mysqli_query($conn,$sql4);

    

    

    $sql3 = "UPDATE  LinkingApplicationToApplicant SET status = 'Re-submitted' WHERE ApplicationID='$ApplicationID' and version='$version' ";

    $result3 = mysqli_query($conn,$sql3);

    

    $sql1 = "UPDATE LinkingApplicationToReviewer SET status='Re-submitted' WHERE ApplicationID='$ApplicationID'";

    $result1 = mysqli_query($conn,$sql1);



    $sql2 = "UPDATE LinkingApplicationToEthicsCommitteeMember SET status='Under Review (Re-submitted)' WHERE ApplicationID='$ApplicationID'";

    $result2 = mysqli_query($conn,$sql2);

    

    $sql = "UPDATE  LinkingApplicationToDashboard SET status = 'Re-submitted' WHERE ApplicationID='$ApplicationID'";



        if (mysqli_query($conn, $sql)) {

        header("Location: ApplicantDashboard.php"); } 

        

}

?>