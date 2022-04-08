<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>註冊會員</title>

</head>

<body>

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("winter");
mysql_query("SET NAMES 'utf8'");

$result = mysql_db_query("winter","select * from  register");
$row = mysql_fetch_object($result);



	if(empty($_POST['ID'])){

		echo "<center><h2>請輸入帳號!!三秒後自動跳回註冊頁面</h2></center>";

		echo "<meta http-equiv='refresh' content='3;url=register.php'/>";

	}else{



$ID=$_POST['ID'];

if($ID==$row->ID){
		echo "<script>";
		echo "alert(\"此帳號已有人使用過!請輸入其他帳號代替\");";
		echo "</script>";
		echo "<meta http-equiv='refresh' content='0 ; url=register.php' />";
		die();
	
	}



		if(empty($_POST['code'])){

		echo "<center><h2>請輸入密碼!!三秒後自動跳回註冊頁面</h2></center>";

		echo "<meta http-equiv='refresh' content='3;url=register.php'/>";

		}else{


$code=$_POST['code'];



		if(empty($_POST['recode'])){

		echo "<center><h2>請輸入確認密碼!!三秒後自動跳回註冊頁面</h2></center>";

		echo "<meta http-equiv='refresh' content='3;url=register.php'/>";

		}else{



$recode=$_POST['recode'];

if ($code != $recode) {
		echo "<script>";
		echo "alert(\"密碼與確認密碼不相同!請再次輸入。\");";
		echo "</script>";
		echo "<meta http-equiv='refresh' content='0 ; url=register.php' />";
		die();
	}



		if(empty($_POST['username'])){

		echo "<center><h2>請輸入會員名稱!!三秒後自動跳回註冊頁面</h2></center>";

		echo "<meta http-equiv='refresh' content='3;url=register.php'/>";

		}else{	



$username=$_POST['username'];



		if(empty($_POST['sex'])){

		echo "<center><h2>請選擇性別!!三秒後自動跳回註冊頁面</h2></center>";

		echo "<meta http-equiv='refresh' content='3;url=register.php'/>";

		}else{	




$sex=$_POST['sex'];



		if(empty($_POST['email'])){

		echo "<center><h2>請輸入電子信箱!!三秒後自動跳回註冊頁面</h2></center>";

		echo "<meta http-equiv='refresh' content='3;url=register.php'/>";

		}else{	




$email=$_POST['email'];

if (eregi ("([.0-9a-z]+)@([0-9a-z]+.)([0-9a-z]+)$",$email) == false) {
		echo "<script>";
		echo "alert(\"信箱格式錯誤\");";
		echo "</script>";
		echo "<meta http-equiv='refresh' content='0 ; url=register.php' />";
		die();
	}



		if(empty($_POST['cellphone'])){

		echo "<center><h2>請輸入手機號碼!!三秒後自動跳回註冊頁面</h2></center>";

		echo "<meta http-equiv='refresh' content='3;url=register.php'/>";

		}else{	





$cellphone=$_POST['cellphone'];


$sql="insert into register(ID,code,username,sex,email,cellphone) 
values('".$ID."','".$code."','".$username."','".$sex."','".$email."','".$cellphone."')";

mysql_query($sql);


if($ID != null && $code != null && $username != null && $sex != null && $email != null && $cellphone != null){

echo "<center><b><h2>註冊成功!!三秒後自動跳回首頁</h2></b></center>";
echo "<meta http-equiv='refresh' content='3;url=index.php'/>";

}
else{

echo "<center><h2>有資料沒輸入唷!!三秒後自動跳回註冊頁面</h2></center>";
echo "<meta http-equiv='refresh' content='3;url=register.php'/>";
}




		}	

		//POST cellphone else 結尾


		}	

		//POST email else 結尾


		}	

		//POST sex else 結尾


		}	

		//POST username else 結尾

		}	

		//POST recode else 結尾


		}	

		//POST code else 結尾


	}	

		//POST ID else 結尾


?>



</body>
</html>
