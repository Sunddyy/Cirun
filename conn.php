<?php 
 
 $conn = mysqli_connect("localhost","root","cnms1234") or die("数据库链接错误".mysql_error());
 mysqli_select_db("info_db",$conn) or die("数据库访问错误".mysql_error());
 mysqli_query($conn,"set names utf8");

?>