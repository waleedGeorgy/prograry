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
		 var x=document.forms["myForm"]["logusername"].value;
		 var y=document.forms["myForm"]["logpassword"].value;
		 if ((x==null || x=="") || (y==null || y==''))
		 {
		  alert("يجب إدخال اسم المستخدم و كلمة المرور");
		  return false;
		  }
		}
   </script>
   
</head>

<body>
 <header>
  <nav class="navbar navbar-default" role="navigation">
   <div class="container">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
     <a class="navbar-brand" href="#"><h1>Prograry<span class="subhead">All Software In One Place</span></h1></a>
    </div> <!--Navbar header -->
    <div class="collapse navbar-collapse" id="collapse">
     <ul class="nav navbar-nav navbar-right">
      <li><a href="contact.php" style="font-size:25px">تواصل معنا</a></li>
      <li><a href="sign.php" style="font-size:25px">تسجيل الدخول</a></li>
      <li><a href="faq.php" style="font-size:25px">الأسئلة</a></li>
      <li><a href="prog.php" style="font-size:25px">البرامج</a></li>
      <li><a href="index1.php" style="font-size:25px">الرئيسية</a></li>
     </ul>
    </div> <!--Collapsing Navigation-->
   </div> <!--Container -->
  </nav>
 </header>
		<!-- END OF HEADER -->
		<!-- Main Container -->
 <div id="maincont" class="container">
  <div class="row">
   <img src="../imgs/log.jpg" class="img img-responsive" id="welcome" />
  </div>
  <div class="row" style="margin:25px 0">
   <h2 style="text-align:center">الدخول / Log In :</h2>
  </div>
  <div class="container" id="signform">
   <div class="row">
    <div style="padding:0 0 10px 70px">
		<form action="login.php" method="POST" name="myForm" onsubmit="return validateForm()">
		 <p style="text-align:center"><input type="text" name="logusername" id="name" placeholder="Username"></p>
		 <p style="text-align:center"><input type="password" name="logpassword" id="password"  placeholder="Password"></p>
		 <h3 style="text-align:center"><input type="submit" name="login" value="دخول/ Log In" onclick="validate()" class="btn btn-btn-info" id="formbutton"></h3>
		</form>
	</div>
   </div>
  </div>
  <div class="row">
   <img src="../imgs/block.jpg" class="img img-responsive" id="outro" />
  </div>
 </div>
		<!--End of Second Row-->
		
  
			<!--FOOTER-->
<br><br><br><br><br>
<footer>
 <div class="content container-fluid">
  <div class="row">
   <div class="col-sm-6 col-sm-pull-4">
    <p>Call Us <span class="phone">0994-250-478</span></p>
	<p>All Rights Reserved &copy;</p>
   </div>
   <div class="col-sm-6">
     <nav class="navbar navbar-default" role="navigation">
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#">Terms of use</a></li>
       <li><a href="#">Privacy policy</a></li>
	   <li><a href="../admin/admin.php">©</a></li>
      </ul>
     </nav>
   </div> 
  </div>
 </div>
</footer>
		<!-- END OF FOOTER -->
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
  
</body>
  
</html>