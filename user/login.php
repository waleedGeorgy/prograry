<?php session_start(); 
	if($_POST['logusername'] && $_POST['logpassword'])
	{
		$logusername = $_POST['logusername'];
		$logpassword = $_POST['logpassword'];
		}
	?>
<html>
 <head>
  <meta charset="utf-8">
  <title>Prograry</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mycss.css">
  <script src="js/prefixfree.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
  <br><br>
  <div class="row">
   <div class="container-fluid" id="loginpanel">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
	 <?php 
		@mysql_connect('localhost','root','');
		mysql_select_db("softwarebrowser");
		
		if($logusername==$_POST['logusername'] && $logpassword==$_POST['logpassword']){
		 $_SESSION['logusername']= $logusername;
		 $_SESSION['logpassword']= $logpassword;
		 if(isset($_POST['login'])){
		 $sql = "SELECT * FROM user WHERE username='".$logusername."' AND password='".$logpassword."' LIMIT 1";
		 $res = mysql_query($sql);
		 if(mysql_num_rows($res) == 1){
		  echo "<h2> تمت عملية الدخول بنجاح </h2><hr>";
		  echo "<h3> Welcome ". $logusername . "</h3><hr>";
		  echo "<ul type=none>";
		  echo "<li><a href='logout.php'>تسجيل الخروج</a><li><br>";
		  echo "<li><a href='../login/index1.php'>الرجوع إلى الرئيسية</a></li><br>";
		  echo "<li><a href='../login/prog.php'>الانتقال إلى صفحة البرامج</a></li><br>";
		  echo"</ul>";
		  exit();
		  }
		 else {
		  echo "خطأ في اسم المستخدم أو كلمة المرور <hr>";
		  echo "<a href='log.php'> الرجوع </a>";
		  exit();
			}
		}}
	 ?>
    </div>
   </div>
  </div>
 </body>
</html>