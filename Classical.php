<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Classical</title>
<script language="javascript">
  function login_alert(){
	document.getElementById('login').style.display="";
	document.getElementById('b_login').style.display="none"; 
  }
</script>

</head>

<body>

<?php

mysql_connect("localhost","root","1234");
mysql_select_db("winter");
mysql_query("SET NAMES 'utf8'");

 $result = mysql_db_query("winter","select * from  publish where class='classical'");
 
?>

<center><img src="in_classical.jpg" height="10%" width="70%" /></center>

<div id="login" style="display:none;">
	<center><h2>請登入</h2></center>
  <form width="30%" action="login.php" method="post">

	<center>會員帳號：<input type="text" name="id" /><br></center>
	<center>會員密碼：<input type="password" name="pw" /><br></center>
	<center><input type="submit" name="login" value="登入"  /></center>
	
  </form>
</div>

<?php
if(empty($_SESSION['user'])){

echo "<br/><center><input type='button' value='登入' id='b_login' onclick='login_alert()'><input type='button' value='註冊' onclick="."location.href='register.php'"."></center><br/>";

}else{

echo "<form action='publish1.php' method='post'>";
echo "<center>HI~".$_SESSION['user']."</center><br/>";
echo "<center><input type='submit' value='發表文章' /></center>";
echo "<center><input type='hidden' name='class' value='classical' /></center>";
echo "<br /><center><input type='button' value='登出' onclick="."location.href=('destroy.php')"."></center>";
echo "</form>";

}
?>
<br/>
<center><input type="button" value="回首頁"   onclick="location.href='index.php'" /></center>
<br/>
<hr size="10" align="center" noshade width="70%" color="black">
<br/>
<center>
<?php
while($row = mysql_fetch_object($result)){

echo "<table name='catch' width='50%' border='2'>";

echo "<br><br><br>";	
echo "<tr>
		<td>文章標題：</td>
		<td>發表人：</td>
		<td>發表時間：</td>
	 </tr>"	;
echo "<tr>
		<td><a href='c_publish.php?pid=".$row->p_id."&b=3'>".$row->title."</a></td>
		<td>".$row->username."</td>
		<td>".$row->datetime."</td>
	  </tr>";

	}

echo "</table>";
echo "</center>";

?>
</body>
</html>
