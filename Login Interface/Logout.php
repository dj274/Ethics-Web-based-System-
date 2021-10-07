<?php



session_start();

session_unset();

if(session_destroy()||session_unset()) // Destroying All Sessions

{

header("Location: Login.php"); // Redirecting To Home Page

}

?>