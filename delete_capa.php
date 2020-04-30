<?php
include_once('DB.php');
$cap_id = $_GET['cap_id'];
$sql = "delete from capa_basic
		where cap_id = '$cap_id'";
$result=mysqli_query($conn,$sql);
if ($result){
	echo "<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
			window.location='show_capa.php';
			</script>";
}else{
	echo mysqli_error ($conn);
	echo "<script>
			alert('ไม่สามารถลบข้อมูลได้');
			window.location='show_capa.php';
			</script>";
}
mysqli_close($conn);
?>