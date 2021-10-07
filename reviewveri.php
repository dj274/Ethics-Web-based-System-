<?php

if(isset($_SESSION['username'])){

    $useridcheck = $_SESSION['username'];
      $sql = "SELECT * FROM users WHERE Username='$useridcheck'";
            $result =$conn->query($sql);
            while($row =$result->fetch_assoc()){
                  if($row['Reviewer']==1){
                    $username= $_SESSION["username"];
                  }elseif($row['Admin']==1){
    
                    $username= $_REQUEST["username"];
    
    
                  }
                  else{
                      header("Location: ../Login Interface/Logout.php"); // Redirecting To Home Page
                  }
        }
    }
    else{
    header("Location: ../Login Interface/Logout.php"); // Redirecting To Home Page
    }
?>