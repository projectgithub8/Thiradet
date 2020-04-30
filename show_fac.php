<?php
	$conn = mysqli_connect("localhost","root","","capacity") or die("Error: " . mysqli_error($conn));
	mysqli_query($conn, "SET NAMES 'utf8' ");
	$query = mysqli_query($conn,"SELECT COUNT(Faculty_ID) FROM faculty");
	$row = mysqli_fetch_row($query);
 
	$rows = $row[0];
 
	$page_rows = 20;  //จำนวนข้อมูลที่ต้องการให้แสดงใน 1 หน้า  ตย. 5 record / หน้า 
 
	$last = ceil($rows/$page_rows);
 
	if($last < 1){
		$last = 1;
	}
 
	$pagenum = 1;
 
	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}
 
	if ($pagenum < 1) {
		$pagenum = 1;
	}
	else if ($pagenum > $last) {
		$pagenum = $last;
	}
 
	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
 
	$nquery=mysqli_query($conn,"SELECT * from  faculty $limit");
 
	$paginationCtrls = '';
 
	if($last != 1){
 
	if ($pagenum > 1) {
	$previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn-info">Previous</a> &nbsp; &nbsp; ';
 
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
			}
	}
}
 
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
 
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-primary">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
 
if ($pagenum != $last) {
$next = $pagenum + 1;
$paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn btn-info">Next</a> ';
}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"" rel="nofollow">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div" rel="nofollow">
			<div style="height: 20px;"></div>
			<div class="row">
				<div class = "col-lg-2">
				</div>
				<div class = "col-lg-8">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr class="info" >
							<th width = '20px'><center>รหัสคณะ</th>
							<th width = '100px'><center>ชื่อคณะ</th>
							<th width = '50px'><center>แก้ไขข้อมูล</th>
							<th width = '50px'><center>ลบข้อมูล</th>
							</tr>
						</thead>
						<tbody>
							<?php
								while($row = mysqli_fetch_array($nquery)){
							?>
							<tr>
								<td align = center width = '20px'><?php echo $row['Faculty_ID'];?></td>
								<td width = '100px'><?php echo $row['Faculty_Name'];?></td>
								<td align = center width = '20px'><a href="update_fac_frm.php?Faculty_ID=<?php echo $row['Faculty_ID'];?>"><img src='edit.png' width='20px' height='20px'></a></td>
								<td align = center width = '20px'><a href="fac_delete.php?Faculty_ID=<?php echo $row['Faculty_ID'];?>" onclick="return confirm('ยืนยันการลบ')"><img src='delete.png' width='20px' height='20px'></a></td>
							</tr>
							<?php
							}
							mysqli_free_result($nquery);
							mysqli_close($conn);
							?>
						</tbody>
					</table>
					<div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
				</div>
				<div class="col-lg-2">
				</div>
			</div>
		</div>
	</body>
</html>
