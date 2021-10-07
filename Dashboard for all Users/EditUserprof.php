<?php

session_start();

require('../db.php');

   if (isset($_REQUEST['username'])) {

  $username = $_REQUEST ["username"];

  $query = "select * from users where Username='$username'";

     $result =$conn->query($query);

      $row =$result->fetch_assoc();

      $user = $row['UserID'];

}

else{

$username= $_SESSION["username"];

}

         $query = "select * from users where Username='$username'";

            $result =$conn->query($query);

             $row1 =$result->fetch_assoc();

             $user = $row1['UserID'];

             if (isset($_REQUEST['username'])) {
              $username = $_REQUEST ["username"];
              $query = "select * from users where Username='$username'";
                 $result =$conn->query($query);
                  $row =$result->fetch_assoc();
                  $user = $row['UserID'];
                  if($row['Applicant']==1){
                    $Applicant =$row['Applicant']; }
                    if($row['Admin']==1){
                    $Admin =$row['Admin']; }
                    if($row['EthicsComittee']==1){
                    $Ethicscommittee =$row['EthicsComittee']; }
                    if($row['Reviewer']==1){
                    $reviewer =$row['Reviewer'];  }
            }
            else{
            $username= $_SESSION["username"];
            }
                     $query = "select * from users where Username='$username'";
                        $result =$conn->query($query);
                         $row =$result->fetch_assoc();
                         $user = $row['UserID'];
                         if($row['Applicant']==1){
                          $Applicant =$row['Applicant']; }
                          if($row['Admin']==1){
                          $Admin =$row['Admin']; }
                          if($row['EthicsComittee']==1){
                          $Ethicscommittee =$row['EthicsComittee']; }
                          if($row['Reviewer']==1){
                          $reviewer =$row['Reviewer'];  }



?> 

    

    <!DOCTYPE html>

    <html>

    <head>

      <link rel="stylesheet"  href="../style.css">

      <script src="../icons.js"></script>

      <script></script>

      <title>

        

        Automatic Ethical Approval System: Edit Profile

        

      </title>

    </head>

    <style></style>

    <body>

    </div>

    <div class="navbar">

      <div class="dropdown">

        <button class="dropbtn">

          <a href="#home">

            <i class="fa fa-user" class="fa fa-caret-down">&nbsp;</i>

            <i class="fa fa-caret-down"></i>

          </a>

        </button>

        <div class="dropdown-content">

          <a href="../Login Interface/Logout.php">

            <i class="fas fa-sign-out-alt"></i>Logout

          </a>

        </div>

      </div>

    </div>

    <div class="MainContent">

      <nav id="sidebar">

        <div class="title">

          <i class="fa fa-user" style="font-size:64px"></i>

          <br>

          <a style="font-size: 25px"><?php echo $row["FullName"];?> | <?php echo $row["Username"];?></a>

        </div>

        <ul class="list-items">

          <li>

            <a href="All_Users_Dashboard.php">

              <i class="fas fa-bars"></i>Main Menu
              

            </a>

          </li>
          <li><a href="Profile.php"><i class="fas fa-id-badge"></i>Profile</a></li>
          <?php if(isset($Admin)){ ?>
            <li><a href="../Admin Interface/AdminDashboard.php"><i class="fas fa-tachometer-alt"></i>Admin Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($Applicant)){ ?>
            <li><a href="../Applicant Interface/ApplicantDashboard.php"><i class="fas fa-tachometer-alt"></i>Applicant Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($reviewer)){ ?>
            <li><a href="../Reviewer Interface/ReviewerDashboard.php"><i class="fas fa-tachometer-alt"></i>Reviewer Dashboard</a></li>
            <?php } else{} ?>
            <?php if(isset($Ethicscommittee)){ ?>
            <li><a href="../Ethics Commitee Interface/Page1_EthicsCommitee_Dashboard.php"><i class="fas fa-tachometer-alt"></i>Ethics Dashboard</a></li>
            <?php } else{} ?>

          <!--<li>-->

          <!--	<a href="AdminProfile.php">-->

          <!--		<i class="fas fa-id-badge"></i>Profile-->

          <!--	</a>-->

          <!--</li>-->

          <!--<li>-->

          <!--  <a href="Adding_user_to_the_system.php">-->

          <!--    <i class="fas fa-sticky-note"></i>Create an User-->

          <!--  </a>-->

          <!--</li>-->

        </ul>

      </nav>

      <div style="margin: auto; margin-top: 40px;">
    <form action= "EdUserprof.php" method="post" >

      <div class="CreatingUser">

        <label for="uname">

          <b>Full Name</b>

          </label>

          <input type= "text" placeholder="Full Name" name="FullName" disabled="true" value="<?php echo $row1["FullName"];?>" required readonly>

            <label for="Department">

                <b>Department</b>

                </label>

                <select id="Department" name="Department" disabled="true" required >

                  <option value="<?php echo $row1["Department"];?>"><?php echo $row1["Department"];?></option>

                  <option value="Computing">Computing</option>

                  <option value="Economics">Economics</option>

                  <option value="Business">Business</option>

                  <option value="Arts">Arts</option>

                </select>

                         <label for="uname">

            <b>Kent(ID) Email</b>

            </label>

            <input type= "text" placeholder="ab123@kent.ac.uk" name="Email" disabled="true" value="<?php echo $row1["KentEmail"];?>" required readonly>

            <label for="uname">

              <b>Telephone</b>

              </label>

              <input type= "text" placeholder="Phone no.." name="Telephone" value="<?php echo $row1["Telephone"];?>" required>

              <label for="uname">

                <b>Postcode</b>

                </label>

                <input type= "text" placeholder="Postcode.." name="Postcode" value="<?php echo $row1["Postcode"];?>" required>

                <label for="uname">

                  <b>First Line Address</b>

                  </label>

                  <input type= "text" placeholder="First line address.." name="FirstLineAddress" value="<?php echo $row1["Address"];?>" required>

                  

                  

                  

                  <label for="Role">

                    <b> Default Role </b>

                  </label>

                  <select id="Department" name="Role" required>

                    <option value="<?php echo $row1["Role"];?>"><?php echo $row1["Role"];?></option>

                    <option value="Applicant">Applicant</option>

                    <option value="Ethics Committee">Ethics Commitee</option>

                    <option value="Reviewer">Reviewer</option>

                    <option value="Admin">Admin</option>

                  </select>

                  <input type= "hidden" name="Username" value="<?php echo $row1["Username"];?>">



                  <div class = "pageButtons">
                  <button onclick="" type="submit" class="nextbtn1">Confirm</button>
                  </div>
                </div>

              </div>

            </form>
</div>

      </div>

    <?php

    require('../db.php');

    $username = $_REQUEST['username'];

    

    $sql1 = "SELECT * FROM users where Username ='$username' ";

    $resultu = mysqli_query($conn, $sql1);

    $row1 = mysqli_fetch_assoc($resultu);

    mysqli_close($conn);

    

    ?>

  

          </body>

    </html>