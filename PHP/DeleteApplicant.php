<?php

session_start();
require("../db.php");

$id = stripslashes($_GET['id']);
$id = mysqli_real_escape_string($conn,$id);
$next = stripslashes($_GET['next']);
$next = mysqli_real_escape_string($conn,$next);
$max = stripslashes($_GET['version']);
$max = mysqli_real_escape_string($conn,$max);

$nextpage = urldecode($next);

 $ApplicationID = $_SESSION["ApplicationID"];


$sql = "DELETE FROM LinkingApplicationToApplicant WHERE UserID=" . $id . " AND version=" . $max . " AND ApplicationID=". $ApplicationID;

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<script type="text/javascript">
window.location.href = "../" + "<?php echo $nextpage ?>";
</script>
