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
		 var x1=document.forms["myForm"]["fname"].value;
		 var x2=document.forms["myForm"]["lname"].value;
		 var x3=document.forms["myForm"]["email"].value;
		 var x4=document.forms["myForm"]["username"].value;
		 var x5=document.forms["myForm"]["password"].value;
		 var x6=document.forms["myForm"]["password1"].value;
		 if ((x1==null || x1=="") || (x2==null || x2=='') || (x3==null || x3=="") ||(x4==null || x4=="") ||(x5==null || x5=="") || (x6==null || x6==""))
		 {
		  alert("يجب إدراج جميع الحقول");
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
   <img src="../imgs/sign.jpg" class="img img-responsive" id="welcome" />
  </div>
  <div class="row" style="margin:25px 0">
   <h2>تسجيل الدخول / Sign Up : </h2>
  </div>
  <div class="container" id="signform">
   <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="border-right:3px solid grey;padding-left:1.8em">
	 <h4>إن قمت بالتسجيل مسبقا , فأدخل إلى حسابك مباشرة:</h4>
	 <h3><a href="log.php" class="btn btn-info" id="button">دخول/ Log In</a></h3>
	</div>
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
		<form action="sign.php" method="POST" id="myForm" onsubmit="return validateForm()">
		 <p><input type="text" name="fname" placeholder="First Name"></p>
		 <p><input type="text" name="lname" placeholder="Last Name"></p>
		 <p><input type="email" name="email" placeholder="E-Mail"></p>
		 <p><input type="text" name="username" placeholder="Username"></p>
		 <p><input type="password" name="password" placeholder="Password"></p>
		 <p><input type="password" name="password1" placeholder="Confirm Password"></p>
		 <h3><input type="submit" name="submit" value="تسجيل/ Sign Up" class="btn btn-btn-info" id="formbutton"></h3>
		</form>
		<?php 
		 if (isset($_POST['submit']))
		  {
		   $fname = @mysql_real_escape_string($_POST['fname']);
		   $lname = mysql_real_escape_string($_POST['lname']);
		   $email = mysql_real_escape_string($_POST['email']);
		   $username = mysql_real_escape_string($_POST['username']);
		   $password = mysql_real_escape_string($_POST['password']);
		   $password1 = mysql_real_escape_string($_POST['password1']);
		   if($fname && $lname && $email && $username && $password && $password1)
		   {
		     if($password==$password1)
			  {
				$connect = @mysql_connect('localhost','root','');
				mysql_select_db("softwarebrowser");
				$query = mysql_query("INSERT INTO user VALUES ('','$fname','$lname','$email','$username','$password');");
				echo "تمت عملية التسجيل بنجاح ! ";
			  }
			 else {
				echo "لا يوجد تطابق في كلمة السر !";
				  }
		   }
		   else
		   {
			echo "جميع الحقول مطلوبة !";
		   }
		  }
		
		?>
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