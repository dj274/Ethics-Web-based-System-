<?php
session_start();
require('../db.php');


if(isset($_SESSION['username']))
{
$useridcheck = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE Username='$useridcheck'";
$result =$conn->query($sql);
while($row =$result->fetch_assoc()){
if($row['Admin']==1){
$userid = $_SESSION['username'];
}
else{
header("Location: ../Login Interface/Logout.php"); // Redirecting To Home Page
}
}
}
else{
header("Location: ../Login Interface/Logout.php"); // Redirecting To Home Page
}

$username= $_SESSION["username"];
$sqla = "SELECT * FROM users WHERE Username='$username'";
$resulta = mysqli_query($conn, $sqla);
$row1 = mysqli_fetch_assoc($resulta);


  mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
  <head>
     
    <link rel="stylesheet"  href="../style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <script>
    document.addEventListener("DOMContentLoaded", () => {
        const rows = document.querySelectorAll("tr[data-href]");

        rows.forEach(row => {
            row.addEventListener("click", () =>{ 
                window.location.href = row.dataset.href;
            });
        });
    });
  </script>
  <title>
  Automatic Ethical Approval System : Profile
  </title>
  </head>
  <style> 
  </style>
  
  <body>
      
    </div>

      <div class="navbar">
        <div class="dropdown">
          <button class="dropbtn">
            <a href="#home">
              <i class="fa fa-user" class="fa fa-caret-down">&nbsp;</i>
              <i class="fa fa-caret-down"></i></a>
          </button>
          <div class="dropdown-content">
            <a href="../Login Interface/Logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
          </div>
        </div>
      </div>

      <div>
                <nav id="sidebar">
        <div class="title">
          <i class="fa fa-user" style="font-size:64px"></i><br>
              <a style="font-size: 25px"><?php echo $row1["FullName"];?> | <?php echo $row1["Username"];?></a>
        </div>
        <ul class="list-items">
            <li><a href="AdminDashboard.php"><i class="fas fa-home"></i>Home</a></li>
             <li><a href="AdminProfile.php"><i class="fas fa-id-badge"></i>Profile</a></li>
          <li><a href="Adding_user_to_the_system.php"><i class="fas fa-sticky-note"></i>Create an User</a></li>
        </ul>
      </nav>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div style="margin-left: 270px;">
                <form method="post" action="" style="text-align: center;">
                    <table class="profile">
              <tr>
                  <th></th>
                  <th style="text-align: center; vertical-align: middle;">Details</th>
              </tr>
        <tr>
        <td>Name</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["FullName"];?></td>
        </tr>
        
        <tr>
        <td>School/Department</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Department"];?></td>
        </tr>
        
        <tr>
        <td>Kent(ID) Email</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["KentEmail"];?></td>
        </tr>
        
        <tr>
        <td>Telephone</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Telephone"];?></td>
        </tr>
        
        <tr>
        <td>Postcode</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Postcode"];?></td>
        </tr>
        
        <tr>
        <td>Address</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["Address"];?></td>
        </tr>
        
        <tr>
        <td>Level of Study</td>
        <td style="text-align: center; vertical-align: middle;"><?php echo $row1["LevelOfStudy"];?></td>
        </tr>
      </table>
      </form>
      </form>
      </div>
  </body>

</html>


