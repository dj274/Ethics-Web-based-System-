<?php
session_start();
require('../db.php');
$NextPage = $_POST['nextpage'];
$ApplicationID = $_SESSION["ApplicationID"];

if(isset($_POST['q1'])){
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
if($_POST['q5part1']=="Yes"){
$q5 = $_POST['q5part1'] . ' ' . $_POST['q5part2'];
}else{
$q5 = $_POST['q5part1'];}
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
if($_POST['q9part1']=="Yes"){
    
$q9 = $_POST['q9part1'] . ' ' . $_POST['q9part2'];
}else {
$q9 = $_POST['q5part1'];}



$maxversion= "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartD WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
$row2 = mysqli_fetch_assoc($maxresult);
$max =  $row2['max'] ;

$sql = "SELECT * from  Full_Section2_Risk_and_ethical_issues WHERE ApplicationID='$ApplicationID'";

if (mysqli_query($conn, $sql)) {
          $result = mysqli_query($conn, $sql);
     $row = mysqli_num_rows($result); 
     if ($row)
     {
         $maxversion= "SELECT MAX(version) as max FROM Full_Section2_Risk_and_ethical_issues WHERE ApplicationID='$ApplicationID'";
         $maxresult = mysqli_query($conn,$maxversion);
         $row2 = mysqli_fetch_assoc($maxresult);
         $max =  $row2['max'];
         $sql = "UPDATE  Full_Section2_Risk_and_ethical_issues SET Q1 = '$q1',Q2 = '$q2',Q3 = '$q3',Q4 = '$q4',Q5 = '$q5',Q6 = '$q6',Q7 = '$q7',Q8 = '$q8',Q9 = '$q9' WHERE ApplicationID='$ApplicationID' AND version = '$max'";
         
         if (mysqli_query($conn, $sql)) {
              
                echo "Updated record";
                header("Location: $NextPage");
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
            mysqli_close($conn);
     }
     else
     {
        $sql = "INSERT INTO Full_Section2_Risk_and_ethical_issues (Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, ApplicationID, version)
        VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', $ApplicationID, '$max')";    
            $result3 = mysqli_query($conn,$sql);
              if($result3){
                echo "Inserted record";
                header("Location: $NextPage");
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