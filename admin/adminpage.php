<?php session_start();
 if($_SESSION['name'] && $_SESSION['password'])
	{
		$adminname = $_SESSION['name'];
		$adminpass = $_SESSION['password'];
		}
?>
<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <title>Prograry</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mycss.css">
  <script src="js/prefixfree.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
		<!-- Main Container -->
 <br><br><br>
 <div id="maincont" class="container-fluid">
  <div id="adminpage">
   <div class="row">
    <h2> أهلا بك : <?php echo $_SESSION['name']; ?></h2>
   </div><hr>
   <div class="row">
    <p>يمكنك القيام بتعديلات على قاعدة البيانات من هنا</p><hr>
   </div>
   <div class="row">
    <p><a href="../index.php">الرجوع إلى الأساسية</a></p>
	<p><a href="adminlogout.php">تسجيل الخروج</a></p><hr>
   </div>
   <div class="row table table-condensed table-responsive table-hover">
     <?php require("adminops.php"); ?>
   </div>
  </div>
 </div><br><br>
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
  
</body>
  
</html>