<?php

$servername = "dragon.kent.ac.uk";

$username = "co600_c27";

$password = "f1urnli";

$database = "co600_c27";





// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);



// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
else
{

   "connected!!";

}



?>
