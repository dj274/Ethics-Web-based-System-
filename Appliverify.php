<?php
// session_start();
if(isset($_SESSION['username']))
{
$useridcheck = $_SESSION['username'];

  $sql = "SELECT * FROM users WHERE Username='$useridcheck'";
        $result =$conn->query($sql);
        while($row =$result->fetch_assoc()){
           
             $userid = $_SESSION['username'];
    }

}
else{
header("Location:../Login Interface/Logout.php"); // Redirecting To Home Page
}
?>