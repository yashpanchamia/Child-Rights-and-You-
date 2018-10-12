<?php


$host  ="localhost";
$username="root";
$password="";
mysql_connect('localhost','root','');
$conn = mysql_select_db('sample');

//$conn = mysql_select_db("sample");
if(!$conn){
  die("error".mysql_error());
}

?>
