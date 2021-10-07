<?php

session_start();

require('../db.php');

$NextPage = $_POST['nextpage'];

$ApplicationID = $_SESSION["ApplicationID"];

$Cq1 = $_REQUEST['Cq1'];



$maxversion= "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartC WHERE ApplicationID='$ApplicationID'";

$maxresult = mysqli_query($conn,$maxversion);

$row2 = mysqli_fetch_assoc($maxresult);

$max =  $row2['max'] ;



$sqlexist= "SELECT * FROM Section4_ResearchChecklist_PartC WHERE ApplicationID='$ApplicationID'";

if (mysqli_query($conn, $sqlexist)) {

    $result = mysqli_query($conn, $sqlexist);

    $row = mysqli_num_rows($result);

    if($row)

    {





        $sql = "UPDATE Section4_ResearchChecklist_PartC  SET Q1 = '$Cq1' WHERE ApplicationID='$ApplicationID' AND version ='$max'";



                    if (mysqli_query($conn, $sql)) {

              echo "Record updated successfully";
              header("Location: $NextPage");


          } else {

             echo "Error: " . $sqlexist . "<br>" . mysqli_error($conn);

          }

    }

    

    else

    {



    $sql = "INSERT INTO Section4_ResearchChecklist_PartC (`Q1`, `ApplicationID`, `version`) VALUES ('$Cq1', '$ApplicationID', '1')";



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

var php_var = "<?php echo $NextPage; ?>";

window.location.href = php_var;

</script>