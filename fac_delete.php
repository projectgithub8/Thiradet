<?php
require 'db.php';

$Faculty_ID=$_GET['Faculty_ID'];

$q = "delete from faculty where Faculty_ID='$Faculty_ID'";

$result = mysqli_query($conn, $q);

if ($result){
    header("Location: show_fac.php");
} else {
        echo "เกิดข้อผิดพลาดในการลบข้อมูล".mysqli_error($conn);
            }

mysqli_close($conn);