<?php require_once("createdb.php"); ?>
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

<body onload="startTime()">
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
   <div class="carousel fade" data-ride="carousel" id="home" style="border-bottom:8px solid grey">  
    <div class="carousel-inner">
     <div class="item active"><img src="../imgs/i1.jpg" alt="Welcoming"></div>
     <div class="item"><img src="../imgs/browser.jpg" alt="Browsers"></div>
     <div class="item"><img src="../imgs/teditors.jpg" alt="Text Editors"></div>
     <div class="item"><img src="../imgs/players.jpg" alt="Players"></div>
     <div class="item"><img src="../imgs/other.jpg" alt="Others"></div>
     <div class="item"><img src="../imgs/comm.jpg" alt="Communication"></div>
    </div>
    <a class="left carousel-control" href="#home" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#home" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
   </div>
  </div>
  <div class="row" id="firstrow">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="rightside">
    <h2> أهلا بكم في موقعنا! </h2><br>
	<p> هنا سوف تجدون مجموعة واسعة من البرمجيات و التي يمكنها تلبية أي حاجة برمجية لدى المستخدمين. </p>
	<p>يمكنكم زيارة صفحة البرامج , لرؤية جميع البرامج المتاحة لدينا , كذلك يمكنكم الاطلاع على صفحة الأسئلة لرؤية الأسئلة التي يتم طرحها.
		قم بتسجيل الدخول إلى الموقع لتصبح عضو لدينا في الموفع, و إذا أعجبكم موقعنا , يمكنكم البقاء على تواصل دائم معنا , حيث جميع طرق التواصل معنا موجودة في "تواصل معنا" .</p>
   </div>
  </div><br>
		<!--Second Row-->
  <div id="secondrow">
   <div class="row">
    <div class="container-fluid">
	 <div id="contentsecond">
	  <h3>ستجدون لدينا الفئات التالية من البرامج:</h3><br>
	  <ul type="none">
	   <li>المتصفحات</li>
	   <li>المشغلات</li>
	   <li>محررات النصوص</li>
	   <li>برامج التواصل</li>
	   <li>برامج أخرى</li>
	  </ul>
    </div>
   </div>
  </div>
 </div>
		<!--End of Second Row-->
 <div class="row">
  <img src="../imgs/win1.jpg" class="img img-responsive" id="outro" />
 </div>
</div>
			<!--End of main container -->
  
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