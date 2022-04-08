<?php session_start();?>

<?php
date_default_timezone_set("Asia/Taipei");

mysql_connect("localhost","root","1234");
mysql_select_db("winter");
mysql_query("SET NAMES 'utf8'");

$p_username=$_SESSION['user'];

$p_title=$_POST['p_title'];

$p_content=$_POST['p_content'];

$p_time=date("Y-m-d H:i:s");

$p_class=$_POST['class'];

$p_type="111";

$sql="insert into publish(class,username,title,content,datetime,type) 
values('".$p_class."','".$p_username."','".$p_title."','".$p_content."','".$p_time."','".$p_type."')";

mysql_query($sql);

echo "<center><h2>發文成功!!三秒後自動跳回前頁</h2></center>";

switch ($p_class){

	case "opera":
		echo "<meta http-equiv='refresh' content='3;url=Opera.php'/>";
		break;
	case "jazz":
		echo "<meta http-equiv='refresh' content='3;url=Jazz.php'/>";
		break;
	case "popular":
		echo "<meta http-equiv='refresh' content='3;url=Popular.php'/>";
		break;
	case "classical":
		echo "<meta http-equiv='refresh' content='3;url=Classical.php'/>";
		break;
	default:
		echo "<meta http-equiv='refresh' content='3;url=index.php'/>";
}
?>



