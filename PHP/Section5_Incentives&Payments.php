<?php
session_start();
require('../db.php');
$NextPage = $_POST['nextpage'];
$ApplicationID = $_SESSION["ApplicationID"];

if(isset($_POST['q1part1'])){
    if($_POST['q1part1']=='Yes'){
$q1 = $_POST['q1part1'] . ' ' . $_POST['q1part2'];
}else{
    $q1 = $_POST['q1part1'];
}
if($_POST['q2part1']=='Yes'){
$q2 = $_POST['q2part1'] . ' ' . $_POST['q2part2'];
}else
{   $q2 = $_POST['q2part1'];
}
if($_POST['q3part1']=='Yes'){
$q3 = $_POST['q3part1'] . ' ' . $_POST['q3part2'];
}else{$q3 = $_POST['q3part1'];}


$maxversion= "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartD WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
$row2 = mysqli_fetch_assoc($maxresult);
$max =  $row2['max'] ;

$sql = "SELECT * from  Full_Section5_Incentives_and_payments WHERE ApplicationID='$ApplicationID'";


if (mysqli_query($conn, $sql)) {
          $result = mysqli_query($conn, $sql);
     $row = mysqli_num_rows($result); 
     if ($row)
     {
         $maxversion= "SELECT MAX(version) as max FROM Full_Section5_Incentives_and_payments WHERE ApplicationID='$ApplicationID'";
        $maxresult = mysqli_query($conn,$maxversion);
        $row2 = mysqli_fetch_assoc($maxresult);
        $max =  $row2['max'];

         $sql = "UPDATE  Full_Section5_Incentives_and_payments SET Q1 = '$q1',Q2 = '$q2',Q3 = '$q3' WHERE ApplicationID='$ApplicationID' AND version = '$max'";
         
         if (mysqli_query($conn, $sql)) {
              // echo "Updated record";        
              header("Location: $NextPage"); 
             } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
            mysqli_close($conn);
     }
     else
     {
      $sql = "INSERT INTO Full_Section5_Incentives_and_payments(Q1, Q2, Q3, ApplicationID, version)
        VALUES ('$q1', '$q2', '$q3',$ApplicationID, '$max')";
            $result = mysqli_query($conn,$sql);
              if($result){
                header("Location: $NextPage");
                    // echo "Inserted record";
                          } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
     }

}
}

?>

<script type="text/javascript">
// var php_var = "<?php echo $NextPage; ?>";
// window.location.href = php_var;
</script>