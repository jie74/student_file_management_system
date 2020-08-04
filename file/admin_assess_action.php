<?php
include "connect.php";
switch ($_GET['action']) {
    case 'add':{   //增加操作
        $asno = $_POST['asno'];
        $sno = $_POST['sno'];
        $assess_name = $_POST['assess_name'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        //写sql语句
        $sql = "INSERT INTO assess VALUES ('{$asno}','{$sno}','{$assess_name}','{$date}','{$detail}')";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if ($num > 0) {
            echo "<script> alert('增加成功');
                            window.location='admin_assess.php'; 
                 </script>";
        } else {
            echo "<script> alert('增加失败');
                            window.history.back(); //返回上一页
                 </script>";
        }
        break;
    }
	case "del": {    
        $asno = $_GET['asno'];
        $sql = "DELETE FROM assess WHERE asno={$asno}";
        $result = mysqli_query($link, $sql);
        header("Location:admin_assess.php");
        break;
    }
   case "edit" :{   
		$asno = $_POST['asno'];
        $sno = $_POST['sno'];
        $assess_name = $_POST['assess_name'];
        $date = $_POST['date'];
		$detail = $_POST['detail'];

        $sql = "UPDATE assess SET sno='{$sno}',assess_name='{$assess_name}',date='{$date}',detail='{$detail}' WHERE asno='{$asno}'";
        $result = mysqli_query($link, $sql);
		$num = mysqli_affected_rows($link);
        if($num>0){
            echo "<script>alert('修改成功');window.location='admin_assess.php'</script>";
        }else{
            echo "<script>alert('修改失败');window.history.back()</script>";
        }


        break;
    }

}