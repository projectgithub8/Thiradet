<?php
include_once('DB.php');
   if (empty ($_POST['cap_id'])){
        echo "<script language = 'Javascript'>
			alert('กรุณากรอกรหัส !!');
			window.location = 'frm_capa.php';
			</script>";
        exit();
    } else {
        $group = mysqli_real_escape_string($conn, $_POST['cap_id']); /*คำสั่งนี้ mysqli_real_escape_string เป็นการกันระบบสำหรับคนที่ไม่หวังดีมาทำลาย*/
}
$cap_id = $_POST['cap_id'];
$cap_list = $_POST['cap_list'];
$sql = "insert into capa_basic (cap_id,cap_list) values('$cap_id','$cap_list')";
  //echo $sql."<BR>";
    $result= mysqli_query($conn, $sql);	
    if ($result) { 
        echo "<script>
			alert('เพิ่มข้อมูลเรียบร้อย');
			window.location = 'show_capa.php';
			</script>";
    } else {
        echo "<script>
			alert('เกิดข้อผิดพลาดในการเพิ่มข้อมูล');
			window.location = 'frm_capa.php';
			</script>";
}
mysqli_close($conn);

?>
<br><br><a href='select.php'>ข้อมูลกลุ่มเรียน</a></center>