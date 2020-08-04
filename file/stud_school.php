<?php 
include "connect.php";
$sno = $_GET['sno'];
$sql = "select * from `stud_school` where sno='$sno'";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	$dept_name = $row['dept_name'];
	$specialty = $row['specialty'];
	$class = $row['class'];
	$dormitory = $row['dormitory'];
}

echo <<<EOF
	<div align="center"> 
	<h1>您的在校信息如下：</h1> 
	<h3>学号：{$sno}</h3>
	<h3>学院：{$dept_name}</h3>
	<h3>专业：{$specialty}</h3> 
	<h3>班级：{$class}</h3>
	<h3>宿舍：{$dormitory}</h3>
	
	</div>
EOF;
	
?>
<a href="menu.php"><button>返回菜单</button></a>
