<?php

session_start();
require('../db.php');
$NextPage = $_POST['nextpage'];


$SupervisorName = $_POST['SupervisorName'];
$SupervisorEmail = $_POST['SupervisorEmail'];
$ApplicationID = $_SESSION["ApplicationID"];

$dec = 'no';



if (isset($_REQUEST['Terms'])) {
    $dec=$_POST['Terms'];
}

echo $dec;

$sql4 = "SELECT MAX(version) as max FROM LinkingApplicationToApplicant b WHERE b.ApplicationID='$ApplicationID'";
$result2 = mysqli_query($conn, $sql4); 
$row1 = mysqli_fetch_assoc($result2);
$max= $row1['max'];

$sql = "INSERT INTO Section3_Declaration (Q1, SupervisorName, SupervisorEmail, ApplicationID,version)
VALUES ('$dec', '$SupervisorName', '$SupervisorEmail', $ApplicationID,'$max')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<script type="text/javascript">
var php_var = "<?php echo $NextPage; ?>";
window.location.href = php_var;
</script>

