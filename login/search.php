<?php
		@mysql_connect('localhost','root','');
		mysql_select_db('softwarebrowser');
		if(isset($_GET['search'])){
		  $searchval = $_GET['value'];
		  $typeval = $_GET['value1'];
		  $sizecatval = $_GET['value2'];
		  $sizeval = $_GET['value3'];
		  $query = "SELECT * FROM browsers WHERE name LIKE '%$searchval%' AND type LIKE '%$typeval%' AND sizecat LIKE '%$sizecatval%' AND size LIKE '%$sizeval%' ";
		  $run = mysql_query($query);
		  echo "<h4> متصفحات </h4><br>";
		  while($row=mysql_fetch_array($run)){
		   $name = $row['name'];
		   $type = $row['type'];
		   $sizecat = $row['sizecat'];
		   $size = $row['size'];
		   echo "Name: {$name} <br> Type: {$type} <br> Size Category: {$sizecat}
				 <br> Size: {$size} <br>" ;
		   echo "---------- <br>";
		   echo "<a link='#'>تحميل</a><br><hr>";
		   }
		   echo "=============================================== <br><br>";
		   
		  $searchval1 = $_GET['value'];
		  $typeval1 = $_GET['value1'];
		  $sizecatval1 = $_GET['value2'];
		  $sizeval1 = $_GET['value3'];
		  $query1 = "SELECT * FROM players WHERE name LIKE '%$searchval1%' AND type LIKE '%$typeval1%' AND sizecat LIKE '%$sizecatval1%' AND size LIKE '%$sizeval1%' ";
		  $run1 = mysql_query($query1);
		  echo "<h4> مشغلات </h4><br>";
		  while($row1=mysql_fetch_array($run1)){
		   $name1 = $row1['name'];
		   $type1 = $row1['type'];
		   $sizecat1 = $row1['sizecat'];
		   $size1 = $row1['size'];
		   echo "Name: {$name1} <br> Type: {$type1} <br> Size Category: {$sizecat1}
				 <br> Size: {$size1} <br>" ;
		   echo "---------- <br>";
		   echo "<a link='#'>تحميل</a><br><hr>";
		  }
		  echo "=============================================== <br><br>";
		  
		  $searchval2 = $_GET['value'];
		  $typeval2 = $_GET['value1'];
		  $sizecatval2 = $_GET['value2'];
		  $sizeval2 = $_GET['value3'];
		  $query2 = "SELECT * FROM commsoft WHERE name LIKE '%$searchval2%' AND type LIKE '%$typeval2%' AND sizecat LIKE '%$sizecatval2%' AND size LIKE '%$sizeval2%' ";
		  $run2 = mysql_query($query2);
		  echo "<h4> برامج تواصل </h4><br>";
		  while($row2=mysql_fetch_array($run2)){
		   $name2 = $row2['name'];
		   $type2 = $row2['type'];
		   $sizecat2 = $row2['sizecat'];
		   $size2 = $row2['size'];
		   echo "Name: {$name2} <br> Type: {$type2} <br> Size Category: {$sizecat2}
				 <br> Size: {$size2} <br>" ;
		   echo "---------- <br>";
		   echo "<a link='#'>تحميل</a><br><hr>";
		  }
		  echo "=============================================== <br><br>";
		  
		  $searchval3 = $_GET['value'];
		  $typeval3 = $_GET['value1'];
		  $sizecatval3 = $_GET['value2'];
		  $sizeval3 = $_GET['value3'];
		  $query3 = "SELECT * FROM texteditors WHERE name LIKE '%$searchval3%' AND type LIKE '%$typeval3%' AND sizecat LIKE '%$sizecatval3%' AND size LIKE '%$sizeval3%' ";
		  $run3 = mysql_query($query3);
		  echo "<h4> محررات نصوص </h4><br>";
		  while($row3=mysql_fetch_array($run3)){
		   $name3 = $row3['name'];
		   $type3 = $row3['type'];
		   $sizecat3 = $row3['sizecat'];
		   $size3 = $row3['size'];
		   echo "Name: {$name3} <br> Type: {$type3} <br> Size Category: {$sizecat3}
				 <br> Size: {$size3} <br>" ;
		   echo "---------- <br>";
		   echo "<a link='#'>تحميل</a><br><hr>";
		  }
		  echo "=============================================== <br><br>";
		  
		  $searchval4 = $_GET['value'];
		  $typeval4 = $_GET['value1'];
		  $sizecatval4 = $_GET['value2'];
		  $sizeval4 = $_GET['value3'];
		  $query4 = "SELECT * FROM others WHERE name LIKE '%$searchval4%' AND type LIKE '%$typeval4%' AND sizecat LIKE '%$sizecatval4%' AND size LIKE '%$sizeval4%' ";
		  $run4 = mysql_query($query4);
		  echo "<h4> برامج أخرى </h4><br>";
		  while($row4=mysql_fetch_array($run4)){
		   $name4 = $row4['name'];
		   $type4 = $row4['type'];
		   $sizecat4 = $row4['sizecat'];
		   $size4 = $row4['size'];
		   echo "Name: {$name4} <br> Type: {$type4} <br> Size Category: {$sizecat4}
				 <br> Size: {$size4} <br>" ;
		   echo "---------- <br>";
		   echo "<a link='#'>تحميل</a><br><hr>";
		  }
		  echo "=============================================== <br><br>";
		}
	?>