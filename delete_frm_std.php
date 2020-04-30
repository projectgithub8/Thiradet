<?php
require 'db.php';
$Std_ID=$_GET['Std_ID'];  


$q = "delete from member where ID='$Std_ID'";

echo $q."<BR>";

$result = mysqli_query($conn, $q);

if ($result){
    header("Location: show_student.php");
} else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล".mysqli_error($conn);
            }

mysqli_close($conn);