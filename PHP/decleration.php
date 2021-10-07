<?php

session_start();
require('../db.php');
$NextPage = $_POST['nextpage'];



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


$sqlexist= "SELECT * FROM Section3_Declaration WHERE ApplicationID='$ApplicationID'";
if (mysqli_query($conn, $sqlexist)) {
    $result = mysqli_query($conn, $sqlexist);
    $row = mysqli_num_rows($result);
    
    if($row){

    }
    else{
        
$sql = "INSERT INTO Section3_Declaration (Q1, SupervisorName, SupervisorEmail, ApplicationID,version)
VALUES ('$dec', '-', '-', $ApplicationID,'$max')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


    }
}





?>
<script type="text/javascript">
var php_var = "<?php echo "../Applicant Interface/P5_Section4_PartA.php"; ?>";
window.location.href = php_var;
</script>
