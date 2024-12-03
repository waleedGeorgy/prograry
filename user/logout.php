<?php session_start();
 
if(($_SESSION['logusername'] || $_SESSION['logpassword']) || die (mysql_error()))
 {
  session_destroy();
  header("location:log.php?notify=تم تسجيل الخروج.");
 }

?>