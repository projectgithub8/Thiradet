<?php
include_once('DB.php');
$Faculty_ID = $_GET['Faculty_ID'];
$sql = "delete from faculty where Faculty_ID = '$Faculty_ID'";
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