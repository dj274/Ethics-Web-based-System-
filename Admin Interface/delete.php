<?php
session_start();


require('../db.php');
if(isset($_GET['cid'])){
   $id= $_GET['cid'];
   $query2 = "DELETE FROM LinkingApplicationToApplicant WHERE UserID=$id";
    $result2 = mysqli_query($conn, $query2);
   $query1 = "DELETE FROM Roles WHERE UserID=$id";
    $result1 = mysqli_query($conn, $query1);

    $query = "DELETE FROM users WHERE UserID=$id";
    $result = mysqli_query($conn, $query);
       if($result){
                header("Location: AdminDashboard.php");
        }}

if(isset($_POST['edit'])){
    echo "edited";
}
?>