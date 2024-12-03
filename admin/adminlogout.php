<?php session_start();

if($_SESSION['name'] || $_SESSION['password'])
 {
  session_destroy();
  header("location:admin.php?notify=تم تسجيل الخروج.");
 }

?>