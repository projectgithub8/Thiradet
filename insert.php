<?php
include_once('DB.php');
   if (empty ($_POST['group'])){
        echo "กรุณากรอกข้อมูลกลุ่มเรียน";
        exit();
    } else {
        $group = mysqli_real_escape_string($conn, $_POST['group']); /*คำสั่งนี้ mysqli_real_escape_string เป็นการกันระบบสำหรับคนที่ไม่หวังดีมาทำลาย*/
}

$group= $_POST['group'];
$status = $_POST['pro_status'];

$sql = "insert into groupp (name_g,status_g) values('$group','$status')";
  //echo $sql."<BR>";
    $result= mysqli_query($conn, $sql);
    if ($result) {
        echo "เพิ่มข้อมูลเรียบร้อย";
    } else {
        echo "เกิดข้อผิดพลาดในการเพิ่มข้อมูล".mysqli_errno($conn);
}
mysqli_close($conn);

?>