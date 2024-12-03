<?php session_start(); ?>
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
      <li><a href="../user/index1.php" style="font-size:25px">تسجيل الخروج</a></li>
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
   <img src="../imgs/ws.jpg" class="img img-responsive" id="welcome" />
  </div>
  <div class="container-fluid" id="products">
   <div class="row">
    <div class="col-lg-2 col-lg-offset-1 col-md-3 col-sm-4 col-xs-5" style="border-right:3px solid grey">
     <?php 
		$connection= @mysql_connect('localhost','root','');
		mysql_select_db("softwarebrowser");
		$sql = 'SELECT name, type, sizecat, size FROM browsers';
		$value = mysql_query( $sql, $connection );
		echo "<h3> المتصفحات </h3> <br>";
		echo "<hr>";
		while($row = mysql_fetch_array($value, MYSQL_ASSOC))
			{
			 
             echo "Name : {$row['name']}  <br> ".
             "Type : {$row['type']} <br> ".
             "Size Category : {$row['sizecat']} <br> ".
			 "Size : {$row['size']} <br>".
			 "---------- <br>".
			 "<a link='#'>تحميل</a>".
			 "<hr>";
			}
	 ?>
	</div>
	<div class="col-lg-2 col-md-3 col-sm-4 col-xs-5" style="border-right:3px solid grey">
     <?php 
		$connection= @mysql_connect('localhost','root','');
		mysql_select_db("softwarebrowser");
		$sql = 'SELECT name, type, sizecat, size FROM texteditors';
		$value = mysql_query( $sql, $connection );
		echo "<h3> محررات النصوص </h3> <br>";
		echo "<hr>";
		while($row = mysql_fetch_array($value, MYSQL_ASSOC))
			{
        echo "Name : {$row['name']}  <br> ".
             "Type : {$row['type']} <br> ".
             "Size Category : {$row['sizecat']} <br> ".
			 "Size : {$row['size']} <br>".
			 "---------- <br>".
			 "<a link='#'>تحميل</a>".
			 "<hr>";
			}
	 ?>
	</div>
	<div class="col-lg-2 col-md-3 col-sm-4 col-xs-5" style="border-right:3px solid grey">
     <?php 
		$connection= @mysql_connect('localhost','root','');
		mysql_select_db("softwarebrowser");
		$sql = 'SELECT name, type, sizecat, size FROM players';
		$value = mysql_query( $sql, $connection );
		echo "<h3> المشغلات </h3> <br>";
		echo "<hr>";
		while($row = mysql_fetch_array($value, MYSQL_ASSOC))
			{
        echo "Name : {$row['name']}  <br> ".
             "Type : {$row['type']} <br> ".
             "Size Category : {$row['sizecat']} <br> ".
			 "Size : {$row['size']} <br>".
			 "---------- <br>".
			 "<a link='#'>تحميل</a>".
			 "<hr>";
			}
	 ?>
	</div>
	<div class="col-lg-2 col-md-3 col-sm-4 col-xs-5" style="border-right:3px solid grey">
     <?php 
		$connection= @mysql_connect('localhost','root','');
		mysql_select_db("softwarebrowser");
		$sql = 'SELECT name, type, sizecat, size FROM commsoft';
		$value = mysql_query( $sql, $connection );
		echo "<h3> برامج تواصل </h3> <br>";
		echo "<hr>";
		while($row = mysql_fetch_array($value, MYSQL_ASSOC))
			{
        echo "Name : {$row['name']}  <br> ".
             "Type : {$row['type']} <br> ".
             "Size Category : {$row['sizecat']} <br> ".
			 "Size : {$row['size']} <br>".
			 "---------- <br>".
			 "<a link='#'>تحميل</a>".
			 "<hr>";
			}
	 ?>
	</div>
	<div class="col-lg-2 col-md-3 col-sm-4 col-xs-5" class="contdiv">
     <?php 
		$connection= @mysql_connect('localhost','root','');
		mysql_select_db("softwarebrowser");
		$sql = 'SELECT name, type, sizecat, size FROM others';
		$value = mysql_query( $sql, $connection );
		echo "<h3> برامج أخرى </h3> <br>";
		echo "<hr>";
		while($row = mysql_fetch_array($value, MYSQL_ASSOC))
			{
        echo "Name : {$row['name']}  <br> ".
             "Type : {$row['type']} <br> ".
             "Size Category : {$row['sizecat']} <br> ".
			 "Size : {$row['size']} <br>".
			 "---------- <br>".
			 "<a link='#'>تحميل</a>".
			 "<hr>";
			}
	 ?>
	</div>
   </div>
   <div class="row">
    <div class="container" id="searchbox">
     <form action="prog.php" method="get" style="border-bottom:4px solid grey">
	   <h3>قم بالبحث هنا </h3><hr><br>
	   <p><input type="text" name="value" placeholder="الاسم"></p>
	   <p><input type="text" name="value1" placeholder="النوع"></p>
	   <p><input type="text" name="value2" placeholder="فئة الحجم"></p>
	   <p><input type="text" name="value3" placeholder="الحجم"></p><br>
	  <h4><input type="submit" name="search" value="بحث / Search" class="btn btn-info"></h4>
	 </form><br>
	 <?php
		if(isset($_SESSION['logusername']) && isset($_SESSION['logpassword']))
		 { include("search.php"); }
		else { !include("search.php"); }
	 ?>
	</div>
   </div>
   <hr>
  </div>
  <div class="row">
   <img src="../imgs/prog.jpg" class="img img-responsive" id="outro" />
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