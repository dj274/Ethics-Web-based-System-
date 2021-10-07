<?php

session_start();
require("../db.php");




if (isset($_POST['Username']) && !empty($_POST['Username'])) {
$Username = $_POST['Username'];
}
else
{
  $Username = $_POST['Username1'];

}

$sql = "SELECT * FROM users WHERE Username='". $Username ."'";

if (mysqli_query($conn, $sql)) {
      $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($result)) {
        $_SESSION["SearchUserRow"] = $row;
        }

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header("Location: ../Applicant Interface/P3_Section2ApplicantDetails.php");

?>
