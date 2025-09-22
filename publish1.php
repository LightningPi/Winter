<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>發表文章</title>
</head>
 
<body>

<?php
$class=$_POST['class'];

date_default_timezone_set("Asia/Taipei");

mysql_connect("localhost","root","1234");
mysql_select_db("winter");
mysql_query("SET NAMES 'utf8'");

?>

<center><h1><strong>發表文章</strong></h1></center>

<form name="publish" action="publish_w.php" method="post" >

<?php
echo "<input type='hidden' name='class' value='$class'>";
?>

<table  align="center" border="2"  width="80%">

<tr>

	<td>主題：</td>
	<td><input type="text" name="p_title"  size="75"  maxlength="40"/>主題不得超過40字</td>

</tr>

<tr>

	<td>內容：</td>
	<td><textarea class="ckeditor" name="p_content" id="content"></textarea></td>

</tr>

</table>
<center><input type="submit" value="送出"  /><input type="reset" value="清除重填"  /></center>

</form>

<?php

switch($class){
	case "opera":
		echo "<br/><center><input type='button' value='回上一頁' onclick="."location.href=('Opera.php')"."  /></center>";
		break;
	case "jazz":
		echo "<br/><center><input type='button' value='回上一頁' onclick="."location.href=('Jazz.php')"."  /></center>";
		break;
	case "popular":
		echo "<br/><center><input type='button' value='回上一頁' onclick="."location.href=('Popular.php')"."  /></center>";
		break;
	case "classical":
		echo "<br/><center><input type='button' value='回上一頁' onclick="."location.href=('Classical.php')"."  /></center>";
		break;
	default:
		echo "<br/><center><input type='button' value='回上一頁' onclick="."location.href=('index.php')"."  /></center>";

}
		include_once "ckeditor/ckeditor.php";
	
	$CKEditor = new CKEditor();
	
	$CKEditor->basePath = '/ckeditor/';

	$CKEditor->replace("content");
	
?>

</body>
</html>


