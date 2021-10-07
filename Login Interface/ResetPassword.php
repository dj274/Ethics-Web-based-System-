
 <?php
session_start();
require("../db.php");


$selector = stripslashes($_GET['selector']); 

$selector = mysqli_real_escape_string($conn,$selector); 

$validator  = stripslashes($_GET['validator']); 

$validator = mysqli_real_escape_string($conn,$validator); 



if(empty($selector)|| empty($validator)){
	echo "Could not validate your request";

}else{
  
	if(ctype_xdigit($selector)!==false && ctype_xdigit($validator)!==false){
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
      height:50%;
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
    <form action= "reset-password.inc.php" method="post">
	<input type= "hidden"  name="selector" value="<?php echo $selector ;?>"  >
	<input type= "hidden"  name="validator" value="<?php echo $validator ;?>"  >



      <h1>Reset Your Password</h1>
      <div class="form-group">
	</div>
	<div class="form-group">
	  <label for="psw"><b>Create Password</b</label>
      <input type="password" class="form-control" title="(8-20 characters, at least 1 uppercase & lowercase character, at least 1 number)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" placeholder="E.g. Password123" name="password" required>
	</div>
	<div class="form-group">
	  <label for="psw"><b>Confirm Password</b</label>
	  <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}" placeholder="Confirm password" name="confirm_password" required>
      </div> 
      <br>
      <button type ="submit" name="resetbutton" class="btn" required>Reset</button>

      <br>
	<?php 
	if(isset($_GET["newpd"])){
		if($_GET["newpd"]=="passwordupdated"){
		echo '<p style="color: red;">Your Password has been reset!</p>';
		}else if($_GET["newpd"]=="empty"){
		echo '<p style="color: red;">Your Password is empty!</p>';
		}else if($_GET["newpd"]=="pwdnotsame"){
		echo '<p style="color: red;">Your Password is does not match!</p>';

		}

	}

	?>
        
        <br>
		
	</div>
	</form>
  </div>
</body>

<?php
}
}
?>