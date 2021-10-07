<?php
require("../db.php");


$tableName  = 'Full_Section1_Overview';
$backupFile = '../Admin Interface/backup/Full_Section1_Overview.sql';
$query      = "SELECT * FROM $tableName INTO OUTFILE '$backupFile' ";
// SELECT * FROM data INTO OUTFILE 'data.csv';
        if (mysqli_query($conn, $query)) {

         echo "file saved";

    }

 else {

      echo  "Error: " . $query . "<br>" . mysqli_error($conn);

    }

?> 