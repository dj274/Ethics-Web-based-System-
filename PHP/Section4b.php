<?php

session_start();

require('../db.php');

$NextPage = $_POST['nextpage'];

$ApplicationID = $_SESSION["ApplicationID"];



  $Bq1 = $_REQUEST['Bq1'];

  $Bq2 = $_REQUEST['Bq2'];

  $Bq3 = $_REQUEST['Bq3'];

  $Bq4 = $_REQUEST['Bq4'];

  $Bq5 = $_REQUEST['Bq5'];

  $Bq6 = $_REQUEST['Bq6'];

  $Bq7 = $_REQUEST['Bq7'];

  $Bq8 = $_REQUEST['Bq8'];

  $Bq9 = $_REQUEST['Bq9'];

  $Bq10 = $_REQUEST['Bq10'];

  $Bq11 = $_REQUEST['Bq11'];

  $Bq12 = $_REQUEST['Bq12'];

  $Bq13 = $_REQUEST['Bq13'];

  $Bq14 = $_REQUEST['Bq14'];

  $Bq15 = $_REQUEST['Bq15'];

  $Bq16 = $_REQUEST['Bq16'];

  $Bq17 = $_REQUEST['Bq17'];

  $Bq18 = $_REQUEST['Bq18'];

  $Bq19 = $_REQUEST['Bq19'];





$maxversion= "SELECT MAX(version) as max FROM Section4_ResearchChecklist_PartB WHERE ApplicationID='$ApplicationID'";

$maxresult = mysqli_query($conn,$maxversion);

$row2 = mysqli_fetch_assoc($maxresult);

$max =  $row2['max'] ;

echo "version ".$max; 





$sqlexist= "SELECT * FROM Section4_ResearchChecklist_PartB WHERE ApplicationID='$ApplicationID'";

if (mysqli_query($conn, $sqlexist)) {

    $result = mysqli_query($conn, $sqlexist);

    $row = mysqli_num_rows($result);

    if($row)

    {





      $sql = "UPDATE Section4_ResearchChecklist_PartB  SET Q1 = '$Bq1', Q2= '$Bq2', Q3 = '$Bq3', Q4= '$Bq4', Q5 = '$Bq5', Q6= '$Bq6', Q7 = '$Bq7', Q8= '$Bq8', Q9 = '$Bq9', Q10 = '$Bq10', Q11= '$Bq11', Q12 = '$Bq12', Q13= '$Bq13', Q14 = '$Bq14', Q15= '$Bq15', Q16 = '$Bq16', Q17= '$Bq17', Q18 = '$Bq18', Q19 = '$Bq19' WHERE ApplicationID='$ApplicationID' AND version ='$max'";



                    if (mysqli_query($conn, $sql)) {

              echo "Record updated successfully";
              header("Location: $NextPage");


          } else {

             echo "Error: " . $sqlexist . "<br>" . mysqli_error($conn);

          }

    }

    

    else

    {



    $sql = "INSERT INTO Section4_ResearchChecklist_PartB (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`,`Q19`,ApplicationID, version) VALUES ('$Bq1', '$Bq2', '$Bq3', '$Bq4', '$Bq5', '$Bq6', '$Bq7', '$Bq8', '$Bq9','$Bq10', '$Bq11', '$Bq12', '$Bq13', '$Bq14', '$Bq15', '$Bq16', '$Bq17', '$Bq18','$Bq19','$ApplicationID', '1')";



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















































































// $ApplicationID = $_SESSION["ApplicationID"];

// echo $ApplicationID;



// if(isset($_POST['Bq1']))

// {

//   $Bq1 = $_REQUEST['Bq1'];

//   $Bq2 = $_REQUEST['Bq2'];

//   $Bq3 = $_REQUEST['Bq3'];

//   $Bq4 = $_REQUEST['Bq4'];

//   $Bq5 = $_REQUEST['Bq5'];

//   $Bq6 = $_REQUEST['Bq6'];

//   $Bq7 = $_REQUEST['Bq7'];

//   $Bq8 = $_REQUEST['Bq8'];

//   $Bq9 = $_REQUEST['Bq9'];

//   $Bq10 = $_REQUEST['Bq10'];

//   $Bq11 = $_REQUEST['Bq11'];

//   $Bq12 = $_REQUEST['Bq12'];

//   $Bq13 = $_REQUEST['Bq13'];

//   $Bq14 = $_REQUEST['Bq14'];

//   $Bq15 = $_REQUEST['Bq15'];

//   $Bq16 = $_REQUEST['Bq16'];

//   $Bq17 = $_REQUEST['Bq17'];

//   $Bq18 = $_REQUEST['Bq18'];

//   $Bq19 = $_REQUEST['Bq19'];





//     $sql = "INSERT INTO Section4_ResearchChecklist_PartB (`Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`,`Q19`,ApplicationID) VALUES ('$Bq1', '$Bq2', '$Bq3', '$Bq4', '$Bq5', '$Bq6', '$Bq7', '$Bq8', '$Bq9','$Bq10', '$Bq11', '$Bq12', '$Bq13', '$Bq14', '$Bq15', '$Bq16', '$Bq17', '$Bq18','$Bq19','$ApplicationID')";



// if (mysqli_query($conn, $sql)) {

//   echo "New record created successfully";

// } else {

//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);

// }

// }



// mysqli_close($conn);





?>

<script type="text/javascript">

var php_var = "<?php echo $NextPage; ?>";

window.location.href = php_var;

</script>