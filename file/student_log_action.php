<?php
include "connect.php";
$sno = $_POST['sno'];
$pwd = $_POST['pwd'];


$sql = "UPDATE student_log SET password='{$pwd}' WHERE sno='{$sno}'";
$result = mysqli_query($link, $sql);
$num = mysqli_affected_rows($link);
if($num){
	echo "<script>alert('修改成功');window.location='menu.php'</script>";
}else{
	echo "<script>alert('修改失败');window.history.back()</script>";
}

?>