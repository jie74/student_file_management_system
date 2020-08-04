<table width="600" border="1">
<tr>
    <th>学号</th>
    <th>处罚</th>
    <th>处罚结果</th>
    <th>日期</th>
    <th>细节</th>
</tr>
<?php 
include "connect.php";
$sno = $_GET['sno'];
$sql = "select * from `punishment` where sno='$sno'";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>{$row['sno']}</td>";
	echo "<td>{$row['pname']}</td>";
	echo "<td>{$row['result']}</td>";
	echo "<td>{$row['date']}</td>";
	echo "<td>{$row['detail']}</td>";
	echo "</tr>";
 
}
 
?>
<a href="menu.php"><button>返回菜单</button></a>