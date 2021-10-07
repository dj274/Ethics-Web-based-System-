<?php

require("../db.php");



  if (isset($_REQUEST['Telephone'])){
      
     
    $Username = stripslashes($_REQUEST['Username']);

    $Username = mysqli_real_escape_string($conn,$Username);


    $Telephone = stripslashes($_REQUEST['Telephone']);

    $Telephone = mysqli_real_escape_string($conn,$Telephone);



    $Postcode = stripslashes($_REQUEST['Postcode']);

    $Postcode = mysqli_real_escape_string($conn,$Postcode);



    $Address = stripslashes($_REQUEST['FirstLineAddress']);

    $Address = mysqli_real_escape_string($conn,$Address);


    $Role = stripslashes($_REQUEST['Role']);

    $Role = mysqli_real_escape_string($conn,$Role);


          $query = "UPDATE users SET Telephone='$Telephone', Postcode='$Postcode', Address='$Address',
            Role= '$Role' WHERE Username = '$Username'";



        if (mysqli_query($conn, $query)) {
         "Record updated successfully";
    }


 else {
        "Error: " . $query . "<br>" . mysqli_error($conn);
    }
  }


?>

<script type="text/javascript">
window.location.href = '../Dashboard for all Users/Profile.php';

function myFunction() {
  var person = prompt("Record updated!");
}
</script>
