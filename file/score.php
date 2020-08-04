<table width="600" border="1">
<tr>
    <th>学号</th>
    <th>课程号</th>
    <th>成绩</th>
</tr>
<?php 
include "connect.php";
$sno = $_GET['sno'];
$sql = "select * from `sc` where sno='$sno'";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>{$row['sno']}</td>";
	echo "<td>{$row['cno']}</td>";
	echo "<td>{$row['score']}</td>";
	echo "</tr>";
 
}
 
?>
<a href="menu.php"><button>返回菜单</button></a>