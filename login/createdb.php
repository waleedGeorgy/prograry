<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = @mysql_connect($dbhost, $dbuser, $dbpass);

// Create DB

  $sql  ='CREATE DATABASE IF NOT EXISTS softwarebrowser DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci';
$retval2 = mysql_query( $sql, $conn );

//Create Tables

$sqlfirst = 'CREATE TABLE IF NOT EXISTS user( userid INT(11) NOT NULL AUTO_INCREMENT,
fname VARCHAR(50) NOT NULL,
lname VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
username VARCHAR(50) NOT NULL,
password VARCHAR(60) NOT NULL,
PRIMARY KEY(userid)
) ';

mysql_select_db('softwarebrowser');
$retvalfirst = mysql_query( $sqlfirst, $conn );
if(! $retvalfirst )
{
  die('Could not create table categories: ' . mysql_error());
}

$sqlsecond = 'CREATE TABLE IF NOT EXISTS browsers( browserid INT(50) NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
type VARCHAR(100) NOT NULL,
sizecat VARCHAR (100) NOT NULL,
size VARCHAR(100) NOT NULL,
PRIMARY KEY (browserid)
) ';

mysql_select_db('softwarebrowser');
$retvalsecond = mysql_query( $sqlsecond, $conn );
if(! $retvalsecond )
{
  die('Could not create table books: ' . mysql_error());
}

$sqlthird = 'CREATE TABLE IF NOT EXISTS players( playerid INT(50) NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
type VARCHAR(100) NOT NULL,
sizecat VARCHAR (100) NOT NULL,
size VARCHAR(100) NOT NULL,
PRIMARY KEY (playerid)
) ';

mysql_select_db('softwarebrowser');
$retvalthird = mysql_query( $sqlthird, $conn );
if(! $retvalthird )
{
  die('Could not create table categories: ' . mysql_error());
}

$sqlfourth = 'CREATE TABLE IF NOT EXISTS texteditors( teditorid INT(50) NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
type VARCHAR(100) NOT NULL,
sizecat VARCHAR (100) NOT NULL,
size VARCHAR(100) NOT NULL,
PRIMARY KEY (teditorid)
) ';

mysql_select_db('softwarebrowser');
$retvalfourth = mysql_query( $sqlfourth, $conn );
if(! $retvalfourth )
{
  die('Could not create table categories: ' . mysql_error());
}

$sqlfifth = 'CREATE TABLE IF NOT EXISTS commsoft( commsoftid INT(50) NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
type VARCHAR(100) NOT NULL,
sizecat VARCHAR (100) NOT NULL,
size VARCHAR(100) NOT NULL,
PRIMARY KEY (commsoftid)
) ';

mysql_select_db('softwarebrowser');
$retvalfifth = mysql_query( $sqlfifth, $conn );
if(! $retvalfifth )
{
  die('Could not create table categories: ' . mysql_error());
}

$sqlsixth = 'CREATE TABLE IF NOT EXISTS others( othersid INT(50) NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
type VARCHAR(100) NOT NULL,
sizecat VARCHAR (100) NOT NULL,
size VARCHAR(100) NOT NULL,
PRIMARY KEY (othersid)
) ';

mysql_select_db('softwarebrowser');
$retvalsixth = mysql_query( $sqlsixth, $conn );
if(! $retvalsixth )
{
  die('Could not create table categories: ' . mysql_error());
}


// Inserting Values 

$sqlinsert="INSERT IGNORE INTO browsers ".
       "(browserid,name,type,sizecat,size) ".
       "VALUES('1', 'Mozilla Firefox', 'Browser', 'Large', '55MB'), ('2', 'Google Chrome', 'Browser', 'Medium', '47MB'), ('3', 'Internet Explorer', 'Browser', 'Large', '60MB'), ('4', 'Safari', 'Browser', 'Small', '30MB'), ('5', 'Opera', 'Browser', 'Medium', '45MB')";
mysql_select_db('softwarebrowser');
$retvalinsert = mysql_query( $sqlinsert, $conn );
if(! $retvalinsert )
{
  die('Could not enter data: ' . mysql_error());
}

$sqlinsert2="INSERT IGNORE INTO texteditors ".
       "(teditorid,name,type,sizecat,size) ".
       "VALUES ('1', 'Notepad++', 'Text Editor', 'Small', '5MB'), ('2', 'Sublime Text', 'Text Editor', 'Small', '12MB'), ('3', 'Notepad', 'Text Editor', 'Small', '3MB'),('4', 'Vim', 'Text Editor', 'Small', '2.5MB'),('5', 'Atom', 'Text Editor', 'Small', '4MB')";
mysql_select_db('softwarebrowser');
$retvalinsert2 = mysql_query( $sqlinsert2, $conn );
if(! $retvalinsert2 )
{
  die('Could not enter data: ' . mysql_error());
}

$sqlinsert3="INSERT IGNORE INTO players ".
       "(playerid,name,type,sizecat,size) ".
       "VALUES ('1', 'JetAudio', 'Player', 'Small', '30MB'), ('2', 'Media Player Classic', 'Player', 'Medium', '45MB'), ('3', 'PowerDVD', 'Player', 'Large', '80MB'), ('4', 'VLC Player', 'Player', 'Medium', '40MB'), ('5', 'Windows Media Player', 'Player', 'Large', '60MB')";
mysql_select_db('softwarebrowser');
$retvalinsert3 = mysql_query( $sqlinsert3, $conn );
if(! $retvalinsert3 )
{
  die('Could not enter data: ' . mysql_error());
}

$sqlinsert4="INSERT IGNORE INTO commsoft ".
       "(commsoftid,name,type,sizecat,size) ".
       "VALUES ('1', 'Skype', 'Communication Software', 'Large', '65MB'), ('2', 'Viber', 'Communication Software', 'Medium', '48MB'), ('3', 'What''s App', 'Communication Software', 'Small', '35MB'), ('4', 'Facebook App', 'Communication Software', 'Medium', '45MB'), ('5', 'Instagram', 'Communication Software', 'Large', '65MB')";
mysql_select_db('softwarebrowser');
$retvalinsert4 = mysql_query( $sqlinsert4, $conn );
if(! $retvalinsert4 )
{
  die('Could not enter data: ' . mysql_error());
}

$sqlinsert5="INSERT IGNORE INTO others ".
       "(othersid,name,type,sizecat,size) ".
       "VALUES ('1', 'CCleaner', 'Other', 'Small', '28MB'), ('2', 'Format Factory', 'Other', 'Small', '15MB'), ('3', 'UTorrent', 'Other', 'Small', '20MB'), ('4', 'Camtasia Studio', 'Other', 'Large', '110MB'), ('5', 'Nero', 'Other', 'Large', '105MB')";
mysql_select_db('softwarebrowser');
$retvalinsert5 = mysql_query( $sqlinsert5, $conn );
if(! $retvalinsert5 )
{
  die('Could not enter data: ' . mysql_error());
}

mysql_close($conn);
?>