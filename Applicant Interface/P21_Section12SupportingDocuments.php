<?php

session_start();

require('../db.php');

require('../Appliverify.php');


if (isset($_SESSION['ApplicationID']))
{
    $ApplicationID = $_SESSION["ApplicationID"];
}


$sql2 = "SELECT MAX(version) as max FROM Full_Section1_Overview WHERE ApplicationID=" . $ApplicationID;
    $result2 = mysqli_query($conn, $sql2);
    $row1 = mysqli_fetch_assoc($result2);
    $max= $row1['max'];


$ApplicationID = $_SESSION['ApplicationID'];



if (isset($_REQUEST['username'])) {

  $username = $_REQUEST['username'];

}

else{

$username= $_SESSION["username"];

}

         $query = "select * from users where Username='$username'";

            $result =$conn->query($query);

             $row =$result->fetch_assoc();

             $user = $row['UserID'];



$filedir =   'uploads/' .$username. '/' .$ApplicationID. '/' .$max;

$otherfiledir = 'uploads/' .$username. '/' .$ApplicationID. '/' .$max .'/other';


if (!file_exists($filedir)) {

    mkdir($filedir, 0777, true);

}



if (!file_exists($otherfiledir)) {

    mkdir($otherfiledir, 0777, true);

}



$files = scandir($filedir);



$otherfiles = scandir($otherfiledir);





?>



<!DOCTYPE html>

<html>



<head>

<link rel="stylesheet" href="../style.css">

<script src="../scripts.js"></script>

<script src="../icons.js"></script>

        <script>

        var id = document.getElementById('trash');



    function myJsFunc(e) {

        e.stopPropagation();

        var nextpage = e.target.dataset.href;

        document.getElementById('trash').style.display='block';

        document.getElementById("nextButton").href = nextpage;

        console.log(nextpage);

    }

    </script>

<title>

Automatic Ethical Approval System: Section 12 Supporting Documents

</title>



</head>

<style>

.image-upload>input {

  display: none;

}

</style>

<body>

    <div class="navbar">

        <a data-href="../Login Interface/Logout.php" onclick='myJsFunc(event)'><i class="fas fa-save"></i>Save & Quit</a>

        <div class="dropdown">

             <button class="dropbtn">

                 <a href="#home">

                     <i class="fa fa-user" class="fa fa-caret-down"></i>

                     <i class="fa fa-caret-down"></i></a>

             </button>



        <div class="dropdown-content">

            <a data-href="../Login Interface/Logout.php" onclick='myJsFunc(event)'><i class="fas fa-sign-out-alt"></i>Logout</a>

        </div>

        </div>

        </div>



        <div class="MainContent">

        <nav id="sidebar">

        <div class="title">

          <i class="fa fa-user" style="font-size:64px"></i><br>

              <a style="font-size: 25px"><?php echo $row["FullName"];?> | <?php echo $row["Username"];?></a>

        </div>

        <ul class="list-items">

            <li><a data-href="../Dashboard for all Users/All_Users_Dashboard.php" onclick="myJsFunc(event)"><i class="fas fa-bars"></i>Main Menu</a></li>

            <li><a data-href="ApplicantDashboard.php" onclick="myJsFunc(event);"><i class="fas fa-home"></i>Home</a></li>

        </ul>

      </nav>

      <div style="width:100%;">



<h1><br>

Section 12: Supporting Documents

</h1>



<div style="text-align:center;margin-top:30px;">

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish"></span>

<span class="dash active finish"></span>

<span class="step active finish" ></span>

<span class="dash active finish"></span>

<span class="step active finish" ></span>

<span class="dash active"></span>

    <span class="step active" ></span>

</div>

   <div id="trash" class="delete">

            <div class="promptbox">

                <input type="hidden" id="appID">

                <input type="hidden" id="appID">

                <h1>Are you sure you want to quit this application?</h1>

                <br>

                <br>

                <div class="pageButtons">

                <a class="button" onclick="document.getElementById('trash').style.display='none'">No</a>

                <a class="button" onclick="document.getElementById('trash').style.display='none'" href="" id="nextButton">Yes</a>

            </div>

        </div>

    </div>

<div class="container">

    <p style="text-align: center; vertical-align: middle;">Please upload your research proposal, consent form & participant information sheet. Also any other documents which are relevant.</p><br>

    <hr>

    <br>

    <br>

    <table class="summary">

        <tr>

            <th style="text-align: center; vertical-align: middle; ">Documents Required</th>

            <th style="text-align: center; vertical-align: middle;">Choose & Upload Files</th>

            <th style="text-align: center; vertical-align: middle; width:350px;">File Name & Type</th>

        </tr>

        <tr>

            <td style="text-align: center; vertical-align: middle;">Research Proposal</td>

            <td style="text-align: center; vertical-align: middle; height:30px;">

               <div id="fileList">

                   <form action="upload_one.php" method="post" enctype="multipart/form-data" id="MyUploadForm">

                                           <div class="image-upload">

                        <label for="file">

                            <input type="file" name="files[]" id="file">

                        </label>

                    </div>

                        <input type="hidden" name="rename" value="Research Proposal" />

                        <button type="submit" name="upload" class="fas fa-file-upload"></button>

</form>



        </td>

        <td style="text-align: center; vertical-align: middle; height:30px; background-color:white;"><br>

                   <?php

                   for ($a = 2; $a < count($files); $a++)

                    {

                        if(strpos($files[$a], "Research Proposal") !== false){

                        ?>

                        <a style="display: block;" href="<?php echo $filedir . '/'. $files[$a]?>"><?php echo $files[$a]?></a>

                        <?php

                        }

                    }

                    ?>

        </td>

        </tr>

        <tr>

            <td style="text-align: center; vertical-align: middle;">Consent Form</td>

        <td style="text-align: center; vertical-align: middle; height:30px;">

               <div id="fileList">

                   <form action="upload_one.php" method="post" enctype="multipart/form-data" id="MyUploadForm">

                                           <div class="image-upload">

                        <label for="file">

                            <input type="file" name="files[]" id="file">

                        </label>

                    </div>

                        <input type="hidden" name="rename" value="Consent Form" />

                        <button type="submit" name="upload" class="fas fa-file-upload"></button>

</form>

        </td>

        <td style="text-align: center; vertical-align: middle; height:30px; background-color:white;"><br>

                   <?php

                   for ($a = 2; $a < count($files); $a++)

                    {

                        if (strpos($files[$a], "Consent Form") !== false)

                        {

                        ?>

                        <a style="display: block;" href="<?php echo  $filedir . '/'. $files[$a]?>"><?php echo $files[$a]?></a>

                        <?php

                        }

                    }

                    ?>

        </td>

        </tr>

        <tr>

            <td style="text-align: center; vertical-align: middle;">Participant Information Sheet</td>

        <td style="text-align: center; vertical-align: middle; height:30px;">

               <div id="fileList">

                   <form action="upload_one.php" method="post" enctype="multipart/form-data" id="MyUploadForm">

                   <div class="image-upload">

                        <label for="file">

                            <input type="file" name="files[]" id="file">

                        </label>

                    </div>

                        <input type="hidden" name="rename" value="PIS" />

                        <button type="submit" name="upload" class="fas fa-file-upload"></button>

</form>

        </td>

        <td style="text-align: center; vertical-align: middle; height:30px; background-color:white;"><br>

                   <?php

                   for ($a = 2; $a < count($files); $a++)

                    {

                        if (strpos($files[$a], "PIS") !== false)

                        {

                        ?>

                        <a style="display: block;" href="<?php echo  $filedir . '/'. $files[$a]?>"><?php echo $files[$a]?></a>

                        <?php

                        }

                    }

                    ?>

        </td>

        </tr>

        <tr>

        <td colspan="3" style="text-align: center; vertical-align: middle; height:30px;">Delete All Files Uploaded

            <br>

                <form action="upload_one.php" method="POST" enctype="multipart/form-data">

               <div id="fileList">

                   <button type="submit" name="delete" class="fas fa-trash-alt"></button>

                   </form>

        </td>

        </tr>

        </table>

        <br>

        <table class="summary">

        <tr>

            <th colspan="3" style="text-align: center; vertical-align: middle; height:30px;">Choose & Upload Relevant Documents</th>

        </tr>

        <tr>

        <td style="text-align: center; vertical-align: middle; height:30px;">

            <br>

                <form action="upload.php" method="POST" enctype="multipart/form-data">

            <div class="image-upload">

            <label for="file">

                <input type="file" multiple name="files[]" id="file">

            </label>

        </div>

               <div id="fileList">

                   <button type="submit" name="delete" class="fas fa-trash-alt"></button>

                   <button type="submit" name="upload" class="fas fa-file-upload"></button>

        </td>

        </tr>

        <tr>

                <td style="text-align: center; vertical-align: middle; height:30px; background-color:white;"><br>

                    <?php

                   for ($a = 2; $a < count($otherfiles); $a++)

                    {

                        ?>

                        <a style="display: block;" href="<?php echo  $otherfiledir . $otherfiles[$a]?>"><?php echo $otherfiles[$a]?></a>

                        <?php

                    }

                    ?>

        </td>

        </tr>



    </table>

    <br>

    <br>

    <div class="pageButtons">

        <a href="P20_Section11Declaration.php" class="button">Previous</a>

        <a href="Summary_With_FullApplication.php" class="button">Next</a>



</div>

</div>

</form>

</body>

</html>

