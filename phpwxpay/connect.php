<?php
header("Content-type: text/html; charset=utf-8");
session_start();

$host="localhost";
$db_user="sucaishui";//数据库帐号
$db_pass="123456";//数据库密码
$db_name="xiaochengxu";//数据库名

$timezone="Asia/Shanghai";
$link=mysql_connect($host,$db_user,$db_pass);
mysql_select_db($db_name,$link);
mysql_query("SET names UTF8");
header("Content-Type: text/html; charset=utf-8");
date_default_timezone_set($timezone); //北京时间
?>
