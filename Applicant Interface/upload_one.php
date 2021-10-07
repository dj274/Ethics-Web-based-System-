<?php
session_start();
require('../db.php');
// require('../Appliverify.php');

$ApplicationID = $_SESSION["ApplicationID"];
$username= $_SESSION["username"];

 $query = "select * from users where Username='$username'";
    $result =$conn->query($query);
     $row =$result->fetch_assoc();

$sql2 = "SELECT MAX(version) as max FROM Full_Section1_Overview WHERE ApplicationID=" . $ApplicationID;
$result2 = mysqli_query($conn, $sql2);
$row1 = mysqli_fetch_assoc($result2);
$max= $row1['max'];

$filedir =   'uploads/' .$username. '/' .$ApplicationID.'/'.$max;

if (isset($_POST['upload'])) {

    $fileCount = count($_FILES['files']['name']);
    
    $fileReName = $_POST['rename'];
    
    for ($i = 0; $i < $fileCount; $i++)
    {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmpName = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileError = $_FILES['files']['error'][$i];
        $fileType = $_FILES['files']['type'][$i];
        
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        
        $allowed = array('docx', 'txt', 'pdf');
        
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 100000000) {
                    $fileNameNew = $fileReName . '_' .$fileName;
                    $fileDestination = $filedir .'/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location:P21_Section12SupportingDocuments.php?uploadsucess");
                } else {
                    echo "Your file is to big!";
                }
            } else {
                echo "There is an error uploading your file!";
            }
        } else {
            echo "You cannot upload this file format!";
        }
    }
}
else if (isset($_POST['delete'])) {
    $files = glob($filedir . '/*'); // get all file names
    
    foreach($files as $file){ // iterate files
      if(is_file($file)) {
        unlink($file); // delete file
      }
    }

    header("Location: P21_Section12SupportingDocuments.php?deletesuccess");
}
?>