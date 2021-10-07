<?php
require("../db.php");

$id = $_POST['delete_data'];
$nextpage = urldecode($_POST['next']);



$sql = "DELETE FROM Full_Section1_Overview WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section2_Risk_and_ethical_issues WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section3_Recruitment_and_informed_consent WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section4_Confidentiality WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section5_Incentives_and_payments WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section6_Publications_and_dissemination WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section7_Management_of_the_research WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section8_Insurance_Indemnity WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section9_Children WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section10_Participants_unable_to_consent_for_themselves WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section11_Declaration WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Full_Section_Reviewed_Applications WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Section3_Declaration WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Section4_ResearchChecklist_PartA WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Section4_ResearchChecklist_PartB WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Section4_ResearchChecklist_PartC WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Section4_ResearchChecklist_PartD WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM LinkingApplicationToApplicant WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM LinkingApplicationToReviewer WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

$sql = "DELETE FROM Section1_Project_Details WHERE ApplicationID=" . $id;

mysqli_query($conn, $sql);

mysqli_close($conn);

?>
<script type="text/javascript">
window.location.href = "../" + "<?php echo $nextpage ?>";
</script>
