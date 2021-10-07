<?php
session_start();
require("../db.php");
$Emailerror="";
if(isset($_GET['error'])){
  $Emailerror = $_GET['error'];
}
?>
<html lang="en">
<head>
	
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Automatic Ethical Approval System: Reset your Password</title>

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
      height:35%;
      padding:20px;
      background: white;
      border-radius: 4px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3) ;
      border: 5px solid rgb(96, 155, 243) ;

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
      border: 1px solid silver ;
      margin: 10px 0 18px 0;
      padding: 0 10px;
      border: 1px solid rgb(96, 155, 243) ;

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
    <form action= "Mail.php" method="post">
      <h1>Reset Your Password</h1>
      <div class="form-group">
        <label for="Email Adress">Email Address</label>
        <input type="text" class="form-control" placeholder="eg ab123" name="email-address" required>
        <label for="Email Adress">By clicking "Reset Password" we will send a password reset link</label>
      </div> 
      <br>
      <button type ="submit" class="btn" required>Reset</button>
      <br>
      
        <a style="color: red;"><?php echo $Emailerror ;?></a>
        <br>
    </form>
  </div>
</body>

</html>

