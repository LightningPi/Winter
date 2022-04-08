<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
mysql_connect("localhost","root","1234");
mysql_select_db("winter");
mysql_query("SET NAMES 'utf8'");
$t=$_GET['pid'];
$b=$_GET['b'];
$sql2="select * from  publish where p_id=".$t;
$result = mysql_query($sql2);
echo "<title>文章內容</title>";
?>
</head>

<body>

<center>
<?php



 

while($row = mysql_fetch_object($result)){

echo "<center><h2>".$row->title."</h2></center>";

$username = $row->username;

$title = $row->title;

$content = $row->content;

$datetime = $row->datetime;

echo "<table name='catch' width='50%' border='2'>";

echo "<br><br><br>";	
echo "<tr>
		<td>文章標題：</td>
		<td>發表人：</td>
		<td>內容：</td>
		<td>發表時間：</td>
	  </tr>";
	 
echo "<tr>
		<td>".$title."</td>
		<td>".$username."</td>
		<td>".$content."</td>
		<td>".$datetime."</td>
	 </tr>"	;

echo "</table>";

}
switch($b){
	case 1:
	echo "<input type='button' value='回上一頁' onclick="."location.href=('Opera.php')"." />";
	break;
	case 2:
	echo "<input type='button' value='回上一頁' onclick="."location.href=('Popular.php')"." />";
	break;
	case 3:
	echo "<input type='button' value='回上一頁' onclick="."location.href=('Classical.php')"." />";
	break;
	case 4:
	echo "<input type='button' value='回上一頁' onclick="."location.href=('Jazz.php')"." />";
	break;
	default:
	echo "<input type='button' value='回上一頁' onclick="."location.href=('index.php')"." />";
}
?></center>
</body>
</html>