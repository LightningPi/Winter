<html>

<head>

<title>註冊會員</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>
 
<center><h2>請填寫會員資料</h2></center>

<hr size="10" align="center" noshade width="100%" color="black"><br/><br/>

<center><form action="register_w.php" method="post">

<table width="40%">

	<tr>
		<td>*帳號：</td>
		<td><input type="text" name="ID" title="請輸入帳號"></td>
	</tr>

	<tr>
		<td>*密碼：</td>
		<td><input type="password" name="code" title="請輸入密碼"></td>
	</tr>
	
	<tr>
		<td>*確認密碼：</td>
		<td><input type="password" name="recode" title="請再次輸入密碼"></td>
	</tr>

	<tr>
		<td>*會員名稱</td>
		<td><input type="text" name="username" title="請輸入姓名"></td>
	</tr>

	<tr>
		<td>*性別：</td>
		<td>
			<input type="radio" name="sex" value="男"/>男
			<input type="radio" name="sex" value="女"/>女
		</td>
	</tr>


	<tr>
		<td>*電子信箱：</td>
		<td><input type="text" name="email" title="請輸入E-mail" value="" id="email"></td>
	</tr>


	<tr>
		<td>*手機號碼：</td>
		<td><input type="text" name="cellphone" title="請輸入手機號碼" value=""></td>
	</tr>

</table>

<center><input type="submit" name="submit" value="送出" ><input type="reset" name="reset" value="清除重填"></center><br/><br/>

</form></center>

<center><a href="index.php">回到首頁</a></center>

</body>




</html>
