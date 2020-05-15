<?php
include"inc/header.php";
include"lib/student.php";
?>
<?php
$stu=new student;

if(isset($_GET['date'])){
	$dt=$_GET['date'];
}
// if(isset($_GET['batch'])){
// 	$b=$_GET['batch'];
// }
if(isset($_GET['dl'])){
	$delete=$_GET['dl'];
	$d=$stu->deleteDate($delete);
	if($d){
		header("location:attend_date.php?msg='<div class='alert alert-danger'><strong>Deleted !!</strong>Attendance of  deleted successfully</div>'");
	}
}
// if($_SERVER['REQUEST_METHOD']=='POST'){
	// $attend=$_POST['attendace'];
	// $insertAttend=$stu->insertAttendance($cur_date,$attend);
// 	if($insertAttend){
// 		echo $insertAttend;
// 	}
// }
?>

	<div class="panel m-2 panel-default">
		<div class="pane-heading m-3">
			<h2 >
				<a class=" btn btn-success ml"href="index.php">Home</a>

				
				<a class="btn btn-info pull-right mr"href="attendanceView.php">Back</a>
			</h2>
		</div>
		<div class="panel-body">
			<div class="date well text-center">
				<strong>Attendance of  </strong><?php echo $dt ?><strong> of Batch  </strong><?php if(isset($_GET['batch'])){
							echo $bt=$_GET['batch'];
						} ?>
			</div>
			<form action=""method="post">
				<table class="table table-striped">
					<tr>
						<th width="25%">Serial</th>
						<th width="25%">Student Name</th>
						<th width="25%">Student Roll</th>
						<th width="25%">Batch</th>
						<th width="25%">Attendance</th>
						
						
					</tr>
					<?php
						if(isset($_GET['batch'])){
							$bt=$_GET['batch'];
						}
					   $get_student=$stu->getAllData($dt,$bt);
					   if($get_student){
					   	$i=0;
					   	while($value=$get_student->fetch_assoc()){
					   		$i++;
					   	
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['roll']; ?></td>
						<td><?php echo $bt; ?></td>
						<td>
							<input type="radio"name="attendace[<?php echo $value['roll']; ?>]"value="present"<?php if($value['attend'] == "present"){ echo "checked"; } ?>> P
							<input type="radio"name="attendace[<?php echo $value['roll']; ?>]"value="absent"<?php if($value['attend'] == "absent"){ echo "checked"; } ?>> A
						</td>
					</tr>
					
					<?php
						}
					   }
					?>
				</table>
				
			</form>
		</div>
	</div>
	</div>
</body>
</html>