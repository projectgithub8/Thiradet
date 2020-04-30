<?php
include_once('DB.php');
$ID_group = $_GET['ID_group'];
$sql = "delete from groupp
		where ID_group = '$ID_group'";
$result=mysqli_query($conn,$sql);
if ($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='show_group.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='show_group.php';
			</script>";
}
mysqli_close($conn);
?>