<?php

require("../db.php");



  if (isset($_REQUEST['FullName'])){



  $FullName = stripslashes($_REQUEST['FullName']);

    $FullName = mysqli_real_escape_string($conn,$FullName);



    $KentEmail = stripslashes($_REQUEST['Email']);

    $KentEmail = mysqli_real_escape_string($conn,$KentEmail);



    $Telephone = stripslashes($_REQUEST['Telephone']);

    $Telephone = mysqli_real_escape_string($conn,$Telephone);



    $Postcode = stripslashes($_REQUEST['Postcode']);

    $Postcode = mysqli_real_escape_string($conn,$Postcode);



    $Address = stripslashes($_REQUEST['FirstLineAddress']);

    $Address = mysqli_real_escape_string($conn,$Address);



    $LevelOfStudy = stripslashes($_REQUEST['LevelOfStudy']);

    $LevelOfStudy = mysqli_real_escape_string($conn,$LevelOfStudy);



    $Department = stripslashes($_REQUEST['Department']);

    $Department = mysqli_real_escape_string($conn,$Department);



    $Role = stripslashes($_REQUEST['Role']);

    $Role = mysqli_real_escape_string($conn,$Role);



    $Username = stripslashes($_REQUEST['UserID']);

    $Username = mysqli_real_escape_string($conn,$Username);

    // $EthicsCommittee = $_REQUEST['EthicsCommittee'];
    // $Reviewer = $_REQUEST['Reviewer'];

  if(isset( $_REQUEST['Applicant'])){
    $Applicant = $_REQUEST['Applicant'];

    if ($Applicant == "on") {
     $Applicant ="1";
   }
  }
  else {
    $Applicant="0";
  }

      $query2 = "UPDATE users SET Applicant = '$Applicant' WHERE Username = '$Username'";
    if (mysqli_query($conn, $query2)) {
     "Role1 updated successfully";
  }


  if (isset($_REQUEST['Admin'])){
    $Admin = $_REQUEST['Admin'];

    if ($Admin == "on") {
     $Admin ="1";
    }
  }
  else {
    $Admin="0";
  }
     $query3 = "UPDATE users SET Admin = '$Admin' WHERE Username = '$Username'";
   if (mysqli_query($conn, $query3)) {
    "Role2 updated successfully";
  }

  if (isset($_REQUEST['Reviewer'])){
    $Reviewer = $_REQUEST['Reviewer'];


        if ($Reviewer == "on") {
         $Reviewer ="1";
       }
  }
  else {
    $Reviewer="0";
  }
      $query4 = "UPDATE users SET Reviewer = '$Reviewer' WHERE Username = '$Username'";
    if (mysqli_query($conn, $query4)) {
     "Role3 updated successfully";
}


  if (isset($_REQUEST['EthicsCommittee'])){
    $EthicsCommittee = $_REQUEST['EthicsCommittee'];


        if ($EthicsCommittee == "on") {
         $EthicsCommittee ="1";
       }
  }
  else {
    $EthicsCommittee="0";
  }

      $query5 = "UPDATE users SET EthicsComittee = '$EthicsCommittee' WHERE Username = '$Username'";
    if (mysqli_query($conn, $query5)) {
     "Role4 updated successfully";
}

    $trn_date = date("Y-m-d H:i:s");

          $query = "UPDATE users SET FullName='$FullName',  KentEmail='$KentEmail', Telephone='$Telephone', Postcode='$Postcode', Address='$Address',
             LevelOfStudy='$LevelOfStudy', Department='$Department', Role= '$Role' WHERE Username = '$Username'";



        if (mysqli_query($conn, $query)) {
         "Record updated successfully";
    }


 else {
        "Error: " . $query . "<br>" . mysqli_error($conn);
    }
  }


?>

<script type="text/javascript">
window.location.href = '../Admin Interface/AdminDashboard.php';

function myFunction() {
  var person = prompt("Record updated!");
}
</script>
