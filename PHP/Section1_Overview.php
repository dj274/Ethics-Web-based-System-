<?php
session_start();
require('../db.php');
$NextPage = $_POST['nextpage'];
$ApplicationID = $_SESSION["ApplicationID"];
$Q1 = $_REQUEST['Q1'];

$maxversion= "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartD WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
$row2 = mysqli_fetch_assoc($maxresult);
$max =  $row2['max'] ;

$sqlexist= "SELECT * FROM Full_Section1_Overview WHERE ApplicationID='$ApplicationID'";
if (mysqli_query($conn, $sqlexist)) {
    $result = mysqli_query($conn, $sqlexist);
    $row = mysqli_num_rows($result);
    if($row)
    {
        $maxversion= "SELECT MAX(version) as max FROM Full_Section1_Overview WHERE ApplicationID='$ApplicationID'";
        $maxresult = mysqli_query($conn,$maxversion);
        $row2 = mysqli_fetch_assoc($maxresult);
        $max =  $row2['max'] ;


        $sql = "UPDATE Full_Section1_Overview  SET Q1 = '$Q1' WHERE ApplicationID='$ApplicationID' AND version = '$max'";

                    if (mysqli_query($conn, $sql)) {
              echo "Record updated successfully";
              header("Location: $NextPage");

          } else {
             echo "Error: " . $sqlexist . "<br>" . mysqli_error($conn);
          }
    }
    
    else
    {

    $sql ="INSERT INTO Full_Section1_Overview (`Q1`,ApplicationID, version) VALUES ('$Q1','$ApplicationID', '$max')";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully" ;
    header("Location: $NextPage");
    } 
    else
    {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
    }
        mysqli_close($conn);


?>

<script type="text/javascript">
// var php_var = "<?php echo $NextPage; ?>";
// window.location.href = php_var;
</script>

