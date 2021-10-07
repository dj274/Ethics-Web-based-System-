<?php
require("../db.php");


$id = $_GET['id'];
$nextpage = urldecode($_GET['next']);
$id2=$_GET['id2'];
$ApplicationID=$_GET['id3'];

$sql = "DELETE FROM Section3_Declaration WHERE SupervisorName='$id'and ApplicationID='$ApplicationID'and version='$id2'";

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
