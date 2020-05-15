<?php
error_reporting(0);
include"inc/header.php";
include"lib/student.php";
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("form").submit(function(){
			var roll=true;
			$(':radio').each(function(){
				name = $(this).attr('name');
				if(roll && !$(':radio[name"'+ name+'"]:checked').length){
					$('.alert').show();
					roll = false;
				}
			});
			return roll;
		});
	});
		
	
	
</script>
<?php
$stu=new student;
$cur_date=date("Y-m-d");
if($_SERVER['REQUEST_METHOD']=='POST'){
	$attend=$_POST['attendace'];
	$batch=$_GET['batch'];
	$insertAttend=$stu->insertAttendance($cur_date,$attend,$batch);
	if($insertAttend){
		echo $insertAttend;
	}
}
?>
<div class='alert alert-danger'style="display:none;"><strong>Sorry !!</strong>You didn't take  all student Attendance </div>
	<div class="panel m-2 panel-default">
		<div class="pane-heading m-3">
			<h2 >
				<a class=" btn btn-success ml"href="index.php">Home</a>

				<a class="btn btn-primary pull-right mr"href="index.php">Go Back</a>
				<a class="btn btn-info pull-right mr"href="attendanceView.php">View Attendance</a>

			</h2>
		</div>
		<div class="panel-body">
			<div class="date well text-center">
				<strong>Date: </strong><?php echo $cur_date; ?><strong> Batch: </strong><?php $batch=$_GET['batch']; echo $batch; ?>
			</div>
			<form action=""method="post">
				<table class="table table-striped">
					<tr>
						<th width="25%">Serial</th>
						<th width="25%">Sudent Name</th>
						<th width="25%">Roll No</th>
						<th width="25%">Attendance</th>
					</tr>
					<?php
						$batch=$_GET['batch'];
					   $get_student=$stu->getStudent($batch);
					   if($get_student){
					   	$i=0;
					   	while($value=$get_student->fetch_assoc()){
					   		$i++;
					   	
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['roll']; ?></td>
						<td>
							<input type="radio"name="attendace[<?php echo $value['roll']; ?>]"value="present"> P
							<input type="radio"name="attendace[<?php echo $value['roll']; ?>]"value="absent"> A
						</td>
					</tr>
					
					<?php
						}
					   }
					?>
				</table>
				<div class="text-center">
					<input class="btn  btn-info"type="submit"name="submit"value="Submit Attendance">
					<input class="btn  btn-danger"type="reset"name="reset"value="Reset Attendance">
				</div>
			</form>
		</div>
	</div>
	</div>
</body>
</html>