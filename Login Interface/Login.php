<?php
session_start();
require("../db.php");
if(isset($_SESSION['username'])){
   
  header("Location: ../Dashboard for all Users/All_Users_Dashboard.php");
}

$error = "";

if(isset($_SESSION['Error']))
{
  $error = $_SESSION['Error'];
}elseif(isset($_GET['update'])){
  $error =$_GET['update'];
}

?>
<html lang="en">
<head>
	
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Automatic Ethical Approval System: Login Page</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;

    }
    body{
      min-height: 100vh;
      background:#eee;
      display:flex;
      font-family: sans-serfi;
    }

    .container{
      margin:auto;
      width:500px;
      max-width: 90%;
    }
    
    .container form{
      width: 100%;
      height:55%;
      padding:20px;
      background: white;
      border-radius: 4px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3) ;
      border: 5px solid rgb(96, 155, 243) ;
      border-radius: 20px;
    }
    .container form h1{
      text-align: center;
      margin-bottom: 24px;
      color: #222;
    }
    .container form .form-control{
      width:100%;
      height:40px;
      background:white;
      border-radius: 4px;
      border: 1px solid rgb(96, 155, 243) ;
      margin: 10px 0 18px 0;
      padding: 0 10px;

    }
    .container form .btn{
      margin-left: 50%;
      transform: translateX(-50%);
      width: 120px;
      height: 34px;
      border: none;
      outline: none;
      cursor: pointer;
      font-size: 16px;
      text-transform: uppercase;
      background-color: rgb(96, 155, 243);
      border-radius: 20px;
      transition: .3s;
      
    }
    
    .container form .btn:hover{
      opacity : .7;
      background-color: rgb(77, 224, 102);
    }
  </style>
</head>

<body>
  
  <div class="container">
    <form action= "../PHP/LoginUser.php" method="post">
      <h1>Login</h1>
      <div class="form-group">
        <label for="Username">Username</label>
        <input type="text" class="form-control" placeholder="eg ab123" name="username" required>
      </div> 
      <div class="form-group">
        <label for ="password"> Password</label>
        <input type= "password" placeholder="Enter password" name="password" class="form-control" required>
        <span class=""><a href="forgot.php">I've forgotten my password</a></span>
      </div>
      <br>

      <button type ="submit" class="btn" required>Login</button>
      <div style="text-align: center;">
      <br>
        <a style="color: red;"><?php echo $error ?></a>
        </div>
    </form>
  </div>
</body>
</html>

