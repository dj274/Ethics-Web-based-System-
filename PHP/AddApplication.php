<?php
session_start();
require('../db.php');


$ApplicationID = $_SESSION['ApplicationID'];

$ProjectTitle = $_POST['ProjectTitle'];
$PlannedStartDate = $_POST['PlannedStartDate'];
$PlannedEndDate = $_POST['PlannedEndDate'];
$Funder = $_POST['Funder'];

$CurrentUserID = $_SESSION["CurrentUserID"];

$NextPage = $_POST['nextpage'];

$sql = "SELECT * from Section1_Project_Details WHERE ApplicationID='$ApplicationID'";

if (mysqli_query($conn, $sql)) {
          $result = mysqli_query($conn, $sql);
     $row = mysqli_num_rows($result); 
     if ($row)
     {
         $maxversion= "SELECT MAX(version) as max FROM Section1_Project_Details WHERE ApplicationID='$ApplicationID'";
         $maxresult = mysqli_query($conn,$maxversion);
         $row2 = mysqli_fetch_assoc($maxresult);
         $max =  $row2['max'] ;
        
         $sql = "UPDATE Section1_Project_Details SET ProjectTitle = '$ProjectTitle', PlannedStartDate='$PlannedStartDate', PlannedEndDate='$PlannedEndDate', Funder='$Funder' WHERE ApplicationID='$ApplicationID'and version='$max'";
         
            if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
              header("Location: $NextPage");

            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
            mysqli_close($conn);
     }
     else
     {
         $sql = "INSERT INTO Section1_Project_Details (ProjectTitle, PlannedStartDate, PlannedEndDate, Funder,ApplicationID,version)
         VALUES ('$ProjectTitle', '$PlannedStartDate', '$PlannedEndDate', '$Funder','$ApplicationID','1')";
            
            if (mysqli_query($conn, $sql)) {
                // echo "New record created successfully";
                $last_id = mysqli_insert_id($conn);
                // Set session variables
                $_SESSION["ApplicationID"] = $last_id;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
                
            
                
            $sql2 = "INSERT IGNORE INTO LinkingApplicationToApplicant (ApplicationID, UserID, status, role, version)
            VALUES ('$ApplicationID','$CurrentUserID','In Progress','leader','1')";
                
            $sql1 = "INSERT IGNORE INTO LinkingApplicationToDashboard (ApplicationID, UserID ,status, role)
            VALUES ('$ApplicationID','$CurrentUserID','In Progress','leader')";
            $result2= mysqli_query($conn, $sql1);
    
                if (mysqli_query($conn, $sql2)) {
                  // echo "New record2 created successfully";
                  header("Location: $NextPage");
                } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
                mysqli_close($conn);
     }
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>

<script type="text/javascript">
// var php_var = "<?php echo $NextPage; ?>";
// window.location.href = php_var;
</script>

