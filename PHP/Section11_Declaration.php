<?php
session_start();
require('../db.php');
$NextPage = $_POST['nextpage'];
$ApplicationID = $_SESSION["ApplicationID"];


$maxversion= "SELECT MAX(version) as max FROM Full_Section1_Overview WHERE ApplicationID='$ApplicationID'";
$maxresult = mysqli_query($conn,$maxversion);
$row2 = mysqli_fetch_assoc($maxresult);
$max =  $row2['max'] ;


if(isset($_POST['Terms'])){
    $q1= $_POST['Terms'];
    $sql = "SELECT * from  Full_Section11_Declaration WHERE ApplicationID='$ApplicationID'";
    if (mysqli_query($conn, $sql)) {
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result); 
    if ($row)
    {
        $maxversion= "SELECT MAX(version) as max FROM Full_Section1_Overview WHERE ApplicationID='$ApplicationID'";
        $maxresult = mysqli_query($conn,$maxversion);
        $row2 = mysqli_fetch_assoc($maxresult);
        $max =  $row2['max'];
        
        $sql = "UPDATE  Full_Section11_Declaration SET Q1 = '$q1' WHERE ApplicationID='$ApplicationID' and version='$max'";
        if (mysqli_query($conn, $sql)) {
            header("Location: $NextPage");
        echo "Updated record";           
    } 
    }
    else
    {
        $sql = "INSERT INTO Full_Section11_Declaration(Q1, ApplicationID,version) VALUES ('$q1', $ApplicationID,'$max')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: $NextPage");
        echo "Inserted record"; } 
    }
    
    }

mysqli_close($conn);
}
?>

<script type="text/javascript">
// var php_var = "<?php echo $NextPage; ?>";
// window.location.href = php_var;
</script>