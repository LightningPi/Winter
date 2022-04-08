<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Your音樂論壇</title>
</head>

<body>

<?php

mysql_connect("localhost","root","1234");
mysql_select_db("winter");
mysql_query("SET NAMES 'utf8'");

?>

<center><h1><b>歡迎來到Your音樂論壇</b></h1></center><br/>

<?php

if(empty($_SESSION['user'])){

?>

<center><h2>請登入</h2></center>
<form width="30%" action="login.php" method="post">

<center>會員帳號：<input type="text" name="id" /><br></center>
<center>會員密碼：<input type="password" name="pw" /><br></center>
<center><input type="submit" name="login" value="登入"  /></center>

</form>

<center>尚未註冊?<input type="button" name="register" value="免費註冊" onclick="location.href=('register.php')"  /></center>

<table border="4" align="center"  style="border:inherit">

<tr>
	<td>
    <a href="Opera.php"><img src="opera.jpg" border="0"/></a>
    </td>
    
    <td>
    <a href="Popular.php"><img src="popular.jpg" border="0" /></a>
    </td>
</tr>

<tr>
	<td>
    <a href="Classical.php"><img src="classical.jpg" border="0" /></a>
    </td>
    
    <td>
    <a href="Jazz.php"><img src="jazz.jpg" border="0" /></a>
    </td>
</tr>



</table>

<?php
}else{

echo "<center>HI~".$_SESSION['user']."請選擇想進入的主題<br/><br/><input type='button' value='登出' onclick="."location.href=('destroy.php')"."></center><br />";
echo "<hr size='10' align='center' noshade width='70%' color='black'>"
?>

<table border="4" align="center"  style="border:inherit;" >

<tr>
	<td>
    <a href="Opera.php"><img src="opera.jpg" border="0" onclick="Opera.php"/></a>
    </td>
    
    <td>
    <a href="Popular.php"><img src="popular.jpg" border="0" onclick="Popular.php"/></a>
    </td>
</tr>

<tr>
	<td>
    <a href="Classical.php"><img src="classical.jpg" border="0" onclick="Classical.php" /></a>
    </td>
    
    <td>
    <a href="Jazz.php"><img src="jazz.jpg" border="0" onclick="Jazz.php"/></a>
    </td>
</tr>



</table>
<?php
}
?>

</body>
</html>
