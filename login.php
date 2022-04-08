<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>帳密核對</title>
</head>

<body>

<?php

mysql_connect("localhost","root","1234");
mysql_select_db("winter");
mysql_query("SET NAMES 'utf8'");

if($_POST["id"]==null){

	   echo "<center><h2>帳號或密碼打錯囉!!!</h2></center>";
	   echo "<h2><center><a href='index.php'>請按此重新輸入</center></h2>";

}elseif($_POST["pw"]==null){

	   echo "<center><h2>帳號或密碼打錯囉!!!</h2></center>";
	   echo "<h2><center><a href='index.php'>請按此重新輸入</center></h2>";

}else{

$id=$_POST["id"];
$pw=$_POST["pw"];





   $result = mysql_query("select * from  register where ID='$id' AND code='$pw'");
   $row = mysql_fetch_object($result);


	if(mysql_num_rows($result)>0){

  // if($row->ID == $id && $row->code == $pw && $id != null && $pw != null){
   
   echo "<center><h2>登入成功!三秒後跳回首頁</h2></center>";
   echo "<meta http-equiv='refresh' content='3;url=index.php'/>";
   $_SESSION['user']=$id;
   
   }
   else{
	   echo "<center><h2>帳號或密碼打錯囉!!!</h2></center>";
	   echo "<h2><center><a href='index.php'>請按此重新輸入</center></h2>";
	   
	   }


}

?>



</body>
</html>