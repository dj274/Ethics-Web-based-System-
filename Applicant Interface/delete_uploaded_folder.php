<?php
session_start();
require('../db.php');
$ApplicationID = $_SESSION["ApplicationID"];

    $path = "uploads/$ApplicationID";
    $files = glob($path . '/*'); // get all file names
    
    foreach($files as $file){ // iterate files
      if(is_file($file)) {
        unlink($file); // delete file
      }
    }

    header("Location: P21_Section12SupportingDocuments.php?deletesuccess");
?>

