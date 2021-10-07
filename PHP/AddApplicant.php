<?php

session_start();
require("../db.php");


$NextPage = $_POST['nextpage'];

$ApplicationID = $_SESSION["ApplicationID"];
$SearchUserRow = $_SESSION["SearchUserRow"];
$UserID = $SearchUserRow["UserID"];

$NextPage = $_POST['nextpage'];

$sql = "SELECT * FROM LinkingApplicationToApplicant WHERE ApplicationID='". $ApplicationID ."'";

$status;

if (mysqli_query($conn, $sql)) {
      $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($result)) {
        if (!empty($row["status"]))
        {
            $status = $row["status"];
         }else{
            $status='In Progress';
         }

        }

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$ApplicationID = $_SESSION["ApplicationID"];
 $sql4 = "SELECT MAX(version) as max FROM LinkingApplicationToApplicant b WHERE b.ApplicationID='$ApplicationID'";
    $result2 = mysqli_query($conn, $sql4);
    $row1 = mysqli_fetch_assoc($result2);
    $version= $row1['max'];
    



$sql = "INSERT IGNORE INTO LinkingApplicationToApplicant (ApplicationID, UserID,role, status,version)
        VALUES ('$ApplicationID', '$UserID','Participant', '$status','$version')";


$sql1 = "INSERT IGNORE INTO LinkingApplicationToDashboard (ApplicationID, UserID,status, role)
         VALUES ('$ApplicationID', '$UserID','$status','Participant')";
$result2= mysqli_query($conn, $sql1);

if (mysqli_query($conn, $sql)) {
  // echo "New record created successfully";
  header("Location: $NextPage");

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<script type="text/javascript">
var php_var = "<?php echo $NextPage; ?>";
window.location.href = php_var;
</script>
