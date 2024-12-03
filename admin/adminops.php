<html>
 <head>
  <meta charset="utf-8">
  <title>Prograry</title>
 </head>
 <body>
  <?php
	$con= @mysql_connect ('localhost','root','');
	mysql_select_db("softwarebrowser",$con);
	
	echo "<table border=0 align=center>";
	echo "<tr>";
	echo "<td>";
	echo "<hr>";
	echo "<h3> المتصفحات </h3>";
	echo "<br>";
	if(isset($_POST['update'])){
	 $UpdateQuery = "UPDATE browsers SET browserid='$_POST[browserid]', name='$_POST[name]', type='$_POST[type]', sizecat='$_POST[sizecat]', size='$_POST[size]' WHERE browserid='$_POST[hidden]'";
	 mysql_query($UpdateQuery,$con);
	};
	
	if(isset($_POST['delete'])){
	 $DeleteQuery = "DELETE FROM browsers WHERE browserid='$_POST[hidden]'";
	 mysql_query($DeleteQuery,$con);
	};
	
	if(isset($_POST['add'])){
	 $AddQuery = "INSERT INTO browsers (browserid, name, type, sizecat, size) VALUES ('$_POST[ubrowserid]','$_POST[uname]','$_POST[utype]','$_POST[usizecat]','$_POST[usize]')";
	 mysql_query($AddQuery,$con);
	};
	
	
	$sql="SELECT * FROM browsers";
	$myData = mysql_query($sql,$con);
	echo "<table border=0>
		   <tr>
		    <th>ID</th>
		    <th>Name</th>
		    <th>Type</th>
		    <th>Size Category</th>
		    <th>Size</th>
		   </tr>";
		 while($record = mysql_fetch_array($myData)){
		   echo "<form action=adminpage.php method=post>";
		   echo "<tr>";
		   echo "<td>" . "<input type=text name=browserid value=" . $record['browserid']." </td>";
		   echo "<td>" . "<input type=text name=name value=" .$record['name']." </td>";
		   echo "<td>" . "<input type=text name=type value=" .$record['type']." </td>";
		   echo "<td>" . "<input type=text name=sizecat value=" .$record['sizecat']." </td>";
		   echo "<td>" . "<input type=text name=size value=" .$record['size']." </td>";
		   echo "<td>" . "<input type=hidden name=hidden value=" . $record['browserid']." </td>";
		   echo "<td>" . "<input type=submit name=update value=Update" . " </td>";
		   echo "<td>" . "<input type=submit name=delete value=Delete" . " </td>";
		   echo "</tr>";
		   echo "</form>";
			}
		 echo "<form action=adminpage.php method=post>";
		 echo "<tr>";
		 echo "<td><input type=text name=ubrowserid></td>";
		 echo "<td><input type=text name=uname></td>";
		 echo "<td><input type=text name=utype></td>";
		 echo "<td><input type=text name=usizecat></td>";
		 echo "<td><input type=text name=usize></td>";
		 echo "<td><input type=submit name=add value=Add" . " </td>";
		 echo "</form>";
		 echo "</table>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>";	 
	echo "<hr>";	 
	echo "<h3> المشغلات </h3>";
	echo "<br>";
	if(isset($_POST['update1'])){
	 $UpdateQuery1 = "UPDATE players SET playerid='$_POST[playerid]', name='$_POST[name1]', type='$_POST[type1]', sizecat='$_POST[sizecat1]', size='$_POST[size1]' WHERE playerid='$_POST[hidden1]'";
	 mysql_query($UpdateQuery1,$con);
	};
	
	if(isset($_POST['delete1'])){
	 $DeleteQuery1 = "DELETE FROM players WHERE playerid='$_POST[hidden1]'";
	 mysql_query($DeleteQuery1,$con);
	};
	
	if(isset($_POST['add1'])){
	 $AddQuery1 = "INSERT INTO players (playerid, name, type, sizecat, size) VALUES ('$_POST[uplayerid]','$_POST[uname1]','$_POST[utype1]','$_POST[usizecat1]','$_POST[usize1]')";
	 mysql_query($AddQuery1,$con);
	};
	
	
	$sql1="SELECT * FROM players";
	$myData1 = mysql_query($sql1,$con);
	echo "<table border=0>
		   <tr>
		    <th>ID</th>
		    <th>Name</th>
		    <th>Type</th>
		    <th>Size Category</th>
		    <th>Size</th>
		   </tr>";
		 while($record1 = mysql_fetch_array($myData1)){
		   echo "<form action=adminpage.php method=post>";
		   echo "<tr>";
		   echo "<td>" . "<input type=text name=playerid value=" . $record1['playerid']." </td>";
		   echo "<td>" . "<input type=text name=name1 value=" .$record1['name']." </td>";
		   echo "<td>" . "<input type=text name=type1 value=" .$record1['type']." </td>";
		   echo "<td>" . "<input type=text name=sizecat1 value=" .$record1['sizecat']." </td>";
		   echo "<td>" . "<input type=text name=size1 value=" .$record1['size']." </td>";
		   echo "<td>" . "<input type=hidden name=hidden1 value=" . $record1['playerid']." </td>";
		   echo "<td>" . "<input type=submit name=update1 value=Update" . " </td>";
		   echo "<td>" . "<input type=submit name=delete1 value=Delete" . " </td>";
		   echo "<tr>";
		   echo "</form>";
			}
		 echo "<form action=adminpage.php method=post>";
		 echo "<tr>";
		 echo "<td><input type=text name=uplayerid></td>";
		 echo "<td><input type=text name=uname1></td>";
		 echo "<td><input type=text name=utype1></td>";
		 echo "<td><input type=text name=usizecat1></td>";
		 echo "<td><input type=text name=usize1></td>";
		 echo "<td><input type=submit name=add1 value=Add" . " </td>";
		 echo "</form>";
		 echo "</table>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>";
	echo "<hr>";	 
	echo "<h3> محررات النصوص </h3>";
	echo "<br>";
	if(isset($_POST['update2'])){
	 $UpdateQuery2 = "UPDATE texteditors SET teditorid='$_POST[teditorid]', name='$_POST[name2]', type='$_POST[type2]', sizecat='$_POST[sizecat2]', size='$_POST[size2]' WHERE teditorid='$_POST[hidden2]'";
	 mysql_query($UpdateQuery2,$con);
	};
	
	if(isset($_POST['delete2'])){
	 $DeleteQuery2 = "DELETE FROM texteditors WHERE teditorid='$_POST[hidden2]'";
	 mysql_query($DeleteQuery2,$con);
	};
	
	if(isset($_POST['add2'])){
	 $AddQuery2 = "INSERT INTO texteditors (teditorid, name, type, sizecat, size) VALUES ('$_POST[uteditorid]','$_POST[uname2]','$_POST[utype2]','$_POST[usizecat2]','$_POST[usize2]')";
	 mysql_query($AddQuery2,$con);
	};
	
	
	$sql2="SELECT * FROM texteditors";
	$myData2 = mysql_query($sql2,$con);
	echo "<table border=0>
		   <tr>
		    <th>ID</th>
		    <th>Name</th>
		    <th>Type</th>
		    <th>Size Category</th>
		    <th>Size</th>
		   </tr>";
		 while($record2 = mysql_fetch_array($myData2)){
		   echo "<form action=adminpage.php method=post>";
		   echo "<tr>";
		   echo "<td>" . "<input type=text name=teditorid value=" . $record2['teditorid']." </td>";
		   echo "<td>" . "<input type=text name=name2 value=" .$record2['name']." </td>";
		   echo "<td>" . "<input type=text name=type2 value=" .$record2['type']." </td>";
		   echo "<td>" . "<input type=text name=sizecat2 value=" .$record2['sizecat']." </td>";
		   echo "<td>" . "<input type=text name=size2 value=" .$record2['size']." </td>";
		   echo "<td>" . "<input type=hidden name=hidden2 value=" . $record2['teditorid']." </td>";
		   echo "<td>" . "<input type=submit name=update2 value=Update" . " </td>";
		   echo "<td>" . "<input type=submit name=delete2 value=Delete" . " </td>";
		   echo "<tr>";
		   echo "</form>";
			}
		 echo "<form action=adminpage.php method=post>";
		 echo "<tr>";
		 echo "<td><input type=text name=uteditorid></td>";
		 echo "<td><input type=text name=uname2></td>";
		 echo "<td><input type=text name=utype2></td>";
		 echo "<td><input type=text name=usizecat2></td>";
		 echo "<td><input type=text name=usize2></td>";
		 echo "<td><input type=submit name=add2 value=Add" . " </td>";
		 echo "</form>";
		 echo "</table>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>";	
	echo "<hr>";	 
	echo "<h3> برامج التواصل </h3>";
	echo "<br>";
	if(isset($_POST['update3'])){
	 $UpdateQuery3 = "UPDATE commsoft SET commsoftid='$_POST[commsoftid]', name='$_POST[name3]', type='$_POST[type3]', sizecat='$_POST[sizecat3]', size='$_POST[size3]' WHERE commsoftid='$_POST[hidden3]'";
	 mysql_query($UpdateQuery3,$con);
	};
	
	if(isset($_POST['delete3'])){
	 $DeleteQuery3 = "DELETE FROM commsoft WHERE commsoftid='$_POST[hidden3]'";
	 mysql_query($DeleteQuery3,$con);
	};
	
	if(isset($_POST['add3'])){
	 $AddQuery3 = "INSERT INTO commsoft (commsoftid, name, type, sizecat, size) VALUES ('$_POST[ucommsoftid]','$_POST[uname3]','$_POST[utype3]','$_POST[usizecat3]','$_POST[usize3]')";
	 mysql_query($AddQuery3,$con);
	};
	
	
	$sql3="SELECT * FROM commsoft";
	$myData3 = mysql_query($sql3,$con);
	echo "<table border=0>
		   <tr>
		    <th>ID</th>
		    <th>Name</th>
		    <th>Type</th>
		    <th>Size Category</th>
		    <th>Size</th>
		   </tr>";
		 while($record3 = mysql_fetch_array($myData3)){
		   echo "<form action=adminpage.php method=post>";
		   echo "<tr>";
		   echo "<td>" . "<input type=text name=commsoftid value=" . $record3['commsoftid']." </td>";
		   echo "<td>" . "<input type=text name=name3 value=" .$record3['name']." </td>";
		   echo "<td>" . "<input type=text name=type3 value=" .$record3['type']." </td>";
		   echo "<td>" . "<input type=text name=sizecat3 value=" .$record3['sizecat']." </td>";
		   echo "<td>" . "<input type=text name=size3 value=" .$record3['size']." </td>";
		   echo "<td>" . "<input type=hidden name=hidden3 value=" . $record3['commsoftid']." </td>";
		   echo "<td>" . "<input type=submit name=update3 value=Update" . " </td>";
		   echo "<td>" . "<input type=submit name=delete3 value=Delete" . " </td>";
		   echo "<tr>";
		   echo "</form>";
			}
		 echo "<form action=adminpage.php method=post>";
		 echo "<tr>";
		 echo "<td><input type=text name=ucommsoftid></td>";
		 echo "<td><input type=text name=uname3></td>";
		 echo "<td><input type=text name=utype3></td>";
		 echo "<td><input type=text name=usizecat3></td>";
		 echo "<td><input type=text name=usize3></td>";
		 echo "<td><input type=submit name=add3 value=Add" . " </td>";
		 echo "</form>";
		 echo "</table>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>";
	echo "<hr>";	 
	echo "<h3> برامج أخرى </h3>";
	echo "<br>";
	if(isset($_POST['update4'])){
	 $UpdateQuery4 = "UPDATE others SET othersid='$_POST[othersid]', name='$_POST[name4]', type='$_POST[type4]', sizecat='$_POST[sizecat4]', size='$_POST[size4]' WHERE othersid='$_POST[hidden4]'";
	 mysql_query($UpdateQuery4,$con);
	};
	
	if(isset($_POST['delete4'])){
	 $DeleteQuery4 = "DELETE FROM others WHERE othersid='$_POST[hidden4]'";
	 mysql_query($DeleteQuery4,$con);
	};
	
	if(isset($_POST['add4'])){
	 $AddQuery4 = "INSERT INTO others (othersid, name, type, sizecat, size) VALUES ('$_POST[uothersid]','$_POST[uname4]','$_POST[utype4]','$_POST[usizecat4]','$_POST[usize4]')";
	 mysql_query($AddQuery4,$con);
	};
	
	
	$sql4="SELECT * FROM others";
	$myData4 = mysql_query($sql4,$con);
	echo "<table border=0>
		   <tr>
		    <th>ID</th>
		    <th>Name</th>
		    <th>Type</th>
		    <th>Size Category</th>
		    <th>Size</th>
		   </tr>";
		 while($record4 = mysql_fetch_array($myData4)){
		   echo "<form action=adminpage.php method=post>";
		   echo "<tr>";
		   echo "<td>" . "<input type=text name=othersid value=" . $record4['othersid']." </td>";
		   echo "<td>" . "<input type=text name=name4 value=" .$record4['name']." </td>";
		   echo "<td>" . "<input type=text name=type4 value=" .$record4['type']." </td>";
		   echo "<td>" . "<input type=text name=sizecat4 value=" .$record4['sizecat']." </td>";
		   echo "<td>" . "<input type=text name=size4 value=" .$record4['size']." </td>";
		   echo "<td>" . "<input type=hidden name=hidden4 value=" . $record4['othersid']." </td>";
		   echo "<td>" . "<input type=submit name=update4 value=Update" . " </td>";
		   echo "<td>" . "<input type=submit name=delete4 value=Delete" . " </td>";
		   echo "<tr>";
		   echo "</form>";
			}
		 echo "<form action=adminpage.php method=post>";
		 echo "<tr>";
		 echo "<td><input type=text name=uothersid></td>";
		 echo "<td><input type=text name=uname4></td>";
		 echo "<td><input type=text name=utype4></td>";
		 echo "<td><input type=text name=usizecat4></td>";
		 echo "<td><input type=text name=usize4></td>";
		 echo "<td><input type=submit name=add4 value=Add" . " </td>";
		 echo "</form>";
		 echo "</table>";
	echo "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<td>";
	echo "<hr>";	 
	echo "<h3> المستخدمون </h3>";
	echo "<br>";
	if(isset($_POST['update5'])){
	 $UpdateQuery5 = "UPDATE user SET userid='$_POST[userid]', fname='$_POST[fname]', lname='$_POST[lname]', email='$_POST[email]', username='$_POST[username]', password='$_POST[password]' WHERE userid='$_POST[hidden5]'";
	 mysql_query($UpdateQuery5,$con);
	};
	
	if(isset($_POST['delete5'])){
	 $DeleteQuery5 = "DELETE FROM user WHERE userid='$_POST[hidden5]'";
	 mysql_query($DeleteQuery5,$con);
	};
	
	if(isset($_POST['add5'])){
	 $AddQuery5 = "INSERT INTO user (userid, fname, lname, email, username, password) VALUES ('$_POST[uuserid]','$_POST[ufname]','$_POST[ulname]','$_POST[uemail]','$_POST[uusername]','$_POST[upassword]')";
	 mysql_query($AddQuery5,$con);
	};
	
	
	$sql5="SELECT * FROM user";
	$myData5 = mysql_query($sql5,$con);
	echo "<table border=0>
		   <tr>
		    <th>ID</th>
		    <th>First Name</th>
		    <th>Last Name</th>
		    <th>E-Mail</th>
		    <th>Username</th>
		    <th>Password</th>
		   </tr>";
		 while($record5 = mysql_fetch_array($myData5)){
		   echo "<form action=adminpage.php method=post>";
		   echo "<tr>";
		   echo "<td>" . "<input type=text name=userid value=" . $record5['userid']." </td>";
		   echo "<td>" . "<input type=text name=fname value=" .$record5['fname']." </td>";
		   echo "<td>" . "<input type=text name=lname value=" .$record5['lname']." </td>";
		   echo "<td>" . "<input type=text name=email value=" .$record5['email']." </td>";
		   echo "<td>" . "<input type=text name=username value=" .$record5['username']." </td>";
		   echo "<td>" . "<input type=text name=password value=" .$record5['password']." </td>";
		   echo "<td>" . "<input type=hidden name=hidden5 value=" . $record5['userid']." </td>";
		   echo "<td>" . "<input type=submit name=update5 value=Update" . " </td>";
		   echo "<td>" . "<input type=submit name=delete5 value=Delete" . " </td>";
		   echo "<tr>";
		   echo "</form>";
			}
		 echo "<form action=adminpage.php method=post>";
		 echo "<tr>";
		 echo "<td><input type=text name=uuserid></td>";
		 echo "<td><input type=text name=ufname></td>";
		 echo "<td><input type=text name=ulname></td>";
		 echo "<td><input type=text name=uemail></td>";
		 echo "<td><input type=text name=uusername></td>";
		 echo "<td><input type=text name=upassword></td>";
		 echo "<td><input type=submit name=add5 value=Add" . " </td>";
		 echo "</form>";
		 echo "</table>";		
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	mysql_close($con);
  ?>
 </body>
</html>