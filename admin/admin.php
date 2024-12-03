<!DOCTYPE html>
<html dir="rtl">

<head>
  <meta charset="UTF-8">
  <title>Prograry</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mycss.css">
  <script src="js/prefixfree.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript">
		function validateForm()
		{
		 var x=document.forms["myForm"]["name"].value;
		 var y=document.forms["myForm"]["password"].value;
		 if ((x==null || x=="") || (y==null || y==''))
		 {
		  alert("يجب إدخال اسم المدير و كلمة السر");
		  return false;
		  }
		}
   </script>
   
</head>

<body><br><br>
 <div class="container-fluid" id="adminlogin">
  <div class="row">
    <h3> تسجيل دخول Administrator </h3><hr>
    <form action="admincheck.php" method="post" class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-6 col-xs-offset-1" name="myForm" onsubmit="return validateForm()">
	 <p><input type="text" name="name" placeholder="Name"></p>
	 <p><input type="password" name="password" placeholder="Password"></p><br>
	 <h4><input type="submit" name="submit" value="تسجيل الدخول" class="btn btn-info" id="adminbtn"></h4>
	</form>
   </div><hr>
   <div class="row">
    <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-6 col-xs-offset-1">
	 <a href="../index.php" style="margin-right:2em"> الرجوع إلى الأساسية </a><br>
	 <a href="../user/sign.php" style="margin-right:1.2em"> تسجيل الدخول كمستخدم </a>
	</div>
  </div>
 </div>
</body>

</html>